<!DOCTYPE html>
<?php
include 'all.php';

include '../include/connect_db.php';
$suc = '';
if (isset($_GET['lan'])) {
    $langu = $_GET['lan'];
    if ($langu == 'english') {
        $_SESSION['language'] = 'English';
        header("location: view_problem_report.php");
    } else if ($langu == 'amharic') {
        unset($_SESSION['language']);
        $_SESSION['language'] = 'Amharic';
        header("location: view_problem_report.php");
    }
}
if (isset($_POST['feedback'])) {
    $date = date('Y-m-d H:i:s');
    $tit = $_POST['title'];
    $feedback = $_POST['feedback'];
    $uid = $_POST['userId'];
    $rid = $_POST['prid'];

    $result = mysql_query("INSERT INTO feedback(ID, TITLE, FEEDBACKS, PREPARE_DATE) VALUES($uid, '$tit', '$feedback', '$date')");
    echo mysql_error();
    $st = mysql_query("UPDATE problem_report set STATUS=1,RETURNED_DATE='$date' WHERE PR_ID=$rid");
    echo mysql_error();
    if ($result) {
        $suc = '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-check"></i>Success!</strong> You are sucessfully Prepared feed back.
</div>';
    } else {
        $suc = '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i>Error!</strong> Something Wrong Try again.
</div>';
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


        <!-- Custom Theme Style -->
        <link href="../build/css/custom.css" rel="stylesheet">
    </head>
    <body class="nav-md footer_fixed">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $ln_propertyManger; ?></span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="<?php echo $_SESSION['image']; ?>" alt="..." class="img-circle profile_img">

                            </div>
                            <div class="profile_info">
                                <span><?php echo $ln_welcome; ?></span>
                                <h2><?php echo ucfirst($_SESSION['fname']); ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3><?php echo $ln_general; ?></h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-users"></i><?php echo $ln_propertyMangerManageUsers; ?> <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="create_account.php"><?php echo $ln_propertyMangerCreateAccount; ?></a></li>

                                            <li><a><i class="fa fa-xing-square"></i><?php echo $ln_propertyMangerDeactivateUser; ?><span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">

                                                    <li><a href="deactivate_user.php"><?php echo $ln_propertyMangerDeactivateAssetUser; ?></a></li>
                                                    <li><a href="deactivate_manager.php"><?php echo $ln_propertyMangerDeactivateAssetManager; ?></a></li>
                                                </ul>
                                            </li>
                                            <li><a><i class="fa fa-users"></i><?php echo $ln_propertyMangerViewUser; ?> <span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li><a href="view_asset_user.php"><?php echo $ln_propertyMangerViewAssetUser; ?></a></li>
                                                    <li><a href="View_asset_manager.php"><?php echo $ln_propertyMangerviewAssetManager; ?></a></li>
                                                </ul>
                                            </li>
                                            <li><a><i class="fa fa-check-circle-o"></i><?php echo $ln_propertyMangerActivateUser; ?><span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">

                                                    <li><a href="activate_user.php"><?php echo $ln_propertyMangerActivateAssetUser; ?></a></li>
                                                    <li><a href="activate_manager.php"><?php echo $ln_propertyMangerActivateAssetManager; ?></a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="change_password.php"><i class="fa fa-edit"></i><?php echo $ln_changePassword; ?></a></li>                                                                     
                                    <li><a href="view_asset.php"><i class="fa fa-eye"></i><?php echo $ln_viewAssetInformation; ?></a></li>

                                    <li><a href="view_Problem_report.php"><i class="fa fa-question"></i><?php echo $ln_propertyMangerViewproblemreport; ?></a></li>
                                    <li><a href="approve_report.php"><i class="fa fa-check-circle-o"></i><?php echo $ln_propertyManagerApproveReport; ?></a></li>
                                    <li><a href="prepare_announcement.php"><i class="fa fa-envelope-o"></i><?php echo $ln_propertyMangerPrepareAnnouncement; ?></a></li>
                                    <li><a href="approve_request.php"><i class="fa fa-check-circle"></i><?php echo $ln_propertyMangerApproveRequest; ?></a></li>
                                    <li><a href="view_withdraw.php"><i class="fa fa-eye"></i><?php echo $ln_viewWithdraw; ?></a></li>

                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">

                            <a data-toggle="tooltip" data-placement="top" title="<?php echo $ln_logout; ?>" href="../logout.php">
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

                                        <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> <?php echo $ln_logout; ?></a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $ln_language; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="view_problem_report.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="view_problem_report.php?lan=english"  rel="facebox"> English</a></li>
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
                                <h3><?php echo $ln_propertyMangerViewproblemreportTitle; ?></h3>
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

                                    </div>
                                    <div class="x_content">
                                        <div class="col-lg-6">
                                            <?php
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                $sts = mysql_query("DELETE FROM problem_report WHERE PR_ID=$id");
                                                echo mysql_error();
                                                if ($sts) {
                                                    echo '<div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-check"></i></strong>' . $ln_propertyMangerDeleteReportsuccess . '
</div>';
                                                }
                                            }
                                            if ($suc != '') {
                                                echo $suc;
                                            }

                                            $lim = 2;
                                            if (isset($_GET["page"])) {
                                                $page = $_GET["page"];
                                                if ($page == "" || $page == "1") {
                                                    $page1 = 0;
                                                } else {
                                                    $page1 = ($page * $lim) - $lim;
                                                }
                                                $st = mysql_query("SELECT asset_user.F_NAME, asset_user.PROFILE, problem_report.TITLE, problem_report.PREPARE_DATE,problem_report.PR_ID, problem_report.NOTE  FROM problem_report INNER JOIN asset_user ON asset_user.ID=problem_report.ID WHERE problem_report.STATUS=0 ORDER BY problem_report.PREPARE_DATE DESC  limit $page1, $lim ");
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
                                                        if ($row['PROFILE'] == '' || $row['PROFILE'] == null) {
                                                            $um = "../images/user.png";
                                                        } else {
                                                            $um = $row['PROFILE'];
                                                        }
                                                        ?>

                                                        <div class="panel">

                                                            <div class="well">
                                                                <div class="alert alert-warning"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                    <strong><i class="fa fa-2x fa-thumbs-o-down"></i></strong><?php echo $ln_propertyMangerunreplay; ?>
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
                                                                        ?>
                                                                        From:<?php echo ucfirst($row['F_NAME']); ?>
                                                                        <img src="<?php echo $um; ?>" alt="..." class="img-circle profile_img" title="<?php echo ucfirst($row['F_NAME']) . ' Profile'; ?>">
                                                                    </div><?php echo $ln_viewFeedbackTitle . ucfirst($row['TITLE']); ?>
                                                                    <div class="text-right">
                                                                        Prepared on: <?php echo $row['PREPARE_DATE']; ?>
                                                                    </div>
                                                                    <hr>
                                                                </div>   
                                                                <div class="panel-body">
                                                                    <?php
                                                                    echo $row['NOTE'];
                                                                    ?>
                                                                    <div class="text-right">
                                                                        <a  data-toggle="tooltip" data-placement="top" title="<?php echo $ln_propertyMangerDeleteTooltip; ?>" rel="facebox" href="view_problem_report.php?id=<?php echo $row['PR_ID']; ?>"><button class="btn btn-danger btn-mini"><i class="fa fa-trash-o"></i>  </button></a>     
                                                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo $ln_propertyMangerReplayTooltip; ?>"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['PR_ID']; ?>"><i class="fa fa-reply"></i></button></a>&nbsp; ';
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                } else {
                                                    echo '<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>  Sorry Still now there is no problem report from user!! .
</div>';
                                                }
                                            } else {

                                                $st = mysql_query("SELECT asset_user.F_NAME, asset_user.PROFILE, problem_report.TITLE, problem_report.PREPARE_DATE,problem_report.PR_ID, problem_report.NOTE  FROM problem_report INNER JOIN asset_user ON asset_user.ID=problem_report.ID WHERE problem_report.STATUS=0 ORDER BY problem_report.PREPARE_DATE DESC limit 0,$lim ");
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
                                                        if ($row['PROFILE'] == '' || $row['PROFILE'] == null) {
                                                            $um = "../images/user.png";
                                                        } else {
                                                            $um = $row['PROFILE'];
                                                        }
                                                        ?>

                                                        <div class="panel">

                                                            <div class="well">
                                                                <div class="alert alert-warning"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                    <strong><i class="fa fa-2x fa-thumbs-o-down"></i></strong><?php echo $ln_propertyMangerunreplay; ?>
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
            ?>
                                                                        From:<?php echo ucfirst($row['F_NAME']); ?>
                                                                        <img src="<?php echo $um; ?>" alt="..." class="img-circle profile_img" title="<?php echo ucfirst($row['F_NAME']) . ' Profile'; ?>">
                                                                    </div><?php echo $ln_viewFeedbackTitle . ucfirst($row['TITLE']); ?>
                                                                    <div class="text-right">
                                                                        Prepared on: <?php echo $row['PREPARE_DATE']; ?>
                                                                    </div>
                                                                    <hr>
                                                                </div>   
                                                                <div class="panel-body">
            <?php
            echo $row['NOTE'];
            ?>
                                                                    <div class="text-right">
                                                                        <a  data-toggle="tooltip" data-placement="top" title="<?php echo $ln_propertyMangerDeleteTooltip; ?>" rel="facebox" href="view_problem_report.php?id=<?php echo $row['PR_ID']; ?>"><button class="btn btn-danger btn-mini"><i class="fa fa-trash-o"></i>  </button></a>     
                                                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo $ln_propertyMangerReplayTooltip; ?>"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['PR_ID']; ?>"><i class="fa fa-reply"></i></button></a>&nbsp; ';
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
            <?php
        }
    }

    $query = mysql_query("SELECT * FROM problem_report WHERE STATUS=0 ORDER BY PREPARE_DATE DESC");
    echo mysql_error();
    $a = mysql_num_rows($query);
    $b = $a / $lim;
    $b = ceil($b);
    echo '<div class="col-xs-12 col-lg-9"><br><p align="center"><a href="#"style="text-decoration: none">&raquo;&raquo;</a>';
    for ($index = 1; $index <= $b; $index++) {
        ?>
                                                    <a href="view_problem_report.php?page=<?php echo $index; ?>" style="text-decoration: none"><?php echo ' Page ' . $index . ' '; ?> </a>
                                                    <?php
                                                }
                                            }







                                            $sttt = mysql_query("SELECT asset_user.ID,asset_user.F_NAME, asset_user.PROFILE, problem_report.TITLE, problem_report.PREPARE_DATE, problem_report.PR_ID, problem_report.NOTE  FROM problem_report INNER JOIN asset_user ON asset_user.ID=problem_report.ID WHERE problem_report.STATUS=0 ORDER BY problem_report.PREPARE_DATE DESC");

                                            while ($row = mysql_fetch_assoc($sttt)) {
                                                ?>

                                                <div id="myModal<?php echo $row['PR_ID']; ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                Give Feedback for <?php echo ucfirst($row['F_NAME']); ?>                      
                                                            </div>
                                                            <div class="modal-body">

                                                                <form class="form-horizontal form-label-left" method="post" name="request" onsubmit="return validRequest();">
                                                                    <div class="item form-group">
                                                                        <input type="hidden" name="prid" value="<?php echo $row['PR_ID']; ?>">
                                                                        <input type="hidden" name="userId" value="<?php echo $row['ID']; ?>">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"><?php echo $ln_viewAnnouncementTitle; ?>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <input name="title" class="form-control col-md-7 col-xs-12"  type="text" onblur="validRequest()"><span id="title"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item form-group">
                                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="feedback"><?php echo $ln_propertyMangerFeedback; ?>
                                                                        </label>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <textarea name="feedback" class="form-control col-md-7 col-xs-12"  onblur="validRequest()"></textarea><span id="feedback"></span>
                                                                        </div>


                                                                    </div>
                                                                    <div class="text-center"> <button type="submit" name="fedback" class="btn btn-success"><?php echo $ln_submit; ?></button>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $ln_cancel; ?></button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
    <?php
}
?>
                                        </div>



                                    </div>
                                        <!--approved -->
                                        <div class="col-lg-6">
