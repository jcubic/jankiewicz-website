<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Jakub Jankiewicz - Projects</title>
    <meta name="Description" content="Few projects I've created using JavaScript, Python and Ruby"/>
    <link rel="shortcut icon" href="https://jcubic.pl/favicon.ico"/>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
@font-face {
    font-family: 'colaborate-thinregular';
    src: url('css/colaborate-thin-pl.eot');
    src: url('css/colaborate-thin-pl.eot?#iefix') format('embedded-opentype'),
         url('css/colaborate-thin-pl.woff') format('woff'),
         url('css/colaborate-thin-pl.ttf') format('truetype'),
         url('css/colaborate-thin-pl.svg#colaborate-thinregular') format('svg');
    font-weight: normal;
    font-style: normal;
}
    </style>
    <link href="css/style.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body id="projects">
    <header>
        <h1><a href="/" title="home page"><img src="/images/jcubic/logo.png" alt="Jakub 'jcubic' Jankiewicz logo"/></a></h1>
    </header>
    <article>
        <h2>Projects</h2>
        <ul>
            <li><a href="http://gnome-look.org/content/show.php?content=135654">Clarity</a> - Monoshape GTK+ Icon Theme,</li>
            <li><a href="https://terminal.jcubic.pl">jQuery Terminal</a> - jQuery plugin that emulate terminal,</li>
            <li><a href="http://trypython.jcubic.pl">Brython based Python Interpreter</a>,</li>
            <li><a href="http://plugins.jquery.com/splitter/">jQuery Splitter</a> - UI element that splits content with movable splitter between them,</li>
            <li><a href="https://github.com/jcubic/jquery.filebrowser">jQuery Filebrowser</a> - plugin to create OS like filebrowsers, See also post <a href="https://jcubic.wordpress.com/2017/09/02/how-to-create-file-explorer-using-jquery-php/">How to create Server File Explorer using jQuery and PHP</a>,</li>
            <li><a href="https://github.com/jcubic/yapp">Yet Another Php Proxy</a> - proxy script that also try to wrap all usage of urls in JS with proxy,</li>
            <li><a href="https://github.com/jcubic/angular.piechart">Angular Piechart</a> - AngularJS directive for rendering piecharts,</li>
            <li><a href="https://github.com/jcubic/cataloger">Cataloger</a> - my new project, CMS for shopping like websites but without the cart, maybe I add one later (WIP),</li>
            <li><a href="http://micro.jcubic.pl/">jQuery Micro</a> - Pico/Nano like editor,</li>
            <li><a href="https://github.com/jcubic/sysend.js">sysend.js</a> - small Javascript library that use HTML5 localstorage API to send message between open tabs,</li>
            <li><a href="https://github.com/jcubic/Monadic">Monadic</a> - <abbr title="Proof Of Concept">POC</abbr> library that add monad/monoid like behavior to objects,</li>
            <li><a href="https://github.com/jcubic/json-rpc">JSON-RPC implementaion in php and JavaScript,</a></li>
            <li><a href="http://leash.jcubic.pl/">Leash</a> Web app that give you unix shell access from the browser (no need for ssh or admin rights to install anything).</li>
            <li><a href="https://github.com/jcubic/jsh.php">jsh.php</a> - php shell like leash but in single php file. Can be use for Penetration testing,</li>
            <li><a href="https://github.com/jcubic/firepad">firepad</a> - simple editor using <a href="https://firepad.io/">firepad</a>, I'm using it for work for pair programming,</li>
            <li><a href="http://cssdraw.jcubic.pl/">CSS Draw Shape</a> - create pure CSS drawings using JavaScript (isnpired by Space Invader from Vlad Zinculescu),</li>
        </ul>
        <h2>Other code</h2>
        <ul>
            <li><a href="/struct.txt">Structures implementation in Scheme</a></li>
            <li><a href="https://github.com/jcubic/Similar-Stuff">Script that use tastekid.com API to display similar things</a></li>
            <li><a href="./kopalinski.rb">./kopalinski.rb</a> - Skrypt w Ruby do wyświetlania Definicji ze "Słownika Wyrazów Obcych Kopalińskiego"</a>, a <a href="https://github.com/jcubic/kopalinski.sqlite">tutaj możesz znaleźć baze danych sqlite ze słownikiem oraz skrypt do generowania</a>.</li>
            <li><a href="http://code.activestate.com/recipes/577585-universal-eval-to-string-function/">Universal eval to string function (Python recipe)</a></li>
            <li><a href="http://code.activestate.com/recipes/502221-extracting-data-from-chm-microsoft-compiled-html/?in=user-4028109">Extracting data from chm microsoft compiled html (Python recipe)</a></li>
            <li><a href="http://code.activestate.com/recipes/502222-creating-java-class-description-files/?in=user-4028109">Creating java class description files in Jython (Python recipe)</a></li>
        </ul>
    </article>
    <footer>
        <nav>
            <ul>
                <li><a href="https://jcubic.wordpress.com" rel="blog">blog</a></li>
                <li><a href="projects.php">projects</a></li>
                <li><a href="tutorials.php">tutorials</a></li>
                <li><a href="poezja.php">poezja</a></li>
                <li><a href="Artefakt.pdf" title="Opowiadanie o Wampirach">artefakt</a></li>
            </ul>
        </nav>
        <div id="copy">
            <p>Copyright (c) <?php  echo date('Y'); ?> <a href="https://jcubic.pl/me">Jakub Jankiewicz</a></p>
        </div>
    </footer>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.jcubic.pl/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "2"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
<noscript>
<!-- Piwik Image Tracker -->
<img src="https://piwik.jcubic.pl/piwik.php?idsite=2&amp;rec=1" style="border:0" alt="" />
<!-- End Piwik -->
</noscript>
</body>
</html>
