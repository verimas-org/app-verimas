<!doctype html>
<html lang="en">

<?php include("./public/head.php"); ?>

<style>
    .center{
        text-align:center;
    }

    .c-designbox{
        background:rgba(189, 196, 209, 0.22);
        padding:16px 32px;
        margin-bottom:24px;
        margin-top:-16px;
    }

    @media (min-width: 769px)
        .item-box {
            display: -ms-flexbox;
            display: flex;
        }

        .item-box {
            position: relative;
            margin: 16px 0;
            padding: 16px;
            border-radius: 4px;
            box-shadow: 0 0 16px #ccc;
            overflow: hidden;
            background-color: #fff;
        }
    .l-post-content h5{
        font-size:18px;
        font-weight:700;
        margin-top:40px;
        margin-bottom:16px;
    }

    .l-post-content p{
        margin-bottom:40px;
    }

    p, .text-normal{
        margin-top:0;
        margin-bottom:0;
        font-size:16px;
        line-height:2.1;
    }

    #tinymce.post-type-post > ul li:before, .c-cases-detail ul li:before, .l-post-content > ul li:before{
        content:"\f111";
        font-family:FontAwesome;
        display:inline-block;
        position:absolute;
        left:2px;
        color:#014DB2;
    }

    #tinymce.post-type-post > ul li, .c-cases-detail ul li, .l-post-content > ul li{
        padding-left:28px;
        position:relative;
    }

    #tinymce.post-type-post > ul li, .c-cases-detail ul li, .l-post-content > ul li{
        list-style:none;
    }

    *{
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
        box-sizing:border-box;
        vertical-align:baseline;
    }

    p{
        margin-left: 2em;
    }

    .play{
        height:130px;
        width:130px;
        background:#242424;
        border-radius:50%;
        display:-webkit-box;
        display:-ms-flexbox;
        display:flex;
        -webkit-box-pack:center;
        -ms-flex-pack:center;
        justify-content:center;
        -webkit-box-align:center;
        -ms-flex-align:center;
        align-items:center;
        color:#FFFFFF;
        font-size:55px;
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
                    <h3 style="color:white">株式会社ブレーカーシス - k8s - 自動化コンテナプラットフォーム</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">技術センター</a></li>
                        <li>株式会社ブレーカーシス - k8s - 自動化コンテナプラットフォーム</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start portfolio -->

    <div class="c-slidebar-container js-slidebar-container is-top-to-bottom">
        <section class="l-main" style="margin-bottom:200px" >
            <div class="l-section is-page is-bottom">
                <div class="l-container">
                    <div class="l-post-content">
                        <div class="center_1">
                            <h2><span id="KubernetesK8s">Kubernetes（K8s）とは？</span></h2>
                            <hr>
                            <p>正式名称はKubernetesで、操舵手やパイロットを意味するギリシャ語が語源だそうです。</p>
                            <p>読み方に迷う人が多いと思います。日本人にとっては、ギリシャ語由来の名称を英語圏の発音を経て日本語化するという複雑な流れを経ているので、いろいろな解釈があり、クバネティス / クバネテス / クーベネティスなどの読み方をされています。<br>
                                またKubernetes はK8sとの略称が用いられることも多く、この場合ケーエイツとも読みます。</p>
                            <p>カタカナ表記の場合クバネティスとされることが多そうですが、あえてカタカナに置き換える必要もないので、書く場合はKubernetes（K8s）が一般的です。</p>
                            <p>ここからが本題です。</p>
                            <h5>Kubernetesとは何をするものか？</h5>
                            <p>Kubernetesを簡単に表現するとこうなります。</p>
                            <div class="c-designbox">
                                <p>Kubernetesとは、<strong>コンテナ化されたアプリケーションを合理的に運用するために設計されたOSS（オープンソース）のプラットフォーム</strong></p>
                            </div>
                            <p>簡単に…と書きましたが「コンテナ化」がわからないと、この時点でまったく意味がわからなくなるので、次にコンテナとは何かを説明します。</p>
                            <p>Kubernetes公式サイトは下記となります。
                                <a href="https://kubernetes.io/ja/" target="_blank">https://kubernetes.io/ja/</a>
                            </p>
                        </div>
                        <div class="center_2">
                            <h2>そもそもコンテナって何？</h2>
                            <hr>
                            <p>IT用語の「コンテナ」とは、容器、入れ物などを表す英語「container」に由来する技術で、おそらく多くの人がイメージする貨物輸送用のあの入れ物のように「大量のモノ（データ）を、早く、低コストで、簡単に、事故なく運搬する」ために用いられます。</p>
                            <p><img src="img/column_container.jpg" alt="" width="1024" height="526" class="aligncenter size-full wp-image-6927" srcset="img/column_container.jpg 1024w, img/column_container-300x154.jpg 300w, img/column_container-768x395.jpg 768w" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                            <p>システムにおけるコンテナとは何かを簡単に表現するとこうなります。</p>
                            <div class="c-designbox">
                                <p>コンテナとは、<strong>アプリケーションを動作させるのに必要なライブラリやアプリケーションを１つにまとめたもの</strong></p>
                            </div>
                            <p>もう少し具体的に説明するために、従来の方法とコンテナの何が違うのか、進化の歴史も簡単に紹介します。</p>
                            <p><strong>かなり昔</strong><br>
                                昔は物理サーバー上でアプリケーションを実行させていました。ひとつのサーバー上で複数のアプリケーションを実行させた場合、多くのリソースを消費するアプリケーションがあると、他のアプリケーションのパフォーマンスが低下してしまいます。それぞれのアプリケーションを別々の物理サーバーで動かせばこの問題は解決できますが、その維持には多くのコストがかかります。</p>
                            <p><strong>ちょっと昔（従来の仮想化技術）</strong><br>
                                1台の物理サーバー上で、複数の仮想マシン(VM)を実行させる仮想化技術が生まれ、サーバーのリソースを効率的に使用できるようになりました（複数のアプリケーションを実行させた場合のパフォーマンスを心配しなくてよくなった）。<br>
                                各VMは、「仮想ハードウェア」上で「各自の仮想OS」を持つため、仮想ではありますがそれぞれが「完全なマシン」として動きます。</p>
                            <p><strong>コンテナを使った仮想化技術</strong><br>
                                「ちょっと昔」のVMと似ていますが、コンテナは「各自のOS 」を持たず、アプリケーション間でOSを共有する仮想化技術です。仮想環境内でOSを動かす必要がないため、VMと比較してコンテナは軽量だといわれます。<br>
                                そして最初に書いたようにコンテナはアプリケーションを動作させるのに必要なものが１つにまとめられているので、扱いがとても簡単になります。</p>
                            <p><img src="./Kubernetesの基礎から実際に使ってわかったメリット・デメリットまで解説 _ NCDC株式会社_files/column_K8s_1.png" alt="" width="1200" height="599" class="aligncenter size-full wp-image-6928"
                                    srcset="img/column_K8s_1.png 1200w, img/column_K8s_1-300x150.png 300w, img/column_K8s_1-768x383.png 768w, img/column_K8s_1-1024x511.png 1024w"
                                    sizes="(max-width: 1200px) 100vw, 1200px"></p>
                            <h5>コンテナのメリット</h5>
                            <ul style="    margin-left: 2em;">
                                <li><strong>環境構築に要する時間の削減</strong><br>
                                    事前にコンテナイメージを作っておけば、イメージを動かすだけですぐに環境を作ることができます。
                                </li>
                                <li><strong>本番運用における、環境要因によるトラブルの減少</strong><br>
                                    開発環境と本番環境が異なるハードウェアでも、同じイメージを使えば同じ動作をします。
                                </li>
                                <li><strong>障害時の復旧が早い</strong><br>
                                    保存したイメージから新しいコンテナを作ればすぐに復旧できます。
                                </li>
                            </ul>
                        </div>
                        <div class="center_3">
                            <hr>
                            <h2>事例紹介</h2>
                            <hr>
                            <div class="item-box">
                                <div class="item-box_imageContainer">
                                    <div class="tagList-module"></div>
                                </div>
                                <div class="item-box_content"><h3><a class="item-box_title" href="case_website_renewal.php" target="_blank">ブレーカーシス公式サイト</a></h3>
                                    <div class="intro"> 社内研修プロジェクトとして、Webサイトをはじめに、新技術を活用するブレーカーシス研修システムを再構築しました。
                                        Webサイトや各研修プロジェクトアプリをコンテナ化し、自動化コンテナ管理プラットフォームであるKubernetes (K8s)を導入しました。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        

    </div>
    
    <hr>
<form class="contact-validation-active" id="contact-form-main" method="post" novalidate="novalidate">
<input class="form-control"  name="type" type="hidden" value="自動化コンテナプラットフォーム">
<?php include("./public/inquiry.php"); ?>
</form>
    
    

    
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