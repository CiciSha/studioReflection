<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reflection Studio Member</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/icomoon/style.css") ?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/magnific-popup.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.theme.default.min.css") ?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/lightgallery.min.css") ?>">    
    
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-datepicker.css") ?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/flaticon/font/flaticon.css") ?>">
    
    <link rel="stylesheet" href="<?php echo base_url("assets/css/swiper.css") ?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/aos.css") ?>">

    <link rel="stylesheet" href="<?php echo base_url("assets/css/style_member.css") ?>">
    
  </head>

  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    

    <!-- bagian untuk navbar -->
    <header class="site-navbar py-3" role="banner">
      
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0">
              <img src="<?php echo base_url("assets/image/logo reflection.png") ?>" style="max-width: 50%;">
              <!-- <a href="index.html" class="text-black h2 mb-0">Reflection<span class="text-primary">.</span></a></h1> -->
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="<?php echo base_url("member/home") ?>">Beranda</a></li>

                <li class="has-children">
                  <a href="single.html" >Paket</a>
                  <ul class="dropdown">
                    <li><a href="#">Graduation & Family</a></li>
                    <li><a href="#">Maternity & Baby</a></li>
                    <li><a href="#">Personal</a></li>
                    <li><a href="#">Couple</a></li>
                    <li><a href="#">Group</a></li>
                    <li><a href="#">Pas Foto</a></li>
                    <li><a href="#">Prewedding Indoor</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url("member/tentang") ?>">Tentang</a></li>
                <li><a href="services.html">Konfirmasi Pembayaran</a></li>
                

              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                
              <?php if (isset($_SESSION['member'])): ?>
                  <div class="row">
                    <li class="col-md-6">
                  <a href="<?php echo base_url("member/member") ?>">
                    <img src="<?php echo base_url("./assets/image/icon/user (1).png") ?>" style="max-width: 25%;" alt="">
                    <?php echo $_SESSION['member']['nama_member']; ?>
                  </a>
                </li>

                <li class="col-md-6" style="padding-right: 0px">
                  <a href="<?php echo base_url("member/home/logout") ?>">
                    <img src="<?php echo base_url('./assets/image/icon/user (2).png') ?>" style="max-width: 25%;" alt="">
                   Logout
                  </a>
                </li>
                  </div>
                
              <?php else: ?>
                  <li>
                  <a href="<?php echo base_url("member/registrasi") ?>" class="pl-0 pr-3"> 
                    <img src="<?php echo base_url("assets/image/icon/sign-up.png") ?>" style="max-width: 35%;" alt="">
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url("login") ?>" class="pl-3 pr-3">
                    <img src="<?php echo base_url("assets/image/icon/user.png") ?>" style="max-width: 35%;" alt="">
                  </a>
                </li>
                
              <?php endif ?>

              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
