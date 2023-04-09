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

    .section-title .subtitle{
        position:relative;
        margin-bottom:15px;
        font-size:16px;
        text-transform:uppercase;
        color:#d6a77b;
        font-weight:400;
        display:flex;
        align-items:center;
        justify-content:center;
    }

    .row{
        display:-ms-flexbox;
        display:flex;
        -ms-flex-wrap:wrap;
        flex-wrap:wrap;
        margin-right:-15px;
        margin-left:-15px;
    }

    .sigma_service.style-3 {
        border: 0;
        margin-top: 45px;
    }
    .sigma_service.style-3, .sigma_service.style-2 {
        background-color: transparent;
        box-shadow: none;
        text-align: left;
        padding: 0;
    }
    .sigma_service {
        display: block;
        background-color: #fff;
        padding: 40px;
        transition: .3s;
        margin-bottom: 30px;
        box-shadow: 0 3px 24px rgba(0,0,0,.04);
    }
    .sigma_service.style-3 .sigma_service-thumb, .sigma_service.style-2 .sigma_service-thumb {
        position: relative;
        margin: 0;
        z-index: 1;
    }
    .sigma_service.style-3 .sigma_service-body {
        height:460px;
        position: relative;
        background-color: #3454d1;
        box-shadow: 0px 10px 50px 0px rgba(53,82,99,0.09);
        border: 0;
        padding: 60px 30px 30px;
        text-align: center;
        transition: .3s;
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
                    <h3 style="color:white">株式会社ブレーカーシス - システムインフラ</h3>
                    <ol class="breadcrumb">
                        <li><a href="engineering.php">ITエンジニアリング</a></li>
                        <li>株式会社ブレーカーシス - システムインフラ</li>
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
                        <div class="bs-callout bs-callout-info" id="callout-type-b-i-elems">
                            <p>システムインフラサービスは、パブリッククラウドを主体とし、パブリッククラウド、オンプレミス、プライベートクラウド、マネージドクラウドを利用したシステムインフラを構築します。</p>
                        </div>
                        <div class="bs-callout bs-callout-info" id="callout-type-b-i-elems">
                            <p>アプリケーション開発で培った技術をもとに、プリセールスから提案、要件定義、基本設計、詳細設計、構築、運用まで全てのインテグレーションプロセスをワンストップサービスで提供いたします。</p>
                        </div>
                        <div class="bs-callout bs-callout-info" id="callout-type-b-i-elems">
                            <p> サーバーは、Linuxを中心に、Windows、各社UNIX。ネットワークは、Ciscoを中心に各社製品、ファイアウォール製品。</p>
                        </div>
                        <div class="bs-callout bs-callout-info" id="callout-type-b-i-elems">
                            <p> ミドルウェアは、各種データベースから、Microsoft系、その他各メーカーまで幅広く対応します。</p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <hr>
            <br>

            <div class="section section-padding pt-0">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="subtitle">システムインフラ対応イメージ　</h2>
                        <br>
                        <hr>
                        <h4 class="title">安定したシステム環境を維持していくためには、運用管理から障害対応まで幅広く対応できる運用・保守の体制が必要です。 ハードウェア、ネットワーク、業務システム、それぞれの分野に専門特化した保守・運用サービスをご提供いたします。 
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="sigma_service style-3">
                                <div class="sigma_service-thumb">
                                    <i class="flaticon-decorating"></i>
                                </div>
                                <div class="sigma_service-body">
                                    <h5 style="color: #fcf8e3;">設計・構築</h5>
                                    <p style="height: 75px;color:#e5e5e5;;">オンプレミス・データセンター・クラウドなどの形態に関わらず、お客様システムの設計・構築を行います。
                                    </p>
                                    <img alt="" class="img-responsive" src="assets/images/service/infradesign.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="sigma_service style-3">
                                <div class="sigma_service-thumb">
                                    <i class="flaticon-living-room"></i>
                                </div>
                                <div class="sigma_service-body">
                                    <h5 style="color: #fcf8e3;">運用・保守
                                    </h5>
                                    <p style="height: 75px;color:#e5e5e5;;">手順書に基づき、お客様システムの運用・保守に関連するIT管理業務を代行します。
                                    </p>
                                    <img alt="" class="img-responsive" src="assets/images/service/inframain.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="sigma_service style-3">
                                <div class="sigma_service-thumb">
                                    <i class="flaticon-home-2"></i>
                                </div>
                                <div class="sigma_service-body">
                                    <h5 style="color: #fcf8e3;">監視
                                    </h5>
                                    <p style="height: 75px;color:#e5e5e5;">お客様機器・クラウド設備を24時間365日監視し、故障時・復旧時に自動メールで通知します。
                                    </p>
                                    <img alt="" class="img-responsive" src="assets/images/service/inframonitor.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <form class="contact-validation-active" id="contact-form-main" method="post" novalidate="novalidate">
    <input class="form-control"  name="type" type="hidden" value="システムインフラ">
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