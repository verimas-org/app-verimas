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
        <?php include("./public/business-ses-menu.php"); ?>

        <main role="main" class="ml-sm-auto col-12">

        <div class="tm-section-wrap bg-light">
            <section id="summary" class="row tm-section">
              <h2 class="tm-section-title tm-color-primary mb-5">SES・エンジニア派遣概要</h2>
              <?php include("./public/business-menu-links.php"); ?>
              <div class="row">
                <div class="col-xl-6">
                    <p class="mb-5" style="text-align:left">
                    複数専門分野の知識・スキルをもつフルスタックエンジニアが育ています。<br>
                    豊富なキャリアと高度なスキルを持つSE/プログラマー/システムエンジニアを集め、お客様のITビジネスを支援します。<br>
                    お客様業務の人材不足、知見者不足の補充にエンジニアを派遣します。<br>
                    短期～長期、対応可能でございます。
                    </p>
                </div>
                <div class="col-xl-6">
                <img src="img/business_ses_01.jpg" width="100%" title="" class="hover-trans-img"></img>
                </div>
              </div>
            </section>
            <section id="workflow" class="row tm-section">
              <h2 class="tm-section-title tm-color-primary mb-5">利用の流れ</h2>
              <div class="row">
                <div class="col-xl-6">
                  <img src="img/business_ses_02.jpg" width="80%" title="" class="hover-trans-img"></img>
                </div>
                <div class="col-xl-6">
                    <p class="mb-5" style="text-align:left">
                    ・STEP01　派遣のご依頼<br>
                    ・STEP02　ヒアリング<br>
                    ・STEP03　エンジニアの選定<br>
                    ・STEP04　派遣開始<br>
                    ・STEP05　アフターフォロー<br>
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
