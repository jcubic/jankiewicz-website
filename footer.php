    <footer>
        <nav>
            <ul>
                <li><a href="/blog/" title="Personal Blog">blog</a></li>
                <li><a href="/projects.php">projects</a></li>
                <li><a href="/logo.php">logo</a></li>
                <li><a href="/writing.php">writing</a></li>
                <li><a href="/video.php">video</a></li>
                <li><a href="/hacks.php">hacks</a></li>
                <li><a href="/uses/">uses</a></li>
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
    <script>
     var _paq = _paq || [];
    _paq.push(['setTrackingSource', 'jstc_tm']);
    _paq.push(['enableLinkTracking']);
    _paq.push(['setIpTracking', true]);
    _paq.push(['setDomains', ['jakub.jankiewicz.org']]);
    _paq.push(['trackPageView']);
    _paq.push(['enableJSErrorTracking']);
    (function(p,i,w,ik) {
        var g=ik.createElement('script'),s=ik.getElementsByTagName('script')[0];
        _paq.push(['setTrackerUrl', p]);
        _paq.push(['setSiteId', w]);
        g.type='text/javascript';g.async=true;g.defer=true;g.src=i;s.parentNode.insertBefore(g,s);
    })('https://jcubic.piwik.pro/ppms.php','https://jcubic.containers.piwik.pro/ppms.js','72930675\u002D5027\u002D42c8\u002D8c1a\u002D50a04d707b50',document);
    </script>
    <? endif; ?>
