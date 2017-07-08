@include('frontpagelayouts.init')
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

        <!-- Navigation -->
        @include('frontpagelayouts.header')

        <!-- Main view  -->
        @yield('content')

        <!-- Footer -->
        @include('frontpagelayouts.footer')
     
    </div>
    <!-- inject:js -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>
    <script src="assets/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/easing/jquery.easing.1.3.js"></script>
    <script src="assets/vendor/flex-slider/jquery.flexslider-min.js"></script>
    <script src="assets/vendor/images-loaded/imagesloaded.js"></script>
    <script src="assets/vendor/isotope/jquery.isotope.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/menuzord/menuzord.js"></script>
    <script src="assets/vendor/nav/jquery.nav.js"></script>
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/smooth/smooth.js"></script>
    <script src="assets/vendor/sticky/jquery.sticky.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- endinject -->
  </body>
</html>