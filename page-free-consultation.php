<?php
get_template_part('user');
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$usermeta = get_user_meta($userID);
if ($user_ID && $usermeta['first_name'][0] != NULL) {  get_header();?>
<div class="content">
  <div class="container">
      <!--<div class="row">-->

      <!--</div>-->
    <div class="row">
        <div class="col-8" style="background: #fff" id="constonline">
            <h1>برای دریافت پکیج پیشنهادی اطلاعات خود را وارد نمایید!</h1>
            <hr>
            <form action="" method="GET">
                <div id="maghsad">
                    <p class="omidbeheshtianp">مقصد مهاجرت</p>
                    <input type="checkbox" id="m1" name="maghsad" value="euro" onclick="myFun(this)">
                    <label class="omidform1" for="m1">اروپا</label>
                    <input type="checkbox" id="m2" name="maghsad" value="canada" onclick="myFun(this)">
                    <label class="omidform1" for="m2">کانادا</label>
                </div>
                <hr>
                <div id="age">
                <p class="omidbeheshtianp">بازه سنی</p>
                    <input type="checkbox" name="age" id="a18" value="18-23" onclick="myFun1(this)">
                    <label class="omidform1" for="a18">18 تا 23 سال</label>
                    <input type="checkbox" name="age" id="a23" value="23-35" onclick="myFun1(this)">
                    <label class="omidform1" for="a23">23 تا 35 سال</label>
                    <input type="checkbox" name="age" id="a35" value="35-50" onclick="myFun1(this)">
                    <label class="omidform1" for="a35">35 تا 50 سال</label>
                    <input type="checkbox" name="age" id="a50" value="50+" onclick="myFun1(this)">
                    <label class="omidform1" for="a50">بالای 50 سال</label>
                </div>
                <hr>
                <div id="job">
                    <p class="omidbeheshtianp">شغل</p>
                    <input type="checkbox" name="job" id="karmand1" value="karmand" onclick="myFun2(this)">
                    <label class="omidform1" for="karmand1">کارمند</label>
                    <input type="checkbox" name="job" id="sahebkar1" value="sahebkar" onclick="myFun2(this)">
                    <label class="omidform2" for="sahebkar1">صاحب کسب و کار</label>
                    <input type="checkbox" name="job" id="job1" value="azad" onclick="myFun2(this)">
                    <label class="omidform1" for="job1">شغل آزاد</label>
                    <input type="checkbox" name="job" id="adam1" value="adameshteghal" onclick="myFun2(this)">
                    <label class="omidform1" for="adam1">عدم اشتغال</label>
                </div>
                <hr>
                <div id="tamakonmali">
                    <p class="omidbeheshtianp">تمکن مالی</p>
                    <input type="checkbox" name="tamakonmali" id="tamakonmali1" value="200-500" onclick="myFun3(this)">
                    <label class="omidform2" for="tamakonmali1">200 تا 500 میلیون</label>
                    <input type="checkbox" name="tamakonmali" id="tamakonmali2" value="500-1" onclick="myFun3(this)">
                    <label class="omidform2" for="tamakonmali2">500 میلیون تا 1 میلیارد</label>
                    <input type="checkbox" name="tamakonmali" id="tamakonmali3" value="1-2" onclick="myFun3(this)">
                    <label class="omidform2" for="tamakonmali3">1 میلیارد تا 2 میلیارد</label>
                    <input type="checkbox" name="tamakonmali" id="tamakonmali4" value="2+" onclick="myFun3(this)">
                    <label class="omidform2" for="tamakonmali4">2 میلیارد به بالا</label>
                </div>
                <hr>
                <div id="madrak">
                    <p class="omidbeheshtianp">مدرک زبان انگلیسی</p>
                    <input type="radio" id="z1" name="madrak" value="y" onclick="madraknomre()">
                    <label class="omidform1" for="z1">دارم</label>
                    <input type="radio" id="z2" name="madrak" value="n" onclick="madrakbegir()">
                    <label class="omidform1" for="z2">ندارم</label>
                    <div id="madraknomre" style="display:none;">
                        <hr>
                        <input type="text" placeholder="نمره مدرک" name="nomre" style="border-radius:12px; padding:3px;">
                    </div>
                    <div id="madrakbegir" style="display:none;">
                        <hr>
                            <input type="checkbox" name="madrakbegirim" id="madrakbegirim">
                            <label class="omidform2" for="madrakbegirim">میتوانم اخذ کنم</label>
                    </div>
                </div>
                <hr>
                <div id="madrakgheyr">
                    <p class="omidbeheshtianp">مدرک زبان غیر از انگلیسی</p>
                    <input type="radio" id="mg1" name="madrakgheyr" value="y" onclick="madrakgheyrhide()">
                    <label class="omidform1" for="mg1">دارم</label>
                    <input type="radio" id="mg2" name="madrakgheyr" value="n" onclick="madgheyrhide2()">
                    <label class="omidform1" for="mg2">ندارم</label>
                    <div id="madrakgheyrhide" style="display:none;">
                        <hr>
                        <p class="omidbeheshtianp">زبان مدرک</p>
                        <input type="checkbox" name="madrakgheyrenglish" id="madrakgheyrenglish1" value="france" onclick="myFun4(this)">
                        <label class="omidform1" for="madrakgheyrenglish1">فرانسه</label>
                        <input type="checkbox" name="madrakgheyrenglish" id="madrakgheyrenglish2" value="آلمانی" onclick="myFun4(this)">
                        <label class="omidform1" for="madrakgheyrenglish2">آلمانی</label>
                        <input type="checkbox" name="madrakgheyrenglish" id="madrakgheyrenglish3" value="spain" onclick="myFun4(this)">
                        <label class="omidform1" for="madrakgheyrenglish3">اسپانیایی</label>
                        <input type="checkbox" name="madrakgheyrenglish" id="madrakgheyrenglish4" value="swed" onclick="myFun4(this)">
                        <label class="omidform1" for="madrakgheyrenglish4">سوئدی</label>
                        <input type="checkbox" name="madrakgheyrenglish" id="madrakgheyrenglish5" value="gheyre" onclick="myFun4(this)">
                        <label class="omidform1" for="madrakgheyrenglish5">غیره</label>
                    </div>
                </div>
                <hr>
                <div id="madraktahsili">
                    <p class="omidbeheshtianp">مدرک تحصیلی</p>
                    <input type="checkbox" name="madraktahsili" id="madraktahsili1" value="n" onclick="myFun5(this)">
                    <label class="omidform1" for="madraktahsili1">ندارم</label>
                    <input type="checkbox" name="madraktahsili" id="madraktahsili2" value="diplom" onclick="myFun5(this)">
                    <label class="omidform1" for="madraktahsili2">دیپلم</label>
                    <input type="checkbox" name="madraktahsili" id="madraktahsili3" value="karshenasi" onclick="myFun5(this)">
                    <label class="omidform1" for="madraktahsili3">کارشناسی</label>
                    <input type="checkbox" name="madraktahsili" id="madraktahsili4" value="karshenasiarshad" onclick="myFun5(this)">
                    <label class="omidform1" for="madraktahsili4">کارشناسی ارشد</label>
                    <input type="checkbox" name="madraktahsili" id="madraktahsili5" value="doctor" onclick="myFun5(this)">
                    <label class="omidform1" for="madraktahsili5">دکتری</label>
                </div>
                <hr>
                <div id="sabeghesafar">
                    <p class="omidbeheshtianp">سابقه سفری</p>
                    <input type="radio" id="sf1" name="sabeghesafar" value="y">
                    <label class="omidform1" for="sf1">دارم</label>
                    <input type="radio" id="sf2" name="sabeghesafar" value="n">
                    <label class="omidform1" for="sf2">ندارم</label>
                </div>
                <hr>
                <div id="taahol">
                    <p class="omidbeheshtianp">وضعیت تاهل</p>
                    <input type="radio" id="t1" name="taahol" value="motahel" onclick="farzand()">
                    <label class="omidform1" for="t1">متاهل</label>
                    <input type="radio" id="t2" name="taahol" value="mojarad" onclick="farzandhide()">
                    <label class="omidform1" for="t2">مجرد</label>
                    <div id="2tt" style="display:none;">
                    <hr>
                    <p class="omidbeheshtianp">فرزند</p>
                    <input type="radio" id="yc" name="child" value="yes" onclick="tedadfarzzand()">
                        <label class="omidform1" for="yc">دارم</label>
                        <input type="radio" id="nc" name="child" value="no" onclick="tedadfarzandhide()">
                        <label class="omidform1" for="nc">ندارم</label>
                        <div id="tedadfarzand" style="display:none;">
                        <hr>
                        <p class="omidbeheshtianp">تعداد فرزند</p>
                            <input type="number" name="tedadfarzand" style="border-radius:12px; padding:3px;" required>
                            <p class="omidbeheshtianp">سن فرزند</p>
                            <input type="number" name="senfarzand" style="border-radius:12px; padding:3px;">
                        </div>
                    </div>
                </div>
                <hr>
                <div id="akhzvisa">
                    <p class="omidbeheshtianp">سابقه اقدام جهت اخذ هر نوع ویزا یا اقامت</p>
                    <input type="radio" id="av1" name="akhzvisa" value="y" onclick="rejectvisa()">
                    <label class="omidform1" for="av1">دارم</label>
                    <input type="radio" id="av2" name="akhzvisa" value="n" onclick="rejecthide()">
                    <label class="omidform1" for="av2">ندارم</label>
                    <div id="rejectvisa" style="display:none;">
                            <hr>
                            <p class="omidbeheshtianp">سابقه ریجکت ویزا </p>
                            <input type="radio" id="re1" name="reject" value="y" onclick="noevisa()">
                            <label class="omidform1" for="re1">دارم</label>
                            <input type="radio" id="re2" name="reject" value="n" onclick="noevisahide()">
                            <label class="omidform1" for="re2">ندارم</label>
                            <div id="noevisareject" style="display:none">
                                <hr>
                                <p class="omidbeheshtianp">نوع ویزا</p>
                                <input type="radio" id="tr1" name="typevisareject" value="shengen">
                                <label class="omidform1" for="tr1">شنگن</label>
                                <input type="radio" id="tr2" name="typevisareject" value="notshengen">
                                <label class="omidform1" for="tr2">غیر شنگن</label>
                            </div>
                        </div>
                </div>
                <div>
                <button class="edame" id="submit_prog" name="send">ادامه</button>
                </div>
        </form>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-9 col-xs-9" id="news">
            <h1 style="color:#8a8a8a; font-size: 29px; padding-top: 25px; text-align: center;">آخرین اخبار مجموعه</h1>
            <hr>
            <p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p>
            <hr>
            <p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p>
            <hr>
            <p>با توجه به شرایط شما بهترین گزینه ها به شماغ ارائه می شود و کارشناسان ما در تصمیم گیری برای رسیدن به بهترین نتیجه به شما یاری می رسانند.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12" style="margin-top:20px; display:flex; justify-content:center; align-items:center;">
        <p style="text-align:left; color: #ccc;">Copyright © 2021 Visaatlantis. All rights reserved. Programmed by  <a href="https://omidbeheshtian.ir" class="omidbeheshtian" style="text-align:left; text-decoration:none; color: #fff !important; font-weight: normal;"> Omid Beheshtian </a></p>
        </div>
        <div class="col-md-4 col-xs-0 col-lg-4 col-sm-0"></div>
    </div>
    </div>
</div>

    <!--AI Omid Beheshtian JS-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/ai.js"></script>

    <script type="text/javascript">
    
$(document).ready(function() {

    var $submit = $("#submit_prog").hide(),
        $cbs = $('input[name="akhzvisa"]').click(function() {
            $submit.toggle( $cbs.is(":checked") );
        });
});

      function myFun(checkbox) {
    var checkboxes = document.getElementsByName('maghsad')
    checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked =  false
    })
      }
      
            function myFun1(checkbox) {
    var checkboxes = document.getElementsByName('age')
    checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked =  false
    })
      }
      
                  function myFun2(checkbox) {
    var checkboxes = document.getElementsByName('job')
    checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked =  false
    })
      }
      
                        function myFun3(checkbox) {
    var checkboxes = document.getElementsByName('tamakonmali')
    checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked =  false
    })
      }
      
      
                              function myFun4(checkbox) {
    var checkboxes = document.getElementsByName('madrakgheyrenglish')
    checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked =  false
    })
      }
      
                                    function myFun5(checkbox) {
    var checkboxes = document.getElementsByName('madraktahsili')
    checkboxes.forEach((item) => {
      if (item !== checkbox) item.checked =  false
    })
      }
    </script>
<?php } 
get_footer();
?>
  </body>
</html>