<?php
/*
require('utils.php');
hit();
header("X-Powered-By: ");
*/
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Jakub T. Jankiewicz - Programista aplikacji internetowych</title>
    <meta name="Description" content="Nazywam się Jakub T. Jankiewicz. Jestem programistą aplikacji internetowych z Polski. Pracuje głównie z językiem JavaScript."/>
    <link rel="alternate" href="https://jakub.jankiewicz.org/" hreflang="x-default" />
    <link rel="alternate" href="https://jakub.jankiewicz.org/" hreflang="en" />
    <link rel="alternate" href="https://jakub.jankiewicz.org/pl/" hreflang="pl" />
    <link rel="canonical" href="https://jakub.jankiewicz.org/pl/" />
    <script type="application/ld+json">
     {
         "@context": "http://www.schema.org",
         "@type": "Person",
         "@id": "https://jakub.jankiewicz.org",
         "name": "Jakub Jankiewicz",
         "alternateName": "Jakub T. Jankiewicz",
         "nationality": "Polish",
         "birthPlace" : {
             "@type": "Place",
             "address": {
                 "@type": "PostalAddress",
                 "addressLocality": "Skarżysko Kamienna",
                 "addressRegion": "Świętorzyskie",
                 "addressCountry": "Poland"
             }
         },
         "alumniOf": [
             {
                 "@type": "CollegeOrUniversity",
                 "name": "Kielce University of Technology",
                 "sameAs": "https://en.wikipedia.org/wiki/Kielce_University_of_Technology"
             }
         ],
         "gender": "Male",
         "Description": "Technologist",
         "disambiguatingDescription": "Web Developer",
         "jobTitle": "Senior Web Developer",
         "sameAs": [
             "https://twitter.com/jcubic",
             "https://pinterest.com/jcubic/",
             "https://www.instagram.com/jcubic/",
             "https://www.facebook.com/jcubic/",
             "https://www.linkedin.com/in/jakubjankiewicz/",
             "https://github.com/jcubic",
             "https://profiles.wordpress.org/jcubic/",
             "https://codepen.io/jcubic/",
             "https://stackoverflow.com/users/387194/jcubic",
             "https://www.deviantart.com/jcubic/",
             "https://www.behance.net/jcubic",
             "https://www.flickr.com/photos/jcubic",
             "https://www.reddit.com/user/jcubic",
             "https://dribbble.com/jcubic",
             "https://www.freecodecamp.org/news/author/jcubic/",
             "https://bulldogjob.pl/readme/authors/jakub-t-jankiewicz",
             "https://dev.to/jcubic",
             "https://hackernoon.com/u/jcubic"
         ],
         "knowsAbout": [
             "Front-End",
             "JavaScript",
             "NodeJS",
             "Python",
             "R",
             "PHP",
             "TypeScript",
             "React",
             "ReactNative",
             "Redux",
             "Prisma",
             "Eleventy",
             "Bash",
             "SVG",
             "HTML",
             "HTML5",
             "CSS",
             "CSS3",
             "Shiny",
             "Jekyll",
             "GIT",
             "GNU Emacs",
             "GNU/Linux",
             "Inkscape",
             "SQL",
             "MySQL",
             "SQLite",
             "Prisma",
             "GraphQL",
             "SEO",
             "Graphic Design",
             "Security",
             "lisp",
             "scheme",
             "programming",
             "software development",
             "Web Development",
             "Photography"
         ],
         "knowsLanguage": [
             "en-US",
             "en-GB",
             "pl-PL"
         ],
         "worksFor": {
             "@type": "Organization",
             "legalName": "Britenet sp. z o.o.",
             "slogan": "Nam możesz powierzyć rozwój oprogramowania oraz outsourcing IT",
             "url": "https://britenet.eu/"
         }
     }
    </script>
    <style>
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
article header {
    margin-bottom: 40px;
}
section {
  min-height: 100%;
  margin-bottom: -40px;
}
section:after {
  content: "";
  display: block;
}
footer, section:after {
  height: 40px;
}
footer {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
a img { border: none; }
#term .command, #term .directory {
    cursor: pointer;
}
article {
    display: grid;
    gap: 0 10px;
    grid-template-columns: 1fr 80ch 500px 60px;
    grid-template-areas:
        "header header header margin"
        "spacer terminal content margin";
}
header {
    grid-area: header;
}
#term {
    grid-area: terminal;
    max-height: calc(100vh - (145px + 60px + 40px + 40px));
}
#about {
    grid-area: content;
}
#term .terminal {
    --size: 1.2;
    height: 100%;
}
.terminal a, .terminal .a:visited {
    padding: 0;
    margin: 0;
}
@media (max-width: 1225px) {
    article {
        grid-template-columns: 1fr 500px 60px;
        grid-template-areas:
            "header header margin"
            "terminal content margin";
    }
}
@media (max-width: 900px) {
    article {
        display: block;
    }
    #term {
        display: none;
    }
}
    </style>
    <?php include('../head.php'); ?>
