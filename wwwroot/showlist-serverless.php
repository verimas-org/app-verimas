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
        <h2>PeTorchインフラストラクチャ</h2>
        サーバーなしのクラウドインフラストラクチャ！
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">
              <div class="entry-img">
                <img src="img/petorch-serverless-01.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">概要</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a href="#"><time datetime="2023-07-26">July 26, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-bell"></i> <a href="#"><?php echo $pageaccess_counter; ?> Read</a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                PeTorchは、AI及びML（機械学習）を活用してペット向けのサービスを展開する計画に対して、技術及びサービスを検証するプロジェクトです。<br>
                サービスへのアクセス量は安定になっていない、随時にサービス停止したり、再開したりする場合よくあります。そのため、今回のPoC検証用のインフラストラクチャはサーバーレス構成を採用しました。<br>
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/petorch-serverless-02.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">サーバーレスインフラストラクチャの全体像</a>
              </h2>
              <div class="entry-content">
                <p>
                ・サーバーインフラの運用や管理は不要です。<br>
                ・サービス随時にアクセスが可能、しかも停止・起動などのメンテナンス不要です。<br>
                ・料金最適化、アクセスがなければほとんど費用かかりません。<br>
                ・オートスケーリングです。<br>
                </p>
              </div>
            </article>

          </div>

          <div class="col-lg-4">

            <div class="sidebar">
              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">クラウドインフラ</a></li>
                  <li><a href="#">サーバーレス</a></li>
                  <li><a href="#">クラウドネイティブ</a></li>
                  <li><a href="#">Amazon CloudFront</a></li>
                  <li><a href="#">API Gateway</a></li>
                  <li><a href="#">AWS Lambda</a></li>
                  <li><a href="#">Amazon DynamoDB</a></li>
                  <li><a href="#">Amazon S3</a></li>
                  <li><a href="#">Google Cloud Function</a></li>
                </ul>
              </div><!-- End sidebar tags-->

              <?php $contacttype = "ショールーム - サーバーレス"; ?>
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