<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <header class="row">
        <h1 class="heading">Giovanni Canzio</h1>
        <h2 class="heading">Usability Designer and Front-end Developer at Open Publishing GmbH</h2>
    </header>
    <nav class="row">
        <a href="index.php?page=about">about</a>
        <a href="index.php?page=portfolio">portfolio</a>
        <a href="index.php?page=blog">blog</a>
        <a href="index.php?page=contact">Contact</a>
    </nav>
    <?php 

        // Content block
        if(isset($_GET['page'])){
            include "pages/" . $_GET['page'] . ".php";
        } else {
            include "pages/about.php";
        }

        include "include/footer.php";
    ?>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
