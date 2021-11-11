<?php
get_template_part('user');
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$usermeta = get_user_meta($userID);
if ($user_ID && $usermeta['first_name'][0] != NULL) {  get_header();?>

<div class="content">
  <div class="container">
  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-11 col-lg-11 col-sm-12 col-xs-12" id="dastresi">
                <h2 style="color:#929292;">دسترسی سریع</h2>
              </div>
            </div>
            <div class="row" id="mobiledh">
              <div class="col-lg-5 col-md-12 col-sm-5 col-xs-5" id="reserv"><a href="#" style="text-decoration: none;"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/const.png" alt="" style="width:50px"><span style="padding-right:20px; font-size: 22px;">رزرو وقت مشاوره</span></a><p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p></div>
              <!--<div class="col-2" id="hidem"></div>-->
              <div class="col-lg-5 col-md-12 col-sm-5 col-xs-5" id="online"><a href="#" style="text-decoration: none;"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/online.png" alt="" style="width:50px"><span style="padding-right:20px; font-size: 22px;">مشاوره آنلاین (رایگان)</span></a><p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p></div>
            </div>
            <!-- mobile -->
            <div class="row" id="mobiled">
              <div class="col-lg-4 col-md-12 col-sm-5 col-xs-5" id="reserv"><a href="#" style="text-decoration: none;"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/const.png" alt=""><br><span>رزرو وقت مشاوره</span></a>
              </div>
              <div class="col-2" id="hidem"></div>
              <div class="col-lg-4 col-md-12 col-sm-5 col-xs-5" id="online"><a href="#" style="text-decoration: none;"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/online.png" alt=""><br><span>مشاوره آنلاین (رایگان)</span></a>
              </div>
            </div>
            <!-- mobile end -->
            <div class="row">
              <div class="col-md-11 col-lg-11 col-sm-12 col-xs-12" id="baner">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Pic1.jpg" alt="بنر تبلیغاتی">
              </div>
            </div>
            <div class="row">
              <div class="col-md-11 col-lg-11 col-sm-12 col-xs-12" id="ertebati">
                <h2 style="color:#929292;">راه های ارتباطی</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-lg-3 col-sm-12 col-xs-9" id="insta"><a href="https://instagram.com/visa.atlantis""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/instagram.png" alt=""></a></div>
              <div class="col-md-4 col-lg-4 col-sm-12 col-xs-9" id="tele"><a href="https://t.me/visaatlantis""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/telegram1.png" alt=""></a></div>
              <div class="col-md-3 col-lg-3 col-sm-12 col-xs-9" id="p021"><a href="tel:02188361003"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/phone.png" alt=""></a></div>
            </div>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-9 col-xs-9" id="news">
              <h1 style="color:#929292; font-size: 29px; padding-top: 15px; text-align: center;">آخرین اخبار مجموعه</h1>
              <hr>
              <p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p>
              <hr>
              <p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p>
              <hr>
              <p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p>
          </div>
          <!-- news mobile -->
          <div class="col-md-12 col-lg-3 col-sm-9 col-xs-9" id="newsm">
            <h1 style="color:#929292; font-size: 29px; padding-top: 15px; text-align: center;">آخرین اخبار مجموعه</h1>
            <hr>
            <p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p>
            <hr>
            <p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p>
            <hr>
            <p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p>
          </div>
<!-- end mobile news -->
<!-- mobile ertebati -->
          <div class="col-12" id="ertebatim">
            <h2 style="color:#929292;">راه های ارتباطی</h2>
          </div>
          <div class="row">
            <div class="col-3" id="instam"><a href="https://instagram.com/visa.atlantis""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/instagram.png" alt=""></a></div>
            <div class="col-3" id="telem"><a href="https://t.me/visaatlantis""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/telegram1.png" alt=""></a></div>
            <div class="col-3" id="p021m"><a href="tel:02188361003"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/phone.png" alt=""></a></div>
          </div>
<!-- end mobile ertebati -->
        </div>
      </div>
  </div>
  <div class="row">
    <!-- <hr style="margin-top:20px; margin-bottom:-10px; width:500px; display:flex; justify-content:center; align-items:center;"> -->
    <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12" style="margin-top:20px; display:flex; justify-content:center; align-items:center;">
      <p style="text-align:left; color: #ccc;">Copyright © 2021 Visaatlantis. All rights reserved. Programmed by  <a href="https://omidbeheshtian.ir" class="omidbeheshtian" style="text-align:left; text-decoration:none; color: #fff !important; font-weight: normal;"> Omid Beheshtian </a></p>
    </div>
    <div class="col-md-4 col-xs-0 col-lg-4 col-sm-0"></div>
  </div>
</div>
</div>

    <script type="text/javascript">
    $(document).ready(function(){
    $('#show').click(function() {
      $('.menu').toggle("slide");
    });
    });
    </script>

  </body>
</html>

<!-- end document-->
<?php } 
elseif(!$user_ID){
    echo "We Have Error in Login/Signup in Visaatlantis Portal";
}
elseif($usermeta['first_name'][0] == NULL){?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
      <title><?php the_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="داشبورد مشتریان ویزا آتلانتیس">
    <meta name="author" content="Omid Beheshtian">
    <meta name="theme-color" content="#4272D7">
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
  </head>
<body>

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
</body>
</html>
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