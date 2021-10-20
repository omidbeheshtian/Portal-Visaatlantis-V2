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
     wp_redirect("https://test.visaatlantis.com/dashboard/checkout/order-received/$order_id/?key=$order_key");
     exit;
}
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">رزرو وقت مشاوره</h2>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row m-t-25">


                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon" style="float:right;">
                                                <i style="color:#4272D7;" class="fa fa-phone"></i>
                                            </div>
                                            <div style="float:right; padding:0px 40px;">
                                                <h2>مشاوره تلفنی</h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                        <div class="overview-chart">
                                            <a href="https://test.visaatlantis.com/consulation/telephone/?add-to-cart=45" class="login-omidweb-product">رزرو</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-6">
                                <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon" style=" float:right;">
                                                <i style="color:#4272D7;" class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div style="float:right; padding:0px 40px;">
                                                <h2>مشاوره حضوری</h2>
                                                <!-- <span>تست</span> -->
                                            </div>
                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                        <div class="overview-chart">
                                            <a href="https://test.visaatlantis.com/consulation/attendance/?add-to-cart=39" class="login-omidweb-product">رزرو</a>
                                        </div>
                                    </div>
                                </div>
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
get_footer();
?>