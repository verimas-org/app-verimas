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
        <h2>DX化＠Verimas</h2>
        中小企業のDX化を！
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">
              <div class="entry-img">
                <img src="img/5w1h-dx.jpeg" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">DX化への思考</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a href="#"><time datetime="2023-08-01">August 01, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-bell"></i> <a href="#"><?php echo $pageaccess_counter; ?> Read</a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                DXって、何でしょうか。DXの正体・本質は？<br>
                ビジネスの重宝5W1Hから考えたら。<br>
                ・いつ(When)<br>
                ・どこで(Where)<br>
                ・だれが(Who)<br>
                ・なにを(What)<br>
                ・なぜ(Why)<br>
                ・どのように(How)<br>
                変化の激しい時代のなかで、答えも日々変わってくるでしょうか。<br>
                大企業ではDX化推進の動きが活発ですが、中小企業においてはまだまだ浸透していないのが現状ですね。そもそも、中小企業においてDX化を推進する必要でしょうか。<br><br>
                参考資料（経済産業省外部資料）：<br>
                <a href="https://www.meti.go.jp/shingikai/mono_info_service/digital_transformation_kasoku/20201228_report.html" target="_blank">デジタルトランスフォーメーションの加速に向けた研究会 中間とりまとめ</a><br>
                <a href="https://www.meti.go.jp/shingikai/mono_info_service/digital_transformation/20180907_report.html" target="_blank">DXレポート ～ITシステム「2025年の崖」克服とDXの本格的な展開～</a><br>
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/dx-3step.png" alt="" width="200%" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">DX化への3つのステップ</a>
              </h2>
              <div class="entry-content">
                <p>
                ・デジタイゼーション（Digitization）<br>
                ・デジタライゼーション（Digitalization）<br>
                ・デジタルトランスフォーメーション（DX）<br>
                </p>
              </div>
            </article>

            <article class="entry">
              <!-- <div class="entry-img">
                <img src="img/dx-verimas.png" alt="" width="200%" class="img-fluid hover-trans-img-big">
              </div>-->
              <h2 class="entry-title">
                <a href="#">ヴェリマスのDX化取り組み</a>
              </h2>
              <div class="entry-content">
                <p>
                ・常にDX化5W1Hで業務プロセスを検視し、業務効率化及び生産性向上を求めます。<br>
                ・業務データ全般をデジタル化した上で、データを段々蓄積し、データ分析・活用を展開します。<br>
                ・社内コミュニケーションツールをデジタル化します。<br>
                ・<a href="https://wiki.verimas.co.jp" target="_blank">Wikiシステム</a>をベースに、社内業務・開発業務を全般システム化し、可視化します。<br>
                ・業務システム全般をクラウド化、システムメンテナンスを自動化します。<br>
                ・社内も顧客向けでも、ITシステム及び製品開発において、アジャイル開発手法を導入し、積極的運用します。<br>
                ・常に先端IT技術をキャッチアップし、試作や製品開発を行いながら、DX人材の育成やビジネスモデルの変革を求めます。<br>
                </p>
              </div>
            </article>

          </div>

          <div class="col-lg-4">

            <div class="sidebar">
              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">DX化思考</a></li>
                  <li><a href="#">5W1H</a></li>
                  <li><a href="#">中小企業DX化</a></li>
                  <li><a href="#">デジタイゼーション（Digitization）</a></li>
                  <li><a href="#">デジタライゼーション（Digitalization）</a></li>
                  <li><a href="#">デジタルトランスフォーメーション（DX）</a></li>
                </ul>
              </div><!-- End sidebar tags-->

              <?php $contacttype = "ショールーム - DX化思考"; ?>
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