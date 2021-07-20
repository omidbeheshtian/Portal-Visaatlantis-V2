<?php
get_template_part('user');
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$nameportal = $usermeta['first_name'][0];

$usermeta = get_user_meta($userID);

if ($user_ID && $usermeta['first_name'][0] != NULL) { get_header();
get_template_part('ai');
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1" style="text-align: center; font-size:24px;">لطفا اطلاعات خود را وارد کنید تا بهترین پکیج برای شما نمایش داده شود!</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-12">
                                <div class="overview-item" >
                                    <div class="overview__inner">
                                        <form action="" method="GET">
                                            <div id="maghsad">
                                                <p class="omidbeheshtianp">مقصد مهاجرت:</p>
                                                <input type="radio" id="m1" name="maghsad" value="euro">
                                                <label for="m1">اروپا</label>
                                                <input type="radio" id="m2" name="maghsad" value="canada">
                                                <label for="m2">کانادا</label>
                                            </div>
                                            <div id="age">
                                            <p class="omidbeheshtianp">بازه سنی:</p>
                                            <select class="input100" name="age">
                                                    <option value="18-23">18 تا 23 سال</option>
                                                    <option value="23-35">23 تا 35 سال</option>
                                                    <option value="35-50">35 تا 50 سال</option>
                                                    <option value="50+">بالای 50 سال</option>
                                                </select>
                                            </div>
                                            <div id="job">
                                                <p class="omidbeheshtianp">شغل:</p>
                                                <select class="input100" name="job">
                                                    <option value="karmand">کارمند</option>
                                                    <option value="sahebkar">صاحب کسب و کار</option>
                                                    <option value="azad">شغل آزاد</option>
                                                    <option value="adameshteghal">عدم اشتغال</option>
                                                </select>
                                            </div>
                                            <div id="tamakonmali">
                                                <p class="omidbeheshtianp">تمکن مالی:</p>
                                                <select class="input100" name="tamakonmali">
                                                    <option value="200-500">200 میلیون تا 500 میلیون</option>
                                                    <option value="500-1">500 میلیون تا 1 میلیارد</option>
                                                    <option value="1-2">1 میلیارد تا 2 میلیارد</option>
                                                    <option value="2+">2 میلیارد به بالا</option>
                                                </select>
                                            </div>
                                            <div id="madrak">
                                                <p class="omidbeheshtianp">مدرک زبان انگلیسی:</p>
                                                <input type="radio" id="z1" name="madrak" value="y" onclick="madraknomre()">
                                                <label for="z1">دارم</label>
                                                <input type="radio" id="z2" name="madrak" value="n" onclick="madrakbegir()">
                                                <label for="z2">ندارم</label>
                                                <div id="madraknomre" style="display:none;">
                                                    <input type="text" placeholder="نمره مدرک" name="nomre" style="border-radius:12px; padding:3px;">
                                                </div>
                                                <div id="madrakbegir" style="display:none;">
                                                        <input type="checkbox" name="madrakbegirim" id="madrakbegirim">
                                                        <label for="madrakbegirim">میتوانم اخذ کنم</label>
                                                </div>
                                            </div>
                                            <div id="madrakgheyr">
                                                <p class="omidbeheshtianp">مدرک زبان غیر از انگلیسی:</p>
                                                <input type="radio" id="mg1" name="madrakgheyr" value="y" onclick="madrakgheyrhide()">
                                                <label for="mg1">دارم</label>
                                                <input type="radio" id="mg2" name="madrakgheyr" value="n" onclick="madgheyrhide2()">
                                                <label for="mg2">ندارم</label>
                                                <div id="madrakgheyrhide" style="display:none;">
                                                    <p class="omidbeheshtianp">زبان مدرک:</p>
                                                    <select class="input100" name="madrakgheyrenglish">
                                                        <option value="france">فرانسه</option>
                                                        <option value="germany">آلمانی</option>
                                                        <option value="spain">اسپانیایی</option>
                                                        <option value="swed">سوئدی</option>
                                                        <option value="gheyre">غیره</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="madraktahsili">
                                                <p class="omidbeheshtianp">مدرک تحصیلی:</p>
                                                <select class="input100" name="madraktahsili">
                                                    <option value="n">ندارم</option>
                                                    <option value="diplom">دیپلم</option>
                                                    <option value="karshenasi">کارشناسی</option>
                                                    <option value="karshenasiarshad">کارشناسی ارشد</option>
                                                    <option value="doctor">دکتری</option>
                                                </select>
                                            </div>
                                            <div id="sabeghesafar">
                                                <p class="omidbeheshtianp">سابقه سفری:</p>
                                                <input type="radio" id="sf1" name="sabeghesafar" value="y">
                                                <label for="sf1">دارم</label>
                                                <input type="radio" id="sf2" name="sabeghesafar" value="n">
                                                <label for="sf2">ندارم</label>
                                            </div>
                                            <div id="taahol">
                                                <p class="omidbeheshtianp">وضعیت تاهل:</p>
                                                <input type="radio" id="t1" name="taahol" value="motahel" onclick="farzand()">
                                                <label for="t1">متاهل</label>
                                                <input type="radio" id="t2" name="taahol" value="mojarad" onclick="farzandhide()">
                                                <label for="t2">مجرد</label>
                                                <div id="2tt" style="display:none;">
                                                <p class="omidbeheshtianp">فرزند:</p>
                                                <input type="radio" id="yc" name="child" value="yes" onclick="tedadfarzzand()">
                                                    <label for="yc">دارم</label>
                                                    <input type="radio" id="nc" name="child" value="no" onclick="tedadfarzandhide()">
                                                    <label for="nc">ندارم</label>
                                                    <div id="tedadfarzand" style="display:none;">
                                                    <p class="omidbeheshtianp">تعداد فرزند:</p>
                                                        <input type="number" name="tedadfarzand" style="border-radius:12px; padding:3px;">
                                                        <p class="omidbeheshtianp">سن فرزند:</p>
                                                        <input type="number" name="senfarzand" style="border-radius:12px; padding:3px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="akhzvisa">
                                                <p class="omidbeheshtianp">سابقه اقدام جهت اخذ هر نوع ویزا یا اقامت:</p>
                                                <input type="radio" id="av1" name="akhzvisa" value="y" onclick="rejectvisa()">
                                                <label for="av1">دارم</label>
                                                <input type="radio" id="av2" name="akhzvisa" value="n" onclick="rejecthide()">
                                                <label for="av2">ندارم</label>
                                                <div id="rejectvisa" style="display:none;">
                                                        <p class="omidbeheshtianp">سابقه ریجکت ویزا :</p>
                                                        <input type="radio" id="re1" name="reject" value="y" onclick="noevisa()">
                                                        <label for="re1">دارم</label>
                                                        <input type="radio" id="re2" name="reject" value="n" onclick="noevisahide()">
                                                        <label for="re2">ندارم</label>
                                                        <div id="noevisareject" style="display:none">
                                                            <p class="omidbeheshtianp">نوع ویزا:</p>
                                                            <input type="radio" id="tr1" name="typevisareject" value="shengen">
                                                            <label for="tr1">شنگن</label>
                                                            <input type="radio" id="tr2" name="typevisareject" value="notshengen">
                                                            <label for="tr2">غیر شنگن</label>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div>
                                            <button class="login100-form-btn" name="send">ادامه</button>
                                            </div>
                                    </form>
                                    
                                </div>
                            </div>
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
    <!--AI Omid Beheshtian JS-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/ai.js"></script>
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
?>