<?php
if(isset($_GET['send'])){
    if($_GET['age'] == '50+' && $_GET['maghsad'] == 'euro' && $_GET['tamakonmali'] != '200-500'){
        echo '
        <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اقامت بازنشستگی</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>
        ';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['age'] != '18-23' && $_GET['tamakonmali'] != '200-500' && $_GET['madraktahsili'] != 'n'){
        echo '
<div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">مدل نمایندگی</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['age'] != '50+' && $_GET['tamakonmali'] != '200-500' && $_GET['madraktahsili'] != 'n'){
        echo '
        <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اقامت کاری حوزه شنگن</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['age'] == '18-23' || $_GET['age'] == '23-35' && $_GET['tamakonmali'] != '200-500' && $_GET['madraktahsili'] != 'n' && $_GET['taahol'] == 'mojarad' || $_GET['child'] == 'no'){
        echo '
        <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">جاب آفر مشاغل 1-Tier در حوزه شنگن</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['age'] != '50+' && $_GET['madraktahsili'] != 'n'){
        echo '
                <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">تحصیلی اتحادیه اروپا</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] != 'canada' && $_GET['tamakonmali'] != '200-500' || $_GET['tamakonmali'] != '500-1' && $_GET['akhzvisa'] == 'y' && $_GET['sabeghesafar'] == 'y' && $_GET['senfarzand'] <6 || $_GET['taahol'] == 'mojarad'){
        echo '
        <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">فرانسه</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'euro' && $_GET['tamakonmali'] != '200-500'){
        echo '
        <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">آلمان</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'canada' && $_GET['age'] == '18-23' || $_GET['age'] == '23-35' && $_GET['madraktahsili'] != 'n' && $_GET['taahol'] == 'mojarad' || $_GET['taahol'] == 'motahel' && $_GET['child'] == 'no'){
        echo '
        <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">کانادا کارورزی</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'canada' && $_GET['age'] != '18-23' && $_GET['job'] == 'sahebkar' && $_GET['job'] == 'azad' && $_GET['tamakonmali'] == '2+' || $_GET['tamakonmali'] == '1-2' && $_GET['madraktahsili'] != 'n'){
        echo '
        <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">Intra company transfer</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>';
    }
    if($_GET['maghsad'] == 'canada' && $_GET['age'] == '18-23' || $_GET['age'] == '23-35' && $_GET['madrak'] == 'y' || $_GET['madrakbegirim'] == true && $_GET['madraktahsili'] != 'diplom' || $_GET['madraktahsili'] != 'n'){
        echo '
        <div class="main-content">
        <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-4">
                    <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                        <div class="overview__inner">
                             <div class="overview-box clearfix">
                                <i style="font-size:30px; float:right; color:#2E7D32;" class="fas fa-check"></i>
                                <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">Express entry</h2>
                    <div class="overview-chart">
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="tel:02188361003" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="fa fa-phone"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">همین حالا تماس بگیرید</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c5" style="background-color:#FFFFFF; padding:15px 15px 0;">
                <a href="https://portal.visaatlantis.com/dashboard/cunsulations/" class="omidbeheshtian">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                            <i style="font-size:30px; float:right; color:#4272D7;" class="far fa-copy"></i>
                            <h2 style="font-size:20px; text-align:right; clear:both; padding-top:10px;">اخذ مشاوره تخصصی</h2>
                    </div>
                    <div class="overview-chart">
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
        </div>
        </div>';
    }
}
?>