<?php
get_template_part('user');
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
// $nameportal = $usermeta['first_name'][0];
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
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">

                                                <i style="font-size:35px; float:right;" class="fas fa-history"></i>

                                                <h2 style="font-size:23px; text-align:right; clear:both; padding-top:10px;">سوابق پرداخت</h2>

                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">

                                                <i style="font-size:35px; float:right;" class="far fa-copy"></i>


                                                <h2 style="font-size:23px; text-align:right; clear:both; padding-top:10px;">فایل های من</h2>

                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <div class="overview__inner">
                                        

                                                <i style="font-size:35px; float:right;" class="far fa-comments"></i>

                                                <h2 style="font-size:23px; text-align:right; clear:both; padding-top:10px;">مشاوره آنلاین (رایگان)</h2>

                                        
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">

                                                <i style="font-size:35px; float:right;" class="far fa-calendar-check"></i>

                                                <h2 style="font-size:23px; text-align:right; clear:both; padding-top:10px;">رزرو وقت مشاوره تخصصی</h2>

                                        </div>
                                        <div class="overview-chart">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-3">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5"> آخرین اخبار مجموعه</h3>
                                        <br><br><br><br><br><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">جایگاه بنر معرفی مجموعه</h3>
                                        <br><br><br><br><br><br><br><br><br><br><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                                <i style="font-size:35px; color:#1976D2; float:right;" class="zmdi zmdi-account-o"></i>
                                                <h2 style="font-size:23px;padding:0px 0px 30px 0px; color:#000; text-align:right;;">راه های ارتباط</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                                <i style="font-size:35px; color:#1976D2; float:right;" class="zmdi zmdi-shopping-cart"></i>
                                                <h2 style="font-size:23px;padding:0px 0px 30px 0px; color:#000; text-align:right;">همکاری</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                                <i style="font-size:35px; color:#1976D2; float:right;" class="zmdi zmdi-calendar-note"></i>
                                                <h2 style="font-size:23px;padding:0px 0px 30px 0px; color:#000; text-align:right;">اینستاگرام</h2>
                                        </div>
                                    </div>
                                </div>
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