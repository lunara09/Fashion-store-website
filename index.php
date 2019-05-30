<?php
 //This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.php");
?>
<html>

<head>
    <title>Welcome to Fashion Store</title>

    <link href="css/styles.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" media="screen" href="css/slideshow.css">
    <script src="js/slideshow.js"></script>


</head>

<body>



    <div class="container">
        <?php
        include("header.php");
        // check to see if user is visiting a page other than the home page
        if (!isset($_GET['page'])) {
          ?>
        <div id="slideshow">
            <!-- <div id="overlay"> -->
            <div id="prev"></div>
            <div id="next"></div>
            <!-- </div> -->
        </div>

        <?php 
      }

      ?>
        <div class="maincontent">
            <!-- main content goes here-->
            <?php 
            if (!isset($_GET['page'])) {
              include("home.php");
            } else {
              $page = $_GET['page'];
              include("$page.php");
            }

            ?>
        </div>
        <?php
        include("seccontent.php");
        ?>

        <div class="footer"></div>
    </div><!-- Container ends here-->

    <footer>
        <div id="social">
            <a href="http://fb.com" title="facebook" target="_blank">
                <img src="./img/fb.png" alt="fb" title="fb"></a>

            <a href="http://twiter.com" title="twiter" target="_blank">
                <img src="./img/twiter.png" alt="tw" title="tw"></a>


            <a href="http://linkedin.com" title="linkedin" target="_blank">
                <img src="./img/lin.png" alt="tw" title="ln"></a>
        </div>

        <div id="rights">
            Heritage College &copy; <?php echo date('Y') ?>
        </div>
    </footer>
</body>

</html> 