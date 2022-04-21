<?php include "header.php"; ?>

    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">
      <!-- banner -->
      <section class="sb-banner sb-banner-color">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <span class="sb-suptitle sb-mb-30">Rezervasiya</span>
                  <h1 class="sb-mb-30">Restoranımızda yer rezerv etmək istəyirsinizsə sağdakı məlumatları doldurun.</h1>
                  <p class="sb-text sb-text-lg sb-mb-30">Məlumatları doldurduqdan sonra əməkdaşlarımız sizinlə əlaqə saxlayacaq!</p>
                  <ul class="sb-breadcrumbs">
                    <li><a href="index.php">Ana səhifə</a></li>
                    <li><a href="rezerv.php">Rezervasiya</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
            <div class="col-lg-5">
              <div class="sb-contact-form-frame">
                <div class="sb-illustration-9">
                  <img src="<?=LINK?>/assets/img/illustrations/reservation.png" alt="envelope" class="sb-envelope-1">
                  <div class="sb-cirkle-1"></div>
                  <div class="sb-cirkle-2"></div>
                  <div class="sb-cirkle-3"></div>
                </div>
                <div class="sb-form-content">
                  <div class="sb-main-content">
                    <h3 class="sb-mb-30">Rezervasiya Məlumatları</h3>
                    <form id="form">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="sb-group-input">
                            <input type="text" name="name" required>
                            <span class="sb-bar"></span>
                            <label>Ad və Soyad</label>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="sb-group-input">
                            <input type="tel" name="email" required>
                            <span class="sb-bar"></span>
                            <label>Əlaqə Nömrəsi</label>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="sb-group-input">
                            <input type="text" name="email" required>
                            <span class="sb-bar"></span>
                            <label>Hansı filial ?</label>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="sb-group-input">
                            <input type='text' name="date" data-language='en' class="datepicker-here sb-datepicker" data-timepicker="true" data-position="bottom left" required>
                            <span class="sb-bar"></span>
                            <label>Vaxt</label>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="sb-group-input">
                            <input type="number" name="preson" required>
                            <span class="sb-bar"></span>
                            <label>Neçə nəfər olacaq ?</label>
                          </div>
                        </div>
                      </div>
                      <!-- button -->
                      <button class="sb-btn sb-cf-submit sb-show-success">
                        <span class="sb-icon">
                          <img src="<?=LINK?>/assets/img/ui/icons/arrow.svg" alt="icon">
                        </span>
                        <span>Rezerv et</span>
                      </button>
                      <!-- button end -->
                    </form>
                  </div>
                  <div class="sb-success-result">
                    <img src="<?=LINK?>/assets/img/ui/success.jpg" alt="success" class="sb-mb-15">
                    <div class="sb-success-title sb-mb-15">Success!</div>
                    <p class="sb-text sb-mb-15">Your message has been sent <br>successfully</p>
                    <!-- button -->
                    <a href="home-1.html" class="sb-btn sb-btn-2">
                      <span class="sb-icon">
                        <img src="<?=LINK?>/assets/img/ui/icons/arrow-2.svg" alt="icon">
                      </span>
                      <span>Back to home</span>
                    </a>
                    <!-- button end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- contact info -->
      <section class="sb-p-90-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">01</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Ünvan</h3>
                  <p class="sb-text">Mərdanov qardaşları. 1/5</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">02</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Nömrə</h3>
                  <p class="sb-text">*0019</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">03</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Email</h3>
                  <p class="sb-text">info@tendirmendir.az</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact info end -->
<?php include "footer.php"; ?>