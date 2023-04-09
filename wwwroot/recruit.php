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
                    <h3 style="color:white">株式会社ブレーカーシス - 中途採用情報</h3>
                    
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
                        <h4 style="text-align:color:#000;">中途採用情報　　＞　　<a href="recruitnew.php">新卒採用情報はこちら</a></h4>
                        <h3 style="text-transform: none !important"></h3>
                        <table class="l-table">
                            <tbody >
                            <tr valign="top">
                                <th width="150">募集職種</th>
                                <td>システムエンジニア職</td>
                            </tr>
                            <tr valign="top">
                                <th>資格</th>
                                <td>年齢50歳迄　経験：2年以上で国籍、学歴、性別問わない<br>
                                    外国人の場合、日本語がN2以上で会話に支障がない方
                                </td>
                            </tr>
                            <tr valign="top">
                                <th>職位</th>
                                <td>PM・PL・SE・PG・テスター</td>
                            </tr>
                            <tr valign="top">
                                <th>スキル</th>
                                <td>JAVA、C#/VB.NET/ASP.NET、PYTHON、GO、C/C++/VB、PHP、PERL/RUBY等				<br>
                                    <弊社注力領域のキーワード>				<br>
                                        　ＣＲＭ　：　Salesforce(＊)				<br>
                                        　クラウド：　AWS(＊)/Azure				<br>
                                        　ＰＲＡ　：　WinActor(＊)/Uipah/BizRobo				<br>
                                        　インフラ：　クラウド基盤構築(＊)/ミドルウェア				<br>
                                        　モバイル：　IOS/Android				<br>
                                        　ＥＲＰ　：　SAP/EBS/Dynamics(＊)				<br>
                                        　（組込やＡＩ、ＩＯＴなど専門領域を得意する方は大歓迎）
                                </td>
                            </tr>
                            <tr valign="top">
                                <th>給与</th>
                                <td>経験、年齢及び前給を考慮の上、決定いたします。<br>
                                    ◎給与例<br>
                                    　　年収 820万円／34歳、マネージャー職<br>
                                    　　年収 680万円／30歳、リーダー職<br>
                                    　　年収 480万円／27歳、エンジニア職<br>
                                </td>
                            </tr>
                            <tr valign="top">
                                <th>雇用形態</th>
                                <td>正社員、契約社員</td>
                            </tr>
                            <tr valign="top">
                                <th>諸制度手当</th>
                                <td>役職手当<br>
                                    通勤手当<br>
                                    残業手当<br>
                                    プロジェクト管理手当<br>
                                    資格取得奨励制度<br>
                                    社員紹介奨励制度<br>
                                    誕生日お祝い<br>
                                    社員懇親会、同好会＆サークル活動　等</td>
                            </tr>
                            <tr valign="top">
                                <th>就業時間</th>
                                <td>9：00～18：00（所定勤務時間：8時間）</td>
                            </tr>
                            <tr valign="top">
                                <th>休日</th>
                                <td>土日（完全週休2日制）・祝日・年末年始・有給休暇</td>
                            </tr>
                            <tr valign="top">
                                <th>休暇</th>
                                <td>慶弔休暇<br>
                                    特別休暇</td>
                            </tr>
                            <tr valign="top">
                                <th>福利厚生</th>
                                <td>健康保険<br>
                                    厚生年金保険<br>
                                    雇用保険<br>
                                    労災保険
                                </td>
                            </tr>
                            <tr valign="top">
                                <th></th>
                                <td><br><br>
                                <h4 style="text-align:color:#000;">応募方法</h4>
                                    ①電話、②Email、③WebFormにて応募受付を行っております。<br>
                                    応募を希望される方は以下いずれかの方法で採用担当にご連絡ください。<br>
                                    [ 採用担当 ]<br>
                                    ① 電話：03-6228-3589<br>
                                    ② Email：<a href="mailto:maojunfeng@bk-sys.co.jp">maojunfeng@bk-sys.co.jp</a><br>
                                    ③<a href="subscription.php" target="_blank">WebForm応募はこちら</a><br>

                                </td>
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