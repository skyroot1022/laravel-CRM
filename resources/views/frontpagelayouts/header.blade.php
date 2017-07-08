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
          <li class="<?php echo isActive('index', $page) ?>"><a href="{{ url('/') }}">home</a>
          </li>
          <li class="<?php echo isActive('aboutus', $page) ?>"><a href="{{ url('/aboutus') }}">about us</a>
          </li>
          <li class="<?php echo isActive('services', $page) ?>"><a href="{{ url('/services') }}">Our services</a>
          </li>                
          <li class="<?php echo isActive('newsroom', $page) ?>"><a href="{{ url('/newsroom') }}">News room</a>
          </li>
          <li class="<?php echo isActive('contact', $page) ?>"><a href="{{ url('/contactus') }}">contact us</a>
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
            <a href="{{ route('login') }}">
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