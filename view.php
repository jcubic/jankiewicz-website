<?php
/**
 * view.php - proxy PDF files stored in this repo and track each
 * view/download in Umami server-side (so it counts even though the
 * request never loads the client tracking script).
 *
 * Usage:
 *   /view.php?file=cv.pdf              open the PDF inline in the browser
 *   /view.php?file=cv.pdf&download=1   force a file download
 */

$UMAMI_HOST       = 'https://umami.jcubic.pl';
$UMAMI_WEBSITE_ID = 'ecea8c54-de5d-43b6-8c68-11a91c8d0a24';

// ---------------------------------------------------------------------------
// validate the requested file (work out the outcome without serving it yet)
// ---------------------------------------------------------------------------

$file     = isset($_GET['file']) ? $_GET['file'] : '';
$download = isset($_GET['download']) && $_GET['download'] !== '0';

$error = null;
$path  = null;

if ($file === '' || basename($file) !== $file || $file[0] === '.') {
    // only a bare filename is allowed - no directory components / traversal
    $error = array(400, 'Invalid file name');
} elseif (strtolower(pathinfo($file, PATHINFO_EXTENSION)) !== 'pdf') {
    // only PDF files may be served through this proxy
    $error = array(400, 'Only PDF files can be served');
} else {
    $path = __DIR__ . '/pdf/' . $file;
    if (!is_file($path) || !is_readable($path)) {
        $error = array(404, 'File not found');
    }
}

$http_status = $error ? $error[0] : 200;

// ---------------------------------------------------------------------------
// track the request FIRST, so errored (invalid / missing) files are logged too
// ---------------------------------------------------------------------------

track_umami($UMAMI_HOST, $UMAMI_WEBSITE_ID, $file, $download, $http_status);

if ($error) {
    fail($error[0], $error[1]);
}

// ---------------------------------------------------------------------------
// serve the file
// ---------------------------------------------------------------------------

// make sure nothing (whitespace, notices) corrupts the binary output
while (ob_get_level() > 0) {
    ob_end_clean();
}

$disposition = $download ? 'attachment' : 'inline';

header('Content-Type: application/pdf');
header('Content-Disposition: ' . $disposition . '; filename="' . $file . '"');
header('Content-Length: ' . filesize($path));
header('Cache-Control: public, max-age=3600');
header('X-Content-Type-Options: nosniff');

// HEAD requests only want the headers
if ($_SERVER['REQUEST_METHOD'] !== 'HEAD') {
    readfile($path);
}

// ---------------------------------------------------------------------------
// helpers
// ---------------------------------------------------------------------------

function fail($code, $message) {
    http_response_code($code);
    header('Content-Type: text/plain; charset=utf-8');
    echo $message;
    exit;
}

function client_ip() {
    $headers = array('HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP', 'HTTP_CF_CONNECTING_IP', 'REMOTE_ADDR');
    foreach ($headers as $header) {
        if (!empty($_SERVER[$header])) {
            $parts = explode(',', $_SERVER[$header]);
            return trim($parts[0]);
        }
    }
    return '';
}

function track_umami($host, $website_id, $file, $download, $http_status = 200) {
    // nothing meaningful was requested - don't log a bare hit
    if ($file === '') {
        return;
    }

    $server_host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'jakub.jankiewicz.org';

    // mirror the client-side rules: no tracking on localhost or when the
    // visitor asks not to be tracked (Do Not Track)
    if ($server_host === 'localhost' || (isset($_SERVER['HTTP_DNT']) && $_SERVER['HTTP_DNT'] === '1')) {
        return;
    }

    // Umami's bot filter drops events from non-browser User-Agents (curl, bots,
    // etc.), so fall back to a real browser UA when the client didn't send one.
    $user_agent = !empty($_SERVER['HTTP_USER_AGENT'])
        ? $_SERVER['HTTP_USER_AGENT']
        : 'Mozilla/5.0 (compatible; jankiewicz.org/view.php)';
    $referrer   = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    $language   = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : 'en';
    $url        = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : ('/view.php?file=' . rawurlencode($file));

    // reflect the download vs. inline view, and any error, in the title so
    // errored (missing/invalid) requests are distinguishable in Umami
    $title = $file;
    if ($download) {
        $title .= ' (download)';
    }
    if ($http_status !== 200) {
        $title .= ' (HTTP ' . $http_status . ')';
    }

    // Record a pageview (no "name" field) so the PDF shows up in Umami's
    // main Views/Pages report. A "name" would make it a custom event, which
    // is only visible in the separate Events panel. The download vs. inline
    // view distinction is carried by the URL query (?download=1) and title.
    $payload = array(
        'type' => 'event',
        'payload' => array(
            'website'  => $website_id,
            'hostname' => $server_host,
            'language' => $language,
            'url'      => $url,
            'referrer' => $referrer,
            'title'    => $title,
        ),
    );

    $body      = json_encode($payload);
    $client_ip = client_ip();

    // curl doesn't need allow_url_fopen and is present on this server; fall
    // back to a stream request only if the curl extension is missing.
    $http_headers = array(
        'Content-Type: application/json',
        'Accept: application/json',
        // forward the visitor identity so Umami attributes the event to the
        // real visitor and not to this server
        'User-Agent: ' . $user_agent,
    );
    if ($client_ip) {
        $http_headers[] = 'X-Forwarded-For: ' . $client_ip;
        $http_headers[] = 'X-Real-IP: ' . $client_ip;
    }

    $send_status = '';
    $response    = false;

    if (function_exists('curl_init')) {
        $ch = curl_init($host . '/api/send');
        curl_setopt_array($ch, array(
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $body,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 2,
            CURLOPT_TIMEOUT        => 3,
            CURLOPT_HTTPHEADER     => $http_headers,
        ));
        $response    = curl_exec($ch);
        $send_status = curl_error($ch) ?: ('HTTP ' . curl_getinfo($ch, CURLINFO_HTTP_CODE));
        curl_close($ch);
    } else {
        $ctx = stream_context_create(array(
            'http' => array(
                'method'        => 'POST',
                'header'        => implode("\r\n", $http_headers) . "\r\n",
                'content'       => $body,
                'timeout'       => 3,
                'ignore_errors' => true,
            ),
        ));
        $response    = @file_get_contents($host . '/api/send', false, $ctx);
        $send_status = isset($http_response_header[0]) ? $http_response_header[0] : 'no response';
    }

    // Temporary diagnostics: record what Umami actually returned.
    // A response containing "sessionId" means the event was recorded;
    // {"beep":"boop"} means Umami's bot filter dropped it (non-browser UA).
    file_put_contents(
        __DIR__ . '/download.log',
        '[' . date(DATE_ATOM) . '] ' . $file
            . ' | file=HTTP ' . $http_status
            . ' | ua=' . $user_agent
            . ' | ip=' . $client_ip
            . ' | umami=' . $send_status
            . ' | resp=' . var_export($response, true) . "\n",
        FILE_APPEND
    );
}
