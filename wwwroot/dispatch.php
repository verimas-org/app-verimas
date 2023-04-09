<!doctype html>
<html lang="en">

<?php include("./public/head.php"); ?>

<style>
    .bs-callout-info{
        border-left-color:#1b809e;
    }

    .bs-callout{
        padding:20px;
        margin:20px 0;
        border:1px solid #eee;
        border-left-width:5px;
        border-radius:3px;
    }

    .bs-example{
        background-color:gainsboro;
        position:relative;
        padding:45px 15px 15px;
        margin:0 -15px 15px;
        border-color:#e5e5e5 #eee #eee;
        border-style:solid;
        border-width:1px 0;
        -webkit-box-shadow:inset 0 3px 6px rgba(0, 0, 0, .05);
        box-shadow:inset 0 3px 6px rgba(0, 0, 0, .05);
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

    <!-- end of header -->

    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h3 style="color:white">株式会社ブレーカーシス - エンジニア派遣</h3>
                    <ol class="breadcrumb">
                        <li><a href="engineering.php">ITエンジニアリング</a></li>
                        <li>株式会社ブレーカーシス - エンジニア派遣</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start portfolio -->

    <section class="l-container">
        <div id="about" class="about_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h4 style="text-align:color:#000;    border-bottom: 1px solid #eee;">ハイエンドなエンジニア派遣で、製造業の皆さまのニーズにお応えしています。</h4>
                        <p style="text-align:color:#000;">近年、多数の企業より技術者の派遣依頼が急増し、ソフトウェア開発・設計・システムインフラ構築など多方面にわたりエンジニア派遣サービスを開始いたしました。<br>
                        豊富なキャリアと高度なスキルを持つSE/プログラマー、パフォーマンスの高いネットワーク環境の構築が可能なネットワークエンジニア、高度なクオリティ＆ユーザビリティで構築、制作を実現するクリエイター、そしてお客様に対して豊富な知識と経験で対応するサポートエンジニア等々が制御・通信・汎用系・パッケージシステム・ネットワークシステム・システム運用支援などでお客様のITビジネスを支援します。
                            </p>
                        
                        <h3 style="text-transform: none !important">エンジニア派遣サービスご利用の流れ</h3>
                        <div class="bs-example" data-example-id="simple-kbd">
                            <kbd>STEP01</kbd> 派遣のご依頼<br>
                            <hr>
                            短期、単発、長期のお仕事と、必要な時間、必要な期間でご依頼いただけます。
                        </div>
                        <h2 style="text-align:center">⟱</h2>
                        <div class="bs-example" data-example-id="simple-kbd">
                            <kbd>STEP02</kbd> ヒアリング<br>
                            <hr>
                            貴社にお伺いし、ご要望の人材・貴社での業務内容、必要スキル等の人材に求める条件・貴社での就業条件を詳細に打ち合わせいたします。
                        </div>
                        <h2 style="text-align:center">⟱</h2>
                        <div class="bs-example" data-example-id="simple-kbd">
                            <kbd>STEP03</kbd> 派遣スタッフの選定<br>
                            <hr>
                            面接情報・適性検査・試験等により、意欲や資質、適性などを総合的に判断し、貴社ご要望にお応えできる派遣スタッフを人選します。
                        </div>
                        <h2 style="text-align:center">⟱</h2>
                        <div class="bs-example" data-example-id="simple-kbd">
                            <kbd>STEP04</kbd> 派遣開始<br>
                            <hr>
                            貴社への派遣就業を開始致します。
                        </div>
                        <h2 style="text-align:center">⟱</h2>
                        <div class="bs-example" data-example-id="simple-kbd">
                            <kbd>STEP05</kbd>アフターフォロー<br>
                            <hr>
                            弊社管理担当者が定期的に貴社に訪問し、貴社ご要望やスタッフ就業状況の確認をおこないます。
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <hr>
            <br>
            
            
            <form class="contact-validation-active" id="contact-form-main" method="post" novalidate="novalidate">
    <input class="form-control"  name="type" type="hidden" value="エンジニア派遣">
    <?php include("./public/inquiry.php"); ?>
    </form>

            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script>
                $(function () {

                    'use strict';

                    var winH = $(window).height();

                    $('header').height(winH);

                    $('header .container > div').css('top', (winH / 2) - ($('header .container > div').height() / 2));

                    $('.navbar ul li a.search').on('click', function (e) {
                        e.preventDefault();
                    });
                    $('.navbar a.search').on('click', function () {
                        $('.navbar form').fadeToggle();
                    });

                    $('.navbar ul.navbar-nav li a').on('click', function (e) {

                        var getAttr = $(this).attr('href');

                        //e.preventDefault();
                        $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                    });
                })
            </script>
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