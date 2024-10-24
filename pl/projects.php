<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Jakub T. Jankiewicz - Projects</title>
    <meta name="Description" content="Few projects I've created using JavaScript, Python and Ruby"/>
    <?php include('../head.php'); ?>
    <link rel="alternate" href="https://jakub.jankiewicz.org/projects.php" hreflang="x-default" />
    <link rel="alternate" href="https://jakub.jankiewicz.org/pl/projects.php" hreflang="pl" />
    <link rel="alternate" href="https://jakub.jankiewicz.org/projects.php" hreflang="en" />
    <link rel="canonical" href="https://jakub.jankiewicz.org/pl/projects.php" />
</head>
<body id="projects">
    <?php include('header.php'); ?>
    <article>
        <h2>Projekty Open Source</h2>
        <ul class="projects">
          <li>
            <a href="https://terminal.jcubic.pl/" title="jQuery Terminal: for Web based Terminal websites">
              <img src="/images/projects/jquery.terminal.png" alt="ASCII art with jQuery Terminal signature"/>
            </a>
            <p><strong>jQuery Terminal</strong> jest to biblioteka, która umożliwia dodawanie interfejsu wiersza poleceń na stronach internetowych. Umożliwia dodawanie własnych poleceń oraz zawiera masę funkcji, które to ułatwiają. Takie funkcja jak podświetlanie składni, kodowanie znaków ANSI, skróty Basha czy auto uzupełnianie. Biblioteka używa jQuery, ale nie potrzeba jej używać gdy piszę się własny kod. Jest to bardziej framework który umożliwia pisanie aplikacji wiersza poleceń. Kod jest utrzymywany od 2010 roku i używa ręcznie pisany kod ES5.</p>
          </li>
          <li>
            <a href="https://lips.js.org/" title="LIPS: Scheme based powerfull lisp interpreter in JavaScript">
              <img src="/images/projects/lips.png" alt="LIPS logo: Scheme based lisp"/>
            </a>
            <p><strong>LIPS</strong> jest to implementacja <a href="https://pl.wikipedia.org/wiki/Scheme">języka Scheme</a> (Dialektu lisp) w języku JavaScript. Umożliwia bardzo łatwą integrację z językiem JavaScript. Połączenie między językiem JavaScript a kodem Lisp jest prawie jeden do jeden. Język posiada także bardzo potężne możliwości introspekcji oraz meta programowania. Kod jest napisany w dość nowoczesnym ES6+, ale nadal czasami używa dziedziczenia prototypowego z ES5 zamiast klas.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/sysend.js/" alt="sysend.js: Send messages between tabs or windows">
              <img src="/images/projects/sysend.png" alt="Sysend.js Logo"/>
            </a>
            <div>
              <p><strong>Sysend</strong> jest małą biblioteką, bez zależności zewnętrznych, która umożliwia komunikację między oknami i zakładkami, poprzez wysyłanie wiadomości. Umożliwia także komunikacje między domenami. Posiada proste API podobne do zdarzeń z jQuery, czy AngularJS.</p>
              <p>Biblioteka posiada także funkcje, takie jak śledzenie okien/zakładek oraz mechanizm <a href="https://pl.wikipedia.org/wiki/Zdalne_wywo%C5%82anie_procedury">RPC</a>, zbudowane na bazie prostych komunikatów.</p>
            </div>
          </li>
          <li>
            <a href="https://www.gnome-look.org/p/1012535" title="Clarity: GTK+ Monoshape SVG Icon Theme">
              <img src="/images/projects/clarity.png" alt="Clarity Icons GTK+ logo"/>
            </a>
            <p><strong>Clarity</strong> jest motyw ikon SVG typu mono shape dla systemu GNU Linux. Został stworzony jako motyw dla GTK+. Motyw posiada skrypty Basha, które umożliwiają zmiane kolorów, istnieje także możliwość tworzenia własncych szablonów SVG.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/notes" title="Text based notes taking app">
              <img src="/images/projects/notes.png" alt="NOTES ASCII banner"/>
            </a>
            <p><strong>Notes AngularJS App</strong> jest to aplikacja typu tekstowego do zapisywania notatek. Jest to jak mój drugi mózg. Nie ma możliwości zbudowania jej ponownie i dodania nowych funkcji (nawet mimo że jest plik package-lock.json), więc planuje przepisać ją w ReactJS. Mam zamiar dodać takie funkcje jak wyszukiwarkę pełno tekstową, PWA, tryb ciemny czy wsparcie dla telefonów. Posiadam długą listę funkcji do dodania.</p>
          </li>
          <li>
            <a href="https://send.jcubic.pl/" title="WebRTC Send">
              <img src="/images/projects/web-rtc-send.png" alt="Dwie ikony komputerów z dwoma strzałkmi miedzy nimi"/>
            </a>
            <p><strong>WebRTC Send</strong>. Aplikacja napisana w Vanilla JavaScript, służąca do przesyłania plików i wiadomości między komputerami, korzystająca z WebRTC (<abbr title="Peer-to-peer">P2P</abbr> <abbr title="Application Programming Interface ">API</abbr>) oraz Firebase.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/uncp" title="UNCP: UNsplash Cache Proxy">
              <img src="/images/projects/uncp.png" title="UNCP ASCII banner"/>
            </a>
            <p><strong>UNCP: UNsplash Cache Proxy</strong> ten projekt to proste API napisane w PHP, które działa jako Proxy dla <a href="https://unsplash.com/developers">Unsplash API</a>. To API ma ograniczenia na ilość zapytań (ang. rate limit), co może powodować prolemy jeśli używa się go podczas live codingu na technicznych rozmowach o pracę. Szczególnie jest to problem, gdy środowisko, w którym się pisze kod, uaktualnia aplikacje na żywo. Może to powodować masę zapytań do serwera. Dzięki temu proxy, nie trzeba się martwić o przekroczenie limitu.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/favloader" title="Favloader: Favicon animation JavaScript library">
              <img src="/images/projects/favloader.png" title="Favloader logo"/>
            </a>
            <p><strong>Favloader</strong> jest to mała biblioteka, która umożliwia animowanie favikonki. Umożliwia dodanie efektu ładowanie podobnego do tego z przelgądarki Google Chrome, ale umożliwia zmianę koloru. Umożliwia także tworzenia własnych animacji poprzed udostępnienie API obiektu Canvas. Dzięki niej można także dodać animowane GIFy, nawet gdy przeglądarka ich nie obsługuje. Biblioteka działa nawet gdy zakładka nie jeset aktywna.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/yapp" title="YAPP: Yet Another PHP Proxy">
              <img src="/images/projects/yapp.png" title="YAPP ASCII banner"/>
            </a>
            <p><strong>Yapp - Yet Another PHP Proxy</strong> założeniem tego projektu jest dać możliwość pośredniczenia między stronami oraz aplikacjami napisanymi w języku JavaScript. Dzięki temu umożliwia otworzenie stron, które inaczej są zablokowane. Większość tego typu projektów w PHP działa tylko z HTML i CSS.</p>
          </li>
          <li>
            <img src="/images/projects/jquery-plugins.png"/>
            <ul>
              <li><strong><a href="https://github.com/jcubic/jquery.filebrowser">jquery.filebrowser</a></strong> jest to plugin który dodaje okno przeglądarki plików. Zobacz wpis: <a href="https://jcubic.wordpress.com/2017/09/02/how-to-create-file-explorer-using-jquery-php/">How to create Server File Explorer using jQuery and PHP</a>,</li>
              <li><strong><a href="https://github.com/jcubic/jquery.resize">jquery.resize</a></strong> jest to plugin, który dodaje zdarzenie resize dla każdego elementu, używa resize obserwatora lub dodatkowego elementu więc będzie działać nawet gdy resize observer nie jest obsługiwany przez przeglądarkę,</li>
              <li><strong><a href="https://github.com/jcubic/jquery.splitter">jquery.splitter</a></strong> jest to plugin, który dodaje komponent z wieloma panelami oraz elementem między nimi który można przesuwać, dzięki temu zmieniając rozmiar obu paneli,</li>
              <li><strong><a href="https://github.com/jcubic/jquery.draglessClick">jquery.draglessClick</a></strong> jest to mały plugin, który dodaje zdarzenie click które nie reaguje na zdarzenie drag (przenoszenia), co jest domyślnym zachowaniem przeglądarki i biblioteki jQuery,</li>
              <li><strong><a href="https://github.com/jcubic/jquery.rotate">jquery.rotate</a></strong> mały plugin który dodaje właściwość css rotate, działa także z animacjami. Może zostać użyty, gdy potrzebny jest tylko obrót zamiast dużej biblioteki która zawiera więcej transformacji,</li>
            </ul>
            <li>
              <a href="https://github.com/jcubic/leash" title="Leash - browser shell">
                <img src="/images/projects/leash.png"/>
              </a>
              <p><strong>Leash</strong> jest to aplikacja, która używa mojej biblioteki jQuery Terminal, która daje dostęp do wiersza poleceń serwera dla współdzielonych hostingów. Została stworzona aby umożliwić dostęp do powłoki gdy server nie udostępnia dostępu przez SSH. Używa języka PHP It use PHP jako backendu oraz jednej z funkcji dostępu do powłoki (np. exec), lub skryptu CGI w Pythonie i Perlu, gdy PHP ma wyłączone te funkcje. Niektóre hostingi wyłączają te funkcje. Działa z systemami GNU/Linux oraz Windows.</p>
            </li>
          </li>
          <li>
            <a href="https://git-terminal.js.org/" title="GIT Web Terminal">
              <img src="/images/projects/git-terminal.png"/>
            </a>
            <p><strong>GIT Web Terminal</strong> jest to jeszcze jedna aplikacja wykorzystująca jQuery Terminal. Jest to próba odtworzenia wiersza poleceń gita jako w przeglądarce. Wszystko działa w przeglądarce dzięki bibliotece <a href="https://isomorphic-git.org/">isomorphic-git</a>, która umożliwia interakcję z repozytorium gita w przeglądarce oraz NodeJS czy Deno.</p>
          </li>
          <li>
            <a href="https://github.com/cosi1/ggtips" title="GGTips - tooltips on GGPlot in shiny">
              <img src="/images/projects/ggtips.png" alt="GGtips Logo"/>
            </a>
            <p><strong>GGTips</strong> jest to biblioteka napisana w języku R. Umożliwia dodawanie tooltipów do wykresów stworzonych przy użyciu biblioteki GGPlot w aplikacjach shiny. GGPlot jest to najczęściej wybierana biblioteka do tworzenia wykresów w języku R, a GGTips wykorzystuje wszystkie możliwości tej biblioteki. Byłem odpowiedzialny za część Front-Endową biblioteki jako część mojej pracy w firmie Roche.</p>
          </li>
          <li>
            <a href="https://github.com/Genentech/battery" title="Battery - R Shiny Architecture framwork">
              <img src="/images/projects/battery.png" alt="Battery Logo"/>
            </a>
            <p><strong>Battery</strong> jest to framwork napisany także w jezyki R. Przy czym tym razem byłem głównym architektem i autorem większości kodu. Jest to biblioteka do tworzenia architektury aplikacji napisanych przy użyciu biblioteki Shiny. Tak samo jako GGTips projekt powstał w ramach mojej pracy dla Roche i Genentech.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/tagger" title="Zero Dependency, Vanilla JavaScript Tag Editor">
              <img src="/images/projects/tagger.png" alt="Tagger Logo"/>
            </a>
            <p><strong>Tagger</strong> jest to biblioteka, bez zależności zewnętrznych, napisana w tzn. Vanilla JavaScript. Umożliwia dodawanie edytowalnych tagów do strony. Posiada także auto uzupełnianie.</p>
          </li>
          >
          <li>
            <a href="https://github.com/jcubic/velvet" title="Zero Dependency, Vanilla TypeScript Universal CSS in JS library">
              <img src="/images/projects/velvet.png" alt="Velvet Logo"/>
            </a>
            <p><strong>Velvet</strong> to biblioteka Open Source jest napisana w TypeScriptcie. Nie ma żadnych zależności zewnętrznych (oprócz zależności developerskich). Jest to uniwersalne rozwiązanie CSS in JS, które nie wymaga kompilatora jak StyleX od Facebooka/Mety. Jest to więc rozwiązanie typu <span lang="en">Runtime CSS-in-JS</span>. Biblioteka wspira także ścisłe <abbr title="Content Security Policy" lang="en">CSP</abbr> poprzez tag nonce.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/gaiman" title="Gaiman: Text based game engine and programming language">
              <img src="/images/projects/gaiman.png" alt="Gaiman Logo"/>
            </a>
            <p><strong>Gaiman</strong> jest to język programowania zainspirowany językiem Ruby, kompilowalny do języku JavaScript. Głównym celem jest umożliwienie tworzenie interaktywnych gier w za pomocą biblioteki jQuery Terminal, oraz prawdopodobnie w przyszłości wiersza poleceń. Tutaj jest <a href="https://gaiman.js.org/">playground języka</a>, który umożliwa także pracę nad samym językiem. Gaiman używa <a href="https://peggyjs.org/">generatora parserów Peggy (fork PEG.js)</a>.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/wayne" title="Wayne Service Worker Routing library for in browser HTTP requests">
              <img src="/images/projects/wayne.png" alt="Wayne logo"/>
            </a>
            <p><strong>Wayne</strong> biblioteka napisana w Vanilla JavaScript, posiadająca proste API do dodawania nowych odpowiedzi HTTP. API biblioteki jest podobne do tej z biblioteki <a href="http://expressjs.com/">Express.js</a>, ale korzysta z Service Workera, który umożliwia tworzenie nowych endpoitów HTTP w przeglądarce. Zazwyczaj Service Worker jest używany do tego, aby dodać cache zapytań HTTP oraz pracę, gdy nie ma internetu (głównie dla aplikacji <abbr title="Progressive Web App">PWA</abbr>), ale można go także używać do tworzenia odpowiedzi dla zapytania, które nigdy nie opuszczają przeglądrki.</p>
          </li>
          <li>
            <a href="https://isomorphic-git.org/" title="A pure JavaScript implementation of git for node and browsers!">
              <img src="/images/projects/isomorphic-git.png" alt="Isomorphic-Git Logo"/>
            </a>
            <p><strong>Isomorphic-Git</strong> implementacja gita w czystym JavaScript, która działa w przeglądarce oraz NodeJS czy Deno. Jestem aktywnym maintainerem projektu. Główny autor projekt już nie pracuje nad nim. Zajmuję się głównie komunikacja z użytkownikami, robieniem code review, mergowaniem zmian, oraz decyduje w jakim kierunku powinien iść projekt (oczywiście uwzględniając co inni mają do powiedzenia).</p>
          </li>
          <li>
            <a href="https://koduj.org" title="Kreatywny Kurs Programowania w JavaScript ">
              <img src="/images/projects/koduj.png" alt="Koduj Logo"/>
            </a>
            <p><strong>Koduj</strong> to projekt który zapoczątkowałem w 2022, po moim pierwszym kursie kreatywnego programowania w JavaScript z wykorzystaniem biblioteki <a href="https://p5js.org/">P5.js</a>. Kurs został wystawiony na aukcji 30 finału Wielkiej Orkiestry Świątecznej Pomocy. W ramach pierwszej edycji kursu powstała prosta <a href="https://github.com/jcubic/koduj">aplikacja</a>. Aktualnie pracuję nad programem drugiej, ulepszonej i rozszerzonej, edycji kursu. W 2023 planuje napisać nową wersje aplikacji (plaformy). Aktualną wersje można nazwać MVP lub prototypem. Aplikacja wykorzystuje jQuery, PHP i Firebase. Nową wersje planuje napisać w ReactJS oraz może skorzystam także z Next.js.</p>
          </li>
          <li>
            <a href="https://github.com/jcubic/cmatrix" title="Effect deszcz Matrix w JavaScript">
              <img src="/images/projects/cmatrix.png" alt="Matrix Efekt"/>
            </a>
            <p><strong>CMatrix</strong> To biblioteka w JavaScript, która dodaje efekt z filmu Matrix, która używa elementu Canvas.</p>
          </li>
        </ul>
        <h2>Inne projekty</h2>

        <ul>
            <li><a href="https://try.javascript.org.pl">Wiersz Poleceń JavaScript wraz z książką Eloquent JavaScript,</a></li>
            <li><a href="https://sql.org.pl/">Wiersz Poleceń SQL wraz z kursem na temat języka zapytań SQL</a>,</li>
            <li><a href="https://trypython.jcubic.pl">Interpreter Pythona bazujący na bibliotece Brython</a>,</li>
            <li><a href="https://github.com/jcubic/route.js">Route.js</a> - prosty router w Vanila JavaScript</li>
            <li><a href="https://github.com/jcubic/angular.piechart">Angular Piechart</a> - dyrektywa AngularJS do renderowania wykresów typu Pie Chart,</li>
            <li><a href="https://github.com/jcubic/Monadic">Monadic</a> - <abbr title="Proof Of Concept">POC</abbr> biblioteki do dodawania zachowania monad/monoidów do obiektów,</li>
            <li><a href="https://github.com/jcubic/json-rpc">implementacja JSON-RPC w PHP i JavaScript,</a></li>
            <li><a href="https://github.com/jcubic/jsh.php">jsh.php</a> - powłoka w PHP podobna do Leash ale w pojedynczym pliku. Można jej używać podczas testów penetracyjnych,</li>
            <li><a href="https://github.com/jcubic/firepad">firepad</a> - prosty edytor używający <a href="https://firepad.io/">firepad</a>, Używałem go do pair programowania,</li>
            <li><a href="https://cssdraw.jcubic.pl/">CSS Draw Shape</a> - dodawnie rysunków CSS (zainspirowany rysunku Space Invader stworzonego przez Vlada Zinculescu),</li>
            <li><a href="https://github.com/jcubic/coverage.el">coverage.el</a> - Prosty pomniejszy tryb Emacsa który pokazuje pokrycie kodu testami dla PHP Unit i frameworka JavaScript jest,</li>
        </ul>
        <h2>Inny kod</h2>
        <ul>
            <li><a href="/struct.txt">Implementacja struktur w języku Scheme</a></li>
            <li><a href="https://github.com/jcubic/Similar-Stuff">Skrypt używający tastekid.com (która zmieniła nazwę na tastedive.com) API do wyświetlania podobnych rzeczy</a></li>
            <li><a href="/kopalinski.rb">./kopalinski.rb</a> - Skrypt w Ruby do wyświetlania Definicji ze "Słownika Wyrazów Obcych Kopalińskiego"</a>, a <a href="https://github.com/jcubic/kopalinski.sqlite">tutaj możesz znaleźć baze danych sqlite ze słownikiem oraz skrypt do generowania</a>.</li>
            <li><a href="http://code.activestate.com/recipes/577585-universal-eval-to-string-function/">Uniwersalna funkcja eval która zwraca ciąg znaków dla wyrażeń i instrukcji (Python recipe)</a></li>
            <li><a href="http://code.activestate.com/recipes/502221-extracting-data-from-chm-microsoft-compiled-html/?in=user-4028109">Wyciąganie danych z plików microsoft chm, skompilowanych plików html (Python recipe)</a></li>
            <li><a href="http://code.activestate.com/recipes/502222-creating-java-class-description-files/?in=user-4028109">Tworzenie definicji klas języka Java z wykorzystaniem interpretera Jython (Python recipe)</a></li>
        </ul>
        <h2>Dema na Codepen</h2>
        <ul>
          <li><a href="https://codepen.io/jcubic/pen/BwBYOZ">Vintage Fake Terminal Emulator in JavaScript</a></li>
          <li><a href="https://codepen.io/jcubic/pen/bzYQNw">Fake Linux Terminal in Browser</a></li>
          <li><a href="https://codepen.io/jcubic/pen/WNQOgpY">S-Expression Visualization</a></li>
        </ul>
        <p>Więcej na <a href="https://codepen.io/">Codepen</a> i <a href="https://github.com/jcubic">GitHub</a></p>
    </article>
    <?php include('footer.php'); ?>
</body>
</html>
