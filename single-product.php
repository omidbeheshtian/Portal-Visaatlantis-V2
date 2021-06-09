<?php
get_header();
get_template_part('user');
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$nameportal = $usermeta['first_name'][0];

$usermeta = get_user_meta($userID);

if ($usermeta['first_name'][0] != NULL) {  ?>
<head dir="rtl">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Omid Beheshtian">

    <!-- Title Page-->
    <title>داشبورد کاربری</title>

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
                        <a class="logo" href="index.html">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/images/icon/valogo" alt="Visa Atlantis" />
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
                                <i class="fas fa-tachometer-alt"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>تست</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-map-marker-alt"></i>تست</a>
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
                            <a class="js-arrow" href="../../dashboard" style="float:right;">
                                <i class="fas fa-tachometer-alt" style="padding: 0 0 0 10px;"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="../../dashboard/cunsulations" style="float:right;">
                                <i class="fas fa-chart-bar" style="padding: 0 0 0 10px;"></i>مشاوره اختصاصی</a>
                        </li>
                        <li>
                            <a href="../../dashboard/free-consulation" style="float:right;">
                                <i class="fas fa-table" style="padding: 0 0 0 10px;"></i>مشاوره رایگان</a>
                        </li>
                        <li>
                            <a href="#" style="float:right;">
                                <i class="far fa-check-square" style="padding: 0 0 0 10px;"></i>فایل های مشاوره</a>
                        </li>
                        <li>
                            <a href="../../my-account/orders" style="float:right;">
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
                                            <a class="js-acc-btn" href="#"><?php echo $usermeta['first_name'][0]; ?></a>
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
                                                        <a href="#"><?php echo $usermeta['first_name'][0]; ?></a>
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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="overview-item overview-item--c4" >
                                        <div class="overview__inner">
                                            <div class="overview-chart">
                                            <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                <div class="copyright">
                    <p></p> <a href="https://omidbeheshtian.ir">Omid Beheshtian</a> Copyright © 2021 Visaatlantis. All rights reserved. Programmed by </p>
                </div>
                </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/wow/wow.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dashboardd/js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php } 
get_footer();
?>