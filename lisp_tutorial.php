<?php
header("X-Powered-By: ");
?>
<!DOCTYPE HTML>
<html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
  <meta charset="utf-8" />
  <title>Common Lisp Tutorial</title>
  <!--[if lt IE 9]>
  <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
  <![endif]-->
  <meta name="author" content="Jakub Jankiewicz" />
  <meta name="Description" content="Kurs Programowania w Języku Common Lisp. Lisp jest to skrót od LISt Processing. Common Lisp jest wynikiem próby ustandaryzowania różnych dialektów języka Lisp, przez instytucje ANSI."/>
  <meta name="keywords" content="lisp, common lisp, programowanie, język programowania, tutorial, przewodnik"/>
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
  <meta name="robots" content="all" />
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="css/tutorial.css" type="text/css" media="screen"/>
  <script></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="canonical" href="https://jakub.jankiewicz.org/lisp_tutorial.php" />
</head>
<body>
  <p style="display:none">Kurs Programowania w Języku Common Lisp. Lisp jest to skrót od LISt Processing. Common Lisp jest wynikiem próby ustandaryzowania różnych dialektów języka Lisp, przez instytucje ANSI.</p>
  <header id="logo"><a href="https://jakub.jankiewicz.org"><img src="https://jcubic.pl/images/jcubic/jcubic-logo-white.png"/></a></header>
  <header><span>Kurs Programowania w Jezyku Common Lisp</span></header>
  <nav id="toc">
    <header>Spis tresci</header>
    <ul>
    <li><a href="#h1">Wprowadzenie</a></li>
    <li><a href="#h2">Zmienne</a>
    <ul>
      <li><a href="#h21">Zmienne lokalne</a></li>
      <li><a href="#h22">Stałe</a></li>
      <li><a href="#h23">Zmienne globalne (dynamiczne)</a></li>
    </ul></li>
    <li><a href="#h3">Konstrukcje sterujące</a>
    <ul>
      <li><a href="#h31">Instrukcje warunkowe</a></li>
      <li><a href="#h32">Pętle</a></li>
    </ul></li>
    <li><a href="#h4">Operacje Logiczne</a></li>
    <li><a href="#h5">Typy danych</a>
    <ul>
      <li><a href="#h51">Symbole</a></li>
      <li><a href="#h52">Listy</a>
      <ul>
        <li><a href="#h521">Użycie listy jak stosu</a></li>
      </ul></li>
      <li><a href="#h53">Wektory</a></li>
      <li><a href="#h54">Ciągi znaków</a></li>
      <li><a href="#h55">Tablice</a></li>
      <li><a href="#h56">Tablice asocjacyjne (alisty)</a></li>
      <li><a href="#h57">Listy właściwości</a></li>
      <li><a href="#h58">Tablice haszujące</a></li>
      <li><a href="#h59">Sekwencje</a></li>
      <li><a href="#h510">Struktury</a></li>
      <li><a href="#h511">Objekty - <abbr title="Common Lisp Object System">CLOS</abbr></a>
      <ul>
        <li><a href="#h5111">Klasy i objekty</a></li>
        <li><a href="#h5112">Dziedziczenie</a></li>
        <li><a href="#h5113">Funkcje ogólne (generic functions)</a></li>
        <li><a href="#h5114">Methody</a></li>
      </ul></li>
    </ul></li>
    <li><a href="#h6">Funkcje</a>
    <ul>
      <li><a href="#h61">Funkcje lokalne</a></li>
      <li><a href="#h62">Rekurencja</a></li>
      <li><a href="#h63">Rekurencja ogonowa</a></li>
      <li><a href="#h64">Funkcje anonimowe</a></li>
      <li><a href="#h65">Funkcje wyrzszego rzędu</a></li>
      <li><a href="#h66">Funkcje mapujące</a></li>
      <li><a href="#h67">Domknięcia leksykalne</a></li>
    </ul></li>
    <li><a href="#h7">Makra</a></li>
    <li><a href="#h8">Formatowanie tekstu - funkcja <code>format</code></a></li>
    <li><a href="#h9">Strumienie - osługa wejścia/wyjścia</a></li>
    <li><a href="#h10">Obsługa błędów</a></li>
    <li><a href="#h11">Pakietowanie</a></li>
    <li><a href="#h12">Książki</a></li>
    <li><a href="#h13">Linki</a></li>
    </ul>
  </nav>
  <?php
    flush();
  ?>
  <section>
    <header id="h1">Wprowadzenie</header>
    <p style="color:yellowgreen">UWAGA: Jeśli nie miałeś jeszcze doczynienia z językiem lisp a chciałeś go poznać polecam przeczytać najpierw artykuł <a href="https://jcubic.pl/2019/05/jak-zaczac-nauke-lispa.html">"Jak zacząć naukę programowania w języku LISP"</a>.</p>
    <br/>
    <p>Lisp jest to skrót od LISt Processing. Jest to język programowania, który został opracowany przez <a href="https://pl.wikipedia.org/wiki/John_McCarthy">Johna McCarthiego</a> w latach 50-tych. Został zainspirowany <a href="https://pl.wikipedia.org/wiki/Rachunek_lambda">"Rachunkiem Lambda" Alonzo Churcha</a>, od tej nazwy pochodzi charakterystyczne dla lispa wyrzenie lambda, które toworzy nową funkcję anonimową. Lisp jest drugim najstarszym językiem programowania, który jest nadal w użyciu. Drugim jest Fortran.</p>
    <p>Common Lisp jest wynikiem próby ustandaryzowania różnych dialektów języka Lisp, przez instytucje ANSI.</p>
    <p style="padding-top:2em">Każde wyrażenie w Lispie składa się z wyrażeń (tzw. S-Wyrażenia), które zapisane są za pomocą list. Listę zapisujemy w ten sposób</p>
    <pre><code>(+ 1 2 3 4 5)</code></pre>
    <p>Lisp używa notacji prefiksowej tzn że funkcje są zapisywane jako pierwszy element listy, natomiast parametry jako następne elementy listy</p>
    <p>Wyrażenia można zagnieżdżać</p>
    <pre><code>(* 1 (+ 2 (- 4 5)))</code></pre>
    <p>Powyższe wyrażenie może być zapiane w postaci algebraicznej jako </p>
    <pre><code>1 * (2 + (4 - 5))</code></pre>
    <p>Co ciekawe w języku LISP występują tylko dwa rodzaje "bytów", które mogą być użyte jako pierwszy element. Są to funkcje, (np.
      <code><strong>+</strong></code> jest to zwykła funkcja, a nie operator jak w innych językach), które wywołują wszystkie argumenty przed wywołaniem
      funkcji. Oraz formy specjalne, które mogą inaczej wywoływać swoje argumenty. Np. <code><strong>if</strong></code> nie wywoła kodu dopóki
      nie spełniony będzie wartunek. W języku Commons Lisp można takie specjalne formy dodawać sememu, za pomocą makr, które działają jak funkcje,
      ale operują na argumetnach jak na kodzie. tzn. gdy wywołamy kod <code>(foo (bar 10 (x y))))</code> jeśli symbol <code><strong>foo</strong></code>
      jest to makro to dostanie ono jako argument listę <code>'(bar 10 (x y))</code>. Makro może przetworzyć tą listę w kod, który zostanie wywołany zamiast
      tego co przekazane do makra. Można np. za pomocą makra zamienić wyszstkie wywołania funkcji <code>+</code>, będzie to symbol, na symbol <code>-</code>.</p>
    <header id="header">Zmienne</header>
    <p>Zmienne w Lispie zapisujemy za pomocą funkcji <code>setq</code>.</p>
    <pre><code>(setq x 10)
=> 10
x
=> 10
(setq y (* x 20))
=> 200</code></pre>
    <p>Wartość po znakach <code>=></code> określa wartość zwracaną przez intepreter Lispa.</p>
    <p>W języku Common Lips w odrużnieniu od jezyka Scheme, istnieją dwie przestrzenie nazw na funkcje oraz na zmienne. Dlatego można mieć funkcję oraz
      zmienną o tej samej nazwie.</p>
    <header class="h3" id="header1">Zmienne lokalne</header>
    <p>Zmienne lokalne zpisujemy za pomocą konstrukcji <code>let</code>.</p>
    <pre><code>(setq x 10)
(let ((x 20))
  (* x 30))
=> 600

