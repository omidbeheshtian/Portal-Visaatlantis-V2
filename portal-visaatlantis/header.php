<?php
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$usermeta = get_user_meta($userID);
$user_name = $usermeta['first_name'][0];
$customer = new WC_Customer( $userID );
$last_order = $customer->get_last_order();
if($last_order != NULL){
$order_id     = $last_order->get_id();
$order_data   = $last_order->get_data();
$order_status = $last_order->get_status();
}

$order_key = $order_data["order_key"];
$valuemoshavere = "https://test.visaatlantis.com/dashboard/checkout/order-received/$order_id/?key=$order_key";
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
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/pics/icons/fav.png" rel="icon" type="image/png" />
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="داشبورد مشتریان ویزا آتلانتیس">
    <meta name="author" content="Omid Beheshtian">
    <meta name="theme-color" content="#4272D7">
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
                        <a class="logo" href="https://portal.visaatlantis.com/dashboard">
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
                            <a class="js-arrow" href="https://test.visaatlantis.com/dashboard">
                                <i class="fas fa-tachometer-alt" style="padding: 0 0 0 10px;"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="https://test.visaatlantis.com/test/">
                                <i class="far fa-calendar-check" style="padding: 0 0 0 10px;"></i>مشاوره تخصصی</a>
                        </li>
                        <li>
                            <a href="https://test.visaatlantis.com/dashboard/free-consulation">
                                <i class="far fa-comments" style="padding: 0 0 0 10px;"></i>مشاوره آنلاین</a>
                        </li>
                        <li>
                            <a href="https://test.visaatlantis.com/dashboard/my-account/files/">
                                <i class="far fa-copy" style="padding: 0 0 0 10px;"></i>فایل های من</a>
                        </li>
                        <li>
                            <a href="https://test.visaatlantis.com/dashboard/my-account/orders">
                                <i class="fas fa-history" style="padding: 0 0 0 10px;"></i>مشاوره های قبلی</a>
                                
                        </li>
                        <li>
                            <a href="https://visaatlantis.com/contact-us/">
                                <i class="fa fa-phone" style="padding: 0 0 0 10px;"></i>تماس با ما</a>
                        </li>
                        <li>
                            <a href="https://visaatlantis.com/about/">
                                <i class="fas fa-info" style="padding: 0 0 0 10px;"></i>درباره ما</a>
                        </li>
                        <li>
                            <a href="https://visaatlantis.com/">
                                <i class="fas fa-home" style="padding: 0 0 0 10px;"></i>صفحه اصلی سایت</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="https://test.visaatlantis.com/dashboard">
                    <p>ویزا آتلانتیس</p>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="https://test.visaatlantis.com/dashboard" style="float:right;">
                                <i class="fas fa-tachometer-alt" style="padding: 0 0 0 10px;"></i>داشبورد</a>
                        </li>
                        <?php if($order_status != "completed" && $order_status !="cancelled" && $order_status !="pending" && $order_status !=NULL){ ?>
                        <li>
                            <a href="<?php echo $valuemoshavere; ?>" style="float:right;">
                                <i class="far fa-calendar-check" style="padding: 0 0 0 10px;"></i>اطلاعات مشاوره جاری شما</a>
                        </li>
                        <?php }else{ ?>
                        <li>
                            <a href="https://test.visaatlantis.com/test/" style="float:right;">
                                <i class="far fa-calendar-check" style="padding: 0 0 0 10px;"></i>مشاوره تخصصی</a>
                                
                        </li>
                        <?php } ?>
                        
                        <li>
                            <a href="https://test.visaatlantis.com/dashboard/free-consulation" style="float:right;">
                                <i class="far fa-comments" style="padding: 0 0 0 10px;"></i>مشاوره آنلاین</a>
                        </li>
                        <li>
                            <a href="https://test.visaatlantis.com/dashboard/my-account/files/" style="float:right;">
                                <i class="far fa-copy" style="padding: 0 0 0 10px;"></i>فایل های من</a>

                        </li>
                        <li>
                            <a href="https://test.visaatlantis.com/dashboard/my-account/orders" style="float:right;">
                                <i class="fas fa-history" style="padding: 0 0 0 10px;"></i>مشاوره های قبلی</a>
                        </li>
                        <li>
                            <a href="https://visaatlantis.com/contact-us/" style="float:right;">
                                <i class="fa fa-phone" style="padding: 0 0 0 10px;"></i>تماس با ما</a>
                        </li>
                        <li>
                            <a href="https://visaatlantis.com/about/" style="float:right;">
                                <i class="fas fa-info" style="padding: 0 0 0 10px;"></i>درباره ما</a>
                        </li>
                        <li>
                            <a href="https://visaatlantis.com/" style="float:right;">
                                <i class="fas fa-home" style="padding: 0 0 0 10px;"></i>صفحه اصلی سایت</a>
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
                                                    <span class="emailb"><?php echo $num; ?></span>
                                                </div>
                                            </div>
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