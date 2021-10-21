<?php
get_template_part('user');
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$usermeta = get_user_meta($userID);
if ($user_ID && $usermeta['first_name'][0] != NULL) {  get_header();?>
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
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                                    <a href="https://portal.visaatlantis.com/dashboard/my-account/orders" class="omidbeheshtian">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                                <i style="font-size:30px; float:right; color:#4272D7;" class="fas fa-history"></i>
                                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">سوابق پرداخت</h2>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                                    <a href="https://portal.visaatlantis.com/dashboard/my-account/files/" class="omidbeheshtian">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                                <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">فایل های من</h2>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                                    <a href="https://portal.visaatlantis.com/dashboard/free-consulation" class="omidbeheshtian">
                                    <div class="overview__inner">
                                                <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-comments"></i>
                                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">مشاوره آنلاین (رایگان)</h2>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                                    <a href="https://portal.visaatlantis.com/dashboard/cunsulations" class="omidbeheshtian">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                                <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-calendar-check"></i>
                                                    <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">رزرو وقت مشاوره تخصصی</h2>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-3">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">آخرین اخبار مجموعه</h3>
                                        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('news')) : else : ?><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('baner')) : else : ?><?php endif; ?>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <a href="https://visaatlantis.com/contact-us/" class="omidbeheshtian">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                                <i style="font-size:30px; color:#4272D7; float:right; padding-left:10px;" class="fa fa-phone"></i>
                                                <h2 style="font-size:23px;padding:0px 0px 30px 0px; color:#333333; text-align:right;;">راه های ارتباط</h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <a href="https://visaatlantis.com/contact-us/" class="omidbeheshtian">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                                <i style="font-size:30px; color:#4272D7; float:right; padding-left:10px;" class="fa fa-handshake-o"></i>
                                                <h2 style="font-size:23px;padding:0px 0px 30px 0px; color:#333333; text-align:right;">همکاری</h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <a href="https://instagram.com/visa.atlantis" class="omidbeheshtian">
                                    <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                    <i style="font-size:30px; color:#4272D7; float:right; padding-left:10px;" class="fab fa-instagram"></i>
                                                    <h2 style="font-size:23px;padding:0px 0px 30px 0px; color:#333333; text-align:right;">اینستاگرام</h2>
                                            </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>

                        <div class="copyright">
                                     <p style="text-align:left;" class="cromid">Copyright © 2021 Visaatlantis. All rights reserved. Programmed by </p> <a href="https://omidbeheshtian.ir" class="omidbeheshtian" style="text-align:left;"> Omid Beheshtian </a> 
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
elseif($usermeta['first_name'][0] == NULL){?>

      <!--===============================================================================================-->
		<link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/animate/animate.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/util.css">
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/loginfront.css">
	<!--===============================================================================================-->

    <div class="container-login100">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
		<div style="display: flex; align-items: center; justify-content: center;">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="لوگو" style="margin-top:-200px;max-width:170px;z-index:999;position: absolute;">
		</div>
			<form class="login100-form validate-form" action="" method="POST">
				<span class="login100-form-title p-b-37" style="font-size:19.5px;">
					نام و نام خانوادگی
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="نام و نام خانوادگی خود را وارد کنید!" style="direction:rtl;">
					<input class="input100" type="text" name="FirstName" placeholder="نام و نام خانوادگی" style="text-align:center;">
					<span class="focus-input100"></span>
				</div>


				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="SubmitName">
						ادامه
					</button>
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js"></script>

<?php } 
if(isset($_POST['SubmitName'])){

    $FirstName = sanitize_text_field($_POST['FirstName']);
    if(!empty($FirstName)){
        update_user_meta($userID,'first_name',$FirstName);
        wp_redirect(site_url().'/dashboard');
        exit();
    }
}
?>