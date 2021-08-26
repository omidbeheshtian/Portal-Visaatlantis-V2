<?php
if ($user_ID) { get_header();
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$usermeta = get_user_meta($userID);
    // $user_id = get_current_user_id();
    $customer = new WC_Customer( $userID );
    $last_order = $customer->get_last_order();
    if($last_order != NULL){
$order_id     = $last_order->get_id();
$order_data   = $last_order->get_data();
$order_status = $last_order->get_status();
}
    $order_key = $order_data["order_key"];
// if($order_status != "completed"){
//      wp_redirect("https://portal.visaatlantis.com/dashboard/checkout/order-received/$order_id/?key=$order_key");
//      exit;
// }
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                            <div class="row m-t-25">
                                <div class="col-sm-6 col-lg-12">
                                    <div class="overview-item overview-item--c2" >
                                        <div class="overview__inner" >
                                            <div class="overview-chart" style="z-index: 999;">
                                            <?php the_content(); ?>
                                            <?php do_action( 'woocommerce_before_checkout_form', $checkout ); ?>
                                            </div>
                                            <div class="overview-chart"></div>
                                            <div class="overview-chart"></div>
                                            <div class="overview-chart"></div>
                                            <div class="overview-chart"></div>
                                            <div class="overview-chart"></div>
                                            <div class="overview-chart"></div>
                                            <!--<div class="overview-chart"></div>-->
                                            <!--<div class="overview-chart"></div>-->
                                            <!--<div class="overview-chart"></div>-->

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