<!DOCTYPE html>
<html>
<?php include("./public/access-counter.php"); ?>
<?php include("./public/head.php"); ?>
  <body>
    <?php include("./public/scripts.php"); ?>
    <video id="v1" autoplay loop muted>
      <source src="img/backg.mp4" type="video/mp4"  />
    </video>

    <?php include("./public/menu.php"); ?>

    <div class="row">
    <main class="container-fluid">
          <main role="main" class="ml-sm-auto col-12">
            <?php include("welcome.php"); ?>
            <?php include("company.php"); ?>
            <?php include("business.php"); ?>
            <?php include("showroom.php"); ?>
            <?php include("access.php"); ?>
            <?php include("contact.php"); ?>
            <?php include("platform.php"); ?>
        </main>
    </main>
    </div>

  </body>
</html>