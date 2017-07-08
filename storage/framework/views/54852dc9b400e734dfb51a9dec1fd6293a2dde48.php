<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    
    <title>EG-Login</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Encounters Group, Europe | Reinvent Connexions</title>    
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

<body class="bg-gray" style="position:relative">
    <!--feature1-->
    <div class="login-page">
        <div class="post-img">
            <div class="bdr-overlay"></div>
            <div class="form">
                <form id="main-contact-form" class="contact-form" name="contact-form" method="POST" action="<?php echo e(route('login')); ?>" role="form">
                    <?php echo e(csrf_field()); ?>


                    <div class=" subscribe-box p-tb-50 text-center">
                        <h2 class="heading-semibold">Log in</h2>                    
                    </div>
                    <div class="row">
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <input id="email" type="email" class="form-control" name="email" required="required" placeholder="Email">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group">
                            <input id="password" type="password" class="form-control" name="password" required="required" placeholder="Password">
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>       

                    <div class="form-group">
                        <div class="checkbox">
                            <label class="float-left">
                                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                            </label>
                            <div class="float-right">
                                <a class="right-align" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="text-center p-top-30">
                            <button type="submit" class="btn btn-small btn-theme-border-color text-uppercase btn-theme-submit">log in</button>                            
                        </div>                        
                    </div>
                    <div class="p-top-30">
                        <p class="lh25 text-center">Protègez votre compte bancaire et ne payer que ce dont vous utilisez grace à un système</p>
                    </div>

                    <p> Do you have an account?&nbsp&nbsp&nbsp<a href="<?php echo e(route('register')); ?>">Sign up</a></p>                    
                </form>            
            </div>
        </div>
    </div>
    <!--feature1-->

    <!--feature2-->
    <div class="login-close bg-gray">
        <a href="<?php echo e(url('/')); ?>">
            <img src="assets/img/close1.png" alt="">
        </a>
    </div>
    <!--feature2-->

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
    
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>