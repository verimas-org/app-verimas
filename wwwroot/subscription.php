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
            <form class="contact-validation-active" id="sub-form-main" method="post" novalidate="novalidate" action="mail-subscription.php" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9" style="border: 1px solid;
border-radius:25px;">
                            <h4 style="text-align:color:#000;margin-top:15px">WebFormよりのご応募
                            </h4>
                            <span>履歴書または経歴書のアップロードは任意です。</span>
                            <hr>
                            <input class="form-control" id="name" name="name" placeholder="お名前*" type="text">
                            <input class="form-control" id="email" name="email" placeholder="E-Mail*" type="text">
                            <input class="form-control" id="phone" name="phone" placeholder="電話番号" type="text">
                            <div class="form-group" style="display: inline;white-space:nowrap;">
                                <label for="exampleInputFile1" class="form-label">履歴書Upload</label><input type="file" id="exampleInputFile1" name="file1">
                            </div>
                            <div class="form-group" style="display: inline;white-space:nowrap;">
                                <label for="exampleInputFile2" class="form-label">経歴書Upload</label><input type="file" id="exampleInputFile1" name="file2">
                            </div>
                            <textarea class="form-control" id="note" name="note" placeholder="ご連絡事項" rows="5"></textarea>
                            <div class="fullwidth">
                                <input class="form-control" id="agree" name="agree" placeholder="agree" type="checkbox" style="width:9%;zoom: 50%;vertical-align: middle;    margin-bottom: -38px;  margin-left: -3%;">
                                <label for="agree" style="display:block;margin-left:27px;"> <a href="#">個人情報の取り扱い</a> について同意する</label>
                            </div>
                            <div style="border:1px dotted">
                                <p style="margin:5px 0 5px 5px">個人情報の取り扱いについてお寄せいただいた情報は、応募のためにのみ使用し、その他の目的で使用したり、無断で第三者へ提供することはございません。
                                    </br>お寄せいただいた情報に基づき、当社より電話、e-mail 等でご連絡差し上げる場合がございますのであらかじめご承知願います。個人情報を正しくご記入いただけなかった場合は、対応できない場合がございます。
                                </p>
                            </div>
                            <br><br>
                            <!--                            <div class="form-group">-->
                            <!--                                <div class="submit-area">-->
                            <button type="submit">送　信</button>
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <br><br><br>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <div class="full text_align_center">

                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <script src="assets/js/jquery.form.js"></script>
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
