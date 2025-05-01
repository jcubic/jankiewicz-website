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
      <script defer src="https://umami.jcubic.pl/script.js"
              data-website-id="ecea8c54-de5d-43b6-8c68-11a91c8d0a24"></script>
    <? endif; ?>