</head>
<body>
    <section>
        <article>
            <?php include('header.php'); ?>
            <div id="term">
                <div></div>
            </div>
            <div id="about">
                <p class="portrait">
                  <a href="/images/portret-big.jpg" title="Jakub Jankiewicz">
                     <img alt="Jakub Jankiewicz autoportret" src="/images/portret.jpg?v=2" style="width: 136px;"/>
                  </a>
                </p>
                <p itemscope itemtype="http://data-vocabulary.org/Person">
                  Nazywam się Jakub T. Jankiewicz. Jestem <span itemprop="title">Programistą aplikacji internetowych</span>
                  z Polski. Kocham pracować z językimi JavaScript oraz TypeScript i CSS.
                  Uwielbiam pracować z ReactJS. Uczę się także frameworka Next.js oraz GraphQL.
                  Jestem także programistą Open Source, Redaktorem Polskiej Wikipedii (gdzie jestem przewodnikiem dla Nowicjuszy oraz WikiTrenerem), bloggerem oraz
                  staram się być dobrym mentorem dla nowych programistów, ale nie w zorganizowany sposób
                  (chciałbym to zmienić w przyszłości)
                </p>
                <p>
                  Używam systemu GNU/Linux oraz edytora GNU Emacs. Do grafiki głównie programu
                  <a href="http://inkscape.org">Inkscape</a>. Uwielbiam także fotografię oraz projektowanie
                  logo oraz logotypoów i czytanie komiksów (głównie powieści graficznych).
                </p>
                <p>
                  Możesz do mnie napisać poprzez adress <a data-type="email">jcubic [at] jcubic [dot] pl</a>,
                  możesz także pobrać moje CV <a href="https://jcu.bi/cv-en">Angielskie</a> /
                  <a href="https://jcu.bi/cv-pl">Polskie</a>. Jestem także do dyspozycji jeśli potrzebujesz
                  <a href="https://support.jcubic.pl/">wsparcia z którymkolwiek z moich projektów
                  Open Source</a>.
                </p>
                <div class="profiles">
                    <ul>
                        <li>
                            <a href="https://twitter.com/jcubic" title="Jakub Jankiewicz - Twitter profile" rel="me" data-tooltip="Twitter">
                                <img src="/images/profiles/twitter.png" alt="Twitter icon"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/jcubic/" title="Jakub Jankiewicz - Github profile" rel="me" data-tooltip="Github">
                                <img src="/images/profiles/github.png" alt="Github icon"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/jcubic" title="Jakub Jankiewicz - Dribbble profile" rel="me" data-tooltip="Dribbble">
                                <img src="/images/profiles/dribbble.png" alt="Dribbble icon"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://openclipart.org/artist/kuba" title="Jakub Jankiewicz - Open Clipart profile" rel="me" data-tooltip="Open Clipart">
                                <img src="/images/profiles/ocal.png" alt="Open Clipart icon"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://codepen.io/jcubic/" title="Jakub Jankiewicz - Codpen profile" rel="me" data-tooltip="Codpen">
                                <img src="/images/profiles/codpen.png" alt="Codpen icon"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://jcubic.deviantart.com/gallery/" title="Jakub Jankiewicz - DeviantArt profile" rel="me" data-tooltip="DeviantArt">
                                <img src="/images/profiles/deviantart.png" alt="DeviantArt icon"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://stackoverflow.com/users/387194/jcubic?tab=profile" title="Jakub Jankiewicz - Stack Overflow profile" rel="me" data-tooltip="Stack Overflow">
                                <img src="/images/profiles/stackoverflow.png" alt="Stackoverflow icon"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.freecodecamp.org/news/author/jcubic/" title="Jakub Jankiewicz - FreeCodeCamp profile" rel="me" data-tooltip="FreeCodeCamp">
                                <img src="/images/profiles/free-code-camp.png" alt="FreeCodeCamp icon" />
                            </a>
                        </li>
                        <li>
                            <a href="http://www.flickr.com/photos/jcubic/" title="Jakub Jankiewicz - Flickr profile" rel="me" data-tooltip="Flickr">
                                <img src="/images/profiles/flickr.png" alt="Flickr icon"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/jcubic/" title="Jakub Jankiewicz - Instagram profile" rel="me" data-tooltip="Instagram">
                                <img src="/images/profiles/instagram.png" alt="Instagram icon" />
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/jcubic" title="Jakub Jankiewicz - Facebook profile" rel="me" data-tooltip="Facebook">
                                <img src="/images/profiles/facebook.png" alt="Facebok icon"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/jakubjankiewicz" title="Jakub Jankiewicz - Linkedin profile" rel="me" data-tooltip="Linkedin">
                                <img src="/images/profiles/linkedin.png" alt="Linkedin icon" />
                            </a>
                        </li>
                        <li>
                            <a href="https://www.wikidata.org/wiki/Q113688230" title="Jakub Jankiewicz - WikiData entry" rel="me" data-tooltip="WikiData">
                                <img src="/images/profiles/wikidata.png" alt="Wkkidata icon" />
                            </a>
                        </li>
                        <li>
                            <a href="https://commons.wikimedia.org/wiki/Category:Jakub_T._Jankiewicz" title="Jakub Jankiewicz - Wikimedia Commons Category" rel="me" data-tooltip="Wikimedia Commons">
                                <img src="/images/profiles/commons.png" alt="Wikimedia Commons icon" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--
            <nav class="pages">
                <span><a href="#" class="prev">&#9664;</a></span>
                <ul>
                    <li><a href="#" class="selected">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
                <span><a href="#" class="next">&#9654;</a></span>
            </nav>
            -->
        </article>
    </section>
    <?php include('footer.php'); ?>
    <script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>if (window.module) module = window.module;</script>
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/jcubic/static/js/wcwidth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal/js/jquery.terminal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal/js/xml_formatting.js"></script>
    <script src="https://terminal.jcubic.pl/js/chat.js"></script>
    <script src="https://terminal.jcubic.pl/js/favico.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sysend"></script>
    <script src="https://cdn.jsdelivr.net/npm/randomcolor/randomColor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/figlet/lib/figlet.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-auth.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/jquery.terminal/css/jquery.terminal.min.css" rel="stylesheet"/>
    <script src="/js/terminal.js"></script>
</body>
</html>
