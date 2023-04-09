<!doctype html>
<html lang="en">

<?php include("./public/head.php"); ?>


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
                    <h3 style="color:white">株式会社ブレーカーシス - 会社情報</h3>
                    <ol class="breadcrumb">
                        <li><a href="#">会社情報</a></li>
                        <li>  会社概要</li>
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
                        <h4 style="text-align:color:#000;">会社概要</h4>
                        <h3 style="text-transform: none !important"></h3>
                        <table class="l-table">
                            <tbody >
                            <tr valign="top" height="50">
                                <th width="150">会社名称</th>
                                <td>株式会社ブレーカーシス</td>
                            </tr>
                            <tr valign="top" height="50">
                                <th>設立</th>
                                <td>2019/5/31
                                </td>
                            </tr>
                            <tr valign="top" height="50">
                                <th>代表取締役</th>
                                <td>毛俊峰</td>
                            </tr>
                            <tr valign="top" height="50">
                                <th>資本金</th>
                                <td>800 万円<td>
                            </tr>
                            <tr valign="top" height="50">
                                <th>住所	</th>
                                <td>〒111-0053<br>
                                    ◎東京都台東区浅草橋4-15-5三基ビル202
                                </td>
                            </tr>
                            <tr valign="top" height="50">
                                <th>電話</th>
                                <td>03-6228-3589</td>
                            </tr>
                            <tr valign="top" height="50">
                                <th>ＦＡＸ</th>
                                <td>03-6228-3659</td>
                            </tr>
                            <tr valign="top" height="50">
                                <th>取引銀行</th>
                                <td>みずほ銀行</td>
                            </tr>
                            </tbody>
                        </table>
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
