<!DOCTYPE html>
<html>
<?php include("./public/head.php"); ?>
<?php include("./public/access-counter.php"); ?>
  <body>
    <?php include("./public/scripts.php"); ?>
    <video id="v1" autoplay loop muted>
      <source src="img/backg.mp4" type="video/mp4"  />
    </video>

    <main class="container-fluid">
      <div class="row">
        <?php include("./public/business-commidev-menu.php"); ?>

        <main role="main" class="ml-sm-auto col-12">

        <div class="tm-section-wrap bg-light">
            <section id="summary" class="row tm-section">
              <h2 class="tm-section-title tm-color-primary mb-5">ソフトウェア受託開発概要</h2>
              <?php include("./public/business-menu-links.php"); ?>
              <div class="row">
                <div class="col-xl-6">
                    <p class="mb-5" style="text-align:left">
                    長年にわたりソフトウェア開発経験を活かして、お客様個別のご要望に対応するソフトウェアを開発する低コスト・高品質 サービスでございます。<br>
                    フルスタック型エンジニアを集め、アジャイル・DevOps等を活用し、変化が激しい現代に応じる開発手法を採用します。
                    </p>
                </div>
                <div class="col-xl-6">
                <img src="img/business_dev_01.png" width="100%" title="" class="hover-trans-img"></img>
                </div>
              </div>
            </section>
            <section id="service" class="row tm-section">
              <h2 class="tm-section-title tm-color-primary mb-5">サービス内容</h2>
              <div class="row">
                <div class="col-xl-6">
                <img src="img/business_dev_02.jpg" width="100%" title="" class="hover-trans-img"></img>
                </div>
                <div class="col-xl-6">
                    <p class="mb-5" style="text-align:left">
                    ・さまざまな開発言語を対応（Java、C++、C#、Python、JS）<br>
                    ・各種データベースを対応（Oracle、SQL Server、MySQL、PostgreSQL、NoSQL）<br>
                    ・各種アプリケーションフレームワークを対応<br>
                    ・OS環境：Windows、Linux、Solaris、Mobile OSなど<br>
                    ・従来の開発モデルだけでなく、アジャイル開発手法も可能<br>
                    ・マイクロサービス等コンテナ化したアプリ開発<br>
                    </p>
                </div>
              </div>
            </section>

            <section id="bottomback" class="row tm-section">
              <?php include("./public/business-menu-links.php"); ?>
            </section>

        </div>

        </main>

      </div>
    </div>

  </body>
</html>
