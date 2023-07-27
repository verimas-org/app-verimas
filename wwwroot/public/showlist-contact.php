<hr>
<h3 class="sidebar-title">Contact us</h3>
<div class="mb-5">
                  <div class="tm-contact-form-wrap">
                    <form action="contact-send.php" id="contact-form-main" method="POST" class="tm-contact-form">
                        <input type="hidden" id="contact_type" name="contact_type" value="<?php echo $contacttype; ?>" />
                        <div class="form-group">
                          <input type="text" id="contact_name" name="contact_name" class="form-control rounded-1 border-top-1 border-right-1 border-left-1" placeholder="お名前*" required="" />
                        </div>
                        <div class="form-group">
                          <input type="email" id="contact_email" name="contact_email" class="form-control rounded-1 border-top-1 border-right-1 border-left-1" placeholder="Email*" required="" />
                        </div>
                        <div class="form-group">
                          <input type="tel" id="contact_phone" name="contact_phone" class="form-control rounded-1 border-top-1 border-right-1 border-left-1" placeholder="電話番号" />
                        </div>
                        <div class="form-group">
                          <textarea rows="8" id="contact_message" name="contact_message" class="form-control rounded-1 border-top-1 border-right-1 border-left-1" placeholder="問い合わせ内容..." required=""></textarea>
                        </div>

                        <div class="form-group mb-0">
                          <button type="submit" class="btn rounded-1 d-block ml-auto tm-btn-primary">
                            送　信
                          </button>
                        </div>
                      </form>
                  </div>
</div>
<script src="js/script.js?vtime=<?php echo date('YmdHis'); ?>"></script>
