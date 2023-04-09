<!doctype html>
<html lang="en">

<?php include("./public/head.php"); ?>
<style>
    *{
        margin:0px;
        padding:0px;
        box-sizing:content-box;
    }

    body{
        position:relative;
        margin:0px;
        padding:0px;
        font-size:14px;
        color:#000;
        background-repeat:no-repeat;
        background-position:center center;
        background-color:#f7f8f8;
        background-size:100% 100%;
    }

    .tips{
        width:702px;
        margin:0 auto;
        line-height:24px;
        padding-top:10px;
    }

    .bredcolor{
        color:#fff;
    }

    .menuHolder{
        width:700px;
        height:600px;
        position:relative;
        z-index:100;
        left:0;
        top:0;
        border-radius:0 0 700px 0;
        border:0px solid #0095da;
        border-top:none;
        border-left:none;
    }

    .menuHolder ul{
        padding:0;
        margin:0;
        list-style:none;
        position:absolute;
        left:0;
        top:0;
        width:0;
        height:0;
    }

    .menuHolder ul li{
        border-radius:0 0 300px 0;
        width:0;
        height:0;
    }

    .menuHolder ul li a{
        color:#000;
        text-decoration:none;
        text-align:right;
        box-shadow:-5px 5px 5px rgba(0, 0, 0, 0.4);
        -webkit-transform-origin:0 0;
        -moz-transform-origin:0 0;
        -ms-transform-origin:0 0;
        -o-transform-origin:0 0;
        transform-origin:0 0;
    }

    .menuHolder ul.p1 li{
        position:absolute;
        left:0;
        top:0;
    }

    .menuHolder ul.p2{
        z-index:-1;
    }

    .menuHolder li.s1 > a{
        position:absolute;
        display:block;
        width:300px;
        height:300px;
        background:#01040c url("img/btn-active_menu.png") no-repeat 44px 44px;
        /*background-size: 46px;*/
        border-radius:0 0 300px 0;
    }

    .menuHolder:hover .s1 > a{
        background:#01040c url("img/btn_memu.png") no-repeat 44px 44px;
    }

    .menuHolder li.s2 > a{
        position:absolute;
        display:block;
        width:600px;
        padding-left:0px;
        height:600px;
        background:#0b2433;
        border-radius:0 0 600px 0;
        font-size:16px;
        color:#306c92;
        border-right:1px solid #009be2;

    }


    .menuHolder ul ul{
        -webkit-transform-origin:0 0;
        -moz-transform-origin:0 0;
        -ms-transform-origin:0 0;
        -o-transform-origin:0 0;
        transform-origin:0 0;
        -webkit-transform:rotate(90deg);
        -moz-transform:rotateZ(90deg);
        -ms-transform:rotate(90deg);
        -o-transform:rotate(90deg);
        transform:rotate(90deg);
        -webkit-transition:1s;
        -moz-transition:1s;
        -ms-transition:1s;
        -o-transition:1s;
        transition:1s;
    }

    .menuHolder li.s2:nth-of-type(6) > a{
        /*background: #888;*/
        -webkit-transform:rotate(75deg);
        -moz-transform:rotateZ(75deg);
        -ms-transform:rotate(75deg);
        -o-transform:rotate(75deg);
        transform:rotate(75deg);
    }

    .menuHolder li.s2:nth-of-type(5) > a{
        /*background: #999;*/
        -webkit-transform:rotate(60deg);
        -moz-transform:rotateZ(60deg);
        -ms-transform:rotate(60deg);
        -o-transform:rotate(60deg);
        transform:rotate(60deg);
    }

    .menuHolder li.s2:nth-of-type(4) > a{
        /*background: #aaa;*/
        -webkit-transform:rotate(45deg);
        -moz-transform:rotateZ(45deg);
        -ms-transform:rotate(45deg);
        -o-transform:rotate(45deg);
        transform:rotate(45deg);
    }

    .menuHolder li.s2:nth-of-type(3) > a{
        /*background: #bbb;*/
        -webkit-transform:rotate(30deg);
        -moz-transform:rotateZ(30deg);
        -ms-transform:rotate(30deg);
        -o-transform:rotate(30deg);
        transform:rotate(30deg);
    }

    .menuHolder li.s2:nth-of-type(2) > a{
        /*background: #ccc;*/
        -webkit-transform:rotate(15deg);
        -moz-transform:rotateZ(15deg);
        -ms-transform:rotate(15deg);
        -o-transform:rotate(15deg);
        transform:rotate(15deg);
    }

    .menuHolder li.s1:hover ul.p2{
        -webkit-transform:rotate(0deg);
        -moz-transform:rotateZ(0deg);
        -ms-transform:rotate(0deg);
        -o-transform:rotate(0deg);
        transform:rotate(0deg);
    }

    .menuHolder li.s2:hover > a{
        /*background: #d00;*/
        color:#9ae6ff;
        text-shadow:0 0 24px rgba(107, 194, 255, .64);

    }


    .menuWindow{
        position:absolute;
        left:0;
        top:0;
        z-index:100;
        background:url(img/bg-active_mue.png) no-repeat right top;
        background-size:70%;
        -webkit-transition:0s 1s;
        -moz-transition:0s 1s;
        -ms-transition:0s 1s;
        -o-transition:0s 1s;
        transition:0s 1s;
    }

    .menuHolder:hover .menuWindow{
        width:610px;
        height:610px;
        overflow:hidden;
        -webkit-transition:0s 0s;
        -moz-transition:0s 0s;
        -ms-transition:0s 0s;
        -o-transition:0s 0s;
        transition:0s 0s;
    }

    .menuHolder span{
        display:block;
    }

    .menuHolder ~ img.close{
        width:0;
        height:0;
        position:fixed;
        z-index:-1;
        left:0;
        top:0;
    }

    .menuHolder:hover ~ img.close{
        width:100%;
        height:100%;
    }

    .tipsHolder{
        display:none;
        -webkit-transition:all 1.5s;
        -moz-transition:all 1.5s;
        -ms-transition:all 1.5s;
        -o-transition:all 1.5s;
        transition:all 1.5s;
        opacity:1;
    }
    
    .firstHolder{
        display:block;
        -webkit-transition:all 1.5s;
        -moz-transition:all 1.5s;
        -ms-transition:all 1.5s;
        -o-transition:all 1.5s;
        transition:all 1.5s;
        opacity:1;
    }

    }

