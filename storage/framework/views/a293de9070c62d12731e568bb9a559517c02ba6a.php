
<?php echo $__env->make('index.init', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <!--favicon icon-->
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <title>Encounters Group, Europe | Reinvent Connexions</title>
    <!--common style-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet"> -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="/assets/vendor/iconmoon/linea-icon.css">
    <link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/assets/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/vendor/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/shortcodes.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/default-theme.css">
    <link rel="stylesheet" href="/assets/css/accordion.css">
    <!-- endinject -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/backward/html5shiv.js"></script>
    <script src="assets/vendor/backward/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--  preloader start -->
    <div id="tb-preloader">
      <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->
    <div class="wrapper">

      <!--header start-->
      <header class="l-header l-header_overlay">
        <div class="l-navbar l-navbar_expand l-navbar_t-light-trans js-navbar-sticky">
          <div class="container">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">
              <!--logo start-->
              <a href="index.html" class="logo-brand">
                <img class="" src="assets/img/mark.png" alt="M">
              </a>
              <!--logo end-->
              <!--mega menu start-->
              <ul style="min-width:82%" class="menuzord-menu menuzord-right c-nav_s-standard">
                <li class="<?php echo isActive('index', $page) ?>"><a href="index.php">home</a>
                </li>
                <li class="<?php echo isActive('aboutus', $page) ?>"><a href="aboutus.php">about us</a>
                </li>
                <li class="<?php echo isActive('services', $page) ?>"><a href="services.php">Our services</a>
                </li>                
                <li class="<?php echo isActive('newsroom', $page) ?>"><a href="newsroom.php">News room</a>
                </li>
                <li class="<?php echo isActive('contact', $page) ?>"><a href="contact.php">contact us</a>
                </li>
                <!--<li class=""><a href="login.php">Log in</a>
                </li>
                <li class=""><a href="register.php">register</a>
                </li>-->
                <li class="pull-right hidden-xs">
                  <a href="javascript:void(0)" class="hide-plus"><i class="fa fa-search theme-color"></i></a>
                  <div class="megamenu megamenu-quarter-width navbar-search">
                    <form role="searchform">
                      <input type="text" class="form-control" placeholder="Search Here">
                    </form>
                  </div>
                </li>
                <li class="btn-login pull-right">
                  <a href="login.php">
                    <button href="#" class="btn btn-extra-small  btn-theme-border-color">Connexion / Inscription</button>
                  </a>
                </li>
              </ul>
              <!--mega menu end-->
            </nav>
          </div>
        </div>
      </header>
      <!--header end-->