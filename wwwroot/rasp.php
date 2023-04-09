<!doctype html>
<html lang="en">

<?php include("./public/head.php"); ?>

<title>アプリケーションコンテナ化した構成概要</title>
<style>
    p{
        margin-left:2em;
        margin-right:2em;
    }
    .about_section{
        /*text-align:center;*/
    }
</style>
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

    <hr>
    <br>
    <!-- start portfolio -->

    <section style="margin-bottom:200px" class="l-container">
        <div id="about" class="about_section layout_padding" >
<!--            <div class="container">-->
                <h2>Runtime Application Self-Protection(RASP)とは？</h2>
                <p>その名の通り、アプリケーションまたはアプリケーションを実行するランタイム環境で、セキュリティ機能を導入しリアルタイムでアプリケーションまたはアプリケーション実行環境を脅威から守るセキュリティ技術です。
                    RASPは、悪意のある攻撃を特定してブロックすることにより、リアルタイムのアプリケーション保護を可能にするセキュリティ技術です。
                    保護はアプリケーションの実行時環境に組み込まれ、すべてのアクションを傍受して保護されているかどうかを判断します。
                    従来のアプリケーション外部から事前定義済の特定攻撃をブロックすることを更に拡張し、アプリケーション自体が攻撃を検知し保護する技術です。
                </p>
                <p><img src="img/rasp.png" alt=""></p>
                <p>RASPは、従来セキュリティ製品の代替ではなく、さらにセキュリティ増強する技術です。</p>
                <p><img src="img/rasp01.png" alt=""></p>
                <img src="img/rasp02.png" alt="">
                <p>複数RASP製品のインテグレーション、活用及び拡張（フォーカス＆ターゲット）</p>
                <p><img src="img/rasp03.png" alt=""></p>
                <p><img src="img/rasp04.png" alt=""></p>
<!--            </div>-->
        </div>
    </section>
    <hr>
    

<form class="contact-validation-active" id="contact-form-main" method="post" novalidate="novalidate">
<input class="form-control"  name="type" type="hidden" value="RASP-次世代アプリケーション保護技術">
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