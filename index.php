<?php
get_template_part('user');
get_header();

if (!$user_ID) {  ?>
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

<?php }?>

<?php if($user_ID) {
	wp_redirect(site_url().'/dashboard');
                exit;
}
get_footer();?>

	</body>

	</html>