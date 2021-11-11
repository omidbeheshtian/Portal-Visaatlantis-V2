<?php
/*
  Template name: ناحیه کاربری
 */
get_template_part('user');
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$usermeta = get_user_meta($userID);
if ($user_ID && $usermeta['first_name'][0] != NULL) {  get_header();?>

<div class="content">
  <div class="container">
  <div class="row">
      <div class="col-lg-12 col-md-11 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-11 col-lg-11 col-sm-12 col-xs-12" id="checkout">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
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

<?php } 
  get_footer();
  ?>
  </body>
</html>