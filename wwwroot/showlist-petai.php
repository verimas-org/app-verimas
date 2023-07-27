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
        <h2>PeTorchペット向けAIサービス（PoC）</h2>
        クラウドAIサービスの活用
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">
              <div class="entry-img">
                <img src="img/petorch-petai-01.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">概要</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a href="#"><time datetime="2023-07-28">July 28, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-bell"></i> <a href="#"><?php echo $pageaccess_counter; ?> Read</a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                PeTorchは、AI及びML（機械学習）を活用してペット向けのサービスを展開する計画に対して、技術及びサービスを検証するプロジェクトです。<br>
                本格的に素材収集し、ゼロからMLモデルを作成したり、訓練したりすると、かなりコストかかると想定しています。そのためPoC段階で、各種クラウドAIサービスを活用し、低コストで当プロジェクトを実施しました。<br>
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/petorch-petai-02.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">サービスイメージ</a>
              </h2>
              <div class="entry-content">
                <p>
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/petorch-petai-03.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">素材収集及びモデル訓練</a>
              </h2>
              <div class="entry-content">
                <p>
                Amazon Rekognition等のクラウドAIサービスを活用します。
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/petorch-petai-04.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">モデル訓練</a>
              </h2>
              <div class="entry-content">
                <p>
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/petorch-petai-05.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">サービスロードマップ想定</a>
              </h2>
              <div class="entry-content">
                <p>
                </p>
              </div>
            </article>

          </div>

          <div class="col-lg-4">

            <div class="sidebar">
              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">画像認識AI</a></li>
                  <li><a href="#">クラウドAI</a></li>
                  <li><a href="#">Amazon Rekognition</a></li>
                  <li><a href="#">Google Cloud Vision API</a></li>
                  <li><a href="#">ML（機械学習）</a></li>
                  <li><a href="#">モデル訓練</a></li>
                </ul>
              </div><!-- End sidebar tags-->

              <?php $contacttype = "ショールーム - ペット写真認識AI"; ?>
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