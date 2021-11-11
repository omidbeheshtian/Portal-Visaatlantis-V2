<?php
get_template_part('user');
if (!$user_ID) {  ?>
<!DOCTYPE html>
<html lang="fa">
   <head>
      <title><?php the_title(); ?></title>
	  <!--===============================================================================================-->
      <meta charset="UTF-8">
	  <!--===============================================================================================-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!--===============================================================================================-->
      <meta name="author" content="Omid Beheshtian">
	  <!--===============================================================================================-->
      <meta name="theme-color" content="#431096">
	<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
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
	</head>
   <body>
	<div class="container-login100">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
		<div style="display: flex; align-items: center; justify-content: center;">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt="لوگو" style="margin-top:-200px;max-width:170px;z-index:999;position: absolute;">
		</div>
			<form class="login100-form validate-form" method="POST" action="#">
				<span class="login100-form-title p-b-37" style="font-size:18.5px;">
					لطفا کد تایید ارسال شده را وارد کنید
				</span>

<<<<<<< HEAD
				<div class="wrap-input100" data-validate="کد تایید نباید خالی باشد!" style="direction:rtl;">
					<input class="input100" type="text" name="code" placeholder="کد ارسالی" style="text-align:center;">
					<span class="focus-input100"></span>
				</div>

                <br>
=======
				<div class="wrap-input100" style="direction:rtl;">
					<input class="input100" type="number" name="code" placeholder="کد ارسالی" style="text-align:center;">
					<span class="focus-input100"></span>
				</div>

				<br>
>>>>>>> 6d210b659499e0cc1483392610d9db6af7584566
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="SendAuth">
						ثبت نام
					</button>
				</div>


				<div class="text-center">
<<<<<<< HEAD
					<br>
                        <span id="psa" style="color:#fff;">برای ارسال مجدد کد باید <span id="sanie"></span> ثانیه صبر کنید</span>
                        <button class="txt2 hov1" type="button" id="proceed" style="display:none;" name="SendAgain">ارسال مجدد</button>

=======
				<br>
					<!-- <a href="#" class="txt2 hov1">
						دوباره ارسال شود
					</a> -->
					<button class="txt2 hov1" name="SendAgain">
					دوباره ارسال شود
					</button>
>>>>>>> 6d210b659499e0cc1483392610d9db6af7584566
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script type="text/javascript">
    $(document).ready(function() {
      var counter = 60;
          setInterval(function() {
            counter--;
            if (counter >= 0) {
                span = document.getElementById("sanie");
                span.innerHTML = counter;
            }
            if (counter === 0) {
                $("#proceed").show();
                $("#psa").hide();
                clearInterval(counter);
            }
          }, 1000);
        });
    </script>
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
if($user_ID) {
	wp_redirect(site_url().'/dashboard');
    exit;
}
?>
	</body>
	</html>