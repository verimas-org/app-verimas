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
        <?php include("./public/business-cloud-menu.php"); ?>
          
        <main role="main" class="ml-sm-auto col-12">

        <div class="tm-section-wrap bg-light">
            <section id="summary" class="row tm-section">
              <h2 class="tm-section-title tm-color-primary mb-5">クラウドエンジニアリング概要</h2>
              <?php include("./public/business-menu-links.php"); ?>
              <div class="row">
                <div class="col-xl-6">
                    <p class="mb-5" style="text-align:left">
                    業種業界を問わず積み上げてきたクラウドの実績と知見を活かして、お客様のクラウド化課題整理・企画からクラウド環境の構築・最適化・運用支援を全般的に支援します。<br>
                    新しいテクノロジーと現代開発手法を活用して、より高速で費用効果の高いソリューションを提供します。<br>
                    クラウドデータ分析を活用して、お客様のビジネス成長とスケーラビリティを促進します。
                    </p>
                </div>
                <div class="col-xl-6">
                <img src="img/business_cloud_01.jpg" width="100%" title="" class="hover-trans-img"></img>
                </div>
              </div>
            </section>
            <section id="cloudinfra" class="row tm-section">
              <h2 class="tm-section-title tm-color-primary mb-5">クラウドインフラストラクチャ</h2>
              <div class="row">
                <div class="col-xl-6">
                <img src="img/business_cloud_02.jpg" width="100%" title="" class="hover-trans-img"></img>
                </div>
                <div class="col-xl-6">
                    <p class="mb-5" style="text-align:left">
                    ・各種パブリッククラウド対応（AWS、GCP、Microsoft Azure等）<br>
                    ・プライベートクラウド、ハイブリッドクラウド対応<br>
                    ・サーバーレスアーキテクチャ<br>
                    ・Docker/kubernetesに基づくコンテナシステム<br>
                    ・クラウドインフラ移行<br>
                    ・クラウド最適化（パフォーマンス・セキュリティ・コスト等）<br>
                    ・クラウドインフラの運用、監視<br>
                    </p>
                </div>
              </div>
            </section>
            <section id="clouddev" class="row tm-section">
              <h2 class="tm-section-title tm-color-primary mb-5">クラウドネイティブ開発</h2>
              <div class="row">
                <div class="col-xl-6">
                    <p class="mb-5" style="text-align:left">
                    ・アジャイル開発手法<br>
                    ・インフラ全般IaC化（Infrastructure as Code）<br>
                    ・自動化CI/CD<br>
                    ・GitOps<br>
                    </p>
                </div>
                <div class="col-xl-6">
                <img src="img/business_cloud_03.jpg" width="100%" title="" class="hover-trans-img"></img>
                </div>
              </div>
            </section>
            <section id="cloudanalysis" class="row tm-section">
              <h2 class="tm-section-title tm-color-primary mb-5">クラウドデータ分析</h2>
              <div class="row">
                <div class="col-xl-6">
                <img src="img/business_cloud_04.jpg" width="100%" title="" class="hover-trans-img"></img>
                </div>
                <div class="col-xl-6">
                    <p class="mb-5" style="text-align:left">
                    ・データレイク<br>
                    ・データ変換<br>
                    ・ストレージ最適化<br>
                    ・ETL自動化テスト<br>
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