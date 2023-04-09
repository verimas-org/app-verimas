<style>
    @media all and (orientation:portrait){
        /*竖屏*/

    }
</style>
<!-- start site-footer -->
<footer class="site-footer">

    <div class="lower-footer">
        <div class="container">
            <div class="row display-flex">
                <div class="col-md-6 col-sm-6 col-xs-12" style="    width: 100%;">
                    <p class="copyright">
                    <h5 style="color:black ;text-align:center">Copyright © 2019 - <?php echo date('Y'); ?> 株式会社ブレーカーシス All Rights Reserved. </h5>
                    </p>
                </div><!-- /col -->
            </div>

        </div>
        <div style="display:block;float:right;margin-top:-34px;color:gray">
            <h6 style="color:#687693;font-size:12px">contact us:<a style="color:#687693;" href=mailto:admin@bk-sys.co.jp>admin@bk-sys.co.jp</a>　powered by Kubernetes, Docker engine. Node: <?php echo  getenv('HOSTNAME'); ?>
            <?php if (!empty(getenv('BKSYSDEVMODE'))) { echo "　開発版"; } ?>
            </h6>
        </div>
    </div>
</footer>
<!-- end site-footer -->
