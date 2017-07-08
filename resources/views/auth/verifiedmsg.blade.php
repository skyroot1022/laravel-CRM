<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    
    <title>EG-Login</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>Encounters Group, Europe | Reinvent Connexions</title>    
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/shortcodes.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/default-theme.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="bg-gray" style="position:relative">
    <!--feature1-->
    <div class="login-page">
        <div class="post-img">
            <div class="bdr-overlay"></div>
            <div class="form">
                <p>We've just sent verification message to email. Please check your email. Thank you.</p>     
            </div>
        </div>
    </div>
    <!--feature1-->

    <!--feature3-->
    <div class="">
        <div class="social-link text-center social-link-fa">
            <a href="https://www.twitter.com/EncountersEU/"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/EncountersEU/"><i class="fa fa-facebook"></i></a>
            <a href="goo.gl/1jZFOO"><i class="fa fa-google"></i></a>
            <a href="https://www.instagram.com/EncountersEU/"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!--feature3-->
    
</body>
</html>