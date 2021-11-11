<?php
$userdata = wp_get_current_user();
$userID = $userdata->ID;
$num = $userdata->user_login;
$usermeta = get_user_meta($userID);
$user_name = $usermeta['first_name'][0];
$customer = new WC_Customer( $userID );
$last_order = $customer->get_last_order();
if($last_order != NULL){
$order_id     = $last_order->get_id();
$order_data   = $last_order->get_data();
$order_status = $last_order->get_status();
}

$order_key = $order_data["order_key"];
$valuemoshavere = "https://test.visaatlantis.com/dashboard/checkout/order-received/$order_id/?key=$order_key";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
      <title><?php the_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="داشبورد مشتریان ویزا آتلانتیس">
    <meta name="author" content="Omid Beheshtian">
    <meta name="theme-color" content="#4272D7">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/new/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
<body>
    <input type="checkbox" id="check">
    <input type="checkbox" id="check2">
    <!--header area start-->
      <header>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div id="usercol">
                  <div class="userdata">
                      <div id="show"><i class="fas fa-sort-down" style="padding-right: 30px;"></i><span style="padding-right: 15px;"><?php echo $user_name ?></span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/1.png" alt="logo" style="width:45px; margin-right:10px;"></div>
                      <div class="menu" style="display: none;">
                        <a href="#" style="font-size:12px;color:#929292; text-decoration:none;"><?php echo $num; ?></a>
                        <br>
                        <a href="<?php echo wp_logout_url(home_url()); ?>" id="logoutbtn" style="color:#929292; text-decoration:none;">خروج از حساب</a>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </header>
      <?php // wp_head(); ?>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="sidebarm">
          <label for="check2">
            <i class="fas fa-bars" id="sidebar_btn" style="font-size: 25px;"><span>فهرست</span></i>
          </label>
          <hr style="border: 2px solid;">
          <a href="https://portal.visaatlantis.com/dashboard"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/dash.png" alt="داشبورد" title="داشبورد"><span>داشبورد</span></a>
          <a href="https://portal.visaatlantis.com/consultation"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/const.png" alt="مشاوره تخصصی" title="مشاوره تخصصی"><span>مشاوره تخصصی</span></a>
          <a href="https://portal.visaatlantis.com/dashboard/my-account/files/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/const.png" alt="فایل های من" title="فایل های من"><span>فایل های من</span></a>
          <a href="https://portal.visaatlantis.com/free-consultation"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/online.png" alt="مشاوره آنلاین" title="مشاوره آنلاین"><span>مشاوره آنلاین</span></a>
          <a href="https://visaatlantis.com/about/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/about.png" alt="" title="درباره ما"><span>درباره ما</span></a>
          <a href="https://visaatlantis.com/contact-us/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/contact.png" alt="" title="تماس با ما"><span>تماس با ما</span></a>
          <a href="https://visaatlantis.com/contact-us/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/collabration.png" alt="" title="همکاری با ما"><span>همکاری با ما</span></a>
          <a href="https://visaatlantis.com/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/mainsite.png" alt="" title="صفحه اصلی سایت"><span>صفحه اصلی سایت</span></a>
    </div>
  <!--mobile navigation bar end-->
  <!--sidebar start-->
    <div class="sidebar">
          <label for="check">
            <i class="fas fa-bars" id="sidebar_btn" style="font-size: 25px;"><span>فهرست</span></i>
          </label>

        <!-- <span>Dashboard</span> -->
        <hr style="border: 2px solid;">
        <a href="https://portal.visaatlantis.com/dashboard"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/dash.png" alt="داشبورد" title="داشبورد"><span>داشبورد</span></a>
        <a href="https://portal.visaatlantis.com/consultation"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/const.png" alt="مشاوره تخصصی" title="مشاوره تخصصی"><span>مشاوره تخصصی</span></a>
        <a href="https://portal.visaatlantis.com/dashboard/my-account/files/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/const.png" alt="فایل های من" title="فایل های من"><span>فایل های من</span></a>
        <a href="https://portal.visaatlantis.com/free-consultation"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/online.png" alt="مشاوره آنلاین" title="مشاوره آنلاین"><span>مشاوره آنلاین</span></a>
        <a href="https://visaatlantis.com/about/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/about.png" alt="" title="درباره ما"><span>درباره ما</span></a>
        <a href="https://visaatlantis.com/contact-us/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/contact.png" alt="" title="تماس با ما"><span>تماس با ما</span></a>
        <a href="https://visaatlantis.com/contact-us/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/collabration.png" alt="" title="همکاری با ما"><span>همکاری با ما</span></a>
        <a href="https://visaatlantis.com/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/icons/mainsite.png" alt="" title="صفحه اصلی سایت"><span>صفحه اصلی سایت</span></a>
    </div>
    <!--sidebar end-->