<?php
get_template_part('user');
get_header();
get_footer();
	if(!$user_ID){
?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

			<!-- input form -->
			<form class="login100-form validate-form"  method="POST">
				<span class="login100-form-title">ثبت نام در پورتال</span>

				<!-- enter name and lastname-->
				<div class="wrap-input100 validate-input" data-validate = "لطفا نام و نام خانوادگی خود را وارد کنید!">
					<input class="input100" type="text" name="fnamelnamesignup" placeholder="نام و نام خانوادگی">
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
				</div>
				<!-- / enter name and lastname -->

				<!-- enter phonenumber-->
				<div class="wrap-input100 validate-input" data-validate = "لطفا شماره تلفن خود را وارد کنید!">
					<input class="input100" type="number" name="phonenumbersignup" placeholder="شماره تلفن">
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
				</div>
				<!-- / enter phonenumber -->

				<!-- register button-->
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="SubmitSignUp" >ادامه</button>
				</div>
				<!-- / register button -->


				<!-- Login-->
				<div class="text-center p-t-136">
					<a class="txt2" href="home">
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true" ></i>
						ورود به پورتال
					</a>
				</div>
				<!-- / Login-->

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
	if($user_ID){
		wp_redirect(site_url().'/dashboard');
		exit;
	}
	?>


	<!-- scripts -->

	<!-- / scripts -->
