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
                                        <li><a href="<?=LINK?>/menu.php?get=clopos1">TendirMendir Tarqovi</a></li>
                                        <li><a href="<?=LINK?>/menu.php?get=clopos2">TendirMendir İçərişəhər</a></li>
                                        <li><a href="<?=LINK?>/menu.php?get=clopos3">TendirMendir Nərimanov</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="delivery.php">Çatdırılma</a>
                                </li>
                                <!-- <li>
                                    <a href="rezerv.php">Rezervasiya</a>
                                </li> -->
                                <li>
                                    <a href="about.php">Haqqımızda</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="sb-buttons-frame">
                            <!-- button -->
                            <!-- <div class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                                <span class="sb-icon">
                                <a href="" onclick='window.open("tel:*0019");return false;'><b>*0019</b></a>
                                </span>
                            </div> -->
                           <!-- button end -->
                            <!-- menu btn -->
                            <div class="sb-menu-btn"><span></span></div>
                            <!-- info btn -->
                            <div class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                            <div class="sb-info-btn">Əlaqə</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- info bar -->
            <div class="sb-info-bar">
                <div class="sb-infobar-content">
                    <div class="sb-ib-title-frame sb-mb-30">
                        <h4> Filiallar :</h4><i class="fas fa-arrow-down"></i>
                    </div>
                    <ul class="sb-list sb-mb-30">
                        <li><b>Tarqovi :</b>📍Mərdanov qardaşları. 1/5<br/>📱099 767 00 19 <br/> ⏲ 09:00 - 00:00 </li>
                        <li><b>İçəri şəhər :</b>📍İstiqlaliyyət. 69<br/>📱077 911 19 19 <br/> ⏲ 09:00 - 00:00</li>
                        <li><b>N. Nərimanov :</b>📍Ağa Nemətulla. 52<br/>📱099 797 00 19 <br/> ⏲ 09:00 - 00:00</li>
                        <!-- <li><b>İş saatları:</b><span>09:00 - 00:00</span></li><br/> -->
                        <div class="sb-ib-title-frame sb-mb-30">
                        <h4> Əlaqə :</h4><i class="fas fa-arrow-down"></i>
                        </div>
                        <li><b>Çatdırılma:</b><span><a href="" onclick='window.open("tel:*0019");return false;'>*0019</a></span></li>
                        <li><b>Email:</b><span><a href="" onclick='window.open("mailto:info@tendirmendir.az");return false;'>info@tendirmendir.az</a></span></li>
                    </ul>
                    <hr>
                </div>
                <div class="sb-info-bar-footer">
                    <ul class="sb-social">
                        <li><a href="" onclick='window.open("https://www.facebook.com/tendirmendirbaku");return false;'><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="" onclick='window.open("https://www.instagram.com/tendirmendirbaku");return false;'><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- info bar end -->

        </div>
        <!-- top bar end -->