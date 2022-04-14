<!DOCTYPE html>
<?php
include 'all.php';
include '../include/connect_db.php';
if (isset($_GET['lan'])) {
    $langu = $_GET['lan'];
    if ($langu == 'english') {
        $_SESSION['language'] = 'English';
        header("location: prepare_announcement.php");
    } else if ($langu == 'amharic') {
        unset($_SESSION['language']);
        $_SESSION['language'] = 'Amharic';
        header("location: prepare_announcement.php");
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

        <script src="../js/propery_manager/Announcement.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
                                        <li><a href="prepare_announcement.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="prepare_announcement.php?lan=english"  rel="facebox"> English</a></li>
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

                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><?php echo $ln_prepareAnnouncementTop; ?> </h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="col-sm-12">
                                            <?php
                                            include('../include/connect_db.php');
                                            $day = Date("Y-m-d");
                                            ?>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-3x fa-plus-circle"></i><?php echo $ln_prepareAnnouncementAdd; ?></button></div><div class="col-sm-5"></div>
                                        <?php
                                        if (isset($_POST['save'])) {
                                            $day = Date("Y-m-d");
                                            $uid = $_SESSION['userId'];
                                            $title = $_POST['title'];
                                            $preparefor = $_POST['for'];
                                            $note = $_POST['note'];
                                            $exdate = $_POST['date'];
                                            if ($exdate > $day) {
                                                $stmt = mysql_query("INSERT INTO announcement (ID, TITLE, PREPARE_FOR, NOTE, PREPARE_DATE, EXPIRE_DATE) VALUES($uid, '$title', '$preparefor', '$note', '$day','$exdate')");
                                                if (!$stmt) {
                                                    echo mysql_error();
                                                } else {
                                                    echo "<div class='col-sm-2'></div><div class='col-sm-6'><div class='alert alert-success'>" .
                                                    "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                    "<strong>" . $ln_success . " </strong> " . $ln_prepareAnnouncementSucess .
                                                    "</div></div>";
                                                }
                                            } else {
                                                echo "<div class='col-sm-2'></div><div class='col-sm-6'><div class='alert alert-danger'>" .
                                                "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                "<strong>" . $ln_fail . " </strong> " . $ln_prepareAnnouncementfail .
                                                "</div></div>";
                                            }
                                        }
                                        ?>

                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title"> <?php echo $ln_prepareAnnouncementTop; ?> </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal form-label-left" novalidate action="" method="post" name="announcement" onsubmit="return Announcement();">

                                                            <div class="item form-group">
                                                                <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">Title: 
                                                                </label>
                                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                                    <input id="fname" class="form-control col-md-4 col-xs-8"  name="title" placeholder="e.g Title" type="text" onblur="Announcement()"><span id="title"></span>
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">Announce For: 
                                                                </label>
                                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                                    <select name="for" class="form-control col-md-3 col-xs-6" onblur="Announcement()">
                                                                        <option value="default">Select one</option>
                                                                        <option value="asset_user">Asset User</option>
                                                                        <option value="asset_manager">Asset Manager</option>
                                                                    </select><span id="for"></span>
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">Expire Date: 
                                                                </label>
                                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                                    <input id="fname" class="form-control col-md-4 col-xs-8" name="date" type="Date" onblur="Announcement()"><span id="date"></span>
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label class="control-label col-md-4 col-sm-4 col-xs-8" for="textarea" onblur="Announcement()">Announcement: 
                                                                </label>
                                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                                    <textarea id="textarea"  name="note" class="form-control col-md-7 col-xs-12" onblur="Announcement()"></textarea><span id="note"></span>
                                                                </div>
                                                            </div>
                                                            <div align="center">
                                                                <button type="reset" class="btn btn-primary">Cancel</button>
                                                                <button id="save" type="submit" name="save" class="btn btn-success">Submit</button>
                                                            </div>


                                                            <div class="ln_solid"></div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <?php
                                            $day = date('Y-m-d');
                                            $stmt = mysql_query("SELECT * FROM announcement WHERE EXPIRE_DATE>'$day'");
                                            if (!$stmt) {
                                                echo mysql_error();
                                            }
                                            while ($ro = mysql_fetch_assoc($stmt)) {
                                                $note = $ro['NOTE'];
                                                ?>
                                                <div class="well"><div class="alert alert-success"><h4><?php echo $ln_activeAnnouncement;?></h4></div> 
                                                    <?php echo $note; ?>

                                                </div>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <div class = "col-sm-6">
                                            <?php
                                            if(isset($_POST['Delete'])){
                                                $aid=$_POST['anId'];
                                               $del=  mysql_query("DELETE FROM announcement WHERE AN_ID=$aid");
                                               if($del){
                                                   echo "<div class='col-sm-2'></div><div class='col-sm-6'><div class='alert alert-success'>" .
                                                    "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                    "<strong>" . $ln_success . " </strong> " . $ln_deleteAnnouncementSucess .
                                                    "</div></div>";
                                               }
                                            }
                                            $stmt = mysql_query("SELECT * FROM announcement WHERE EXPIRE_DATE<='$day'");
                                            if (!$stmt) {
                                                echo mysql_error();
                                            }
                                            while ($ro = mysql_fetch_assoc($stmt)) {
                                                $note = $ro['NOTE'];
                                                ?>
                                                <div class="well">
                                                    <div class="alert alert-warning"><h4><?php echo $ln_expiredAnnouncement;?></h4></div>          
                                                    <?php
                                                    echo $note . '<br>';
                                                    echo '<div class="text-right"><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal' . $ro['AN_ID'] . '"><i class="fa fa-2x fa-trash red"></i></button></a></div>&nbsp; ';
                                                    ?>

                                                </div>
                                                <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <?php
                                    $stmt = mysql_query("SELECT * FROM announcement WHERE EXPIRE_DATE<='$day'");
                                    if (!$stmt) {
                                        echo mysql_error();
                                    }
                                    while ($ro = mysql_fetch_assoc($stmt)) {
                                        ?>
                                        <div id="myModal<?php echo $ro['AN_ID']; ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-sm">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Are You sure to delete?</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post">
                                                            <input type="hidden" name="anId" value="<?php echo $ro['AN_ID']; ?>">
                                                            <button type="submit" class="btn btn-success" name="Delete">Yes</button>

                                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php }
                                    ?>






                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <!--/page content -->

                <!--footer content -->

                <!--/footer content -->
            </div>
        </div>


        <!--jQuery -->
        <script src = "../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->


        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>


    </body>
</html>