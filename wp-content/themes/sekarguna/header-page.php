<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="PT. Sekarguna Medika is a medical equipment distributor company with nationwide coverage. The company established in 1991, and currently is a single representative of 18 international leading brands of medical equipment. Our product varied from home care unit to hospital or institution medical equipment.">
  <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no">

  <?php if (is_singular()) echo '<link rel="canonical" href="' . get_permalink() . '" />'; ?>

  <!-- Schema Markup -->
  <?php
  $schema = get_post_meta(get_the_ID(), 'Home Scema', true);
  if (!empty($schema)) {
    echo $schema;
  }
  ?>
  <!-- END Schema Markup -->

  <link rel="alternate" href="<?= get_permalink(); ?>" hreflang="en" />

  <!-- Favicon-->
  <link rel="shortcut icon" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/favicon.ico'; ?>">
  <link rel="apple-touch-icon" sizes="57x57" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/apple-icon-57x57.png'; ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/apple-icon-60x60.png'; ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/apple-icon-72x72.png'; ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/apple-icon-76x76.png'; ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/apple-icon-114x114.png'; ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/apple-icon-120x120.png'; ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/apple-icon-144x144.png'; ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/apple-icon-152x152.png'; ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/apple-icon-180x180.png'; ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/android-icon-192x192.png'; ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/favicon-32x32.png'; ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/favicon-96x96.png'; ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/favicon-16x16.png'; ?>">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri() . '/assets/favicons/manifest.json'; ?>">

  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?= get_stylesheet_directory_uri() . '/assets/favicons/ms-icon-144x144.png'; ?>"><!-- PWA primary color-->

  <!-- Pada Google Chrome, Firefox & Opera -->
  <meta name="theme-color" content="#2E7D32">
  <!-- Pada Safari iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#2E7D32">
  <!-- Pada Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#2E7D32">

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Facebook-->
  <meta property="author" content="PT. Sekarguna Medika">
  <meta property="og:site_name" content="sekarguna.co.id">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">

  <!-- Twitter-->
  <meta property="twitter:site" content="sekarguna.co.id">
  <meta property="twitter:domain" content="sekarguna.co.id">
  <meta property="twitter:creator" content="Team IT PT. Sekarguna Medika">
  <meta property="twitter:card" content="summary">
  <meta property="twitter:image:src" content="<?= get_stylesheet_directory_uri() . '/assets/images/HO Sekarguna.jpg'; ?>">
  <meta property="og:url" content="sekarguna.co.id">
  <meta property="og:title" content="PT. Sekarguna Medika | We Serve with Love">
  <meta property="og:description" content="PT. Sekarguna Medika is a medical equipment distributor company with nationwide coverage. The company established in 1991, and currently is a single representative of 18 international leading brands of medical equipment. Our product varied from home care unit to hospital or institution medical equipment.">
  <meta name="twitter:site" content="sekarguna.co.id">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="<?= get_stylesheet_directory_uri() . '/assets/images/HO Sekarguna.jpg'; ?>">
  <meta property="og:image" content="<?= get_stylesheet_directory_uri() . '/assets/images/HO Sekarguna.jpg'; ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <title><?php echo is_front_page() ? get_bloginfo('name') : wp_title(''); ?> | <?= get_bloginfo('description'); ?></title>


  <!-- Styles-->
  <!-- Put the 3rd/plugins css here-->
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/vendors/normalize.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/vendors/bootstrap.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/vendors/jquery.youtubebackground.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/vendors/materialize.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/vendors/hamburger-menu.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/vendors/animate.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/vendors/animate-extends.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/vendors/slick-carousel/slick.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/vendors/slick-carousel/slick-theme.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/styles.css'; ?>" rel="stylesheet">
  <link href="<?= get_stylesheet_directory_uri() . '/assets/css/develop.css?ver=' . rand(1, 999999999); ?>" rel="stylesheet">

  <!--Floating WhatsApp css-->
  <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-8JYGC2T9GR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-8JYGC2T9GR');
  </script>

  <meta name="google-site-verification" content="p0oOUhW5wc_KNwFmbRUq_HtOZBF4LsPgeB4iGZfA3R0" />

