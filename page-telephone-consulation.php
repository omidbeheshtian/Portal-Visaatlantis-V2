<?php
get_header();
get_template_part('user');
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$nameportal = $usermeta['first_name'][0];

$usermeta = get_user_meta($userID);

if ($user_ID && $usermeta['first_name'][0] != NULL) {  ?>
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
                            <a class="js-arrow" href="../../dashboard">
                                <i class="fas fa-tachometer-alt" style="padding: 0 0 0 10px;"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="../../cunsulations">
                                <i class="fas fa-chart-bar" style="padding: 0 0 0 10px;"></i>مشاوره اختصاصی</a>
                        </li>
                        <li>
                            <a href="../../free-consulation">
                                <i class="fas fa-table" style="padding: 0 0 0 10px;"></i>مشاوره رایگان</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt" style="padding: 0 0 0 10px;"></i>فایل های مشاوره</a>
                        </li>
                        <li>
                            <a href="../../my-account/orders">
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1" style="text-align: center;">مشاوره تلفنی با مجموعه ویزا آتلانتیس</h2>
                                </div>
                            </div>
                        </div>
                                <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="overview-item overview-item--c4" >
                                        <div class="overview__inner">
                                            <div class="overview-chart">
                                                <div class="container-login100-form-btn" >
                                                    <span class="login100-form-title">مشاوره برای اروپا</span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <a class="login100-form-btn" href="https://localhost/vaomid/consulation-category/telephone-consulation/?add-to-cart=45" style="z-index: 999;">پرداخت و رزرو</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="overview-item overview-item--c2" >
                                        <div class="overview__inner">
                                            <div class="overview-chart">
                                                <div class="container-login100-form-btn" >
                                                    <span class="login100-form-title">مشاوره برای آمریکا</span>
                                                </div>
                                            </div>
                                            <div class="overview-chart">
                                                <a class="login100-form-btn" href="https://localhost/vaomid/consulation-category/telephone-consulation/?add-to-cart=45" style="z-index: 999;">پرداخت و رزرو</a>
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
elseif(!$user_ID){
    echo "Login First Please.";
}
elseif($nameportal == NULL){?>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="border-bottom-width: 0px;border-bottom-style: solid;padding-bottom: 140px;margin-bottom: 0px;">

			<!-- input form -->
			<form class="login100-form validate-form"  method="POST" action="#">
				<span class="login100-form-title">نام و نام خانوادگی</span>

				<!-- enter name and lastname-->
				<div class="wrap-input100 validate-input" data-validate = "لطفا نام و نام خانوادگی خود را وارد کنید!">
                <input type="text" class="input100" placeholder="نام" value="<?php echo esc_attr($usermeta['first_name'][0]); ?>" name="FirstName" required>
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
				</div>
				<!-- / enter name and lastname -->


                <!-- register button-->

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="SubmitName" >ورود به داشبورد</button>
				</div>
				<!-- / register button -->

			</form>
			<!-- / input form -->

			<!-- form image -->
			<div class="login100-pic js-tilt" data-tilt>
				<img alt="login-image" src="<?php echo esc_url(get_template_directory_uri()); ?>/pics/img-01.png">
			</div>
			<!-- / form image -->

			</div>
		</div>
	</div>

<?php } 
if(isset($_POST['SubmitName'])){

    $FirstName = sanitize_text_field($_POST['FirstName']);
    if(!empty($FirstName)){
        update_user_meta($userID,'first_name',$FirstName);

        wp_redirect(site_url().'/dashboard?getname=true');
        exit;
    }
}
get_footer();
?>