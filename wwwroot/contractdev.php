

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
    <section class="testimonial section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-inner">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="section-title">
                                    <span>自社パッケージ開発のノウハウを活かした低コスト・高品質 「受託開発サービス」</span>
                                    <h4>長年にわたりソフトウェア開発経験、自社パッケージ構築ノウハウを活かして、お客様の個別のご要望に対応するソフトウェアを開発します。
                                    </h4>
                                    <br>
                                    <hr>
                                    <h2 style="text-align:center">サービス概要</h2>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme testimonial-slider">
                            <div class="item">
                                <div class="single-testimonial">
                                    <div class="info">
                                        <img alt="" class="img-responsive" src="assets/images/testimonials/lang.jpg">
                                        <h4>
                                            複数の開発言語・データーベースに対応</h4>
                                    </div>
                                    <div class="feedback">
                                        <span class="quote"><img alt=""
                                                                 class="img-responsive"
                                                                 src="assets/images/testimonials/quote.svg"></span>
                                        <p>
                                            以下の技術は弊社パッケージでも利用してる得意な技術です。これらの技術を活用してオリジナルシステムを構築します。<br>
                                            （1）開発言語：　Java、C++、C#、JavaScript、HTML+CSS、SQLなど<br>
                                            （2）フレームワーク：　Spring、.NET Framework、jQueryなど<br>
                                            （3）環境：　Windows、Linux、IIS、Apache、Eclipse、Visual Studio、Amazon Web Serviceなど<br>
                                            （4）データベース：　PostgreSQL、Oralce、DB2、SQL SVRなど</p>
                                    </div>
                                </div>
                            </div><!-- /item -->
                            <div class="item">
                                <div class="single-testimonial">
                                    <div class="info">
                                        <img alt="" class="img-responsive" src="assets/images/testimonials/soft.jpg">
                                        <h4>パッケージベンダーならではの構築力</h4>
                                        <p></p>
                                    </div>
                                    <div class="feedback">
                                        <span class="quote"><img alt=""
                                                                 class="img-responsive"
                                                                 src="assets/images/testimonials/quote.svg"></span>
                                        <p>複数のお客様に導入し、稼働OSやブラウザが変化しても少ない工数で対応し、長期にわたり保守サポートを提供することを前提としたパッケージビジネスが弊社の本業です。よって、「作って納品したら終わり」ではなく、パッケージ開発で培った開発標準化力・ドキュメンテーション力などを活かして、長期利用でき、稼働後の追加開発・修正も行いやすい、ソフトウェアを構築することができます</p>
                                    </div>
                                </div>
                            </div><!-- /item -->
                            <div class="item">
                                <div class="single-testimonial">
                                    <div class="info">
                                        <img alt="" class="img-responsive" src="assets/images/testimonials/01.jpg">
                                        <p>Senior Engineer</p>
                                    </div>
                                    <div class="feedback">
                                        <span class="quote"><img alt=""
                                                                 class="img-responsive"
                                                                 src="assets/images/testimonials/quote.svg">
                                        </span>
                                        <h4>保守サポートも長期にわたりご提供</h4>
                                        <p>弊社事由で保守を打ち切ったことがありません。長期にわたり保守サポートをご提供します。オプションで24時間365日のサポートもご提供できます。</p>
                                    </div>
                                </div>
                            </div><!-- /item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <form class="contact-validation-active" id="contact-form-main" method="post" novalidate="novalidate">
    <input class="form-control"  name="type" type="hidden" value="受託開発サービス">
    <?php include("./public/inquiry.php"); ?>
    </form>


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

