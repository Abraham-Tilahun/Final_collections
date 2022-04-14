<?php
session_start();
if ((!isset($_SESSION['language']))) {

    include'language/English.php';
} else if ($_SESSION['language'] == 'English') {

    include'language/English.php';
} else if ($_SESSION['language'] == 'Amharic') {

    include'language/Amharic.php';
}

include('include/connect_db.php');
$msg = '';
?>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fixed Asset Management System </title>

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <script src="js/moment/news.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>


        <!-- Custom Theme Style -->
        <link href="build/css/custom.css" rel="stylesheet">
    </head>
    <body class="nav-justified fixed_height_200">
        <img src="images/Top.gif" width="1400" class="img-thumbnail"/>

        <div class="container body">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <b>  <?php echo $ln_language; ?></b>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="language/setLanguage.php?lan=english"> English</a></li>
                                        <li>

                                        </li>
                                        <li><a href="language/setLanguage.php?lan=amharic">Amharic</a></li>

                                    </ul>
                                </li>

                                <li class="">
                                    <a href="login.php"><b><?php echo $ln_login; ?></b></a>
                                </li>

                                <li class="">
                                    <a href=""><b><?php echo $ln_contact; ?></b></a>
                                </li>
                                <li class="">
                                    <a href="about.php"><b><?php echo $ln_about; ?></b></a>
                                </li>
                                <li class="">
                                    <a href="index.php"><b><?php echo $ln_home; ?></b></a>
                                </li>




                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="main_container">


                    <!-- top navigation -->

                    <!-- /top navigation -->

                    <!-- page content -->
                    <div class="right_col" role="main">
                        <div class="">

                            <div class="clearfix"></div>

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="x_content">
                                        <!-- Start WOWSlider.com BODY section -->
                                        <div id="wowslider-container1">
                                            <div class="ws_images"><ul>
                                                    <li><img src="data1/images/asset_store.jpg" alt="asset store" title="asset store" id="wows1_0"/></li>
                                                    <li><img src="data1/images/our_asset.jpg" alt="our asset" title="our asset" id="wows1_1"/></li>
                                                    <li><a href="http://wowslider.com"><img src="data1/images/store_asset.jpg" alt="slider" title="Store asset" id="wows1_2"/></a></li>
                                                    <li><img src="data1/images/store_asset2.jpg" alt="store asset2" title="store asset2" id="wows1_3"/></li>
                                                </ul></div>
                                            <div class="ws_bullets"><div>
                                                    <a href="#" title="asset store"><span><img src="data1/tooltips/asset_store.jpg" alt="asset store"/>1</span></a>
                                                    <a href="#" title="our asset"><span><img src="data1/tooltips/our_asset.jpg" alt="our asset"/>2</span></a>
                                                    <a href="#" title="Store asset"><span><img src="data1/tooltips/store_asset.jpg" alt="Store asset"/>3</span></a>
                                                    <a href="#" title="store asset2"><span><img src="data1/tooltips/store_asset2.jpg" alt="store asset2"/>4</span></a>
                                                </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v8.7</div>
                                            <div class="ws_shadow"></div>
                                        </div>	
                                        <script type="text/javascript" src="engine1/wowslider.js"></script>
                                        <script type="text/javascript" src="engine1/script.js"></script>
                                        <!-- End WOWSlider.com BODY section -->

                                        <div class="ln_solid"></div>


                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <table align="center"><tr><td><b> &copy; Copy Right Reserved 2017 ASU GC Student</b></td></tr>
                                <tr><td><b>Prepared By Group Three</b></td></tr></table>

                        </div>

                    </div>
                </div>

            </div>
            <!-- jQuery -->
            <script src="vendors/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

            <script src="build/js/custom.min.js"></script>

    </body>
</html>