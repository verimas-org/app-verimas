<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="author">
    <title>株式会社ブレーカーシス</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.jq22.com/jquery/bootstrap-3.3.4.css">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/jquery.bxslider.min.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


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

    <header class="site-header header-style-1" id="header">

    <nav class="navigation navbar navbar-default">
        <div class="container-fluid">
            <div class="logo">
                <a href="index.html"><img alt src="assets/images/logo.png"></a>
            </div>

            <div class="navbar-header">
                <button class="open-btn" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse navigation-holder" id="navbar">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">ホーム</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">会社情報</a>
                        <ul class="sub-menu">
                            <li><a href="profile.php">会社概要</a></li>
                            <li><a href="philosophy.php">企業理念</a></li>
                            <li><a href="profile_address.php">代表者挨拶</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="engineering.php">ITエンジニアリング</a>
                        <ul class="sub-menu">
                            <li><a href="contractdev.php">受託開発サービス</a></li>
                            <li><a href="dispatch.php">エンジニア派遣</a></li>
                            <li><a href="infrastructure.php">システムインフラ</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">ソリューション・製品</a>
                        <ul class="sub-menu">
                            <li><a href="ec.php">EC決済</a></li>
                        </ul>
                    </li>                    
                    <li class="menu-item-has-children">
                        <a href="center.php">技術センター</a>
                        <ul class="sub-menu">
                            <li><a href="basal.php">ブレーカー基盤</a></li>
                            <li><a href="k8s.php">k8s-自動化コンテナプラットフォーム</a></li>
                            <li><a href="rasp.php">RASP-次世代アプリケーション保護技術</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">採用情報</a>
                        <ul class="sub-menu">
                            <li><a href="recruit.php">中途採用</a></li>
                            <li><a href="recruitnew.php">新卒採用</a></li>
                        </ul>
                    </li>
                    <li><a href="access.php">アクセス</a></li>
                    <li><a href="question.php">問い合わせ</a></li>
                    <li><a href="privacy.php">プライバシーポリシー</a></li>
                </ul>
            </div>
            <!-- end of nav-collapse -->

        </div>
        <!-- end of container -->
    </nav>
</header>

<script language="JavaScript">
<!--
function CallAPIGW_ServerCtl(urlTgt) {
        var request = new XMLHttpRequest();

		request.open("GET", urlTgt, false);
		request.setRequestHeader("x-api-key", "3FKHZPd4PfLqlvGBzOgK76pTsBanccE40SQr0eY0");

		request.send(null);
		
		if (request.status != 200) {
			alert(request.status + " " + request.statusText);
		  } else {
			alert(request.response);
		  }
		return false;
}
//-->
</script>


    <!-- end of header -->

    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h3 style="color:white">共通サーバ制御（匿名）</h3>
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
                        <h4><a href="#" target="srvctl" onclick="return CallAPIGW_ServerCtl('https://qscf0r9c64.execute-api.ap-northeast-1.amazonaws.com/prod/ec2/step-server-01-status');">サーバ起動状態確認：　踏み台サーバ01</a></h4>
			<h4><a href="#" target="srvctl" onclick="return CallAPIGW_ServerCtl('https://qscf0r9c64.execute-api.ap-northeast-1.amazonaws.com/prod/ec2/nat-server-status');">サーバ起動状態確認：　NATサーバ</a></h4>

                        <h4>　</h4>
                        <h4><a href="#" target="srvctl" onclick="return CallAPIGW_ServerCtl('https://qscf0r9c64.execute-api.ap-northeast-1.amazonaws.com/prod/ec2/start/step-server-01');">踏み台サーバ01起動</a>   　※利用終了後サーバ>自動停止となる。</h4>
                        <h4><a href="#" target="srvctl" onclick="return CallAPIGW_ServerCtl('https://qscf0r9c64.execute-api.ap-northeast-1.amazonaws.com/prod/ec2/start/nat-server');">NATサーバ起動</a>   　※平日勤務期間自動起動・停止制御有り。</h4>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="full text_align_center">

                        </div>
                    </div>
                </div>
            </div>


            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script>
                $(function () {

                    'use strict';

                    var winH = $(window).height();

                    $('header').height(winH);

                    $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));

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
<style>
    @media all and (orientation:portrait){
        /*?屏*/

    }
</style>
<!-- start site-footer -->
<footer class="site-footer">

    <div class="lower-footer">
        <div class="container">
            <div class="row display-flex">
                <div class="col-md-6 col-sm-6 col-xs-12" style="    width: 100%;">
                    <p class="copyright">
                    <h5 style="color:black ;text-align:center">Copyright c 2019 - 2022 株式会社ブレーカーシス All Rights Reserved. </h5>
                    </p>
                </div><!-- /col -->
            </div>

        </div>
        <div style="display:block;float:right;margin-top:-34px;color:gray">
            <h6 style="color:#687693;font-size:12px">ウェブサイトメンテナンス：<a style="color:#687693;" href=mailto:admin@bk-sys.co.jp>admin@bk-sys.co.jp</a>　powered by Kubernetes, Docker engine. Node: 834306e253e0                        </h6>
        </div>
    </div>
</footer>
<!-- end site-footer -->

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

