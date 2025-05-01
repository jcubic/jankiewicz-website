<?php
header("X-Powered-By: ");
?>
<!DOCTYPE HTML>
<html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
  <meta charset="utf-8" />
  <title>Dojo Toolkit Tutorial</title>
  <!--[if lt IE 9]>
  <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
  <![endif]-->
  <meta name="author" content="Jakub Jankiewicz"/>
  <meta name="Description" content="Dojo toolkit - Instalacja, Tworzenie Interfejsu Graficznego, AJAX, Funkcje wyższego rzędu, Programowanie Obiektowe, Zdarzenia, Animacja, książki o dojo."/>
  <meta name="keywords" content="dojo toolkit, dojo, ajax, html, www"/>
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png" />
  <link rel="manifest" href="/favicon/site.webmanifest" />
  <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <link rel="shortcut icon" href="/favicon/favicon.ico" />
  <meta name="apple-mobile-web-app-title" content="Jakub Jankiewicz" />
  <meta name="application-name" content="Jakub Jankiewicz" />
  <meta name="msapplication-TileColor" content="#b72100" />
  <meta name="msapplication-config" content="/favicon/browserconfig.xml" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="css/tutorial.css" type="text/css" media="screen"/>
  <script></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="canonical" href="https://jakub.jankiewicz.org/dojo_tutorial.php" />
</head>
<body>
  <p style="display:none">Dojo toolkit - Instalacja, Tworzenie Interfejsu Graficznego, AJAX, Funkcje wyższego rzędu, Programowanie Obiektowe, Zdarzenia, Animacja, książki o dojo.</p>
  <header id="logo"><a href="https://jakub.jankiewicz.org"><img src="https://jcubic.pl/images/jcubic/jcubic-logo-white.png"/></a></header>
  <header><span>Dojo Toolkit Tutorial</span></header>
  <nav id="toc">
    <header>Spis Tresci</header>
    <ul>
      <li><a href="#h1">Instalacja</a></li>
      <li><a href="#h2">Tworzenie Interfejsu Graficznego</a></li>
      <li><a href="#h3">Funkcje wyższego rzędu</a></li>
      <li><a href="#h4"><abbr title="Document Object Model">DOM</abbr></a></li>
      <li><a href="#h5">Programowanie Obiektowe</a></li>
      <li><a href="#h6">Zdarzenia</a></li>
      <li><a href="#h7">Animacja</a></li>
      <li><a href="#h8"><abbr title="Asynchronous JavaScript and XML">AJAX</abbr></a></li>

      <li><a href="#h9">Książki</a></li>
      <li><a href="#h10">Linki</a></li>
    </ul>
  </nav>
  <section>
    <header id="h1">Instalacja</header>
    <p>Aby zasintalować dojo toolkit należy zciągnąć najnowszą stabilną wersje ze strony <a href="http://download.dojotoolkit.org">http://download.dojotoolkit.org</a>, następnie rozpakować do katalogu dostępnego na serwerze www np. <code>js</code>.</p>
    <pre><code>&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl"&gt;
&lt;head&gt;
  &lt;title&gt;Dojo Hello World&lt;/title&gt;
  &lt;script type="text/javascript" djConfig="parseOnLoad: true"
             src="js/dojo/dojo.js"&gt;
  &lt;/script&gt;
  &lt;script type="text/javascript"&gt;
  // tu wpisujemy kod jascript
  &lt;/script&gt;
  &lt;style type="text/css"&gt;
    @import "js/dijit/themes/tundra/tundra.css";
    @import "js/dojo/resources/dojo.css"
  &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;p>Hello Dojo&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
    <?php
      flush();
    ?>
    <header id="h2">Tworzenie Interfejsu Graficznego</header>
    <p>Interface Graficzny tworzy się za pomocą dojo.dijit. Dijit jest to skrót od Dojo Widget.</p>
    <p>Aby dodać widget nalerzy dodać atrybut dojoType do elementów html-a. Kiedy <abbr title="Document Object Model">DOM</abbr> dokumentu HTML jest gotowy Dojo parsuje kod HTML w poszukiwaniu atrybutów <code>dojoType</code> i wstawia widgety.</p>
    <pre><code>&lt;form&gt;
&lt;input type="text"
maxlength=25
name="last"
dojoType="dijit.form.TextBox"/&gt;
&lt;button dojoType="dijit.form.Button"&gt;Button&lt;button&gt;

