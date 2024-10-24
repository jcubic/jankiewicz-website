<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Jakub T. Jankiewicz - Projects</title>
    <meta name="Description" content="Few projects I've created using JavaScript, Python and Ruby"/>
    <?php include('head.php'); ?>
    <link rel="alternate" href="https://jakub.jankiewicz.org/projects.php" hreflang="x-default" />
    <link rel="alternate" href="https://jakub.jankiewicz.org/pl/projects.php" hreflang="pl" />
    <link rel="alternate" href="https://jakub.jankiewicz.org/projects.php" hreflang="en" />
    <link rel="canonical" href="https://jakub.jankiewicz.org/projects.php" />
</head>
<body id="projects">
    <?php include('header.php'); ?>
    <article>
        <h2>Open Source Projects</h2>
        <ul class="projects">
          <li>
            <a href="https://terminal.jcubic.pl/" title="jQuery Terminal: for Web based Terminal websites">
              <img src="/images/projects/jquery.terminal.png" alt="ASCII art with jQuery Terminal signature"/>
            </a>
            <p><strong>jQuery Terminal</strong> is a library that allow to create command line interface on any webpage. It allow to create your own commands and have lot of features that make things easier. Like support for syntax hightlighting, ANSI escapes, bash shortcust completion etc. The library use jQuery but you don't need to use is when using it, it's like complete framework for creating command line apps. The codebase is maintained since 2010 and the code is written by hand in ES5.</p>
          </li>
          <li>
            <a href="https://lips.js.org/" title="LIPS: Scheme based powerfull lisp interpreter in JavaScript">
              <img src="/images/projects/lips.png" alt="LIPS logo: Scheme based lisp"/>
            </a>
            <p><strong>LIPS</strong> is <a href="https://en.wikipedia.org/wiki/Scheme_(programming_language)">Scheme (programming language)</a> dialect written in JavaScript. It's pretty powerful and allow to interact with JavaScript more easily. The mapping between JavaScript code and lisp is almost one to one. The langauge also have poweful introspection and meta programming features. The code is written in pretty modern ES6 (and newest) but still use ES5 prototypal inheritance instead of ES6 classes.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/sysend.js/" alt="sysend.js: Send messages between tabs or windows">
              <img src="/images/projects/sysend.png" alt="Sysend.js Logo"/>
            </a>
            <div>
              <p><strong>Sysend</strong> is small, zero dependency JavaScript library which allows to interact with open windows or tabs, by sending messages to other browser windows or tabs. It also allow for cross-domain communication. The library have very simple Even Emitter like API similar to jQuery or AngularJS events.</p>
              <p>It also have more features like Window/tab tracking and <a href="https://en.wikipedia.org/wiki/Remote_procedure_call">RPC</a> mechanism build on top of simple messaging.</p>
            </div>
          </li>
          <li>
            <a href="https://www.gnome-look.org/p/1012535" title="Clarity: GTK+ Monoshape SVG Icon Theme">
              <img src="/images/projects/clarity.png" alt="Clarity Icons GTK+ logo"/>
            </a>
            <p><strong>Clarity</strong> is SVG based, almost completely monoshape icon theme for GNU Linux system. It was created as GTK+ Theme. The library also have bash scripts created by hand that allow to change colors and even create your own colors by creating SVG template.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/notes" title="Text based notes taking app">
              <img src="/images/projects/notes.png" alt="NOTES ASCII banner"/>
            </a>
            <p><strong>Notes AngularJS App</strong>. Text based application for notes taking. I use every day. It's like my second brain. I'm not able to build the project anymore (even that it has package-lock.json) so I plan to rewrite this in ReactJS with more features that I wanted to make, including: Full Text Search, PWA, Dark Mode nad Mobile support. I have long list of features.</p>
          </li>
          <li>
            <a href="https://send.jcubic.pl/" title="WebRTC Send">
              <img src="/images/projects/web-rtc-send.png" alt="Two icons of computers and two arrows between"/>
            </a>
            <p><strong>WebRTC Send</strong>. Vanilla JavaScript application for sending files and messages between two computers that uses WebRTC (<abbr title="Peer-to-peer">P2P</abbr> <abbr title="Application Programming Interface ">API</abbr>) and Firebase.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/uncp" title="UNCP: UNsplash Cache Proxy">
              <img src="/images/projects/uncp.png" title="UNCP ASCII banner"/>
            </a>
            <p><strong>UNCP: UNsplash Cache Proxy</strong> this is simple PHP code that act as a Proxy that caches the requests send to <a href="https://unsplash.com/developers">Unsplash API</a>. This API have rate limits which makes it hard when you give task to fetch and display data in technical interview as live editing. While the interviewee writes the code it may execute multiple times and reach the rate limit. With this Proxy you don't need to worry about the limits.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/favloader" title="Favloader: Favicon animation JavaScript library">
              <img src="/images/projects/favloader.png" title="Favloader logo"/>
            </a>
            <p><strong>Favloader</strong> is small library that can be used for animation of favicon. It allow to create simple loader similar to the one in Chrome, it allow to change its color. But also allow to create custom animations by exposing canvas object. It also allow to use GIF animation, even in browsers that don't support GIFs as favicons. What great about the library that it works when tab is not active.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/yapp" title="YAPP: Yet Another PHP Proxy">
              <img src="/images/projects/yapp.png" title="YAPP ASCII banner"/>
            </a>
            <p><strong>Yapp - Yet Another PHP Proxy</strong> the idea for this project is that it will allow to proxy everything including JavaScript applications. So they can open pages that are blocked otherwise. Most PHP proxies are old and works only with HTML and CSS.</p>
          </li>
          <li>
            <img src="/images/projects/jquery-plugins.png"/>
            <ul>
              <li><strong><a href="https://github.com/jcubic/jquery.filebrowser">jquery.filebrowser</a></strong> is a plugin that allow to create explorer like window, file browser. See also post <a href="https://jcubic.wordpress.com/2017/09/02/how-to-create-file-explorer-using-jquery-php/">How to create Server File Explorer using jQuery and PHP</a>,</li>
              <li><strong><a href="https://github.com/jcubic/jquery.resize">jquery.resize</a></strong> is a plugin that add resize event on any element, it use resize observer or iframe sentinel element,</li>
              <li><strong><a href="https://github.com/jcubic/jquery.splitter">jquery.splitter</a></strong> is a plugin that create component with two or more panels splitted using divider that you can drag to resize panels,</li>
              <li><strong><a href="https://github.com/jcubic/jquery.draglessClick">jquery.draglessClick</a></strong> is small plugin that add click event that don't trigger when you drag the element. This is default behavior of Browser and jQuery,</li>
              <li><strong><a href="https://github.com/jcubic/jquery.rotate">jquery.rotate</a></strong> is small jQuery plugin that add rotate css property, it also works with animations. It can be used instead of big plugins if you only want rotatation,</li>
            </ul>
            <li>
              <a href="https://github.com/jcubic/leash" title="Leash - browser shell">
                <img src="/images/projects/leash.png"/>
              </a>
              <p><strong>Leash</strong> is application that was created using jQuery Terminal, that give access to shell on shared hosting. It was created so I can use it no hosting that don't give SSH access. It use PHP as backed with one of the exec functions to exectute shell commands, with fallback CGI scripts that sometimes are enabled even if Hosting disable exec functions in PHP. It works on GNU/Linux and Windows CMD.</p>
            </li>
          </li>
          <li>
            <a href="https://git-terminal.js.org/" title="GIT Web Terminal">
              <img src="/images/projects/git-terminal.png"/>
            </a>
            <p><strong>GIT Web Terminal</strong> is another web application created using jQuery Terminal. It's attempt to recreated git command line interface as web-app. Everything happen in browser and it use great library <a href="https://isomorphic-git.org/">isomorphic-git</a> that allow to interact with git repository in browser and NodeJS.</p>
          </li>
          <li>
            <a href="https://github.com/cosi1/ggtips" title="GGTips - tooltips on GGPlot in shiny">
              <img src="/images/projects/ggtips.png" alt="GGtips Logo"/>
            </a>
            <p><strong>GGTips</strong> is an Open Source library is written in R language. It allow to add tooltips to GGPlot in shiny applications. GGPlot is go to library for creating plots in R, and GGTips allow to use all the features of GGplot. I've created JavaScript code for the library as part of the work at Roche.</p>
          </li>
          <li>
            <a href="https://github.com/Genentech/battery" title="Battery - R Shiny Architecture framwork">
              <img src="/images/projects/battery.png" alt="Battery Logo"/>
            </a>
            <p><strong>Battery</strong> is an Open Source library is also written in R language. It's framework for create non-trival Shiny applications. I'm main architect and autor of most of the code. The same as with GGTips, Battery was created as part of my work at Roche and Genentech.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/tagger" title="Zero Dependency, Vanilla JavaScript Tag Editor">
              <img src="/images/projects/tagger.png" alt="Tagger Logo"/>
            </a>
            <p><strong>Tagger</strong> is an Open Source library is written in Vanilla JavaScript. It has zero dependency. It's component that allow to add tags to your page. It support completion.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/velvet" title="Zero Dependency, Vanilla TypeScript Universal CSS in JS library">
              <img src="/images/projects/velvet.png" alt="Velvet Logo"/>
            </a>
            <p><strong>Velvet</strong> is an Open Source library is written in TypeScript. It has zero dependency (except dev dependencies) and it's a universal CSS-in-JS solution that don't requires a compiler like StyleX from Facebook/Meta. So it's runtime CSS-in-JS library. It also supports strict <abbr title="Content Security Policy">CSP</abbr> with nonce.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/gaiman" title="Gaiman: Text based game engine and programming language">
              <img src="/images/projects/gaiman.png" alt="Gaiman Logo"/>
            </a>
            <p><strong>Gaiman</strong> is ruby inspired programmig language that compiles to JavaScript. This is work in progress. The main purpose of this project it's allow creating iteractive games using jQuery Termianal and maybe in the future command line applications. There is <a href="https://gaiman.js.org/">language playground</a> available, that can be also used in development of the language. Gaiman is usig <a href="https://peggyjs.org/">Peggy (fork of PEG.js) parser generator</a>.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/wayne" title="Wayne Service Worker Routing library for in browser HTTP requests">
              <img src="/images/projects/wayne.png" alt="Wayne logo"/>
            </a>
            <div>
              <p><strong>Wayne</strong> is Vanilla JavaScript library that add simple interface for adding in Browser HTTP responses. The API is similar to <a href="http://expressjs.com/">Express.js</a> but it works for Service Worker that allow to create purly in browser new HTTP endpoints. Most of the time Service Worker is used for caching of HTTP requests and making the app work when there is no internet (mostly for <abbr title="Progressive Web App">PWA</abbr>), but in fact you can create completely new responses to requests that never leave the browser.</p>
              <p>The library also supports streaming using <a href="https://en.wikipedia.org/wiki/Server-sent_events">Server-Sent Events</a> and there is also a demo of <a href="https://en.wikipedia.org/wiki/Remote_procedure_call">RPC</a> like mechanizm.</p>
            </div>
          </li>
          <li>
            <a href="https://isomorphic-git.org/" title="A pure JavaScript implementation of git for node and browsers!">
              <img src="/images/projects/isomorphic-git.png" alt="Isomorphic-Git Logo"/>
            </a>
            <p><strong>Isomorphic-Git</strong> Git implementation in JavaScriptt for browsers and NodeJS. I'm an active maintainer of the project. The main author doesn't work on the project anymore. I'm mostly communicating with users, doing code reviews, merging changes, and deciding what is the best for the project (of course listening what others have to say).</p>
          </li>
          <li>
            <a href="https://koduj.org" title="Kreatywny Kurs Programowania w JavaScript ">
              <img src="/images/projects/koduj.png" alt="Koduj Logo"/>
            </a>
            <p><strong>Koduj</strong> I'ts a project that I've started in 2022, after my first class of teaching Creative Programming with JavaScript and <a href="https://p5js.org/">P5.js</a>. The course was sold on an auction for <a href="https://en.wikipedia.org/wiki/Great_Orchestra_of_Christmas_Charity">Great Orchestra of Christmas Charity</a>. For the first class I've create simple <a href="https://github.com/jcubic/koduj">code playground application</a>. Right now I'm preparing for the 2nd, expented and improved, edition of the course. In 2023 I plan to write new version of the playform. The current version can be called an MVP or a prototype. It was created using jQuery, PHP, and Firebase. The next version I plan to create in ReactJS and maybe also using Next.js.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/cmatrix" title="Matrix Rain Effect in JavaScript">
              <img src="/images/projects/cmatrix.png" alt="Matrix Rain"/>
            </a>
            <p><strong>CMatrix</strong> It's a JavaScript library that adds Matrix Rain Effect using Canvas.</p>
          </li>
        </ul>
        <h2>Other projects</h2>

        <ul>
            <li><a href="https://try.javascript.org.pl">JavaScript Online REPL with Eloquent JavaScript book,</a></li>
            <li><a href="https://sql.org.pl/">SQL online REPL with online course in Polish</a>,</li>
            <li><a href="https://trypython.jcubic.pl">Brython based Python Interpreter</a>,</li>
            <li><a href="https://github.com/jcubic/route.js">Route.js</a> - Simple Vanila JavaScript router</li>
            <li><a href="https://github.com/jcubic/angular.piechart">Angular Piechart</a> - AngularJS directive for rendering piecharts,</li>
            <li><a href="https://github.com/jcubic/Monadic">Monadic</a> - <abbr title="Proof Of Concept">POC</abbr> library that add monad/monoid like behavior to objects,</li>
            <li><a href="https://github.com/jcubic/json-rpc">JSON-RPC implementaion in php and JavaScript,</a></li>no need for ssh or admin rights to install anything),</li>
            <li><a href="https://github.com/jcubic/jsh.php">jsh.php</a> - php shell like leash but in single php file. Can be use for Penetration testing,</li>
            <li><a href="https://github.com/jcubic/firepad">firepad</a> - simple editor using <a href="https://firepad.io/">firepad</a>, I'm using it for work for pair programming,</li>
            <li><a href="https://cssdraw.jcubic.pl/">CSS Draw Shape</a> - create pure CSS drawings using JavaScript (isnpired by Space Invader from Vlad Zinculescu),</li>
            <li><a href="https://github.com/jcubic/coverage.el">coverage.el</a> - Simple Minor Mode for GNU Emacs that show coverage from PHP Unit and jest JavaScript framework,</li>
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
        <h2>Codepen Demos</h2>
        <ul>
          <li><a href="https://codepen.io/jcubic/pen/BwBYOZ">Vintage Fake Terminal Emulator in JavaScript</a></li>
          <li><a href="https://codepen.io/jcubic/pen/bzYQNw">Fake Linux Terminal in Browser</a></li>
          <li><a href="https://codepen.io/jcubic/pen/WNQOgpY">S-Expression Visualization</a></li>
        </ul>
        <p>More on <a href="https://codepen.io/">Codepen</a> and <a href="https://github.com/jcubic">GitHub</a></p>
    </article>
    <?php include('footer.php'); ?>
</body>
</html>
