<?php
// Cek apakah sesi sudah aktif sebelum memulai sesi
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}




?>

<!DOCTYPE html>
<html lang="en">
     <head>
        <title>EFG News Outlet</title>        
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?= BASEURL; ?>/front-assets/assets/img/favicon.png">
        <link rel="apple-touch-icon" href="<?= BASEURL; ?>/front-assets/assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= BASEURL; ?>/front-assets/assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= BASEURL; ?>/front-assets/assets/img/apple-touch-icon-114x114.png">
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="your_nonce_here"></script>
        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/core/bootstrap-3.3.7.min.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/core/animate.min.css">
        
        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/main/main.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/main/setting.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/main/hover.css">
        
        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/magnific/magic.min.css">        
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/magnific/magnific-popup.css">              
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/magnific/magnific-popup-zoom-gallery.css">
        
        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/owl-carousel/owl.transitions.css">
        
        <!-- Load Color CSS - Please uncomment to apply the color.
        =====================================      
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/blue.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/brown.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/cyan.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/dark.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/green.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/orange.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/purple.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/pink.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/red.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/yellow.css">-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/color/pasific.css">
        
        <!-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================       
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-arrows-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-basic-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-basic-elaboration-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-ecommerce-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-music-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-software-10.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/linea-weather-10.css">--> 
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/font-awesome.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/front-assets/assets/css/icon/et-line-font.css">
        
        <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">
        
        <!-- Page Loader
        ===================================== -->
		<div id="pageloader" class="bg-grad-animation-1">
			<div class="loader-item">
                <img src="<?= BASEURL; ?>/front-assets/assets/img/other/oval.svg" alt="page loader">
            </div>
		</div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <!-- Navigation Area
        ===================================== -->
        <nav class="navbar navbar-pasific navbar-mp navbar-standart megamenu navbar-fixed-top" style="border-bottom:1px solid #fff;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img src="<?= BASEURL; ?>/front-assets/assets/img/logo/logo-default.png" alt="logo">
                        EFG News Outlet
                    </a>
                </div>
        
                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="<?= BASEURL; ?>/" class="dropdown-toggle color-light">Home </a>
                        </li>
                        <li class="dropdown"><a href="<?= BASEURL; ?>/DashboardArtikel/AllPost" class="dropdown-toggle color-light">All Article</a>
                        </li>
                        <li class="dropdown"><a href="<?= BASEURL; ?>/DashboardArtikel/opini" class="dropdown-toggle color-light">Opini</a>
                        </li>
                        <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true): ?>
                            <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']): ?>
                                <li><a href="<?= BASEURL; ?>/dashboard">Dashboard </a>
                                </li>
                            <?php endif; ?>
                            <li class="dropdown"><a href="#" class="dropdown-toggle color-light" data-toggle="dropdown"> Hello <?= $_SESSION['username'] ?> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= BASEURL; ?>/auth/logout"  class="color-light">Logout </a>
                                    </li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <!-- Jika pengguna belum login -->
                            <li><a href="<?= BASEURL; ?>/auth">Login </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                
                </div>
            </div>
        </nav>