</code></pre>
    <p>Aby umożliwić tworzenie widgetów nalerzy dodać odpowiednie pliki za pomocą funkcji <code>dojo.require</code>.</p>
    <pre><code>&lt;script type="text/javascript"&gt;
dojo.require("dojo.parser");
dojo.require("dijit.form.TextBox");
dojo.require("dijit.form.Button");
&lt;/script&gt;

</code></pre>
    <p><code>dojo.parser</code> jest potrzebny aby umożliwić parsowanie kodu html</p>
    <p>Aby odwołać się do widgetu należy skorzystać z funkcji <code>dijit.byId</code></p>
    <p>Tutaj możesz znaleźć <a href="http://www.dojotoolkit.org/reference-guide/dijit/index.html">listę widgetów dojo.</a></p>
    <header id="h3">Funkcje wyzszego rzedu</header>
    <p>Aby iterować po jakiejś tablicy można użyć mapowania funkcji <code>dojo.map</code>. Pierwszym argumentem tej funkcji jest tablica wartości, natomiast drugim funkcja. Funkcja <code>dojo.map</code> zwróci tablicę wartości utworzoną z kolenych wywołań funkcji przekazanej jako drugi argument.</p>
    <pre><code>function square(n) {
  return n * n;
}
dojo.map([1, 2, 3, 4, 5, 6], square);</code></pre>
    <p>Powyżesze wywołanie funkcji <code>dojo.map</code> zwróci kwadraty liczb od 1 do 6 czyli tablicę <code>[1, 4, 9, 16, 25, 36]</code>.</p>
    <p>Gdy chcemy iterować po jakiejś talibcy ale nie interesuje nas zwracana wartość możemy użyć funkcji <code>dojo.forEach</code>, która tak jak w przypadku funkcji <code>dojo.map</code>, jako pierwszy argument przyjmuje tablice wartości, a jako drugi funkcje, która zostanie wywołana dla każdego elementu tablicy.</p>
    <pre><code>dojo.forEach([1, 2, 3, 4, 5, 6], document.write);</code></pre>
    <p>Powyższy kod wyświetli liczby do 1 do 6.</p>
    <p>Ciekawą funkcją jest funkcja <code>dojo.partial</code>. Funkcja jako pierwszy parametr przyjmuje funkcje, a jako kolejne argumenty wartości, które zostaną przekazane do nowo utworzonej funkcji.</p>
    <pre><code>function square(n) {
  return n * n;
}
var square10 = dojo.partial(square, 10);
document.write(square10());</code></pre>
    <p>Wywołanie funkcji <code>square10</code> zwróci wartość <code>10 * 10</code>.</p>
    <p>Funkcja <code>dojo.filter</code> zwróci tablicę elementów dla których funkcja, przekazana jako drugi parametr, zwróci wartość true.</p>
    <pre><code>function print(string) {
  document.write(string);
}
function nieparzysta(liczba) {
  return liczba % 2 !== 0;
}
dojo.forEach(dojo.filter([1, 2, 3, 4, 5, 6, 7], nieparzysta), print);</code></pre>
    <p>W powyższym kodzie użyliśmy funkcji <code>dojo.filter</code> do wybrania liczb nieparzystych następnie funkcji <code>dojo.forEach</code> do wypisania ich w dokumencie.</p>
    <header id="h4"><abbr title="Document Object Model">DOM</abbr></header>
    <p>Odwołanie do elementu o indetifikatorze objekt</p>
    <pre><code>var objekt = dojo.byId("obiekt");</code></pre>
    <p>Za pomocą funkcji <code>dojo.query</code> mamy możliwość odwoływać się do objektów określanych przez selektory <abbr title="Casscadic Style Sheet">CSS</abbr>.</p>
    <pre><code>dojo.query(".klasa");</code></pre>
    <p>Powyższe wywołanie zwróci objekt, za pomocą którego możemy odwoływać się do każdego objektu o klasie <code>klasa</code>.</p>
    <pre><code>dojo.query("#identyfikator");</code></pre>
    <p>Powyższe wywołanie zwróci objekt o identyfikatorze <code>id = "identyfikator"</code>.</p>
    <p>Aby utworzyć nowy objekt używamy funkcji <code>dojo.doc.createElement</code>, natomiast za pomocą funkcji <code>dojo.place</code> możemy umieścić go w drzewie objektów.</p>
    <pre><code>var naglowek = dojo.doc.createElement("H1");
