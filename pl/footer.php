    <footer>
        <nav>
            <ul>
                <li><a href="/pl/blog/" title="osobisty blog">blog</a></li>
                <li><a href="/pl/projects.php">projekty</a></li>
                <li><a href="/pl/tutorials.php">tutoriale</a></li>
                <li><a href="/pl/logo.php">logo</a></li>
                <li><a href="/pl/poezja.php">poezja</a></li>
                <li><a href="/pl/writing.php">artykuły</a></li>
                <li><a href="/pl/video.php">wideo</a></li>
                <li><a href="/pl/hacks.php">hacks</a></li>
                <li><a href="/pl/uses/">uses</a></li>
            </ul>
        </nav>
        <div id="copy">
            <p>Copyright (c) <?php  echo date('Y'); ?> <a href="https://jakub.jankiewicz.org">Jakub T. Jankiewicz</a></p>
        </div>
    </footer>
    <? if ($_SERVER["HTTP_HOST"] != "localhost" && !isset($_GET['track'])): ?>
    <!-- Start Open Web Analytics Tracker -->
    <script type="text/javascript">
    //<![CDATA[
    var owa_baseUrl = 'https://stats.jcubic.pl/';
    var owa_cmds = owa_cmds || [];
    owa_cmds.push(['setSiteId', 'b9a1a51b38e3837c9a5b309ec4122ff3']);
    owa_cmds.push(['trackPageView']);
    owa_cmds.push(['trackClicks']);
    (function() {
        var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
        owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
        _owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
        var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
    }());
    //]]>
    </script>
    <!-- End Open Web Analytics Code -->
    <script defer src="https://cloud.umami.is/script.js" data-website-id="fc7d267c-fdc6-4b03-bfce-944828a2fe9b"></script>
    <? endif; ?>
