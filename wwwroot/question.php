<!doctype html>
<html lang="en">

<?php include("./public/head.php"); ?>

<style>
    input{
        margin:10px 0 10px 0;
    }

    textarea{
        margin:10px 0 10px 0;
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
    <section class="l-container">
        <div id="about" class="about_section layout_padding">
            <form class="contact-validation-active" id="contact-form-main" method="post" novalidate="novalidate" action="mail-contact.php">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9" style="border: 1px solid;border-radius:25px;">
                            <h4 style="text-align:color:#000;margin-top:15px">お気軽にお問い合わせください。
                            </h4>

                            <span>電話での問い合わせ</span> <br>
                            <span>TEL: 03-6228-3589</span><br>
                            <span>または下記WebFormからお問い合わせ</span>
                            <hr>
                            <input class="form-control" id="name" name="name" placeholder="お名前*" type="text">
                            <input class="form-control"  name="type" type="hidden" value="">
                            <input class="form-control" id="title" name="title" placeholder="タイトル*"  type="text">
                            <input class="form-control" id="email" name="email" placeholder="E-Mail*" type="text">
                            <input class="form-control" id="phone" name="phone" placeholder="電話番号" type="text">
                            <textarea class="form-control" id="note" name="note" placeholder="問い合わせ内容..." rows="5"></textarea>
                            <div class="fullwidth">
                                <input class="form-control" id="agree" name="agree" placeholder="agree" type="checkbox" style="width:9%;zoom: 50%;vertical-align: middle;    margin-bottom: -38px;  margin-left: -3%;">
                                <label for="agree" style="display:block;margin-left:27px;"> <a href="#">個人情報の取り扱い</a> について同意する</label>
                            </div>
                            <div style="border:1px dotted">
                                <p style="margin:5px 0 5px 5px">個人情報の取り扱いについてお客様からお寄せいただいた情報は、お問い合わせへのご回答のためにのみ使用し、その他の目的で使用したり、無断で第三者へ提供することはございません。
                                    </br>お客様からお寄せいただいた情報に基づき、当社より電話、e-mail 等でご連絡差し上げる場合がございますのであらかじめご承知願います。
                                    </br>個人情報を正しくご記入いただけなかった場合は、対応できない場合がございます。
                                    </br>当社の休業日にお問い合わせいただいた場合の対応は、翌営業日以降となります。

                                </p>
                            </div>
                            <hr>
                            <button type="submit">送　信</button>
                            <br><br>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <div class="full text_align_center">

                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <script src="assets/js/bootstrap.min.js"></script>
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
<script src="assets/js/script.js?vtime=<?php echo date('YmdHis'); ?>"></script>
</body>

</html>
