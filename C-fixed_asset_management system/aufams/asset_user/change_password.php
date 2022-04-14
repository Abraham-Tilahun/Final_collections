<?php
include 'all.php';
include '../include/connect_db.php';
$msg = '';
$name = $_SESSION['fname'];
if (isset($_GET['lan'])) {
    $langu = $_GET['lan'];
    if ($langu == 'english') {
        $_SESSION['language'] = 'English';
        header("location: change_password.php");
    } else if ($langu == 'amharic') {
        unset($_SESSION['language']);
        $_SESSION['language'] = 'Amharic';
        header("location: change_password.php");
    }
}
if (isset($_POST['save'])) {
    $email = $_SESSION['email'];
    $password = md5($_POST['current_password']);
    $new = md5($_POST['new_password']);
    $con = md5($_POST['confirm_password']);
    $qry = mysql_query("select * from user_account where EMAIL='$email'");
    $rs = mysql_fetch_assoc($qry);
    $pswrd = $rs["PASSWORD"];
    if ($pswrd != $password) {
        $msg = 'not_correct';
    } elseif ($new != $con) {
        $msg = 'not_match';
    } else {
        $qr = mysql_query("update user_account set PASSWORD='$new' where EMAIL='$email'");
        $msg = 'success';
    }
}
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
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <script src="../js/validation.js" type="text/javascript"></script>

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.css" rel="stylesheet">
    </head>
    <body class="nav-md footer_fixed">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $ln_assetUserTitle; ?></span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="<?php echo $_SESSION['image']; ?>" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span><?php echo $ln_welcome; ?></span>
                                <h2><?php echo $name; ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3><?php echo $ln_general; ?></h3>
                                <ul class="nav side-menu">
                                    <li><a href="Prepare_request.php"><i class="fa fa-plus-circle"></i><?php echo $ln_prepareRequest; ?></a>
                                    <li><a href="Prepare_Problem_report.php"><i class="fa fa-comment"></i><?php echo $ln_prepareProblemReport; ?></a>
                                    <li><a href="View_feedback.php"><i class="fa fa-anchor"></i><?php echo $ln_viewFeedback; ?></a> 
                                    <li><a href="View_announcement.php"><i class="fa fa-info"></i><?php echo $ln_viewAnnouncement; ?></a> 
                                    <li><a href="View_My_asset.php"><i class="fa fa-anchor"></i><?php echo $ln_viewMyAsset; ?></a>
                                    <li><a href="Change_password.php"><i class="fa fa-edit"></i><?php echo $ln_changePassword; ?></a>
                                    <li><a href="lost_asset.php"><i class="fa fa-credit-card"></i><?php echo $ln_assetPayment; ?></a>
                                    </li>

                                </ul>
                            </div>                        
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">                      
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo $ln_logout; ?>" href="../logout.php?email=<?php echo $_SESSION['email']; ?>">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">

                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo $_SESSION['image']; ?>" alt=""><?php echo ucfirst($_SESSION['fname']); ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="profile.php"> Profile</a></li>

                                        <li><a href="../logout.php?email=<?php echo $_SESSION['email']; ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<?php echo $ln_language; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="change_password.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="change_password.php?lan=english"  rel="facebox"> English</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3><?php echo $ln_changePasswordTitle; ?></h3>
                            </div>

                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><?php echo $ln_changePasswordInnerTitle; ?> </h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

<?php
if ($msg != '') {
    if ($msg == "not_correct") {
        echo '<h2><div class="alert alert-danger">
  <strong>' . $ln_fail . '</strong>' . $ln_changePasswordfail .
        '</div></h2>';
    } elseif ($msg == 'success') {
        echo '<h2><div class="alert alert-success"><strong>' . $ln_success . '</strong>' . $ln_changePasswordSucess .
        '</div></h2>';
    } elseif ($msg == 'not_match') {
        echo '<h2><div class="alert alert-danger"><strong>' . $ln_fail . '</strong>' . $ln_changePasswordcon .
        '</div></h2>';
    }
}
?>
                                        <form class="form-horizontal form-label-left" action="" method="post" name="change_password" onsubmit="return validateform();">

                                            <div class="item form-group">
                                                <label for="password" class="control-label col-md-3"><?php echo $ln_changePasswordCurrentpassword; ?></label>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <input  type="password" name="current_password"  class="form-control col-md-7 col-xs-4" onblur="validateform();"><span id="current"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $ln_changePasswordNewpassword; ?></label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="password" name="new_password" class="form-control col-md-7 col-xs-12" onblur="validateform();"><span id="new"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $ln_changePasswordConfirmpassword; ?></label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="password" name="confirm_password" class="form-control col-md-7 col-xs-12" onblur="validateform();"><span id="confirm"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-6">
                                                    <button type="reset" class="btn btn-primary"><?php echo $ln_cancel; ?></button>
                                                    <button id="save" type="submit" name="save" class="btn btn-success"><?php echo $ln_submit; ?></button>
                                                </div>
                                            </div>


                                            <div class="ln_solid"></div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /page content -->

                <!-- footer content -->

                <!-- /footer content -->
            </div>
        </div>


        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>


        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

    </body>
</html>