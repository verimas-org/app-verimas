<!DOCTYPE html>
<html>
<?php include("./public/showlist-head.php"); ?>
<?php include("./public/access-counter.php"); ?>
<body>
  <?php include("./public/scripts.php"); ?>
  <?php include("./public/showlist-bodytop.php"); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2>AIスマートロック（自社開発中）</h2>
        次世代スマートホームの実現を！
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">
              <div class="entry-img">
                <img src="img/smartlock-01.jpg" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">概要</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a href="#"><time datetime="2023-08-04">August 4, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-bell"></i> <a href="#"><?php echo $pageaccess_counter; ?> Read</a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                スマートホームの一環として自社開発中の製品・サービスとなります。<br>
                市販のIoTデバイスであるスマートロックをベースに、AI機能を活用し、スマートホームシステムに取り組みます。<br>
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/smartlock-02.jpg" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">スマートロック運用想定イメージ</a>
              </h2>
              <div class="entry-content">
                <p>
                ・スマートカメラ<br>
                　人体検知、モーション検知、移動検知、クラウドに画像・動画の同期。<br>
                ・画像認識AI<br>
                　顔認識、顔認証。<br>
                ・動画認識AI<br>
                　人体検知、顔画像抽出。<br>
                ・スマートデバイス制御<br>
                　各種スマートホームプラットフォーム経由で、スマートデバイスへの制御。<br>
                ・運用シーン<br>
                　自動・手動シーン定義より、スマートデバイス運用の自動化、スマート化。<br>
                </p>
              </div>
            </article>

          </div>

          <div class="col-lg-4">

            <div class="sidebar">
              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">スマートホーム</a></li>
                  <li><a href="#">IoT</a></li>
                  <li><a href="#">画像認識AI</a></li>
                  <li><a href="#">動画認識AI</a></li>
                  <li><a href="#">Amazon Rekognition</a></li>
                  <li><a href="#">セキュリティ対策</a></li>
                </ul>
              </div><!-- End sidebar tags-->

              <?php $contacttype = "ショールーム - AIスマートロック"; ?>
              <?php include("./public/showlist-contact.php"); ?>

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <?php include("./public/showlist-footer.php"); ?>

</body>

</html>