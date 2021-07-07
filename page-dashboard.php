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
                                    <a href="#" class="omidbeheshtian">
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
                                    <a href="https://instagram.com/visaatlantis" class="omidbeheshtian">
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
                                <p style="float:left;">Copyright © 2021 Visaatlantis. All rights reserved. Programmed by </p> <a href="https://omidbeheshtian.ir" class="omidbeheshtian" style="text-align:left;"> Omid Beheshtian </a> 
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
        wp_redirect(site_url().'/dashboard');
        exit();
    }
}
get_footer();
?>