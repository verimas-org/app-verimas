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
        <h2>Verimasウェブサイト</h2>
        リリースはコード変更をプッシュするだけで済む！
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">
              <div class="entry-img">
                <img src="img/k8s-cloud-cicd.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">概要</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a href="#"><time datetime="2023-07-20">July 20, 2023</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-bell"></i> <a href="#"><?php echo $pageaccess_counter; ?> Read</a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                この度、ヴェリマスの公式サイトを公開しました。<br>
                メンテナンスの容易性、将来の拡張性を見据えて、ウェブサイトのインフラからアプリまでクラウドネイティブ化した開発手法で設計・構築を行いました。<br>
                Webサイトアプリをコンテナ化し、各種CI/CDツールを導入し、ソースコード管理・変更から、ビルド・テスト・リリースまで一連のフローを自動化・可視化しました。<br>
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/k8s-cloud-flow.png" alt="" width="200%" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">CI/CD自動化への取り組みの全体像</a>
              </h2>
              <div class="entry-content">
                <p>
                ・Coding Anywhere, Anytime<br>
                社内、社外、自宅、スマートフォンなどよりいつでも、どこでも変更対応できます。<br>
                変更後の一連流れは自動化したため、さまざまな開発端末を利用できます。<br>
                ・コード解析、ビルド<br>
                Github CIツール（Github Action）を利用して、ソースコード変更をトリガーにコード解析、ビルドし、Dockerイメージを作成して、プライベートDockerイメージレポジトリにプッシュします。<br>
                ・自動化テスト<br>
                Jenkinsパイプラインより作成したDockerイメージを、k8sコンテナシステムにデプロイして、テストを行います。<br>
                テスト環境もコンテナ化したため、テスト環境の管理も不要です。<br>
                ・ArgoCDよりの自動化、可視化デプロイ<br>
                ・クラウドネイティブ化<br>
                ウェブサイトアプリだけでなく、インフラリリースやCI/CDツールなどもコンテナ化します。
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/k8s-cloud-infra.png" alt="" width="100%" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">全体構成概要</a>
              </h2>
              <div class="entry-content">
                <p>

                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/k8s-cloud-jenkins.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">Jenkins活用</a>
              </h2>
              <div class="entry-content">
                <p>
                ・テスト自動化<br>
                <a href="https://jenkins.petorch.live/job/argocd/job/update-image-tag/" target="_blank">Jenkinsサンプル</a><br>
                ・Kubernetes管理ジョブ化<br>
                </p>
              </div>
            </article>

            <article class="entry">
              <div class="entry-img">
                <img src="img/k8s-cloud-argocd.png" alt="" class="img-fluid hover-trans-img-big">
              </div>
              <h2 class="entry-title">
                <a href="#">ArgoCD活用</a>
              </h2>
              <div class="entry-content">
                <p>
                ・コンテナ配置自動化<br>
                サンプル：<a href="https://argocd.petorch.live/" target="_blank">argocd.petorch.live/</a><br>
                Kubernetes配置ファイルの差分自動検知より、コンテナデプロイを自動化。<br>
                ・コンテナシステムの可視化<br>
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
                  <li><a href="#">クラウドネイティブ</a></li>
                  <li><a href="#">Kubernetes(k8s)</a></li>
                  <li><a href="#">コンテナ</a></li>
                  <li><a href="#">Docker</a></li>
                  <li><a href="#">CI/CD</a></li>
                  <li><a href="#">Jenkins</a></li>
                  <li><a href="#">GitOps</a></li>
                  <li><a href="#">Argo CD</a></li>
                  <li><a href="#">Amazon EKS</a></li>
                  <li><a href="#">Amazon ECR</a></li>
                </ul>
              </div><!-- End sidebar tags-->

              <?php $contacttype = "ショールーム - クラウドエンジニアリング"; ?>
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