<nav class="four columns">
    <a href="index.php?page=about" <?php if(!isset($_GET['page']) || $_GET['page'] == 'about') {echo "class=\"active\""; }?>>about</a>
    <a href="index.php?page=portfolio" <?php if($_GET['page'] == 'portfolio') {echo "class=\"active\""; }?>>portfolio</a>
    <a href="index.php?page=blog" <?php if($_GET['page'] == 'blog') {echo "class=\"active\""; }?>>blog</a>
    <a href="index.php?page=contact" <?php if($_GET['page'] == 'contact') {echo "class=\"active\""; }?>>Contact</a>
</nav>
