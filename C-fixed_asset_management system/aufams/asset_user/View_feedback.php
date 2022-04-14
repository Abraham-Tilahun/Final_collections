<!DOCTYPE html>
<?php
include 'all.php';
include '../include/connect_db.php';
$msg = '';
$name = $_SESSION['fname'];
$id = $_SESSION['userId'];
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: View_feedback.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("location: View_feedback.php");

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
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
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
                                        <li><a href="View_feedback.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="View_feedback.php?lan=english"  rel="facebox"> English</a></li>
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
                                <h3><?php echo $ln_viewFeedbackTopTitle; ?></h3>
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
                                          if (isset($_GET['id'])) {
                                            $ids = $_GET['id'];
                                            $re = mysql_query("DELETE FROM feedback WHERE F_ID=$ids");

                                            if ($re) {
                                                echo ' <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-check"></i></strong>' . $ln_viewFeedbackDeleteSucess .
                                                '</div>';
                                            }
                                        }
                                       
                                            $lim = 4;
                                if (isset($_GET["page"])) {
                                    $page = $_GET["page"];
                                    if ($page == "" || $page == "1") {
                                        $page1 = 0;
                                    } else {
                                        $page1 = ($page * $lim) - $lim;
                                    }
                                        $st = mysql_query("SELECT * FROM feedback WHERE ID=$id limit $page1,$lim");
                                        echo mysql_error();
                                      
                                        if (mysql_num_rows($st) > 0) {
                                            while ($row = mysql_fetch_assoc($st)) {


                                                $time1 = $row['PREPARE_DATE'];


                                                $seconds = strtotime(date('Y-m-d H:i:s')) - strtotime($time1);
                                                $year = floor($seconds / (3600 * 24 * 365));
                                                $months = floor($seconds / (3600 * 24 * 30));
                                                $day = floor($seconds / (3600 * 24));
                                                $hours = floor($seconds / 3600);
                                                $mins = floor(($seconds - ($hours * 3600)) / 60);
                                                $secs = floor($seconds % 60);
                                                ?>
                                                <div class="col-lg-6">
                                                    <div class="panel">

                                                        <div class="well">
                                                            <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                <strong><i class="fa fa-2x fa-thumbs-o-up"></i></strong><?php echo $ln_viewFeedbackInnerTitle;
                                                ?>
                                                            </div>
                                                            <div class="panel-title">
                                                                <div class="profile_pic">
                                                                    <?php
                                                                    echo $ln_viewFeedbackbefore;
                                                                    if ($seconds < 60)
                                                                        echo $secs . $ln_viewFeedbackSecondago;
                                                                    else if ($seconds < 60 * 60)
                                                                        echo $mins . $ln_viewFeedbackMinuteago;
                                                                    else if ($seconds < 24 * 60 * 60)
                                                                        echo $hours . $ln_viewFeedbackHourago;
                                                                    else if ($seconds < 24 * 60 * 60 * 30)
                                                                        echo $day . $ln_viewFeedbackDayago;
                                                                    else if ($seconds < 24 * 60 * 60 * 365) {
                                                                        echo $months . $ln_viewFeedbackMonthago;
                                                                    } else {
                                                                        echo $year . $ln_viewFeedbackYearago;
                                                                    }
                                                                    ?><br>
                                                                    <?php echo $ln_viewFeedbackTo; ?><?php echo ucfirst($_SESSION['fname']); ?>

                                                                </div><?php echo $ln_viewFeedbackTitle; ?><?php echo ucfirst($row['TITLE']); ?>
                                                                <div class="text-right">

                                                                    <?php echo $ln_viewFeedbackPreparedon; ?> <?php echo $row['PREPARE_DATE']; ?>
                                                                </div>
                                                                <hr>
                                                            </div>   
                                                            <div class="panel-body">
                                                                <?php
                                                                echo $row['FEEDBACKS'];
                                                                ?>
                                                                <div class="text-right">
                                                                    <a  data-toggle="tooltip" data-placement="top" title="<?php echo $ln_propertyMangerDeleteTooltip; ?>"   rel="facebox" href="view_feedback.php?id=<?php echo $row['F_ID']; ?>"><button class="btn btn-danger btn-mini"><i class="fa fa-trash-o"></i>  </button></a>     

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                                <?php
                                            }
                                }
                                 else {
                                            echo '<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>  Sorry Still now You have not Feedback Thankyou!! .
</div>';
                                        }
                                                                    }
                                else{
                                
                                    
                                    $st = mysql_query("SELECT * FROM feedback WHERE ID=$id limit 0,$lim");
                                        echo mysql_error();
                                      
                                        if (mysql_num_rows($st) > 0) {
                                            while ($row = mysql_fetch_assoc($st)) {


                                                $time1 = $row['PREPARE_DATE'];


                                                $seconds = strtotime(date('Y-m-d H:i:s')) - strtotime($time1);
                                                $year = floor($seconds / (3600 * 24 * 365));
                                                $months = floor($seconds / (3600 * 24 * 30));
                                                $day = floor($seconds / (3600 * 24));
                                                $hours = floor($seconds / 3600);
                                                $mins = floor(($seconds - ($hours * 3600)) / 60);
                                                $secs = floor($seconds % 60);
                                                ?>
                                                <div class="col-lg-6">
                                                    <div class="panel">

                                                        <div class="well">
                                                            <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                <strong><i class="fa fa-2x fa-thumbs-o-up"></i></strong><?php echo $ln_viewFeedbackInnerTitle;
                                                ?>
                                                            </div>
                                                            <div class="panel-title">
                                                                <div class="profile_pic">
                                                                    <?php
                                                                    echo $ln_viewFeedbackbefore;
                                                                    if ($seconds < 60)
                                                                        echo $secs . $ln_viewFeedbackSecondago;
                                                                    else if ($seconds < 60 * 60)
                                                                        echo $mins . $ln_viewFeedbackMinuteago;
                                                                    else if ($seconds < 24 * 60 * 60)
                                                                        echo $hours . $ln_viewFeedbackHourago;
                                                                    else if ($seconds < 24 * 60 * 60 * 30)
                                                                        echo $day . $ln_viewFeedbackDayago;
                                                                    else if ($seconds < 24 * 60 * 60 * 365) {
                                                                        echo $months . $ln_viewFeedbackMonthago;
                                                                    } else {
                                                                        echo $year . $ln_viewFeedbackYearago;
                                                                    }
                                                                    ?><br>
                                                                    <?php echo $ln_viewFeedbackTo; ?><?php echo ucfirst($_SESSION['fname']); ?>

                                                                </div><?php echo $ln_viewFeedbackTitle; ?><?php echo ucfirst($row['TITLE']); ?>
                                                                <div class="text-right">

                                                                    <?php echo $ln_viewFeedbackPreparedon; ?> <?php echo $row['PREPARE_DATE']; ?>
                                                                </div>
                                                                <hr>
                                                            </div>   
                                                            <div class="panel-body">
                                                                <?php
                                                                echo $row['FEEDBACKS'];
                                                                ?>
                                                                <div class="text-right">
                                                                    <a  data-toggle="tooltip" data-placement="top" title="<?php echo $ln_propertyMangerDeleteTooltip; ?>"   rel="facebox" href="view_feedback.php?id=<?php echo $row['F_ID']; ?>"><button class="btn btn-danger btn-mini"><i class="fa fa-trash-o"></i>  </button></a>     

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                                <?php
                                            }
                                }
                                $query = mysql_query("SELECT * FROM feedback WHERE ID=$id ");
                                echo mysql_error();
                                $a = mysql_num_rows($query);
                                $b = $a / $lim;
                                $b = ceil($b);
                                echo '<div class="col-xs-12 col-lg-9"><br><p align="center"><a href="#"style="text-decoration: none">&raquo;&raquo;</a>';
                                for ($index = 1; $index <= $b; $index++) {
                                    ?>
                                        <a href="View_feedback.php?page=<?php echo $index; ?>"style="text-decoration: none"><?php echo ' Page ' . $index . ' '; ?> </a>
                               <?php
                                }
                                            }
                                       
                                        ?>


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