(let ((zmienna1 wartość)
      (zmienna2 wartość))
   wyrażenie)</code></pre>
    <p>W powyższym kodzie zmienna x została przesłonięta przez konstrukcje <code>let</code> dlatego w jej wnętrzu zmienna x ma wartość 20 nie 10. Po wyjściu z konstrukcji <code>let</code> zmienna nie jest już widoczna.</p>
    <p>Aby usunąć zmienną używamy funkcji <code>(makunbound 'zmienna)</code>.</p>
    <p>Kostrukcja <code>let*</code> działa tak jak let z tym że zmienne są przypisywane sekwencyjnie tzn. zmienne mogą się odwoływać do już przypisanych zmiennych.</p>
    <pre><code>(let* ((x 10)
       (y (+ x 10)))
    (* x y))</code></pre>
    <header class="h3" id="header2">Stale</header>
    <p>Aby przypisać stałą należy użyć funkcji <code>defconstant</code>. Przyjeło się, że stałe zapisuje się ze znakiem +.</p>
    <pre><code>(defconstant +pi+ 3.14159265358979)</code></pre>
    <header class="h3" id="header3">Zmienne globalne (dynamiczne)</header>
    <p>Zmienne gloalne przypisuje się za pomocą funkcji <code>defvar</code> lub <code>defparameter</code>. Przyjeło się zmienne globalne zapisywać ze znakami *.</p>
    <pre><code>(defvar *lista* '(1 2 3 4))
(defparameter *zmienna* 10)</code></pre>
    <p>Funkcja <code>defvar</code> w odróżnieniu od <code>defparameter</code> przypisuje zmiennej wartość tylko raz na samym początku.</p>
    <p>Wszystkie zmienne są zmiennymi leksykalnymi, tzn. widocznymi tylko wewnątrz struktury, w której są definiowane, chyba że zapisano innaczej. Za pomocą funkcji <code>special</code> mamy możliwość zadeklarowania zmiennych jako dynamiczne.</p>
    <pre><code>(defun foo (x)
  (declare (special x))
  (bar))

(defun bar ()
  (+ x 3))</code></pre>
    <p>W powyższym kodzie jeśli wywołamy funkcje <code>(foo 3)</code> zostanie zwrócona wartość <code>6</code>, chociaż w funkcji <code>bar</code> nie zdefiniowano zmiennej <code>x</code>, zmienna przyjmie wartość <code>3</code>.</p>
    <header id="h3">Konstrukcje sterujace</header>
    <header class="h3" id="h31">Instrukcje warunkowe</header>
    <p>Instrukcja <code>if</code>.</p>
    <pre><code>(if (warunek) 
     wyrażenie-dla-prawdy
     wyrażenie-dla-fałszu)</code></pre>
    <p>Jęśli warunek jest spełniony wywołane zostanie pierwsze wyrażenie w przeciwnym wypadku zostanie wywołane drugie wyrażenie. Wyrżenia w instrukcji <code>if</code> mogą być tylko pojedyncze. Jęśli chcemy użyć kilku wyrażeń należy użyć konstrukcji <code>progn</code> która zwraca ostatnie wyrażenie.</p>
    <p>Instrukcja <code>when</code>.</p>
    <pre><code>(when (warunek) wyrażenie ...)</code></pre>
    <p>Wyrażenie w insturkcji <code>when</code> jest wywoływane jeśli warunek jest spełniony. Jest równoważne poniższemu wyrażeniu <code>if</code>.</p>
    <pre><code>(if (warunek)
  (progn
    wyrażenie
    ...))</code></pre>
    <p>Wyrażenie <code>unless</code>.</p>
    <pre><code>(unless (warunek) wyrażenie ...)</code></pre>
    <p>Wyrażenie w instrukcji <code>unless</code> jest wywoływane jeśli warunek jest niespełniony. Jest równoważne poniższemu wyrażeniu <code>if</code>:</p>
    <pre><code>(if (not (wyrażenie))
  (progn
    wyrażenie
    ...))</code></pre>
    <p>Intrukcja <code>cond</code>.</p>
    <pre><code>(cond ((warunek1) wyrażenie ...)
      ((warunek2) wyrażenie ...)
      (t wyrażenie ...))</code></pre>
    <p>Warunki w instrukcji <code>cond</code> sprawdzane są sekwencyjnie. Zwracane jest to wyrażenie dla którego warunek jest spełniony. Dodatkowo można na końcu zastosować warunek <code>t</code> który zawsze będzie spełniony (jako alternatywa).</p>
    <p>Instrukcja <code>case</code>.</p>
    <pre><code>(case zmienna
  (wartość1 wyrażenie ...)
  (wartość2 wyrażenie ...)
  (otherwise wyrażenie ...))</code></pre>
    <p>Wywoływane jest wyrażenie dla którego zmienna przyjmuje odpowiednią wartość lub wyrażenie w klauzuli <code>otherwise</code>.</p>
    <header class="h3" id="h32">Petle</header>
    <p>Pętla <code>dotimes</code>.</p>
    <pre><code>(dotimes (zmienna n opcjionalna-zwracana-wartość)
  wyrażenie
  ...)</code></pre>
    <p>Pętla <code>dotimes</code> wywoła wyrażenie n razy. W każdej iteracji pętli zmienna przyjmie kolejną wartość (od zera do n-1). Opcjionalnie można w instrukcji <code>dotimes</code> określić wartość zwracaną przez pętle. Jeśli nie określimy tej wartość pętla zwróci wartość <code>nil</code>.</p>
    <pre><code>(dotimes (i 10)
  (print i))
0
1
2
3
4
5
6
7
8
9
=> NIL</code></pre>
    <p>Powyższy kod wyświetli liczby od 0 do 9 i zwróci wartość <code>nil</code>.</p>
    <p>Pętla <code>dolist</code>.</p>
    <pre><code>(dolist (e '(1 2 3 4 5 6) opcjonalna-zwracana-wartość)
  wyrażenie
  ...)</code></pre>
    <p>Pętla <code>dolist</code> wywoła się tyle razy ile jest elementów listy. W każdej iteracji zmienna <code>e</code> przyjmie kolejną wartość z listy. Opcjionalnie można określić wartość zwracaną przez pętle. Jęsli nie określimy tej wartość to pętla zwróci wartość <code>nil</code>.</p>
    <p>Pętla <code>do</code>.</p>
    <pre><code>(do ((zmienna1 wartość-początkowa step)
     (zmienna2 wartość-początkowa step))
    (warunek-zakończenia wartość-zwracan)
  wyrażenia
  ...)</code></pre>
    <p>Pętla <code>do</code> może iterować po kilku zmiennych. Dla każdej z nich określa się wartość początkową oraz wyrażenie <code>step</code>, które zostanie wywołane po każdej iteracji. Zakończenie pętli następuje wtedy, gdy zostanie spełnony warunek. Pętla zwróci określoną wartość.</p>
    <pre><code>(do ((i 0 (incf i))
     (j 10 (decf j)))
    ((zerop j) 'done)
    (print (+ i j)))</code></pre>
    <p>Powyższy kod iteruje po dwóch zmiennych, z których jedna jest zwiększana w każdej iteracji a druga zmniejszana. Pętla zostanie przerwana jesli zmienna <code>j</code> dojdzie do zera. Zwrócona zostanie wtedy wartość 'done. W każdej iteracji pętli zostanie wyświetlona suma dwóch liczników "i" i "j" (zostanie wyświetlone 10 razy liczba 10). Makra <code>incf i decf</code> odpowiednio zwiększają i zmnieją wartość swojego argumentu o 1.</p>
    <p>Pętla <code>loop</code> w postaci prostej przyjmuje postać:</p>
    <pre><code>(loop
  wyrażenie
  ...)</code></pre>
    <p>jest to pętla nieskończona.</p>
    <pre><code>(let ((i 10))
  (loop
   (when (zerop i) (return))
   (print (decf i))))
9
8
7
6
5
4
3
2
1
0
=> NIL</code></pre>
    <p>Za pomocą makra <code>return</code> można przerwać pętle.</p>
    <p>Istnieje pożliwość zastosowania rozszeżonej pętli <code>loop</code>. Poniżej przedstawiono jej możliwości.</p>
    <p>Aby iterować po kolejnych liczbach od 1 do n:</p>
    <pre><code>(loop
  for i from 1 to n)</code></pre>
    <p>Aby iterować po liczbach od 0 do n-1:</p>
    <pre><code>(loop
  for i from 1 below n)</code></pre>
    <p>Aby iterować po liście wartości:</p>
    <pre><code>(loop
  for element in (list 1 2 3 4 5 6) do wyrażenie ...)</code></pre>
    <p>Wyrażenie <code>do</code> określa co ma zostać wywołane w każdej iteracji.</p>
    <p>Aby iterować po tablicy, wektorze lub ciągu znaków :</p>
    <pre><code>(loop
  for c across string collect c)</code></pre>
    <p><code>collect c</code> tworzy listę z kolejnych wartości <code>c</code>.</p>
    <p>Aby iterować po kilku listach używamy wyrażenie <code>and</code>:</p>
    <pre><code>(loop
  for i in list1 and j in list2 collect (list i j))</code></pre>
    <p>Aby iterować po <a href="#h55">tablicy asocjacyjnej</a> używamu notacji kropki:</p>
    <pre><code>(loop
  for (k . v) in (pairlis '(a b c) '(1 2 3)) do
  (format t "~a => ~a~%" k v))
C => 3
B => 2
A => 1</code></pre>
    <p>Fukcje <code>format</code> omówiono <a href="#h8">tutaj</a>.</p>
    <p>Aby iterować po parach <code>cons</code> używamy wyrażenia <code>on</code>:</p>
    <pre><code>(loop
  for para on (list 1 2 3 4 5 6) do
  (format t "~a => ~a~%" (car para) (cadr para)))
1 => 2
2 => 3
3 => 4
4 => 5
5 => 6
6 => NIL</code></pre>
    <p>Funkcja <code>cadr</code> zwraca drugi element listy. Funkcje <code>format</code> omówiono w <a href="#h8">sekcji</a>.</p>
    <p>Aby iterować po kluczach <a href="#h57">tablicy haszującej</a> można użyć:</p>
    <pre><code>(loop 
  for k being the hash-keys of tablica-haszująca collect k)</code></pre>
    <p>Aby iterować po wartościach tablicy hashującej należy użyć poniższego kodu:</p>
    <pre><code>(loop
  for v being the hash-values of tablica-haszująca collect v)</code></pre>
    <p>Poniższy kod wyświetla wszytkie klucze i wartości tablicy hashującej.</p>
    <pre><code>(loop
  for k being the hash-keys of tablica-haszująca do
  (format t "~a => ~a~%" k (gethash k tablica-haszująca)))</code></pre>
    <p>Tworzenie listy jeśli warunek jest spełniony:</p>
    <pre><code>(loop
  for i in (list 0 1 2 3 4 5 6)
  when (evenp i) collect i)
=> (0 2 4 6)</code></pre>
    <p>Powyższy kod utworzy listę wszystkich liczb parzystych (funkcja <code>evenp</code>).</p>
    <p>Wykonywanie operacji jeśli warunek jest spełniony.</p>
    <pre><code>(loop
  for i from 0 while (&lt; i 10) collect i)
=> (0 1 2 3 4 5 6 7 8 9)</code></pre>
    <p>W powyższym kodzie za pomocą <code>collect</code> tworzymy listę od 0 do 9.</p>
    <header id="h4">Operacje Logiczne</header>
    <p>Wartość prawdy zapisywana jest jako <code>t</code>. Natomiast wartość fałszu jako pusta lista <code>()</code> lub wartość <code>nil</code>.</p>
    <p>Instrukcja <code>and</code> (jest to specjalny operator).</p>
    <pre><code>(and wyrażenie1 wyrażenie2 wyrażenie3 ...)</code></pre>
    <p>Powyższy kod zwróci wartość prawdy (<code>t</code>) jeśli wszystkie wyrażenia zwrócą wartość prawdy. W przypadku kiedy którekolwiek wyrażenie zwróci wartość <code>nil</code>.</p>
    <p>Instrukcja <code>or</code> (jest to specjalny operator).</p>
    <pre><code>(or wyrażenie1 wyrażenie2 wyrażenie3 ...)</code></pre>
    <p>Powyższy kod zwróci wartość prawdy jeśli którekolwiek z wyrażeń zwróci wartość prawdy. Jęśli to nastąpi następne wyrażenia nie będą przetwarzane.</p>
    <p>Instrukcja <code>not</code>.</p>
    <pre><code>(not wyrażenie)</code></pre>
    <p>Instrukcja <code>not</code> zwróci wartość prawdy jęsli wyrażenie zwróci wartość fałszu, natomiast wartość fałszu jeśli wyrażenie zwróci wartość prawdy.</p>
    <header id="h5">Typy danych</header>
    <header class="h3" id="h51">Symbole</header>
    <p>Symbole definujemy za pomocą funkcji <code>quote</code> lub specjalnego znaku apostrofu '.</p>
    <pre><code>(setq x (quote foo))
x
=> FOO
(setq y 'foo)
y
=> FOO</code></pre>
    <p>Symbole zapisywane są dużymi literami, bez zależności od tego jak zostały zdefiniowane.</p>
    <header class="h3" id="h52">Listy</header>
    <p>Podstawowym typem danych w Lispie są listy, listy składają się z par. Aby utworzyć pare używamy konstrukcji <code>cons</code>. Pierwszy element pary jest to bierzący element, listy natomiast drugi element listy jest to następna para tzn. reszta listy. Ostani element listy musi być listą pustą <code>()</code> lub <code>nil</code>.</p>
    <pre><code>(cons 1 2)
=> (1 . 2)</code></pre>
    <p>Aby utworzyć listę należy użyć konstrukcji:</p>
    <pre><code>(cons 1 (cons 2 (cons 3 nil)))
=> (1 2 3)
'(1 . (2 . (3 . nil)))
=> (1 2 3)</code></pre>
    <p>Lub użyć funkcji list lub cytowania listy - znaku apostrofu '.</p>
    <pre><code>(list 1 2 3 4)
=> (1 2 3 4)

'(1 2 3 4)
=> (1 2 3 4)</code></pre>
    <p>Aby odwołać się do elementów listy należy używamy funkcji <code>car</code> lub <code>first</code> która zwraca pierwszy element listy lub <code>cdr</code> lub <code>rest</code> zwracająca reszte listy.</p>
    <pre><code>(car '(1 2 3 4 5))
=> 1
(cdr '(1 2 3 4 5))
=> (2 3 4 5)</code></pre>
    <p>Można też użyć jednej z funkcji: <code>second, third, fourth, fifth, sixth, seventh, eighth, ninth, tenth</code>, które zwracają odpowiednio elementy od 2 do 10 lub użyć funkcji <code>(nth numer lista)</code>, która zwraca n-ty element listy. Trzeba pamietać że listy przetwarzane są sekwencyjnie.</p>
    <p>Aby skopiwać listę użwamy funcji <code>copy-list</code>.</p>
    <pre><code>(copy-list lista)</code></pre>
    <p>Funkcja <code>null</code> zwraca wartość fałszu jeśli argument jest nie jest listą.</p>
    <p>Funkcja <code>listp</code> zwraca prawdę jeśli argument jest listą.</p>
    <p>Funkcja <code>endp</code> zwraca wartość prawdy jeśli jest to koniec listy.</p>
    <h4 id="h521">Uzycie listy jak stosu</h4>
    <p>Za pomocą funkcji  <code>push</code> oraz <code>pop</code> możemy odpowiedznio odkłożyć i zdjąć elementy ze stosu (listy).</p>
    <pre><code>(setq stos nil)
(push 10 stos)
(push 20 stos)
(push 30 stos)
(pop stos)
stos
=> (20 10)</code></pre>
    <header class="h3" id="h53">Wektory</header>
    <p>Wektory tworzymy za pomocą funkcji <code>vector</code>, znaku # lub funkcji <code>make-sequance</code>. Wektory są indeksowane od zera.</p>
    <pre><code>(vector 1 2 3 4)
=> #(1 2 3 4)
#(1 2 3 4)
=> #(1 2 3 4)
(make-sequence 'vector 10 :initial-element 0)
=> #(0 0 0 0 0 0 0 0 0 0)</code></pre>
    <p>Funkcja <code>make-sequence</code> przyjmuje argument kluczowy (keyword argument) <code>:initial-element</code>, którego wartością jest element jakim zostanie wypełniony wektor.</p>
    <p>Aby odwołać się do elementów wektora używamy funkcji <code>aref</code> lub <code>elt</code>, aby przypisać jakąć wartość do elementów wektora używamy funkcji <code>setf</code> która działa jak <code>setq</code>, z tym że jako drugi argument przyjmuje miejsce gdzie zostanie zapisana wartość przekazana jako drugi argument.</p>
    <pre><code>(setq v #(1 2 3 4))
(setf (elt v 1) 10)
v
=> #(1 10 3 4)</code></pre>
    <header class="h3" id="h54">Ciagi znaków</header>
    <p>Ciągi znaków zapisujemy używając podwójnego cudzysłowu &#34; lub funkcji <code>make-string</code>.</p>
    <pre><code>"jakiś napis"
=> "jakiś napis"
(make-string 10)
=> ""</code></pre>
    <p>Aby odwołać się do elementu ciągu należy użyć funkcji <code>elt</code> lub <code>aref</code> jak w przypadku wektorów.</p>
    <p>Aby przekonwertować ciąg znaków na liczbę można użyć funkcji <code>parse-integer</code>.</p>
    <pre><code>(parse-integer "256")
=> 256</code></pre>
    <p>Funkcja <code>char-code</code> zwraca kod ASCII dla danego znaku.</p>
    <pre><code>(char-code #\a)
=> 97</code></pre>
    <p>Poszczególene znaki zapisujemy stosując znaki #\</p>
    <p>Funkcja <code>code-char</code> zwraca znak dla danej wartości liczbowej.</p>
    <pre><code>(code-char 100)
=> #\d</code></pre>
    <header class="h3" id="h55">Tablice</header>
    <p>Aby utworzyć tablicę nalerzy uzyć funkcji <code>make-array</code>.</p>
    <pre><code>(setq array (make-array '(4 4) :initial-element 0))
=> #2A((0 0 0 0) (0 0 0 0) (0 0 0 0) (0 0 0 0))</code></pre>
    <p>Powyższy kod utworzy talicę (macierz) cztery na cztery.</p>
    <p>Aby odwołać się do elementów tablicy (macierzy) należy użyć funkcji <code>aref</code>.</p>
    <pre><code>(setf (aref array 1 1) 1)
array
=> #2A((0 0 0 0) (0 1 0 0) (0 0 0 0) (0 0 0 0))</code></pre>
    <p>Tablice mogą mieć zmieną liczbe elementów, aby utworzyć taką tablicę należy użyć parametru kluczowego <code>:adjustable</code> z wartością t.</p>
    <pre><code>(setq aa (make-array 10 :adjustable t :fill-pointer 0))</code></pre>
    <p>Aby dodać element do takiej tablicy należy użyć funkcji <code>(vector-push-extend wartość tablica)</code>.</p>
    <header class="h3" id="h56">Tablice asocjacyjne (alisty)</header>
    <p>Listy asocjacyjne składają się z par klucz wartość.</p>
    <pre><code>(setq alist '((a . 1) (b . 2) (c . 3)))</code></pre>
    <p>Funkcja <code>assoc</code> zwraca pare klucz wartość aby odwołać się do wartości należy użyć funkcji <code>cdr</code>.</p>
    <pre><code>(cdr (assoc 'a alist))
=> 1</code></pre>
    <p>Dodawanie elementów do list asocjacyjnej.</p>
    <pre><code>(setf alist (acons klucz wartość alist))</code></pre>
    <p>Aby utworzyć talbicę asocjacyną można użyć funkcji <code>pairlis</code>.</p>
    <pre><code>(setq alist (pairlis '(a b c) '(1 2 3)))
=> ((a . 1) (b . 2) (c . 3))</code></pre>
    <p>Aby można było użyć łańcuchów znaków jako kluczy należy funkcji <code>assoc</code> przekazać parametr kluczowy <code>:test</code> z wartością #'equal. Funkcja <code>asooc</code> standardowo do porównań używa funkcji eq.</p>
    <header class="h3" id="h57">Listy własciwości (Plisty)</header>
    <p>Listy właściwości są zapisywane za pomocą słów kluczowych.</p>
    <pre><code>(setq plist '(:a 1 :b 2 :c 3))</code></pre>
    <p>Aby odwołać się do elementów listy właściwości używamy funkcji <code>getf</code>.</p>
    <pre><code>(setf (getf plist :a) 10)</code></pre>
    <p>Aby usunąć element z listy używamy funkcji <code>remf</code>.</p>
    <pre><code>(remf plist :b)</code></pre>
    <header class="h3" id="h58">Tablice haszujące</header>
    <p>Są podobne do tablic asocjacyjnych tylko są bardziej efektywne. Aby utworzyć tablicę haszującą należy użyć funkcji <code>make-hash-table</code>.</p>
    <pre><code>(setq hash (make-hash-table :test #'equal))</code></pre>
    <p>Funkcja <code>make-hash-table</code> przyjmuje dodatkowy parametr kluczowy test, za pomocą którego sprawdzane będą klucze, użycie funkcji <code>#'equal</code> umożliwi użycie napisów jako kluczy.</p>
    <p>Aby odwołać się do w tablicy używamy funkcji <code>gethash</code>.</p>
    <pre><code>(setf (gethash 'foo hash) "Napis")
(setf (gethash 'bar hash) "text")
(gethash 'bar hash)
=> "text"</code></pre>
    <p>Aby usunąć element z listy nalezy użyć funkcji <code>remhash</code>.</p>
    <pre><code>(remhash 'foo hash)</code></pre>
    <p>Wyczyszczenie całej tablicy następuje po wywołaniu funkcji <code>(clrhash tablica)</code>.</p>
    <p>Funkcja <code>(hash-table-count tablica)</code> zwraca liczbę wpisów w tablicy haszującej.</p>
    <header class="h3" id="h59">Sekwencje</header>
    <p>Sekwencja jest to grupa typów danych takich jak listy, wektory, tablice, ciągi znaków.</p>
    <p>Poniżej przedstawiono funkcje działające na sekwencjach:</p>
    <p><code>make-sequance</code></p>
    <pre><code>(make-sequance typ rozmiar)</code></pre>
    <p>Funkcja tworzy sewencje o podanym typie (<code>list, array, string, vector</code>) o danym rozmiarze. Przyczym można tworzyć tylko jednowymiarowe tablice.</p>
    <p><code>concatenate</code></p>
    <pre><code>(concatenate typ sekwecja sekwencja)</code></pre>
    <p>Funkcja łączy dwie sekwecje w jedną, typ może przyjmować jedną z wartości: <code>list, vector, string</code>.</p>
    <p><code>elt</code></p>
    <pre><code>(elt sekwecja n)</code></pre>
    <p>Funkcja zwraca n-ty element sekwecji.</p>
    <p><code>aref</code></p>
    <pre><code>(aref sekwecja n)</code></pre>
    <p>Działa tak jak <code>elt</code> z tym że może być używana dla tablic wielowymiarowych.</p>
    <p><code>subseq</code></p>
    <pre><code>(subseq sekwencja pocątek koniec)</code></pre>
    <p>Funkcja zwraca sekwecję zaczynającą się od elementu początek a kończącą się na wartości koniec.</p>
    <p><code>copy-seq</code></p>
    <pre><code>(copy-seq sekwencja)</code></pre>
    <p>Zwraca kopie sekwencji.</p>
    <p><code>reverse</code></p>
    <pre><code>(reverse sekwencja)</code></pre>
    <p>Odwraca kolejność elementów w sekwecji.</p>
    <p><code>nreverse</code></p>
    <pre><code>(nreverse sekwencja)</code></pre>
    <p>Tak jak <code>reverse</code> z tym że może modyfikować swój argument (jest destrukcyjna).</p>
    <p><code>length</code></p>
    <pre><code>(length sekwencja)</code></pre>
    <p>Zwraca liczbę elementów w sekwencji.</p>
    <p><code>count</code></p>
    <pre><code>(count 3 '(2 3 4 5 2 3))</code></pre>
    <p>Funcja zwraca liczbę elementów występujących w sekwencji, w tym przypadku 2.</p>
    <p><code>count-if</code></p>
    <pre><code>(count-if #'oddp '(1 2 3 4))</code></pre>
    <p>Funkcja zlicza ile razy funkcja przekazana jako drugi parametr zwróci wartość <code>t</code> czyli prawdę.</p>
    <p><code>count-if-not</code></p>
    <pre><code>(count-if-not #'funkcja sekwencja)</code></pre>
    <p>Odwrotna wersja funkcji <code>count-if</code>.</p>
    <p><code>remove</code></p>
    <pre><code>(remove element sekwencja)</code></pre>
    <p>Funkcja usuwa wszystkie wystąpienia danego elementu z sekwencji.</p>
    <p><code>remove-if</code></p>
    <pre><code>(remove-if #'funkcja sekwencja)</code></pre>
    <p>Usuwa wszystkie elementy dla których podana funkcja zwróci wartość prawdy (<code>t</code>).</p>
    <p><code>remove-if-not</code></p>
    <pre><code>(remove-if-not #'funkcja sekwencja)</code></pre>
    <p>Odwrotna wersja funkcji <code>remove-if</code>.</p>
    <p><code>substitute</code></p>
    <pre><code>(substitute zastąpiony zastępowany sekwencja)</code></pre>
    <p>Funkcja zastępuje każdy element zastąpiny zastępownym.</p>
    <p><code>substitute-if</code></p>
    <pre><code>(substitute-if zastępowany #'funkcja sekwencja)</code></pre>
    <p>Zastępuje wszystkie wystąpienia elementu <code>zastępowany</code> dla których <code>#'funkcja</code> zwróci wartość prawdy.</p>
    <p><code>substitute-if-not</code></p>
    <pre><code>(substitute-if-not element #'funkcja sekwencja</code></pre>
    <p>Odwrotan wesja fukcji <code>substitute-if</code>.</p>
    <p><code>remove-duplicates</code></p>
    <pre><code>(remove-duplicates sekwecja)</code></pre>
    <p>Usuwa wszystkie powtarzające się elementy z sekwencji.</p>
    <p><code>merge</code></p>
    <pre><code>(merge 'typ (1 2 3) (4 5 6) #'>)</code></pre>
    <p>Funkcja łączy dwie sekwecje o pdanym typie ustalając kolejność za pomocą funkcji przekazywanej jako czwarty parametr.</p>
    <p><code>position</code></p>
    <pre><code>(position element sekwencja)</code></pre>
    <p>Funkcja zwraca pozycje elementu w sekwencji lub wartość <code>nil</code>.</p>
    <p><code>find</code></p>
    <pre><code>(find element sekwencja)</code></pre>
    <p>Funkcja zwraca znaleziony element w sekwencji lub wartość <code>nil</code>.</p>
    <p><code>search</code></p>
    <pre><code>(search sekwecja1 sekwencja2)</code></pre>
    <p>Funcja zwraca posycje wystąpienia <code>sekwencji1</code> w <code>sekwencji2</code>.</p>
    <p><code>sort</code></p>
    <pre><code>(sort sekwencja #'>)</code></pre>
    <p>Funkcja srtuje sekwencje za pomocą funkcji przekazywanej jako drugi parametr.</p>
    <header class="h3" id="h510">Struktury</header>
    <p>Struktura jest to typ danych który zawiera pola którym można przypisać odpowiednią wartość.</p>
    <p>Aby użyć struktury należy ją najpierw zadeklarować, robimy to za pomocą makra <code>defstruct</code>.</p>
    <pre><code>(defstruct struktura pole1 pole2 pole3)</code></pre>
    <p>Makro <code>defstruct</code> automatycznie utworzy funkcje <code>make-struktura</code> tworzący nowy obiekt strukturalny (rekord) oraz funkcje odwołujące się do poszczególnych pól <code>struktura-pole1, struktura-pole2 i struktura-pole3</code>.</p>
    <pre><code>(setq foo (make-struktura :pole1 1 :pole2 2 :pole3 3))
(setf (struktura-pole1 foo) "Lorem Ipsum")
(print (struktura-pole1 foo))</code></pre>
    <p>Powyższy kod tworzy jeden rekord o nazwie <code>foo</code> następnie przypisuje polu <code>pole1</code> wartość "Lorem Ipsum", następnie wyświetla jego zawartość. Jeśli nie przypiszemy wartości pola przy tworzeniu rekordu, będzie on miał wartość <code>nil</code>.</p>
    <p>Instnieje możliwość zastosowania wartości domyślnych dla pól aby nie trzeba było określać ich przy tworzeniu rekordu.</p>
    <pre><code>(defstruct struktura
  (text "domyślny")
  (liczba 0)
  foo)</code></pre>
    <p>Istnieje możliwość tworzenia rekordów bez użycia prametrów kluczowych za pomocą zdefiniowanego konstruktora.</p>
    <pre><code>(defstruct (struktura
        (:constructor
         create-struktura (foo bar baz)))
  foo bar baz)

(setq x (create-struktura "Lorem" "Ipsum" "Dolor"))
(print (struktura-foo x))</code></pre>
    <p>Isnieje możliwość dziedziczenia tzn. że pola z struktury, która jest potomkiem zostaną przekazane od rodzica.</p>
    <pre><code>(defstruct (struktura2
        (:include struktura))
  quux)

(setq x (make-struktura2 :foo "Lorem" :quux "Amet"))
(print (struktura2-foo x))
=> "Lorem"
(print (struktura2-quux x))
=> "Amet"</code></pre>
    <p>Istnieje możliwość zdefiniowania własnej funkcji wyświetlającej rekord.</p>
    <pre><code>(defstruct (struktura
        (:print-function
         (lambda (struct stream depth)
           (format t "#&lt;struktura foo: ~a bar: ~a baz: ~a&gt;"
               (struktura-foo struct)
               (struktura-bar struct)
               (struktura-baz struct)))))
  foo bar baz)

(setq foo (make-struktura :foo "Lorem" :bar "Ipsum" :baz "Dolor"))
(print foo)
#&lt;struktura foo: Lorem bar: Ipsum baz: Dolor&gt;</code></pre>
    <header class="h3" id="h511">Objekty - <abbr title="Common Lisp Object System">CLOS</abbr></header>
    <h4 id="h5111">Klasy i objekty</h4>
    <p>Aby utworzyć nowy typ obiektu czyli klasę należy użyć makra <code>defclass</code>.</p>
    <pre><code>(defclass klasa ()
  (foo bar baz))</code></pre>
    <p>Aby znależć objekt klasy należy użyć funkcji <code>find-class</code>.</p>
    <pre><code>(find-class 'klasa)
=> #&lt;STANDARD-CLASS KLASA&gt;</code></pre>
    <p>Aby utworzyć nowy obiekt danej klasy nalezy użyć funkcji <code>make-instance</code>.</p>
    <pre><code>(setq objekt (make-instance 'klasa))</code></pre>
    <p>Aby odwołać się do poszczególnych pól obiektu mależy użyć funkcji <code>slot-value</code>.</p>
    <pre><code>(setf (slot-value objekt 'foo) "Lorem")
(setf (slot-value objekt 'bar) "Ipsum")
(setf (slot-value objekt 'baz) "Dolor")
(print (slot-value objekt 'foo))
=> "Lorem"</code></pre>
    <p>Jęśli nastąpi odwołanie do pola, za pomocą funkcji <code>slot-value</code>, zanim zostanie przypisana do niego wartość Common Lisp zgłosi błąd.</p>
    <p>Zamiast używać funkcji <code>slot-value</code> można użyć specjalnej funkcji dostępowej za pomocą parametru kluczowego <code>:accessor</code>.</p>
    <pre><code>(defclass klasa ()
  ((foo :accessor klasa-foo)))

(setq objekt (make-instance 'klasa))
(setf (klasa-foo objekt) "Lorem Ipsum")
(print (klasa-foo objekt))
=> "Lorem Ipsum"</code></pre>
    <p>Można także użyć osobnej funcji do zapisu i odczytu wartości pola za pomocą odpowiednio <code>:writer</code> i <code>:reader</code>.</p>
    <pre><code>(defclass klasa ()
  ((foo :reader klasa-get-foo :writer klasa-set-foo)))

(setq objekt (make-instance 'klasa))
(klasa-set-foo "Lorem Ipsum" objekt)
(print (klasa-get-foo objekt))
=> "Lorem Ipsum"</code></pre>
    <p>Dodatkowymi opcjami dla pól sią: <code>:documentation</code> określające dokumentacje pola. <code>:type</code> określająca typ pola (może być jeden z: <code>real, integer, fixnum, float, bignum, ratinal lub complex</code>) <code>:initform</code> określa wartość domyślną dla pola klasy.</p>
    <p>Istnieje także możliwość określenia pól statycznych tzn. takich, dla których wartość jest przypisywana dla klasy, wartość dla każdego objektu będzie taka sama. Za pomocą parametru kluczowego <code>:allocation</code> z przypisaną wartością <code>:class</code>.</p>
    <h4 id="h5112">Dziedziczenie</h4>
    <p>Tak jak w przypadku struktur klaay mogą dziedziczyć pola po swoich rodzicach.</p>
    <pre><code>(defclass klasa ()
  ((foo :accessor klasa-foo)
   (bar :accessor klasa-bar)
   (baz :accessor klasa-baz)))

(defclass klasa2 (klasa)
  ((quux :accessor klasa2-quux :initarg :quux)))

(setq objekt (make-instance 'klasa2 :quux "Lorem Ipsum"))
(setf (klasa-foo objekt) "Dolor")
(print (klasa-foo objekt))
=> "Dolor"</code></pre>
    <p>W powyższym kodzie użyto opcji dla pola o nazwie <code>:initarg</code>, dzięki której jest możliwość przypisania polu wartości przy konstruowaniu objektu za pomocą funkcji <code>make-instance</code>.</p>
    <p>Można także użyć opcji dla pola <code>:initform</code> określającą wartość domyślną dla danego pola.</p>
    <p>Istnieje możliwość dziedziczenia po kilku klasach tzw. dziedziczenie wielkorotne.</p>
    <h4 id="h5113">Funkcje ogolne (generic functions)</h4>
    <p>Funkcje ogólne defiuje się podobnie tak jak zwykłe <a href="#h6">funkcje</a> za pomocą makra <code>defgeneric</code>. Funkcje ogólne nie posiadają kodu (ciała). Funkcje ogólne są podobne do funkcji wirtualnych z języka C++.</p>
    <pre><code>(defgeneric metoda (parametr1 parametr2))</code></pre>
    <p>Funkcji ogólnej opcjionalnie można przypisać dokumentacje.</p>
    <h4 id="h5114">Metody</h4>
    <p>Metody definuje się za pomocą makra <code>defmethod</code>.</p>
    <pre><code>(defmethod metoda ((self klasa2) (value string))
  (setf (slot-value self 'quux) value))

(setq objekt (make-instance 'klasa2))
(metoda objekt "Dolor Sit Amet")
(print (klasa2-quux objekt))
=> "Dolor Sit Amet"</code></pre>
    <p>Powyższa metoda przypisuje wartość pola <code>quux</code> klasa <code>klasa2</code>.</p>
    <p>Metody mogą być "przypisane" do kilku klas na raz, jak w powyższym przypadku do klasy <code>klasa2</code> i klasy <code>string</code>.</p>
    <p>Metody <code>:before</code> i <code>:after</code> są wywoływane odpowiednio przed i wywołaniu metody. Funkcja <code>:around</code> może być wywoływana zamiast metody, jest wywoływana przed wszystkimi metodami.</p>
    <pre><code>(defmethod metoda :before ((self klasa2) (value string))
  (print "wywołanie :before metoda"))
(defmethod metoda :after ((self klasa2) (value string))
  (print "wywołanie :after metoda"))
(defmethod metoda :around ((self klasa2) (value string))
  (print "wywołanie :around metoda")
  (call-next-method self value))

(metoda objekt "Foo Bar")
"wywołanie :around metoda"
"wywołanie :before metoda"
"wywołanie :after metoda"</code></pre>
    <p>Funkcja <code>:around</code> musi wywoływać funkcję <code>call-next-method</code> aby wywołać następną metodę.</p>
    <p>Aby usunąc metodę należy użyć poniższego kodu.</p>
    <pre><code>(remove-method #'metoda (find-method #'methoda () 
                     (list (find-class 'klasa2) 
                       (find-class 'sttring))))</code></pre>
    <p>Pierwszym argumentem <code>remove-method</code> jest funkcja ogólna a drugim metoda.</p>
    <header id="h6">Funkcje</header>
    <p>Funkcje definiujemy za pomocą makra <code>defun</code>. Funkcje istnieją w odzielnej przestrzeni nazw, dzięki czemu możemy tworzyć zmienne i funkcje o takich samych nazwach.</p>
    <pre><code>(defun nazwa (parametr1 parametr2)
  "Dokumentacja dla funkcji."
  wyrażenie
  ...)
; wywołanie
(nazwa 1 2)</code></pre>
    <p>Funkcje mogą mieć parametry opcjinalne:</p>
    <pre><code>(defun nazwa (parametr &amp;optional (param2 default param2-p))
  wyrażenie
  ..)

(defun foo (a &amp;optinal (b 0))
  (format t "a:~a b:~b~%"))
(foo 1)
"a:1 b:0"
(foo 1 2)
"a:1 b:2"</code></pre>
    <p>Wartość <code>default</code>, w parametrze opcjinalnym, określa wartość jaka zostanie przypisana jesli funkcja zostanie wywołana z jednym parametrem. <code>param2-p</code> określa czy parametr został przypisany.</p>
    <p>Istnieje możliwość aby funkcje przyjmowały różną liczbę argumentów, za pomocą <code>&amp;rest</code>.</p>
    <pre><code>(defun foo (a &amp;rest rest)
  (format t "a:~a rest:~a~%" a rest))

(foo 1)
"a:1 rest:NIL"
(foo 1 2)
"a:1 rest:(2)"
(foo 1 2 3)
"a:1 rest:(2 3)"</code></pre>
    <p>Aby określić parametry kluczowe dla danej funkcji używamu <code>&amp;key</code>.</p>
    <pre><code>(defun foo (a &amp;key b (c 10 c-p))
  (format t "a:~a b:~a c:~a c-p:~a" a b c c-p))
(foo 1)
"a:1 b:nil c:10 c-p:NIL"
(foo 1 :b 20)
"a:1 b:20 c:10 c-p:NIL"
(foo 1 :b 20 :c 30)
"a:1 b :20 c:30 c-p:T"</code></pre>
    <p>Zmienna c-p określa czy parametr został przypisany.</p>
    <header class="h3" id="h61">Funkcje lokalne</header>
    <p>Funkcje lokalne tworzymy za pomocą wyrażenia <code>flet</code>.</p>
    <pre><code>(flet ((nazwa1 () wyrażenie ...)
       (nazwa2 (param) wyrażenie ...))
  wyrażenie
  ...)</code></pre>
    <p>Aby zastosować wywołania <a href="#h62">rekurenyjne</a> należy użyć wyrażenia <code>labels</code>.</p>
    <pre><code>(labels ((nazwa1 () wyrażenie ...)
         (nazwa2 (param) wyrażenie ...))
  wyrażenie
  ...)


(labels ((foo () 2)
         (bar () (foo)))
  (bar))</code></pre>
    <p>W powyższym kodzie funkcja <code>foo</code> zwraca wartość 2 funkcja <code>bar</code> wywołuje funkcję <code>foo</code>. Wewnątrz funkcji <code>labels</code> wywoływana jest funkcja <code>bar</code>.</p>
    <header class="h3" id="h62">Rekurencja</header>
    <p>Funkcja rekurencyjna to taka funkcja, w której wnętrzu następuje odwołanie do niej samej tzw. wywołanie rekurencyjne.</p>
    <p>Poniżej przedsawiono funkcje rekurencyjną obliczającą silnie.</p>
    <pre><code>(defun factorial (n)
  (if (zerop n) 1
    (* n (factorial (- n 1)))))</code></pre>
    <header class="h3" id="h63">Rekurencja ogonowa</header>
    <p>Jeżeli w funkcji wywołanie rekurenyjne występuje na końcu wyrażenia, to taka fukcja wykorzystuje tzw. rekurencje ogonową (ang. tail recusion), takie wywołanie rekurencyjne zapisane zostanie jak iteracja za pomocą instrukcji skoku, dzięki czemu funkcja nie będzie wykorzystywać stosu (stanie się bardziej efektywna).</p>
    <p>Poniżej przedsawiono funkcję obliczającą silnie z rekurencją ogonową.</p>
    <pre><code>(defun factorial (n)
  (labels ((f (n product)
          (if (zerop n) product
        (f (- n 1) (* product n))))) ; wywołanie rekurencyjne ogonowe
      (f n 1)))</code></pre>
    <header class="h3" id="h64">Funkcje anonimowe</header>
    <p>Funckje anonimowe zapisujemy za pomocą lambda abstrackji.</p>
    <pre><code>(lambda (x)
  (* x x))</code></pre>
    <p>Aby wowołać funkcje anonimową używamy funkcji funcall lub apply.</p>
    <pre><code>(funcall (lambda (x) (* x x)) 10)
=> 100

(setq square (lambda (x) (* x x)))
(funcall square 20)
=> 400

(apply #'+ (list 1 2 3 4))
=> 10</code></pre>
    <p>Funkcja apply przyjmuje jako drugi argument liste parametrów. Przekazując funkcję jako parametr do innej funkcji należy ją cytować za pomocą znaków #'.
      Powodem jest to że język Common Lisp ma dwie przestrzenie nazw i w ten sposub system odróżnia funkcje od zmiennych.</p>
    <p>W języku Scheme z powodu tego że jest tylko jedna przestrzeń można utworzyć taki kod:</p>
    <pre><code>
((lambda (x) (display x) (newline)) 10)
=> 10</code></pre>
    <p>Jest to anonimowa funkcja jako pierwszy argument. W języku Common Lisp można także użyć alternatywnego zapisu:</p>
    <pre><code>
(funcall #'(lambda (x) (format t "~S" x)) 10)
=> 10</code></pre>
    <header class="h3" id="h65">Fukcje wyrzego rzędu</header>
    <p>Funkcje mogą być przekazywane jako parametry, mogą też być zwracane przez funkcję.</p>
    <pre><code>(defun complement (fun)
  (lambda (x)
    (not (funcall fun x))))</code></pre>
    <p>Funkcja ta jest zdefiniowana w standardze Common Lisp.</p>
    <p>Aby przekazać funkcję jako parametr nalerzy użyć cytowania funkcji - znaków przed nazwą funcji #'.</p>
    <pre><code>(mapcar #'sqrt '(1 2 3 4))</code></pre>
    <header class="h3" id="h66">Funkcje mapujące</header>
    <p>Funkcje mapujących używamy jeśli chcemy iterować po jakiejś liście lub sekwencji i przypisać do każdego elementu wartość zwracaną przez funkcje.</p>
    <pre><code>(defun square (x)
  (* x x))

(mapcar #'square '(1 2 3 4 5 6))
=> (1 4 9 16 25 36)

(mapcar (lambda (x) (* x x)) '(1 2 3 4 5))
=> (1 4 9 16 25)</code></pre>
    <p>Ze względu że Common Lips ma dwie przestrzenie nazw, można uruchomić poniższy kod:</p>
    <pre><code>(let ((square '(1 2 3 4 5 6)))
      (mapcar #'square square))</code></pre>
    <p>Funkcje mapujące:</p>
    <p>Są to funkcje które operują na listach i przyjmują funkjce jako argument.</p>
    <p><code>mapcar</code></p>
    <pre><code>(mapcar #'funkcja lista1 lista2 ...)</code></pre>
    <p>Funkcja przekazywana jako drugi parametr musi mieć tyle argumentów ile przekazano list.</p>
    <p><code>mapcan</code></p>
    <pre><code>(mapcan #'funkcja lista2 lista2 ...)</code></pre>
    <p>Destrukcyjna wersja <code>mapcar</code>.</p>
    <p><code>map</code></p>
    <pre><code>(map typ funkcja lista1 lista2 ...)</code></pre>
    <p>Funkcja działa tak jak mapcar z tym że paramter <code>typ</code> może przyjmować wartości np.: list, array, vector, string.</p>
    <p><code>maplist</code></p>
    <pre><code>(maplist #'funkcja lista1 lista2 ...)</code></pre>
    <p>Funkcja działa tak jak <code>mapcar</code> z tym że do funkcji przekazywane są pary zamiast elementów list.</p>
    <p><code>maphash</code></p>
    <pre><code>(maphash #'(lambda (k v) (format t "~a => ~a~%" k v)) hash-table)</code></pre>
    <p>Funkcja iteruje po elementach talibcy haszującej, zwraca wartość nil.</p>
    <pre><code>(defun maph (fun hash)
  (let (result)
    (maphash (lambda (k v) (push (funcall fun k v) result)) hash)
    (nreverse result)))</code></pre>
    <p>Powyższa funkcja zwraca listę utworzoną z kolejnych wywołań funkcji <code>fun</code> do elementów tablicy haszującej.</p>
    <header class="h3" id="h67">Domkniecia leksykalne</header>
    <pre><code>(let ((x 0))
  (defun foo ()
    (setq x (incf x))
    x))

(foo)
=> 1
(foo)
=> 2
(foo)
=> 3</code></pre>
    <p>W powyższej funkcji zmienna x jest zamknięta wewnątrz funkcji <code>foo</code> (funkcja może korzystać ze zmiennej x) chociaż zmienna jest już niedostępna poza konstrukcjią <code>let</code>.</p>
    <header id="h7">Makra</header>
    <p>Makra w odróżnieniu od funkcji nie ewaluują swoich argumntów, zamiast tego do makra przekazywane jest całe s-wyrażenia które nastepnie zostaną przetworzone w celu utworzenia innego s-wyrażenia. Przy wywoływaniu makra początkowe wyrażenie przekazywane jest do makra, które po przetworzeniu zwraca nowe wyrażenie. Takie wyrażenie następnie zostaje wywołane. Makro definujemy za pomocą makra <code>defmacro</code>. W odróżnieniu od funkcji makr nie możemy przekazyać jako parametry do innych funkcji.</p>
    <pre><code>(defmacro def (args &amp;body body)
  `(defun ,args ,@body))</code></pre>
    <p>Powyższy kod tworzy makro tworzące nową funkcje, używa ono znacznika <code>&amp;body</code> dla określenia ciała definjowanej funkcji. Powyższe makro używa składni tylnego apostrofu (backquote) `. Tylny apostrof działa podobnie do normalnego apostrofu, który cytuje swój argument. Wszystkie wyrażenia poprzedzone przecinkiem zostaną wywołane, z wyrażeń poprzedzonych znakiem przecinka i małpy <code>,@</code> zostaną usunięte nawiasy np.: <code>`(print 1 2 3 ,(+ 1 2 (* 3 4)))</code> zostanie ewoluowane przez interpreter lispa jako <code>(PRINT 1 2 3 15)</code>.</p>
    <p>Poniżej przedstawiono makro definiujące pętle while znaną z innych języków programowania.</p>
    <pre><code>(defmacro while (test &amp;body body)
  `(do ()
       ((not ,test))
       ,@body))

; użycie powyższego makra
(let ((x 0))
  (while (&lt; x 10)
    (print x)
    (setq x (1+ x))))

0
1
2
3
4
5
6
7
8
9
=> NIL</code></pre>
    <p>Poniższa makro definuje pętle for.</p>
    <pre><code>(defmacro for ((var start stop &amp;optional return-value) &amp;body body)
  (let ((gstop (gensym)))
    `(progn
      (do ((,var ,start (1+ ,var))
        (,gstop ,stop))
     ((> ,var ,gstop) ,return-value)
       ,@body))))

(for (i 10 20) (print i))
1 
2 
3 
4 
5 
6 
7 
8 
9 
10 
=> NIL

(reverse (let (result)
       (for (i 1 10 result)
        (push i result))))
=> (1 2 3 4 5 6 7 8 9 10)</code></pre>
    <p>Powyższe makro używa funkcji <code>gensym</code>, która generuje unikalną nazwę dla zmiennej, stosuje się to z powodu tego, że wewnątrz pętli <code>for</code> użytkownik może zdefiniować taką samą zmienną jaką użyliśmy wewnąrz makra, co doprowadziłoby do błędnego działania. Znacznik <code>&amp;optional</code> definiuje argument opcjionalny tak jak w przypadku funkcji.</p>
    <p>Za pomocą funkcji <code>macroexpand</code> można zobaczyć jak wygląda wygenerowany przez makro kod. Jest to przydatne w czasie debugowania makr. Funkcja <code>macroexpand</code> generuje kod rekurencyjnie aż do napotkania tylko funkcji. Aby wyświetlić tylko jeden poziom makra należy użyć funkcji <code>macroexpand-1</code>.</p>
    <pre><code>(macroexpand '(for (i 10 20) (print i)))
(BLOCK NIL
 (LET ((I 10) (#:G8442 20))
  (TAGBODY #:G8443 (IF (> I #:G8442) (GO #:G8444)) (PRINT I)
   (PSETQ I (1+ I)) (GO #:G8443) #:G8444 (RETURN-FROM NIL (PROGN)))))
=> T
(macroexpand-1 '(for (i 10 20) (print i)))
(DO ((I 10 (1+ I)) (#:G8445 20)) ((> I #:G8445)) (PRINT I))
=> T</code></pre>
    <p>Nazwa zmiennej <code>#:G8445</code> zystała wygenerowana przez funkcje <code>gensym</code>.</p>
    <header id="h8">Formatowanie tekstu - funkcja <code>format</code></header>
    <p>Funkcja <code>format</code> działa podobnie do funkcji <code>prinf</code> języka C. Pierwszy prametr przyjmuje wartość <code>nil, t</code> lub strumień, jeśli zostanie przekazana wartość <code>nil</code> wynikowy ciąg znaków zostanie zwrócony przez funkcje <code>format</code> jeśli przekazana zostanie wartość <code>t</code> wynikowy ciąg znaków zostanie wypisany na standardowe wyjście, może być także przekazany <a href="#h9">strumień</a> wyjściowy. Drugim parametr musi być ciąg znaków zawierający odpowiednie znaczniki (poprzdzone znakiem tyldy ~). Kolejne parametry zostaną wstawione w odpowiednie miejca w ciągu znaków.</p>
    <p>Poniżej przedstawiono listę znaczników (wielkość liter nie ma znaczenia):</p>
    <p><code>~C</code> - wyświetla znak</p>
    <p><code>~R</code> - słowna reprezentacja liczby (w języku angielskim)</p>
    <p><code>~@R</code> - słowna reprezentacja rzymska</p>
    <p><code>~A</code> - reprezentacja jako ciąg znaków</p>
    <p><code>~S</code> - reprezentacja jako ciąg znaków który może być wczytany za pomocą funkcji <code>read</code></p>
    <p><code>~(znaczniki~)</code> - wyświetla parametr małymi literami</p>
    <p><code>~:@(znaczniki~)</code> - wyświetla parametr dużymi literami</p>
    <p><code>~@(znaczniki~)</code> - pierwszy znak zostanie wyświetlony dużymi titerami</p>
    <p><code>~:(znaczniki~)</code> - każde słowo wielką literą</p>
    <p><code>~%</code> - nowa linia</p>
    <p><code>~5%</code> - 5 nowych lini</p>
    <p><code>~~</code> - znak tyldy</p>
    <p><code>~D</code> - liczba dziesiętna</p>
    <p><code>~10D</code> - liczba dziesiętna wyrównana do 10</p>
    <p><code>~X</code> - liczba szestnastkowa</p>
    <p><code>~O</code> - liczba ósemkowa</p>
    <p><code>~B</code> - liczba binarna</p>
    <p><code>~F</code> - liczba float z przecinkiem</p>
    <p><code>~,5F</code> - liczba float z 5 miejscami po przecinku</p>
    <p><code>~{znaczkiki~}</code> - iteracja - parametr musi być listą</p>
    <pre><code>(format t "~{~a ~}~%" (list 1 2 3 4 5))
1 2 3 4 5 
=> NIL</code></pre>
    <p><code>~@{znaczniki~}</code> - iteracja - przetwarza parametry jak listę</p>
    <pre><code>(format t "~{~a ~}~%" 1 2 3 4 5)
1 2 3 4 5 
=> NIL</code></pre>
    <p><code>~[forma1~;forma2~;..~;N~]</code> - parametr wybiera forme</p>
    <pre><code>(format t "~[zero~;jeden~;dwa~]~%" 1)
"jeden"
=> NIL</code></pre>
    <p><code>~:[forma-fałsz~;forma-prawda~]</code> - wybiera formę w zalężności czy parametr przyjmuje wartość <code>t</code> lub <code>nil</code></p>
    <pre><code>(let ((x 10))
  (format nil "~:[fałsz~;prawda~]" (zerop x)))
=> "fałsz"</code></pre>
    <p><code>~*</code> - omija jeden parametr</p>
    <p><code>~:*</code> - cofa się o jeden parametr (przetwarza jeden paramatr dwa razy)</p>
    <p><code>V</code> - wstawia wartość parametru</p>
    <pre><code>(format nil "~V%" 5)
=> "




"</code></pre>
    <header id="h9">Strumienie - osluga wejscia/wyjscia</header>
    <p>Aby otworzyć plik należy użyć funkcji <code>open</code>.</p>
    <pre><code>(setq uchwyt (open "nazwa-pliku" :direction :output))</code></pre>
    <p>parametr kluczowy <code>:direction</code> może przyjmować jedną z dwóch wartości <code>:input</code> lub <code>output</code> dla których funkcja odpowiednio otwiera plik wejściowy (z którego można czytać) i wyjściowy (do którego można zapisywać).</p>
    <p>Funkcji <code>open</code> można przekazać parametr kluczowy <code>:if-exist</code> któremu można przekazać wartość <code>:supersede</code> - zastępującą zawartość, <code>:append</code> - dodająca zawartość na końcu pliku.</p>
    <p>Za pomocą funkcji <code>read</code>, <code>read-line</code>, <code>read-char</code> i <code>write-byte</code> można odpowiednio przeczytać wyrażenie lispowe ze strumienia, przeczytać linie, przeczytać pojedynczy znak oraz przeczyać bajt danych. Funkcje przyjmują jako drugi opcjionalny paramer strumień wejściowy.</p>
    <p>Analogicznie za pomocą funkcji <code>write</code>, <code>write-line</code>, <code>write-char</code> i <code>write-byte</code> można zapisać wyrażenie do strumienia, zapisać linie, zapisać znak oraz zapisać bajt danych. Funkcja przyjmuje jako drugi opcjionalny parametr strumień wyjściowy. Można użyć także funkcji <code>print</code>.</p>
    <pre><code>(let ((file (open "plik" :direction :input)))
  (write-line (read-line file))
  (close file))</code></pre>
    <p>Po zakończeniu przetwarzania strumienia należy wywołać fukcję <code>close</code> która zamyka strumień. Strumienie mogą być buforowane, dlatego zapis na dysk może nastąpić dopiero po zamknięciu strumienia.</p>
    <p>Funkcja <code>listen</code> sprawdza czy jest jakiś znak do odczytania ze strumienia.</p>
    <p>Makro <code>with-open-file</code> zamyka plik automatycznie (także gdy nastąpi błąd).</p>
    <pre><code>(with-open-file (file "plik" :direction :input)
  (write-line (read-line file)))</code></pre>
    <p>Poniżej przedstawiono funkcję która zwraca listę lini z pliku.</p>
    <pre><code>(defun read-lines (filename)
  "Function read file and return list of lines."
  (with-open-file (file filename :direction :input)
          (loop while (listen file)
            collect (read-line file))))</code></pre>
    <p>Funkcja <code>file-length</code> zwraca wielkość pliku.</p>
    <p>Funkcja <code>delete-file</code> usuwa plik.</p>
    <p>Funkcja <code>rename-file</code> zmienia nazwę pliku.</p>
    <pre><code>(rename-file "old-name" "new-name")</code></pre>
    <p>Strumienie w pamięci.</p>
    <p>Za pomocą makra <code>with-input-from-string</code> można utworzyć strumień z ciągu znaków.</p>
    <pre><code>(with-input-from-string (stream "\"Lorem Ipsum Dolor Sit Amet\"")
            (write (read stream)))
"Lorem Ipsum Dolor Sit Amet"
=> "Lorem Ipsum Dolor Sit Amet"</code></pre>
    <p>Za pomocą makra <code>with-output-to-string</code> można zapisywać łańcuchy znaków do strumienia.</p>
    <pre><code>(with-output-to-string (stream)
                       (princ "Lorem Ipsum Dolor Sit Amet" stream))
=> "Lorem Ipsum Dolor Sit Amet"</code></pre>
    <header id="h10">Obsluga bledow</header>
    <p>Za pomocą funkcji <code>unwind-protect</code> można wywołać określony kod nawet w przypadku jeśli wystąpił błąd.</p>
    <pre><code>(let (file)
  (unwind-protect
      (progn
    (setq file (open "file" :direction :input))
    (loop while (listen file) do
          (write-line (read-line file))))
    (when file (close file))))</code></pre>
    <p>Makro <code>with-open-file</code> jest zdefinowane właśnie za pomocą <code>unwind-protect</code>.</p>
    <p>Błąd można prosto zasygnalizować za pomocą funkcji <code>error</code>. Błąd w programie przerywa jego działanie. Jeśli kożystamy z interpretera Lispu w czase wystąpienia błędu nastąpi wejście do Debugera.</p>
    <pre><code>(error "Wystąpił błąd w programie!")</code></pre>
    <p>Istnieje także możliwość defiowania własnych błędów (ang. conditions) za pomocą makra <code>define-condition</code>. Błędy działają podobnie do klas, istnieje możliwość dziedziczenia. Wszystkie defiowane błędy powinny dziedziczyć po <code>error</code>. Błędy działają podobnie do wyjątków w takich językach jak C++, Java czy Python.</p>
    <pre><code>(define-condition Foo(error)
  ((co :initarg :co :initform "Błąd Foo" :reader co))
  (:report (lambda (condition stream)
         (format stream "Nastąpił błąd: ~@(~A~)." (co condition))))
  (:documentation "Podstawowy Błąd Foo"))</code></pre>
    <p>W powyższym kodzie użyto znacznika <code>:report</code> na określenie funkcji za pomocą której zostanie wyświetlona informacja o błędzie. Funkcja ta przyjmuje dwa argumenty - objekt błędu oraz strumień. Znacznik <code>:documentation</code> określa dokumentacje do błędu. Pola w błędach definiujemy tak jak w przypadku klas.</p>
    <p>Aby wywołać błąd należy użyć funkcji <code>error</code> tak jak w prostym przypadku z ciągiem znaków.</p>
    <pre><code>(error 'Foo :co "Jakiś błąd w programie")
*** - Nastąpił błąd: Jakiś błąd w programie.</code></pre>
    <p>Aby użyć dziedziczenia błędów należy zastosować poniższy kod.</p>
    <pre><code>(define-condition Bar(Foo)
  ((dlaczego :initarg :dlaczego :reader dlaczego))
  (:report (lambda (condition stream)
         (format stream "Error: ~(~A~) jest błędny. Dlaczego? ~@(~A~)."
             (co condition)
             (dlaczego condition)))))

(error 'Bar :co "paskudny błąd" :dlaczego "nieznany")
*** - Error: paskudny błąd jest błędny. Dlaczego? nieznany.</code></pre>
    <p>Za pomocą makra <code>ignore-errors</code> można ignorować błędy np:</p>
    <pre><code>(ignore-errors (error "Ten błąd zostanie zignorowany."))
=> NIL</code></pre>
    <header id="h11">Pakietowanie</header>
    <p>Programy napisane w Common Lispie można zapisywać w plikach. Aby wczytać plik należy użyć funkcji <code>load</code>.</p>
    <pre><code>(load "nazwa_pliku.lisp")</code></pre>
    <p>Aby utworzyć nowy pakiet należy użyć makra <code>defpackage</code>.</p>
    <pre><code>(defpackage :Pakiet
  (:documentation "To jest dokumentacja tego Pakietu.")
  (:use :common-lisp)
  (:export :range :factorial))

(provide "Pakiet")

(defun factorial (n)
  "Return factorial of n (n!)."
  (labels ((f (n product)
          (if (zerop n) product
        (f (- n 1) (* product n)))))
      (f n 1)))

(defun range (n)
  "return list of n integers."
  (let (result)
    (dotimes (i n)
      (push i result))
    (nreverse result)))</code></pre>
    <p>Powyższy pakiet definuje dwie funkcje <code>factorial</code> oraz <code>range</code> które są zadeklarowane w pakiecie za pomocą parametru kluczowego <code>:export</code>. Znacznik <code>:use</code> określa z których pakietów będziemy korzystać. Znacznik <code>:documentation</code> określa dokumentacje pakietu. Powyższy kod należy umieścić w pliku <code>Pakiet.lisp</code></p>
    <p>Aby móc używać tak zdefinowanego pakietu należy użyć funkcji <code>require</code>, należy także określić za pomocą funkcji <code>in-package</code>, że będziemy kożystać z danego pakietu. W przypadku nie wywołania funkcji <code>in-package</code> musielibyśmy używać pełnej nazwy każdej z funkcji np. <code>Pakiet:factorial</code>.</p>
    <pre><code>(require :Pakiet)
(in-package :Pakiet)

(factorial 10)
=> 3628800

(reduce #'* (mapcar #'1+ (range 10)))
=> 3628800</code></pre>
    <p>Zamiast funkcji <code>require</code> moglibyśmy także użyć funkcji load.</p>
  </section>
  <div id="links">
    <header id="h12">Ksiazki (darmowe po angielsku)</header>
    <ul>
      <li><a href="http://www.gigamonkeys.com/book/">Peter Seibel - "Practical Common Lisp".</a></li>
      <li><a href="http://www.psg.com/~dlamkins/sl/contents.html">David B. Lamkins - "Successful Lisp: How to Understand and Use Common Lisp".</a></li>
      <li><a href="http://www-2.cs.cmu.edu/afs/cs.cmu.edu/user/dst/www/LispBook/">David S. Touretzky "Common Lisp: A Gentle Introduction to Symbolic Computation".</a></li>
      <li><a href="http://www.paulgraham.com/onlisp.html">Paul Graham - "On Lisp" - książka opisująca użycie makr.</a></li>
      <li><a href="http://www.letoverlambda.com/">Doug Hoyte - "Let over Lambda" - książka tak jak "On Lisp" opisująca makra.</a></li>
    </ul>
  </div>
  <div id="links">
    <header id="h13">Linki</header>
    <ul>
      <li><a href="http://www.lispworks.com/documentation/common-lisp.html">Dokumentacja HyperSpec</a></li>
      <li><a href="http://www.cliki.net/index">Common Lisp Wiki</a></li>
      <li><a href="http://clisp.cons.org/">Strona główna CLisp-a - wolnej implementacji Common Lispa</a></li>
      <li><a href="http://www.whoishostingthis.com/resources/common-lisp/">Lista przydatnych linków</a></li>
    </ul>
  </div>
  <footer>
    <div id="disqus_thread" style="margin: 0 20px;"></div>
    <script>
    var disqus_shortname = 'jcubic'; // required: replace example with your forum shortname
    var disqus_identifier = "lisp_tutorial";
    var disqus_url = "http://jcubic.pl/lisp_tutorial.php";
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
    </script>
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
    <? endif; ?>
    <p id="licence"><a rel="license" href="https://creativecommons.org/licenses/by-sa/2.5/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/2.5/80x15.png" /></a><br />This tutorial is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-sa/2.5/">Creative Commons Attribution-ShareAlike 2.5 Generic License</a>, Copyright &copy; <?=date('Y')?> <a href="https://jakub.jankiewicz.org">Jakub Jankiewicz</a></p>
  </footer>
</body>
</html>