naglowek.innerHTML = "To jest treść nagłówka";
dojo.place(naglowek, "body", "last");</code></pre>
    <p>W powyższym kodzie użyliśmy pola <code>innerHTML</code> do wstawienia zawartości. Pierwszy parametr określa objekt, który ma zostać wstawiony, drugi określa objekt, wewnątrz którego zostanie wstawiony element, ostatni parametr określa gdzie ma zostać wstawiony, może także przyjmować wartość <code>first</code>.</p>
    <header id="h5">Programowanie Obiektowe</header>
    <p>Dojo Toolkit umożliwia łatwiejsze tworzenie klas (umożliwia także dziedziczenie).</p>
    <p>Aby utworzyć nową klase korzystamy z funkcji <code>dojo.declare</code>.</p>
    <pre><code>dojo.declare("Klasa1", null, { // null - brak klasy bazowej
  constructor: function(foo) { // konstruktor
    this.foo = foo;
  },
  // metody get i set
  setFoo: function(foo) { this.foo = foo; },
  getFoo: function() { return this.foo; }
});

var objekt = new Klasa1("Lorem Ipsum");
document.write(objekt.getFoo());
objekt.setFoo("Dolor Amet");
document.write("objekt.foo: " + objekt.getFoo() + "&lt;br/&gt;");

dojo.declare("Klasa2", Klasa1, {
  constructor: function(foo, bar) {
    Klasa1.constructor(foo); // wywołanie konstruktora klasy bazowej
    this.bar = bar;
  },
  setBar: function(bar) { this.bar = bar; },
  getBar: function() { return this.bar; }
});

var objekt2 = new Klasa2("Lorem", "Ipsum");
document.write("objek2 foo: " + objekt2.getFoo() + " bar: " +
               objekt2.getBar() + "&lt;br/&gt;");</code></pre>
    <p>W powyższym kodzie tworzone są dwie klasy <code>Klasa1</code> i <code>Klasa2</code>, która dziedziczy po klasie <code>Klasa1</code> (drugi argument funkcji <code>dojo.declare</code> zawiera klasę rodzica lub tablicę klas), oraz tworzone są dwa objekty <code>objekt</code> i <code>objekt2</code>, dla których wywoływane są metody <code>setFoo, getFoo i getBar</code>.</p>
    <p>Istnieje możliwość rozszeżania klas i objektów za pomocą funkcji <code>dojo.extend</code> i <code>dojo.mixin</code>.</p>
    <pre><code>dojo.declare("Foo", null, {
  constructor: function(foo) {
     this.foo = foo;
  },
  setFoo: function(foo) { this.foo = foo; },
  getFoo: function() { return this.foo; }
});

dojo.extend(Foo, {
  bar: "undefined",
  getBar: function() { return this.bar; },
  setBar: function(bar) { this.bar = bar; }
});
var foo = new Foo("Lorem");
foo.setBar("Ipsum");
document.write("bar = " + foo.getBar());</code></pre>
    <p>Powyższy kod tworzy nową klasę <code>Foo</code> za pomocą funkcji <code>dojo.declare</code>, a następnie rozszerza daną klasę o nowe metody <code>setBar i getBar</code> i jedno pole <code>bar</code>.</p>
    <pre><code>var foo = new Foo("Lorem Ipsum");
