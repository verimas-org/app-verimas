<!doctype html>
<html lang="en">

<?php include("./public/head.php"); ?>

<style>
    .center{
        text-align:center;
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
                    <h3 style="color:white">株式会社ブレーカーシス - ブレーカー技術基盤</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">技術センター</a></li>
                        <li>株式会社ブレーカーシス - ブレーカー技術基盤</li>
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
                        <h2 style="text-align:color:#000;">IT事業を支えるブレーカーシス技術基盤</h2>
                        <p>
                            ブレーカーシスは技術立社を標榜し、技術力のさらなる強化に向けたさまざまな取り組みを実施しています。
                            これらの取り組みはブレーカーシスのIT事業を支える共通の技術基盤として確立されており、お客さま満足を創り出す源泉としての役割を果たしています。
                            これからも技術基盤のより一層の拡充に取り組み、お客さま満足の追求に努めてまいります。

                        </p>
                        <h2 style="text-align:color:#000;">技術力・人材の育成</h2>
                        <p>
                            ビジネス理解力の高いスペシャリストこそ、会社としての大切な財産、つまり知的資本であると考えています。
                            その一方、ブレーカーシスは「IT人材採用」だけに注力するのではなく、「IT人材育成」も重視しております。
                            仕事で技術力を育て、育てた技術力で仕事を変える方針で社員の自己成長を支援する取り組みを行っています。


                        </p>
                        <img class="center" src="img/basel_01.jpg" alt="">
                        <img class="center" src="img/02.jpg" alt="">

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