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
                  <h3 class="sb-mb-15">Filiallar</h3>
                  <p class="sb-text"><a href="" onclick='window.open("https://www.google.com/maps/place/1+Mardanov+Gardashlary,+Bakı/@40.3726582,49.8402829,20z/data=!4m13!1m7!3m6!1s0x40307db037c2c653:0x6447af8b2b770a81!2s1+Mardanov+Gardashlary,+Bakı!3b1!8m2!3d40.3726556!4d49.8404817!3m4!1s0x40307db037c2c653:0x6447af8b2b770a81!8m2!3d40.3726556!4d49.8404817");return false;'>📍Mərdanov qardaşları. 1/5</a></p>
                  <p class="sb-text"><a href="" onclick='window.open("https://www.google.com/maps/place/69+İstiqlaliyyət+Küçəsi,+Bakı+1000,+Azərbaycan/@40.3694226,49.8364531,19.46z/data=!4m5!3m4!1s0x40307db6c36b07ed:0xf18e44a1e0d571eb!8m2!3d40.3695114!4d49.8365803");return false;'>📍İstiqlaliyyət. 69</a></p>
                  <p class="sb-text"><a href="" onclick='window.open("https://www.google.com/maps/place/52+Ağa+Nemətulla,+Bakı+1033,+Azərbaycan/@40.3989179,49.8742794,17z/data=!3m1!4b1!4m5!3m4!1s0x40307d37d74ac46f:0x96ec95df68aa23b8!8m2!3d40.3989138!4d49.8764681");return false;'>📍Ağa Nemətulla. 52</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">02</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Nömrə</h3>
                  <p class="sb-text"><a href="" onclick='window.open("tel:+994997670019");return false;'>📱099 767 00 19</a></p>
                  <p class="sb-text"><a href="" onclick='window.open("tel:+994779111919");return false;'>📱077 911 19 19</a></p>
                  <p class="sb-text"><a href="" onclick='window.open("tel:+994779111919");return false;'>📱099 797 00 19</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">03</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Email</h3>
                  <p class="sb-text"><a href="" onclick='window.open("mailto:info@tendirmendir.az");return false;'>info@tendirmendir.az</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact info end -->
<?php include "footer.php"; ?>