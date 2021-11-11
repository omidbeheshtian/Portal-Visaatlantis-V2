<?php
if ($user_ID) { get_header(); 
$usermeta = get_user_meta($userID);
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
    // $user_id = get_current_user_id();
    $customer = new WC_Customer( $userID );
    $last_order = $customer->get_last_order();
    if($last_order != NULL){
$order_id     = $last_order->get_id();
$order_data   = $last_order->get_data();
$order_status = $last_order->get_status();
}
    $order_key = $order_data["order_key"];
    
if($order_status != "completed" && $order_status !="cancelled" && $order_status !="pending" && $order_status !=NULL){
     wp_redirect("https://portal.visaatlantis.com/dashboard/checkout/order-received/$order_id/?key=$order_key");
     exit;
}
?>

<div class="content">
    <div class="container">
          <?php the_content();?>
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