</style>

<body>


<!-- start page-wrapper -->
<div class="page-wrapper">


    <div class="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <?php include("./public/header.php"); ?>

    <div class="menuHolder" id="menuHolder">
        <div class="menuWindow">
            <ul class="p1">

                <li class="s1"><a href="javascript:;">技術センター</a>

                    <ul id="p2" class="p2">

                        <li class="s2" id="menu01"><a href="basal.php"><span>ブレーカー技術基盤　　</span></a>
                        </li>
                        <li class="s2" id="menu02"><a href="k8s.php"><span>k8s-自動化コンテナプラットフォーム　</span></a>
                        </li>
                        <li class="s2" id="menu03"><a href="rasp.php"><span>RASP-次世代アプリケーション保護技術　</span></a>
                        </li>
                        <li class="s2" id="menu04"><a href="#"><span>ブレーカーシスEC決済フレームワーク　</span></a>
                        </li>

                    </ul>

                </li>

            </ul>
        </div>
    </div>
    <div id="menu01tips" class="tipsHolder">
        技術立社、人材育成への取り組み<br>
        <img src="img/02.jpg" alt="">
    </div>
    <div id="menu02tips" class="tipsHolder">
        コンテナ化したアプリケーションの運用自動化のオープンソースプラットフォームであるKubernetes世界<br>
        <img src="img/k8s_container.png" alt="">
    </div>
    <div id="menu03tips" class="tipsHolder">
        ランタイムアプリケーションセルフプロテクション(RASP)<br>
        <img src="img/rasp.png" alt="">
    </div>
    <div id="menu04tips" class="tipsHolder">
        ブレーカーシスEC決済フレームワーク、現在開発最中<br>
        <img src="assets/images/ec.jpg" alt="" style="width:50%;height:50%;">
    </div>
    
    <div id="firstdiv" class="firstHolder">
        <br>
        <img src="assets/images/techcenter.jpg" alt=""><br>
        <img src="assets/images/tech.gif" alt=""  style="width:500px;height:300px;">
    </div>


    <script src="assets/js/bootstrap.min.js"></script>


</body>
<!-- end of portfolio -->
<?php include("./public/footer.php"); ?>


</div>


<!-- All JavaScript files
================================================== -->
<script src="https://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/layer/layer.js"></script>
<script>

$(".firstHolder").css("display", "block");
var tid = "#firstdiv"
$(tid).css("position", "absolute");
$(tid).css("top", 100);
$(tid).css("left", $("#menuHolder").css("width"));
$(tid).css("display", "block");
$(tid).show("slow");

  $(function () {
        $('.s1').hover(
            function () {
                $(".firstHolder").css("display", "none");                
            },
            function () {
                $(".firstHolder").css("display", "block");
                var tid = "#firstdiv"
                $(tid).css("position", "absolute");
                $(tid).css("top", 100);
                $(tid).css("left", $("#menuHolder").css("width"));
                $(tid).css("display", "block");
                $(tid).show("slow");
            }
        )
    })
    ;
    
    $(function () {
        $('.s2').hover(
            function () {
                var tid = "#" + $(this).attr("id") + "tips"
                $(".tipsHolder").css("display", "none");

                $(tid).css("position", "absolute");
                $(tid).css("top", 150);
                $(tid).css("left", $("#menuHolder").css("width"));
                $(tid).css("display", "block");
                $(tid).show("slow");
            },
            function () {
                $(".tipsHolder").css("display", "none");
            }
        )
    })
    ;


</script>


<!-- Plugins for this template -->
<script src="assets/js/jquery-plugin-collection.js"></script>

<!-- Custom script for this template -->
<script src="assets/js/script.js"></script>
</body>

</html>