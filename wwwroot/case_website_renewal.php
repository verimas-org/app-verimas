<!doctype html>
<html lang="en">

<?php include("./public/head.php"); ?>

<title>アプリケーションコンテナ化した構成概要</title>
<body>


<!-- start page-wrapper -->
<div class="page-wrapper">


    <!-- start preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->

    <?php include("./public/header.php"); ?>

    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h3 style="color:white">株式会社ブレーカーシス - 公式サイト</h3>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- start portfolio -->
    
    

    <section style="margin-bottom:200px" class="l-container">
    <p style="padding: 10px;"><br>ブレーカーシスホームページがリニューアルしました。<br>この度、将来の拡張性を見据えて、Webサイト基盤からアプリまで再構築を行いました。<br>
Webサイトアプリをコンテナ化し、自動化コンテナ管理プラットフォームであるKubernetes (K8s)も導入しました。</p>
        <div id="about" class="about_section layout_padding">
            <h2>コンテナ化したアプリケーション構成概要</h2>
            <img src="img/case_website_renewal_01.png" alt="">
            <h2>ブレーカーシスWebサイト開発手法イメージ</h2>
            <img src="img/case_website_renewal_02.png" alt="">
        </div>
    </section>
    
    <hr>
    <form class="contact-validation-active" id="contact-form-main" method="post" novalidate="novalidate">
    <input class="form-control"  name="type" type="hidden" value="">
    <?php include("./public/inquiry.php"); ?>
    </form>
    


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<!-- end of portfolio -->
<?php include("./public/footer.php"); ?>


</div>


<!-- All JavaScript files
================================================== -->
<script src="https://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<!-- Plugins for this template -->
<script src="assets/js/jquery-plugin-collection.js"></script>

<!-- Custom script for this template -->
<script src="assets/js/script.js"></script>
</body>

</html>