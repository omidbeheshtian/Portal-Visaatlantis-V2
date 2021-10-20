<?php
get_template_part('user');
if (!$user_ID) {  ?>
<!DOCTYPE html>
<html lang="fa">
   <head>
      <title><?php the_title(); ?></title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Omid Beheshtian">
      <meta name="theme-color" content="#9C27B0">
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap-rtl.min.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/font-awesome.min.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/animate.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/hamburgers.min.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/select2.min.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/util.css" rel="stylesheet" />
      <link  href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" rel="stylesheet" />
   </head>
   <body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="border-bottom-width: 0px;border-bottom-style: solid;padding-bottom: 140px;margin-bottom: 0px;">

			<!-- input form -->
			<form class="login100-form validate-form" action="" method="POST">
				<span class="login100-form-title">ورود به پورتال</span>

				<!-- enter phonenumber-->
				<div class="wrap-input100 validate-input" data-validate = "لطفا شماره تلفن خود را وارد کنید!">
					<input class="input100" type="number" name="phonenumberlogin" placeholder="شماره تلفن">
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
				</div>
				<!-- / enter phonenumber -->


				<!-- login button-->
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="SendLogin">ادامه</button>
				</div>
				<!-- / login button -->


				<!-- register-->
				<!-- <div class="text-center p-t-136">
					<a class="txt2" href="signup">
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true" ></i>
						هنوز ثبت نام نکرده اید ؟
					</a>
				</div> -->
				<!-- / register-->

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
if($user_ID) {
// 	wp_redirect(site_url().'/dashboard');
//     exit;
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$nameportal = $usermeta['first_name'][0];

$usermeta = get_user_meta($userID);

if ($user_ID && $usermeta['first_name'][0] != NULL) { get_header(); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <?php the_content(); ?>
                            <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-12">

                                </div>
                            </div>
                    <!--</div>-->
                <div class="copyright">
                         <p style="text-align:left;" class="cromid">Copyright © 2021 Visaatlantis. All rights reserved. Programmed by </p> <a href="https://omidbeheshtian.ir" class="omidbeheshtian" style="text-align:left;"> Omid Beheshtian </a> 
                </div>
                </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->

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
}
get_footer();?>
	</body>
	</html>