<div class="tm-section-wrap bg-light">
            <section id="contact" class="row tm-section">
                <div class="col-xl-5 mb-5">
                  <div class="tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <h2 class="tm-color-primary tm-section-title mb-4">問い合わせフォーム</h2>
                        <p class="mb-4">
                          個人情報の取り扱いについてお客様からお寄せいただいた情報は、お問い合わせへのご回答のためにのみ使用し、その他の目的で使用したり、無断で第三者へ提供することはございません。
                        </p>
                        <p class="mb-3">
                          お客様からお寄せいただいた情報に基づき、当社より電話、e-mail 等でご連絡差し上げる場合がございますのであらかじめご承知願います。
                        </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-7 mb-5">
                  <div class="tm-contact-form-wrap">
                    <form action="contact-send.php" id="contact-form-main" method="POST" class="tm-contact-form">
                        <input type="hidden" id="contact_type" name="contact_type" value="ホームページ問い合わせ" />
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
              </section>
          </div>
<script src="js/script.js?vtime=<?php echo date('YmdHis'); ?>"></script>
