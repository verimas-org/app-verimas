<!DOCTYPE html>
<html>
<?php include("./public/head.php"); ?>
  <body>
  <video id="v1" autoplay loop muted>
      <source src="img/backg.mp4" type="video/mp4"  />
  </video>
    <main class="container-fluid">
      <div class="row">        
          <?php include("./public/menu.php"); ?>
          
          <main role="main" class="ml-sm-auto col-12">
            <?php include("./public/intro.php"); ?>
            <?php include("./public/about.php"); ?>
            <?php include("./public/work.php"); ?>
            <?php include("./public/clients.php"); ?>
            <?php include("./public/contact.php"); ?>
        </main>

      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-scripts.js"></script>
  </body>
</html>