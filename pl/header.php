<header>
  <h1><a href="/" title="strona domowa Jakuba Jankiewicza"><img src="/images/logo.png" alt="Jakub Jankiewicz logo"/></a></h1>
</header>
<?php
$file = preg_replace("%^/pl%", "", $_SERVER['REQUEST_URI']);
if (file_exists("../" . $file)) {
?><div class="lang" tabindex="0">
  <span>Język: Polski</span>
  <ul>
    <li>
      <a href="<?= $file ?>">
        <span>
          English
        </span>
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-gb" viewBox="0 0 640 480">
            <path fill="#012169" d="M0 0h640v480H0z"/>
            <path fill="#FFF" d="m75 0 244 181L562 0h78v62L400 241l240 178v61h-80L320 301 81 480H0v-60l239-178L0 64V0h75z"/>
            <path fill="#C8102E" d="m424 281 216 159v40L369 281h55zm-184 20 6 35L54 480H0l240-179zM640 0v3L391 191l2-44L590 0h50zM0 0l239 176h-60L0 42V0z"/>
            <path fill="#FFF" d="M241 0v480h160V0H241zM0 160v160h640V160H0z"/>
            <path fill="#C8102E" d="M0 193v96h640v-96H0zM273 0v480h96V0h-96z"/>
          </svg>
        </span>
      </a>
    </li>
    <li>
      <a href="<?= $_SERVER['REQUEST_URI'] ?>">
        <span>Polski</span>
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-pl" viewBox="0 0 640 480">
            <g fill-rule="evenodd">
              <path fill="#fff" d="M640 480H0V0h640z"/>
              <path fill="#dc143c" d="M640 480H0V240h640z"/>
            </g>
          </svg>
        </span>
      </a>
    </li>
  </ul>
</div>
<?php
}
?>
