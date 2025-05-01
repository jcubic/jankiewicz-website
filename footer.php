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
      <script defer src="https://umami.jcubic.pl/script.js"
              data-website-id="ecea8c54-de5d-43b6-8c68-11a91c8d0a24"></script>
    <? endif; ?>