dojo.mixin(foo, {
  baz: "undefined",
  getBaz: function() { return this.baz; },
  setBaz: function(baz) { this.baz = baz; }
});
foo.setBaz("Dolor Amet");
document.write("foo.baz = " + foo.getBaz());</code></pre>
    <p>W powyższym kodzie tworzony jest nowy objekt klasy <code>Foo</code> z poprzedniego przykładu, następnie rozszerzany zostaje o nowe pole <code>baz</code> oraz dwie metody <code>getBaz i setBaz</code>, które są następnie wywoływane.</p>
    <header id="h6">Zdarzenia</header>
    <p>Odpowiedzi na zdarzenia tworzymy za pomocą funkcji <code>dojo.connect</code> lub za pomocą metody <code>connect</code> objektu zwróconego za pomocą funkcji <code>dojo.query</code>.</p>
    <pre><code>dojo.connect(dojo.byId("identyfikator"), "onclick", function(evt) {
  alert("Właśnie kliknąłeś element o identyfikatorze \"identyfikator\"");
}
// lub
dojo.query("#identyfikator").connect("onClick", function(evt) {
  alert("Właśnie kliknąłeś element o identyfikatorze \"identyfikator\"");
}</code></pre>
    <p>Odpowiedzi na zdarzenia można podpinać pod metody objektów.</p>
    <pre><code>var objekt = {
  metodaA: function() {
    alert("Wywołałeś metodę \"metodaA\".");
  }
};
var objekt2 = {
  metodaB: function() {
    alert("Wywołałeś metodę \"metodaB\".");
  }
};
dojo.connect(objekt, "metodaA", objekt2, "metodaB");

objekt.metodaA();
</code></pre>
    <p>Wywołując metodę <code>objekt.metodaA</code> wywołujemy także metodę <code>objekt2.metodaB</code>.</p>
    <header id="h7">Animacja</header>
    <p>Aby użyć animacji zanikania i pojawiania się można użyć odpowiednio funkcji <code>dojo.fadeOut</code> i <code>dojo.fadeIn</code>.</p>
    <pre><code>dojo.addOnLoad(function() {
  var objekt = dojo.byId("objekt");
  dojo.fadeOut({
    node: objekt,
    delay: 100,
    duration: 100
  }).play();
});</code></pre>
    <p>W powyższym kodzie w funkcji <code>dojo.fadeOut</code> użyto objektu zawierającego pola <code>node</code>, określające element htmla który ma zostać animowany, <code>delay</code>, określający opóźnienie animacji w milisekundach oraz <code>duration</code> określające czas trwania animacji, także w milisekundach. Aby rozpocząć animacje należy wywołać metodę <code>play</code> objektu zwróconego przez funkcję <code>dojo.fadeOut</code>. Analogicznie można wywoływać funkcję <code>dojo.fadeIn</code>.</p>
    <pre><code>dojo.addOnLoad(function() {
  var visible = true;
  var objekt = dojo.byId("objekt");
  dojo.query("#przycisk").connect("onclick", function(evt) {
    if (visible) {
      dojo.fadeOut({
        node: objekt
      }).play();
      visible = false;
    } else {
      dojo.fadeIn({
        node: objekt
      }).play();
      visble = true;
    }
  });</code></pre>
    <p>Powyższy kod wywoła animacje zanikania i pojawiania się za każdym razem gdy klikniemy przycisk o atrybucje id = "przycisk".</p>
    <p>Dołączając moduł <code>dojo.NodeList-fx</code> można używać animacji dla objektów zwróconych przez funkcje <code>dojo.query</code>.</p>
    <pre><code>dojo.require("dojo.NodeList-fx");
dojo.addOnLoad(function() {
  dojo.query("#identyfikator").fadeOut().play();
});</code></pre>
    <p>Za pomocą funkcji <code>dojo.query</code> możemy animować kilka elementów na raz, np. objekty pewnej klasy.</p>
    <pre><code>dojo.require("dojo.NodeList-fx");
var fade = function() {
  dojo.query(".fadeNode").fadeOut().play();
}
dojo.addOnLoad(function() {
  dojo.connect(dojo.byId("naglowek"), "onclick", "fade");
}</code></pre>
    <header id="h8"><abbr title="Asynchronous JavaScript and XML">AJAX</abbr></header>
    <p>Za pomocą funkcji <code>dojo.xhrGet</code> możemy wykonać zapytanie do serwera.</p>
    <pre><code>dojo.addOnLoad(function() {
  var zawartosc = dojo.byId("zawartosc");
  dojo.xhrGet({
    url: "js/plik.txt",
    handleAs: "text",
    load: function(data, args) {
      dojo.fadeOut({
        node: zawartosc,
	onEnd: function() {
	  zawartosc.innerHTML = data;
	  dojo.fadeIn({ node: zawartosc}).play();
	}
      }).play();
    }
  }); // dojo.xhrGet
}); // addOnLoad</code></pre>
    <p>W powyższym kodzie użyliśmy animacji do wygaszenia objektu, o parametrze <code>id = "zawartosc"</code>, załadowania zawartości i ponownego wyświetlenia objektu. Do funkcji <code>dojo.xhrGet</code> przekazujemy objekt z parametrami: url - określający adres url do załadowania, handleAs - określający jak ma traktować dane, oraz load - określający funkcje która zostanie wywołana w momencie gdy dane zostaną pobrane z serwera.</p>
    <p>Za pomocą <code>xhrGet</code> możemy pobierać tylko dane z serwera na którym znajduje się dana strona.</p>
    <p>Za pomocą funkcji <code>dojo.xhrPost</code> możemy wykonać zapytanie POST do serwera.</p>
    <pre><code>dojo.addOnLoad(function() {
  dojo.xhrPost({
    url: "skrypt.php",
    content: {
      "foo": "Lorem",
      "bar": "Ipsum",
      "baz": "Dolor"
    },
    load: function(data, ioargs) {
      dojo.byId("content").innerHTML = data;
    }
  });
});</code></pre>
    <p>Pole <code>content</code> zawiera parametry które zostaną przekazane do skryptu po stronie serwera. Poniżej pokazano przykładowy skrypt php wyświetlający zawartość zmiennych POST.</p>
    <pre><code>&lt;?php
header("Content-type: text/plain; charset=utf-8");
echo "foo: {$_POST['foo']}\n";
echo "bar: {$_POST['bar']}\n";
echo "baz: {$_POST['baz']}\n";
?&gt;</code></pre>
    <p>Do przekazywania parametrów do skryptu, po stronie serwera, możemy użyć formularza. Poniżej przedstawiono prosty formularz hmtl.</p>
    <pre><code>&lt;form id="formularz" method="POST"&gt;
  &lt;label for="name">Name: &lt;/label&gt;
  &lt;input type="tet" name="name" value="Enter name" /&gt;
  &lt;input type="submit" value="wyślij" /&gt;
&lt;/form&gt;</code></pre>
    <p>Do przesłania danych do serwera użyjemy poniższego skryptu.</p>
    <pre><code>function formSubmit(e) {
  e.preventDefault(); // wyłączenie normalnego wywołania
  dojo.xhrPost({
    url: "skrypt.php",
    form: "formularz",
    handleAs: "text",
    handle: function(data, args) {
      if (typeof data == "error") {
        alert("Błąd wczytania danych!");
      } else {
        dojo.byId("zawartosc").innerHTML = data;
      }
    }
  });
}
dojo.onLoad(function() {
  dojo.connect(dojo.byId("formularz"), "onsubmit", "formSubmit");
});</code></pre>
    <p>Powyższy kod używa pola <code>handle</code> dla określenia funkcji, która zostanie wywołana w przypadku powodzenia lub nie powodzenia.</p>
<!-- share buttons -->
    <div id="share">
    <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fjcubic.pl%2Fdojo_tutorial.php&amp;locale=pl_PL&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px; padding:1em;" allowTransparency="true"></iframe>
    </div>
  </section>
  <div id="books">
    <header id="h9">Ksiazki</header>
    <ul>
        <li>Dojo - Definitive Guide - Matthew A. Russell</li>
        <li>Mastering Dojo: JavaScript and Ajax Tools for Great Web Experiences - Craig Riecke, Rawld Gill, Alex Russell</li>
        <li>Getting StartED with Dojo - Kyle D. Hayes with Peter Higgins</li>
    </ul>
  </div>
  <div id="links">
    <header id="h10">Linki</header>
    <ul>
      <li><a href="http://www.dojotoolkit.org">Strona Główna Dojo</a></li>
      <li><a href="https://developer.mozilla.org/en/Core_JavaScript_1.5_Guide">Core JavaScript Guide</a></li>
      <li><a href="https://developer.mozilla.org/en/Core_JavaScript_1.5_Reference">Core JavaScript Reference</a></li>
      <li><a href="https://eloquentjavascript.net/">Eloquent JavaScript by Marijn Haverbeke</a></li>
    </ul>
  </div>
  <footer>
    <div id="disqus_thread" style="margin: 0 20px;"></div>
    <script>
    var disqus_shortname = 'jcubic'; // required: replace example with your forum shortname
    var disqus_identifier = "dojo_tutorial";
    var disqus_url = "http://jcubic.pl/dojo_tutorial.php";
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
    </script>
    <? if ($_SERVER["HTTP_HOST"] != "localhost" && !isset($_GET['track'])): ?>
      <script defer src="https://umami.jcubic.pl/script.js"
              data-website-id="ecea8c54-de5d-43b6-8c68-11a91c8d0a24"></script>
    <? endif; ?>
    <p id="licence"><a rel="license" href="https://creativecommons.org/licenses/by-sa/2.5/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/2.5/80x15.png" /></a><br />This tutorial is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-sa/2.5/">Creative Commons Attribution-ShareAlike 2.5 Generic License</a>, Copyright &copy; <?=date('Y')?> <a href="https://jakub.jankiewicz.org">Jakub T. Jankiewicz</a></p>
  </footer>
</body>
</html>
