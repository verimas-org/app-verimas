              <footer class="text-center text-white small">
                <p class="mb--0 mb-2">Copyright © 2023 - <?php echo date('Y'); ?> Verimas</p>
                <p class="mb-0">maintenance:
                  <a rel="nofollow" href="mailto:admin@verimas.co.jp" class="tm-footer-link">admin@verimas.co.jp</a>
                </p>

                <p class="odometer" title="<?php echo $pageaccess_counter; ?>">
                  <?php echo $pageaccess_counter; ?>
              </p>


                <ul class="nav flex-row tm-social-links">
                <li class="nav-item">
                  <a href="https://facebook.com" class="nav-link tm-social-link" target="_sns">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://twitter.com" class="nav-link tm-social-link" target="_sns">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://www.instagram.com/" class="nav-link tm-social-link" target="_sns">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://linkedin.com" class="nav-link tm-social-link" target="_sns">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>

              <p class="mb--0 mb-2" style="color:#687693;font-size:12px">powered by Kubernetes.<br> container: <?php echo  getenv('HOSTNAME'); ?></p>
              </footer>
