<?php
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$usermeta = get_user_meta($userID);
$user_name = $usermeta['first_name'][0];
?>
<!DOCTYPE html>
<html lang="fa">
   <head dir="rtl">
      <title><?php the_title(); ?></title>
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap-rtl.min.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/font-awesome.min.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/animate.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/hamburgers.min.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/select2.min.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/util.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" rel="stylesheet" />
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="داشبورد مشتریان ویزا آتلانتیس">
    <meta name="author" content="Omid Beheshtian">

    <!-- Fontfaces CSS-->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../dashboard">
                            <p>ویزا آتلانتیس</p>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="../dashboard">
                                <i class="fas fa-tachometer-alt" style="padding: 0 0 0 10px;"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="https://portal.visaatlantis.com/dashboard/cunsulations">
                                <i class="fas fa-chart-bar" style="padding: 0 0 0 10px;"></i>مشاوره اختصاصی</a>
                        </li>
                        <li>
                            <a href="https://portal.visaatlantis.com/dashboard/free-consulation">
                                <i class="fas fa-table" style="padding: 0 0 0 10px;"></i>مشاوره رایگان</a>
                        </li>
                        <li>
                            <a href="https://portal.visaatlantis.com/dashboard/my-account/files/">
                                <i class="fas fa-calendar-alt" style="padding: 0 0 0 10px;"></i>فایل های مشاوره</a>
                        </li>
                        <li>
                            <a href="https://portal.visaatlantis.com/dashboard/my-account/orders">
                                <i class="fas fa-map-marker-alt" style="padding: 0 0 0 10px;"></i>مشاوره های قبلی</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="../dashboard">
                    <p>ویزا آتلانتیس</p>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="https://portal.visaatlantis.com/dashboard" style="float:right;">
                                <i class="fas fa-tachometer-alt" style="padding: 0 0 0 10px;"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="https://portal.visaatlantis.com/dashboard/cunsulations" style="float:right;">
                                <i class="fas fa-chart-bar" style="padding: 0 0 0 10px;"></i>مشاوره اختصاصی</a>
                        </li>
                        <li>
                            <a href="https://portal.visaatlantis.com/dashboard/free-consulation" style="float:right;">
                                <i class="fas fa-table" style="padding: 0 0 0 10px;"></i>مشاوره رایگان</a>
                        </li>
                        <li>
                            <a href="https://portal.visaatlantis.com/dashboard/my-account/files/" style="float:right;">
                                <i class="far fa-check-square" style="padding: 0 0 0 10px;"></i>فایل های مشاوره</a>
                        </li>
                        <li>
                            <a href="https://portal.visaatlantis.com/dashboard/my-account/orders" style="float:right;">
                                <i class="fas fa-calendar-alt" style="padding: 0 0 0 10px;"></i>مشاوره های قبلی</a>
                        </li>
                    </ul>
                </nav>
           </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/images/icon/valogo.png" alt="Va" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $user_name ?> خوش آمدید </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/images/icon/valogo.png" alt="Va" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $user_name ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $num; ?></span>
                                                </div>
                                            </div>
                                            <!-- <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#" style="float:right; position:fixed;">
                                                        <i class="zmdi zmdi-account" style="padding: 0 0 0 10px;"></i>اطلاعات حساب</a>
                                                </div>
                                            </div> -->
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo wp_logout_url(home_url()); ?>" style="float:right;">
                                                    <i class="zmdi zmdi-power" style="padding: 0 0 0 10px;"></i>خروج</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <?php wp_head(); ?>
