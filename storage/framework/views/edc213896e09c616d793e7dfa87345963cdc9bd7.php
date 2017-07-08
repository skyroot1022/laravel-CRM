
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Encounters Group, Europe | Reinvent Connexions</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/shortcodes.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/default-theme.css">
    
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>

<body>
    <div class="p-lr-15">
        <div class="row bg-gray">
            <!--feature1-->
            <div class="col-xs-12 col-md-6">
                <div id="fullscreen-banner" class="full-banner vertical-align banner-signup"></div>            
            </div>
            <!--feature1-->

            <!--feature2-->
            <div class="col-xs-12 col-md-6">
                <div style="position:relative">
                    <div class="signup-page">
                        <div class="post-img">
                            <div class="bdr-overlay"></div>
                            <div class="form bg-gray">
                                <form id="main-contact-form" class="contact-form" name="contact-form" method="POST" action="<?php echo e(route('register')); ?>" role="form">
                                    <?php echo e(csrf_field()); ?>

                                    <div class=" subscribe-box p-tb-50 text-center">
                                        <h2 class="heading-semibold">Sign Up</h2>                    
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" required="required" placeholder="Name">      
                                            <?php if($errors->has('name')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastname" required="required" placeholder="Last Name">      
                                            <?php if($errors->has('lastname')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('lastname')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" required="required" placeholder="Email">
                                            <?php if($errors->has('email')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" required="required" placeholder="Password">
                                            <?php if($errors->has('password')): ?>
                                                <span class="help-block">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>  
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="required" placeholder="password-confirm">
                                        </div>   
                                        <!--<div class="form-group">
                                            <input type="text" class="form-control" required="required" placeholder="Birthday">
                                        </div>                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" required="required" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" required="required" placeholder="Postal Code">
                                        </div>                                                  -->
                                    </div>
                                    <div class="row">
                                        <div class="text-center p-top-30">
                                            <button type="submit" class="btn btn-small btn-theme-border-color text-uppercase btn-theme-submit">Sign Up</button>
                                        </div>
                                    </div>
                                    <div class="p-top-30">
                                        <p class="lh25 text-center">Protègez votre compte bancaire et ne payer que ce dont vous utilisez grace à un système</p>
                                    </div>
                                </form>            
                            </div>
                        </div>        
                    </div>
                    <div class="login-close bg-gray">
                        <a href="<?php echo e(url('/')); ?>">
                            <img src="assets/img/close1.png" alt="">
                        </a>
                    </div>
                    <div>
                        <div class="social-link text-center social-link-fa">
                            <a href="https://www.twitter.com/EncountersEU/"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/EncountersEU/"><i class="fa fa-facebook"></i></a>
                            <a href="goo.gl/1jZFOO"><i class="fa fa-google"></i></a>
                            <a href="https://www.instagram.com/EncountersEU/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--feature2-->
        </div>
    </div>
    <!--script-->
    <script src="assets/vendor/jquery/jquery-1.10.2.min.js"></script>    
    <script src="assets/vendor/images-loaded/imagesloaded.js"></script>    
    <script src="assets/vendor/menuzord/menuzord.js"></script>    
    <script src="assets/vendor/sticky/jquery.sticky.min.js"></script>    
    <script src="assets/js/scripts.js"></script>

</body>
</html>