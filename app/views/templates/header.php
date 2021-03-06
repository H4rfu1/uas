<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?= BASEURL; ?>/assets/favicon.ico" type="image/x-icon" />

    <title><?= $data['judul']; ?></title>

    <!-- Custom fonts for this template -->
    <link href="<?= BASEURL; ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!--=== Bootstrap CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?= BASEURL; ?>/assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

      <!--== Preloader Area Start ==-->
      <div class="preloader">
          <div class="preloader-spinner">
              <div class="loader-content">
                  <img src="<?= BASEURL; ?>/assets/img/preloader.gif" alt="JSOFT">
              </div>
          </div>
      </div>
      <!--== Preloader Area End ==-->

      <!--== Header Area Start ==-->
      <header id="header-area" class="fixed-top">

          <!--== Header Bottom Start ==-->
          <div id="header-bottom">
              <div class="container">
                  <div class="row">
                      <!--== Logo Start ==-->
                      <div class="col-lg-4">
                          <a href="<?= BASEURL; ?>/home" class="logo">
                              <img src="<?= BASEURL; ?>/assets/img/logo.png" alt="JSOFT">
                          </a>
                      </div>
                      <!--== Logo End ==-->

                      <!--== Main Menu Start ==-->
                      <div class="col-lg-8 d-none d-xl-block">
                          <nav class="mainmenu alignright">
                              <ul>
                                  <li <?php if($data['judul']=='Home') echo 'class="active"'; ?>><a href="<?= BASEURL; ?>/home">Beranda</a></li>
                                  <li <?php if($data['judul']=='Pelayanan') echo 'class="active"'; ?>><a href="<?= BASEURL; ?>/pelayanan">Pelayanan</a></li>
                                  <li <?php if($data['judul']=='Daftar Mobil') echo 'class="active"'; ?>><a href="<?= BASEURL; ?>/listcar">Rental Mobil</a></li>
                                  <?php if(isset($_SESSION['role'])): ?>
                                    <li <?php if($data['judul']=='Profil') echo 'class="active"'; ?>><a href="<?= BASEURL; ?>/profil">Profil</a></li>
                                    <li <?php if($data['judul']=='Masuk') echo 'class="active"'; ?>><a href="<?= BASEURL; ?>/profil/logout">keluar</a></li>
                                  <?php endif; ?>
                                  <?php if(!isset($_SESSION['role'])): ?>
                                    <li <?php if($data['judul']=='Masuk') echo 'class="active"'; ?>><a href="<?= BASEURL; ?>/masuk">Masuk</a></li>
                                  <?php endif; ?>
                              </ul>
                          </nav>
                      </div>
                      <!--== Main Menu End ==-->
                  </div>
              </div>
          </div>
          <!--== Header Bottom End ==-->
      </header>
      <!--== Header Area End ==-->