<?php
$lim = 2;
if (isset($_GET["pages"])) {
    $page = $_GET["pages"];
    if ($page == "" || $page == "1") {
        $page1 = 0;
    } else {
        $page1 = ($page * $lim) - $lim;
    }
    $st = mysql_query("SELECT asset_user.PROFILE, asset_user.F_NAME, problem_report.TITLE,problem_report.RETURNED_DATE, problem_report.PREPARE_DATE,problem_report.PR_ID, problem_report.NOTE  FROM problem_report INNER JOIN asset_user ON asset_user.ID=problem_report.ID WHERE problem_report.STATUS=1 ORDER BY problem_report.PREPARE_DATE DESC limit $page1,$lim");
    echo mysql_error();
    $um;
    if (mysql_num_rows($st) > 0) {
        while ($row = mysql_fetch_assoc($st)) {
            if ($row['PROFILE'] == '' || $row['PROFILE'] == null) {
                $um = "../images/user.png";
            } else {
                $um = $row['PROFILE'];
            }
            $time1 = $row['RETURNED_DATE'];
            $seconds = abs(strtotime(date('Y-m-d H:i:s')) - strtotime($time1));
            $year = floor($seconds / (3600 * 24 * 365));
            $months = floor($seconds / (3600 * 24 * 30));
            $day = floor($seconds / (3600 * 24));
            $hours = floor($seconds / 3600);
            $mins = floor(($seconds - ($hours * 3600)) / 60);
            $secs = floor($seconds % 60);
            ?>

                                                        <div class="panel">

                                                            <div class="well">
                                                                <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                    <strong><i class="fa fa-2x fa-thumbs-o-up"></i></strong><?php echo $ln_propertyMangerreplay; ?>
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
            ?>
                                                                        From:<?php echo ucfirst($row['F_NAME']); ?>
                                                                        <img src="<?php echo $um; ?>" alt="..." class="img-circle profile_img" title="Photo of <?php echo ucfirst($row['F_NAME']); ?>">
                                                                    </div><?php echo $ln_viewFeedbackTitle . ucfirst($row['TITLE']); ?>
                                                                    <div class="text-right">
                                                                        Prepared on: <?php echo $row['PREPARE_DATE']; ?>
                                                                    </div>
                                                                    <hr>
                                                                </div>   
                                                                <div class="panel-body">
            <?php
            echo $row['NOTE'];
            ?>
                                                                    <div class="text-right">
                                                                        <a  data-toggle="tooltip" data-placement="top" title="<?php echo $ln_propertyMangerDeleteTooltip; ?>" rel="facebox" href="view_problem_report.php?id=<?php echo $row['PR_ID']; ?>"><button class="btn btn-danger btn-mini"><i class="fa fa-trash-o"></i>  </button></a>     

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>    

            <?php
        }
    }
}
else{
      $st = mysql_query("SELECT asset_user.PROFILE, asset_user.F_NAME, problem_report.TITLE,problem_report.RETURNED_DATE, problem_report.PREPARE_DATE,problem_report.PR_ID, problem_report.NOTE  FROM problem_report INNER JOIN asset_user ON asset_user.ID=problem_report.ID WHERE problem_report.STATUS=1 ORDER BY problem_report.PREPARE_DATE limit 0,$lim");
    echo mysql_error();
    $um;
    if (mysql_num_rows($st) > 0) {
        while ($row = mysql_fetch_assoc($st)) {
            if ($row['PROFILE'] == '' || $row['PROFILE'] == null) {
                $um = "../images/user.png";
            } else {
                $um = $row['PROFILE'];
            }
            $time1 = $row['RETURNED_DATE'];
            $seconds = abs(strtotime(date('Y-m-d H:i:s')) - strtotime($time1));
            $year = floor($seconds / (3600 * 24 * 365));
            $months = floor($seconds / (3600 * 24 * 30));
            $day = floor($seconds / (3600 * 24));
            $hours = floor($seconds / 3600);
            $mins = floor(($seconds - ($hours * 3600)) / 60);
            $secs = floor($seconds % 60);
            ?>

                                                        <div class="panel">

                                                            <div class="well">
                                                                <div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                    <strong><i class="fa fa-2x fa-thumbs-o-up"></i></strong><?php echo $ln_propertyMangerreplay; ?>
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
            ?>
                                                                        From:<?php echo ucfirst($row['F_NAME']); ?>
                                                                        <img src="<?php echo $um; ?>" alt="..." class="img-circle profile_img" title="Photo of <?php echo ucfirst($row['F_NAME']); ?>">
                                                                    </div><?php echo $ln_viewFeedbackTitle . ucfirst($row['TITLE']); ?>
                                                                    <div class="text-right">
                                                                        Prepared on: <?php echo $row['PREPARE_DATE']; ?>
                                                                    </div>
                                                                    <hr>
                                                                </div>   
                                                                <div class="panel-body">
            <?php
            echo $row['NOTE'];
            ?>
                                                                    <div class="text-right">
                                                                        <a  data-toggle="tooltip" data-placement="top" title="<?php echo $ln_propertyMangerDeleteTooltip; ?>" rel="facebox" href="view_problem_report.php?id=<?php echo $row['PR_ID']; ?>"><button class="btn btn-danger btn-mini"><i class="fa fa-trash-o"></i>  </button></a>     

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>    

            <?php
        }
    }
    $query = mysql_query("SELECT * FROM problem_report WHERE STATUS=1 ");
                                echo mysql_error();
                                $a = mysql_num_rows($query);
                                $b = $a / $lim;
                                $b = ceil($b);
                                echo '<div class="col-xs-12 col-lg-9"><br><p align="center"><a href="#"style="text-decoration: none">&raquo;&raquo;</a>';
                                for ($index = 1; $index <= $b; $index++) {
                                    ?>
                                            <a href="view_problem_report.php?pages=<?php echo $index; ?>"style="text-decoration: none"><?php echo ' Page ' . $index . ' '; ?> </a>
                               <?php
    
}
}
    
    ?>
                                        </div>

                                        <!-- /page content -->


                                        <!-- footer content -->

                                        <!-- /footer content -->
                                    </div>
                                    <div class="ln_solid"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

    </body>
</html>