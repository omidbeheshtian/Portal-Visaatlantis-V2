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
    <meta name="description" content="داشبورد مشتریان ویزا آتلانتیس">
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
                            <a class="js-arrow" href="../dashboard">
                                <i class="fas fa-tachometer-alt" style="padding: 0 0 0 10px;"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="cunsulations">
                                <i class="fas fa-chart-bar" style="padding: 0 0 0 10px;"></i>مشاوره اختصاصی</a>
                        </li>
                        <li>
                            <a href="free-consulation">
                                <i class="fas fa-table" style="padding: 0 0 0 10px;"></i>مشاوره رایگان</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt" style="padding: 0 0 0 10px;"></i>فایل های مشاوره</a>
                        </li>
                        <li>
                            <a href="../my-account/orders">
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
                            <a class="js-arrow" href="../dashboard" style="float:right;">
                                <i class="fas fa-tachometer-alt" style="padding: 0 0 0 10px;"></i>داشبورد</a>
                        </li>
                        <li>
                            <a href="cunsulations" style="float:right;">
                                <i class="fas fa-chart-bar" style="padding: 0 0 0 10px;"></i>مشاوره اختصاصی</a>
                        </li>
                        <li>
                            <a href="free-consulation" style="float:right;">
                                <i class="fas fa-table" style="padding: 0 0 0 10px;"></i>مشاوره رایگان</a>
                        </li>
                        <li>
                            <a href="#" style="float:right;">
                                <i class="far fa-check-square" style="padding: 0 0 0 10px;"></i>فایل های مشاوره</a>
                        </li>
                        <li>
                            <a href="../my-account/orders" style="float:right;">
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
                                    <h2 class="title-1">پورتال مشتریان</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>تست</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>38,868</h2>
                                                <span>تست</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>تست</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060</h2>
                                                <span>تست</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">تست</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">تست</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>تست</h3>
                                        </div>
                                  </div>

                                <!-- <div class="row">
                                    <div class="col-md-18">
                                        <div class="copyright">
                                            <p>Copyright © 2021 Visaatlantis. All rights reserved. Template by <a href="https://omidbeheshtian.ir">Omid Beheshtian</a>.</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="copyright">
                                <p> <a href="https://omidbeheshtian.ir">Omid Beheshtian</a> Copyright © 2021 Visaatlantis. All rights reserved. Programmed by </p>
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
    echo "We Have Error in Login/Signup in Visaatlantis Portal";
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
        $url = 'https://portal.visaatlantis.com/dashboard?getname=true';
        wp_redirect($url);
        exit();
    }
}
get_footer();
?>