<?php

require('./utils.php');

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="utf-8" />
    <title>Jakub T. Jankiewicz - Web Developer</title>
    <meta name="Description" content="My name is Jakub T. Jankiewicz. I'm Web Developer from Poland. I Love to work with JavaScript, jQuery library and CSS."/>
    <link rel="canonical" href="https://jakub.jankiewicz.org" />
    <link rel="alternate" type="application/rss+xml" title="RSS Feed for Jakub T. Jankiewicz Blog"
          href="https://jakub.jankiewicz.org/blog/rss.xml" />
    <meta name="ocs-site-verification" content="97605728a5a89b24fb4d4b1bdd47e4ee" />
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
             "https://hackernoon.com/u/jcubic",
             "https://www.wikidata.org/wiki/Q113688230",
             "https://www.youtube.com/@jcubic"
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
    <?php include('head.php'); ?>
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
                <p lang="en" itemscope itemtype="http://data-vocabulary.org/Person"> My
                  name is Jakub T. Jankiewicz. I'm <span itemprop="title">Senior Web
                  Developer</span> from Poland. I&nbsp;Love to work with JavaScript,
                  TypeScript and CSS.  Also enjoing working with ReactJS / React Native
                  and learning Next.js and GraphQL.  I'm also Open Source developer,
                  Polish Wikipedia Editor (where I'm also a Mentor and WikiTrainer), a
                  blog author, and trying to be a good mentor to new programmers, but not
                  in organized way (I want to change that in the future).
                </p>
                <p> You can email me at <a data-type="email">jcubic [at] jcubic [dot]
                  pl</a>, and download my Resume
                  <a href="https://jcu.bi/cv-en">English</a> /
                  <a href="https://jcu.bi/cv-pl">Polish</a>.
                </p>
                <p> You can also see <a href="/now/">what I'm doing now</a>, hire me if you
                  need <a href="https://support.jcubic.pl/">support for any of my Open
                  Source projects</a>, or just
                  <a href="https://github.com/sponsors/jcubic">sponsor my OSS work</a>.
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
                            <a href="https://www.youtube.com/@jcubic" title="Jakub Jankiewicz - YouTube Channel" rel="me" data-tooltip="YouTube">
                                <img src="/images/profiles/youtube.png" alt="YouTube icon"/>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script>if (window.module) module = window.module;</script>
    <script src="/<?= with_hash('js/script.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/gh/jcubic/static/js/wcwidth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal/js/jquery.terminal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal/js/unix_formatting.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal/js/xml_formatting.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal/js/less.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.terminal/js/prism.js"></script>
    <script src="https://terminal.jcubic.pl/js/favico.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sysend"></script>
    <script src="https://cdn.jsdelivr.net/npm/randomcolor/randomColor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/figlet/lib/figlet.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.1/firebase-auth.js"></script>
    <script src="https://terminal.jcubic.pl/<?= with_hash('js/chat.js') ?>"></script>
    <link href="https://cdn.jsdelivr.net/npm/jquery.terminal/css/jquery.terminal.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/terminal-prism/css/prism-coy.css" rel="stylesheet" />
    <script src="/<?= with_hash('js/terminal.js') ?>"></script>
</body>
</html>