</head>


<body <?php body_class(); ?>>
  <div id="preloader" style="position: fixed; z-index: 10000; background: #fafafa; width: 100%; height: 100%"><img style="opacity: 0.5; position: fixed; top: calc(50% - 50px); left: calc(50% - 50px)" src="<?= get_stylesheet_directory_uri() . '/assets/images/loading.gif'; ?>" alt="loading"></div>
  <div class="m-application theme--light transition-page" id="app">
    <div class="loading"></div>
    <div class="m-content fresh money-var" id="main-wrap">
      <div>
        <div id="home"></div>
        <div class="main-wrap">
          <!-- ##### PARALLAX DOTS #####-->
          <div class="parallax-dot-home">
            <div class="parallax-wrap dots-wrap">
              <div class="inner-parallax">
                <div class="figure">
                  <div>
                    <div data-enllax-ratio="0.2" data-enllax-type="foreground">
                      <img src="<?= get_stylesheet_directory_uri() . '/assets/images/decoration/dot-deco.svg'; ?>" alt="dot deco" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- ##### END PARALLAX DOTS #####-->
          <!-- ##### HEADER #####-->
          <!-- #### HEADER ####-->
          <div class="sidenav mobile-nav" id="slide-menu">
            <ul class="collection">
              <li class="collection-item" style="animation-duration: 0.25s">
                <a class="waves-effect menu-list" href="<?= get_home_url(); ?>">home</a>
              </li>
              <li class="collection-item" style="animation-duration: 0.5s">
                <a class="waves-effect menu-list">Media</a>
                <ul class="sub-menu-mobile">
                  <li><a href="<?= get_home_url(); ?>/magazine">Magazine</a></li>
                  <li><a href="<?= get_home_url(); ?>/videos">Video</a></li>
                  <li><a href="<?= get_home_url(); ?>/epapers">ePapers</a></li>
                </ul>
              </li>
              <li class="collection-item" style="animation-duration: 0.75s">
                <a class="waves-effect menu-list">Company</a>
                <ul class="sub-menu-mobile">
                  <li><a href="<?= get_home_url(); ?>/company">Company profile</a></li>
                  <li><a href="<?= get_home_url(); ?>/outlets">Outlets</a></li>
                  <li><a href="<?= get_home_url(); ?>/all-products">Our Principle</a></li>
                  <li><a href="<?= get_home_url(); ?>/our-clients">Our Clients</a></li>
                </ul>
              </li>
              <li class="collection-item" style="animation-duration: 1.25s">
                <a class="waves-effect menu-list">HRD</a>
                <ul class="sub-menu-mobile">
                  <li><a href="<?= get_home_url(); ?>/hrd">HR Recruitment</a></li>
                  <li><a href="<?= get_home_url(); ?>/job">Career</a></li>
                </ul>
              </li>
              <li class="collection-item" style="animation-duration: 1.50s">
                <a class="waves-effect menu-list">Products</a>
                <ul class="sub-menu-mobile">
                  <li><a href="<?= get_home_url(); ?>/all-products">All Products</a></li>
                  <li><a href="https://university.myalkes.com/login">E - Learning</a></li>
                  <li><a href="https://myalkes.com/">E - Commerce</a></li>
                </ul>
              </li>
              <li class="collection-item" style="animation-duration: 1.75s">
                <a class="waves-effect menu-list" href="<?= get_home_url(); ?>/contact">Contact</a>
              </li>
            </ul>
          </div>
          <!-- #### END HEADER ####-->
          <header class="app-bar header" id="header">
            <div class="container">
              <div class="header-content">
                <nav class="nav-logo">
                  <button class="mobile-menu btn-icon waves-effect hamburger hamburger--spin show-sm-down" id="mobile_menu" type="button">
                    <span class="hamburger-box"><span class="bar hamburger-inner"></span></span>
                  </button>
                  <div class="logo scrollnav">
                    <a href="<?= get_home_url(); ?>"><img src="<?= get_stylesheet_directory_uri() . '/assets/images/logo-sekarguna.png'; ?>" alt="logo" />Sekarguna Medika</a>
                  </div>
                </nav>
                <nav class="nav-menu">
                  <div class="scrollactive-nav show-md-up scrollnav">
                    <ul>
                      <li class="menu-dropdown">
                        <a class="btn btn-flat anchor-link waves-effect">Media</a>
                        <div class="dropdown-content">
                          <a href="<?= get_home_url(); ?>/magazine">Magazine</a>
                          <a href="<?= get_home_url(); ?>/videos">Video</a>
                          <a href="<?= get_home_url(); ?>/epapers">ePapers</a>
                        </div>
                      </li>
                      <li class="menu-dropdown">
                        <a class="btn btn-flat anchor-link waves-effect">Company</a>
                        <div class="dropdown-content">
                          <a href="<?= get_home_url(); ?>/company">Company profile</a>
                          <!-- <a href="<?= get_home_url(); ?>/company">Company history</a>
                          <a href="<?= get_home_url(); ?>/company">Quality and safety</a>
                          <a href="<?= get_home_url(); ?>/company">Awards</a> -->
                          <a href="<?= get_home_url(); ?>/outlets">Outlets</a>
                          <a href="<?= get_home_url(); ?>/all-products">Our Principle</a>
                          <a href="<?= get_home_url(); ?>/our-clients">Our Clients</a>
                        </div>
                      </li>
                      <li class="menu-dropdown">
                        <a class="btn btn-flat anchor-link waves-effect">HRD</a>
                        <div class="dropdown-content">
                          <a href="<?= get_home_url(); ?>/hrd">HR Recruitment</a>
                          <a href="<?= get_home_url(); ?>/job">Career</a>
                          <!-- <a href="<?= get_home_url(); ?>/videos">Video</a>
                          <a href="<?= get_home_url(); ?>/epapers">ePapers</a> -->
                        </div>
                      </li>
                      <li class="menu-dropdown">
                        <a class="btn btn-flat anchor-link waves-effect">Product</a>
                        <div class="dropdown-content">
                          <a href="<?= get_home_url(); ?>/all-products">All Products</a>
                          <a href="https://university.myalkes.com/login">E - Learning</a>
                          <a href="https://myalkes.com/">E - Commerce</a>
                        </div>
                      </li>
                      <li><a class="btn btn-flat anchor-link waves-effect" href="<?= get_home_url(); ?>/contact">contact</a></li>
                      <!-- <li><a class="btn btn-flat anchor-link waves-effect" href="#">Register | Log In</a></li> -->
                    </ul>
                  </div>
                  <div class="menu-setting">
                    <div class="setting">
                      <button class="btn btn-icon waves-effect btn-small m-2 dropdown-trigger" data-target="dropdown_config" type="button" data-align="left">
                        <i class="icon material-icons" id="setting_icon">settings</i>
                      </button>
                      <div class="dropdown-content" id="dropdown_config">
                        <ul class="collection with-header">
                          <li class="collection-header">theme mode</li>
                          <li class="collection-item no-hover pl-4">
                            <div class="flex-menu">
                              <div class="switch">
                                <label>light<input id="theme_switcher" type="checkbox"><span class="lever"></span>dark</label>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </header>
          <!-- ##### END HEADER #####-->
          <main class="container-wrap">
            <!-- ##### PARALLAX OVAL #####-->
            <div class="parallax-wrap">
              <div>
                <div class="inner-parallax about">
                  <div class="figure">
                    <div>
                      <div data-enllax-ratio="-0.15" data-enllax-type="foreground">
                        <div class="parallax-oval parallax-primary"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- ##### END PARALLAX OVAL #####-->