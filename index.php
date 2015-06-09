<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <?php 
        // Header/Navigation block
        echo "<div class=\"row\">";
        include "include/header.php";
        include "include/nav.php";
        echo "</div>";

        // Content block
        if(isset($_GET['page'])){
            include "pages/" . $_GET['page'] . ".php";
        } else {
            include "pages/home.php";
        }
        
        // Footer
        include "include/footer.php";
    ?>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
