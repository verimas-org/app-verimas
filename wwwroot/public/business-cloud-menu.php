<nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
              <div class="tm-brand-box">
                <div class="tm-double-border-1">
                  <div class="tm-double-border-2">
                    <h1 class="tm-brand"><A href="<?php echo $rooturl; ?>"><img src="img/logo-white.png" width="100%" title="株式会社ヴェリマス"></img></a>
                    </h1>
                  </div>
                </div>
              </div>

              <ul id="tmMainNav" class="nav flex-column text-uppercase text-left tm-main-nav">
                <li class="nav-item">
                  <a href="#summary" class="nav-link active">
                    <span class="d-inline-block mr-3">事業概要</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#cloudinfra" class="nav-link">
                    <span class="d-inline-block mr-3">クラウドインフラ</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#clouddev" class="nav-link">
                    <span class="d-inline-block mr-3">クラウド開発</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#cloudanalysis" class="nav-link">
                    <span class="d-inline-block mr-3">クラウド分析</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
              </ul>

              <?php include("./public/menu-footer.php"); ?>

            </div>
</nav>