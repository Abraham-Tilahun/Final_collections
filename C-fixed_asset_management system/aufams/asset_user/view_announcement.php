<!DOCTYPE html>
<?php
include 'all.php';
include '../include/connect_db.php';
$msg = '';
$name=$_SESSION['fname'];
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: view_announcement.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("location: view_announcement.php");

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
                            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $ln_assetUserTitle;?></span></a>
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
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo $ln_logout; ?>" href="../logout.php?email=<?php echo $_SESSION['email'];?>">
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
                                       
                                        <li><a href="../logout.php?email=<?php echo $_SESSION['email'];?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                       <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $ln_language; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="view_announcement.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="view_announcement.php?lan=english"  rel="facebox"> English</a></li>
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

                            </div>

                            <div class="title_right">

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
                                        
                                        $day = date("Y-m-d");
                                        $lim = 4;
                                if (isset($_GET["page"])) {
                                    $page = $_GET["page"];
                                    if ($page == "" || $page == "1") {
                                        $page1 = 0;
                                    } else {
                                        $page1 = ($page * $lim) - $lim;
                                    }
                                        $st = mysql_query("SELECT Property_manager.F_NAME, property_manager.PROFILE, announcement.* FROM announcement INNER JOIN property_manager ON announcement.ID=property_manager.ID WHERE PREPARE_FOR='asset_user' and EXPIRE_DATE>='$day' limit $page1,$lim");
                                        echo mysql_error();
                                        $im = '';
                                        if (mysql_num_rows($st) > 0) {
                                            while ($row = mysql_fetch_assoc($st)) {
                                                if (($row['PROFILE'] == '') || ($row['PROFILE'] == null)) {
                                                    $im = "../images/user.png";
                                                } else {
                                                    $im = $row['PROFILE'];
                                                }
                                                ?>
                                                <div class="col-lg-6">


                                                    <div class="well">
                                                        <div class="alert"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                            <strong><i class="fa fa-2x fa-thumbs-o-up"></i></strong><?php echo  $ln_viewAnnouncementpreparedby . ucfirst($row['F_NAME']); ?><div class="profile_pic">
                                                                <div class="img-rounded">
                                                                    <img src="<?php echo $im; ?>" width="40" height="40"alt="..." class="img-preview profile_img" title="<?php echo ucfirst($row['F_NAME']) . ' Profile'; ?>">
                                                                </div></div>
                                                        </div>
                                                        <div class="panel-title">
                                                        <?php echo $ln_viewAnnouncementTitle.ucfirst($row['TITLE']); ?>
                                                            <div class="text-right">
                                                                 <?php echo $ln_viewAnnouncementPreparedOn. $row['PREPARE_DATE']; ?>
                                                            </div>

                                                            <hr>
                                                        </div>   
                                                        <div class="panel-body">
        <?php
        echo $row['NOTE'];
        ?>
                                                            <div class="text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                          
        <?php
    }
     echo ' </div>';
} else {
    echo '<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong> '.$ln_viewAnnouncementNoannouncement.
'</div>';
}
                                }
                                else{
                                                                     $st = mysql_query("SELECT Property_manager.F_NAME, property_manager.PROFILE, announcement.* FROM announcement INNER JOIN property_manager ON announcement.ID=property_manager.ID WHERE PREPARE_FOR='asset_user' and EXPIRE_DATE>='$day' limit 0,$lim");
                                        echo mysql_error();
                                        $im = '';
                                        if (mysql_num_rows($st) > 0) {
                                            while ($row = mysql_fetch_assoc($st)) {
                                                if (($row['PROFILE'] == '') || ($row['PROFILE'] == null)) {
                                                    $im = "../images/user.png";
                                                } else {
                                                    $im = $row['PROFILE'];
                                                }
                                                ?>
                                                <div class="col-lg-6">


                                                    <div class="well">
                                                        <div class="alert"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                            <strong><i class="fa fa-2x fa-thumbs-o-up"></i></strong><?php echo  $ln_viewAnnouncementpreparedby . ucfirst($row['F_NAME']); ?><div class="profile_pic">
                                                                <div class="img-rounded">
                                                                    <img src="<?php echo $im; ?>" width="40" height="40"alt="..." class="img-preview profile_img" title="<?php echo ucfirst($row['F_NAME']) . ' Profile'; ?>">
                                                                </div></div>
                                                        </div>
                                                        <div class="panel-title">
                                                        <?php echo $ln_viewAnnouncementTitle.ucfirst($row['TITLE']); ?>
                                                            <div class="text-right">
                                                                 <?php echo $ln_viewAnnouncementPreparedOn. $row['PREPARE_DATE']; ?>
                                                            </div>

                                                            <hr>
                                                        </div>   
                                                        <div class="panel-body">
        <?php
        echo $row['NOTE'];
        ?>
                                                            <div class="text-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                          
        <?php
    }
     echo ' </div>';
}
  $query = mysql_query("SELECT * FROM announcement WHERE PREPARE_FOR='asset_user' and EXPIRE_DATE>='$day' ");
                                echo mysql_error();
                                $a = mysql_num_rows($query);
                                $b = $a / $lim;
                                $b = ceil($b);
                                echo '<div class="col-xs-12 col-lg-9"><br><p align="center"><a href="#"style="text-decoration: none">&raquo;&raquo;</a>';
                                for ($index = 1; $index <= $b; $index++) {
                                    ?>
                                        <a href="view_announcement.php?page=<?php echo $index; ?>"style="text-decoration: none"><?php echo ' Page ' . $index . ' '; ?> </a>
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

                </div>
                <!-- /page content -->

                <!-- footer content -->
              
                <!-- /footer content -->
            </div>
        


        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>


        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

    </body>
</html>