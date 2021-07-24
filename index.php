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
	wp_redirect(site_url().'/dashboard');
    exit;
}
get_footer();?>
	</body>
	</html>