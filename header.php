<?php require "system/appController.php"; ?>
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#e25053">
    <!-- favicon  -->
    <link rel="shortcut icon" href="<?=LINK?>/assets/img/ui/logo.ico" type="image/x-icon">
    <!-- font awesome css -->
    <link rel="stylesheet" href="<?=LINK?>/assets/css/plugins/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?=LINK?>/assets/css/plugins/bootstrap.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="<?=LINK?>/assets/css/plugins/swiper.min.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="<?=LINK?>/assets/css/plugins/datepicker.css">
    <!-- mapbox css -->
    <link href="<?=LINK?>/assets/css/plugins/mapbox-style.css" rel='stylesheet'>
    <!-- fancybox css -->
    <link rel="stylesheet" href="<?=LINK?>/assets/css/plugins/fancybox.min.css">
    <!-- TendirMendir css -->
    <link rel="stylesheet" href="<?=LINK?>/assets/css/style.css">
    <!-- page title -->
    <title><?=TITLE?></title>
</head>

<body>
    <!-- app wrapper -->
    <div class="sb-app">
        <!-- preloader -->
        <div class="sb-preloader">
            <div class="sb-preloader-bg"></div>
            <div class="sb-preloader-body">
                <div class="sb-loading">
                    <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>
                </div>
                <div class="sb-loading-bar">
                    <div class="sb-bar"></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <!-- click effect -->
        <div class="sb-click-effect"></div>
        <!-- loader -->
        <div class="sb-load"></div>
        <!-- top bar -->
        <div class="sb-top-bar-frame">
            <div class="sb-top-bar-bg"></div>
            <div class="container">
                <div class="sb-top-bar">
                    <a href="index.php" class="sb-logo-frame">
                        <!-- logo img -->
                        <img src="<?=LINK?>/assets/img/ui/logo.png" width="325" height="125" alt="TendirMendir">
                    </a>
                    <!-- menu -->
                    <div class="sb-right-side">
                        <nav id="sb-dynamic-menu" class="sb-menu-transition">
                            <ul class="sb-navigation">
                                <li class="sb-has-children">
                                    <a href="index.php">Ana Səhifə</a>
                                </li>
                                <li class="sb-has-children">
                                    <a href="#">Menyu</a>
                                    <ul>
                                        <li><a href="<?=LINK?>/menu.php?get=clopos1">Tendir Mendir 1</a></li>
                                        <li><a href="<?=LINK?>/menu.php?get=clopos2">Tendir Mendir 2</a></li>
                                        <li><a href="<?=LINK?>/menu.php?get=clopos3">Tendir Mendir 3</a></li>
                                    </ul>
                                </li>
                                <li class="sb-has-children">
                                    <a href="#">Wolt Menyu</a>
                                    <ul>
                                        <li><a href="<?=LINK?>/menu.php?get=wolt1">Tendir Mendir 1</a></li>
                                        <li><a href="<?=LINK?>/menu.php?get=wolt2">Tendir Mendir 2</a></li>
                                        <li><a href="<?=LINK?>/menu.php?get=wolt3">Tendir Mendir 3</a></li>
                                    </ul>
                                </li>
                                <li class="sb-has-children">
                                    <a href="#">Bolt Menyu</a>
                                    <ul>
                                        <li><a href="<?=LINK?>/menu.php?get=bolt1">Tendir Mendir 1</a></li>
                                        <li><a href="<?=LINK?>/menu.php?get=bolt2">Tendir Mendir 2</a></li>
                                        <li><a href="<?=LINK?>/menu.php?get=bolt3">Tendir Mendir 3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="rezerv.php">Rezervasiya</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="sb-buttons-frame">
                            <!-- button -->
                            <div class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                                <span class="sb-icon">
                                  <a href="reviews.php"><img src="<?=LINK?>/assets/img/ui/icons/dialog.svg" alt="icon"></a>
                                </span>
                            </div>
                           <!-- button end -->
                            <!-- menu btn -->
                            <div class="sb-menu-btn"><span></span></div>
                            <!-- info btn -->
                            <div class="sb-info-btn"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- info bar -->
            <div class="sb-info-bar">
                <div class="sb-infobar-content">
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Contact</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <ul class="sb-list sb-mb-30">
                        <li><b>Address:</b><span>Montréal, 1510 Rue Sauvé</span></li>
                        <li><b>Working hours:</b><span>09:00 - 23:00</span></li>
                        <li><b>Phone:</b><span>+02 (044) 756-X6-52</span></li>
                        <li><b>Email:</b><span>TendirMendir@mail.com</span></li>
                    </ul>
                    <hr>

                </div>
                <div class="sb-info-bar-footer">
                    <ul class="sb-social">
                        <li><a href="https://facebook.com/tendirmendirbaku"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://instagram.com/tendirmendirbbaku"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- info bar end -->
            <!-- minicart -->
            <div class="sb-minicart">
                <div class="sb-minicart-content">
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4>Your order.</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="<?=LINK?>/assets/img/menu/4.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Saumon Gravlax</h4>
                            <div class="sb-price"><sub>$</sub> 9</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="<?=LINK?>/assets/img/menu/1.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Chevrefrit au miel</h4>
                            <div class="sb-price"><sub>$</sub> 14</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="<?=LINK?>/assets/img/menu/2.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Croustillant de poisson</h4>
                            <div class="sb-price"><sub>$</sub> 4</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="<?=LINK?>/assets/img/menu/3.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Stracciatella</h4>
                            <div class="sb-price"><sub>$</sub> 11</div>
                        </div>
                    </a>
                    <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                        <div class="sb-cover-frame">
                            <img src="<?=LINK?>/assets/img/menu/5.jpg" alt="product">
                        </div>
                        <div class="sb-card-tp">
                            <h4 class="sb-card-title">Carpaccio de daurade</h4>
                            <div class="sb-price"><sub>$</sub> 19</div>
                        </div>
                    </a>
                </div>
                <div class="sb-minicart-footer">
                    <!-- button -->
                    <a href="cart.html" class="sb-btn sb-btn-gray sb-btn-text">
                        <span>View order</span>
                    </a>
                    <!-- button end -->
                    <!-- button -->
                    <a href="checkout.html" class="sb-btn sb-btn-text">
                        <span>Checkout</span>
                    </a>
                    <!-- button end -->
                </div>
            </div>
            <!-- minicart end -->
        </div>
        <!-- top bar end -->