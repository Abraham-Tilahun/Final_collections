<!DOCTYPE html>
<?php
include 'all.php';
include '../include/connect_db.php';
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: profile.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("location: profile.php");

}
}

$msg='';
$name=$_SESSION['fname'];
if (isset($_POST['Change_profile'])) {
    $id = $_SESSION["userId"];
    $target_dir = "../images/profile/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  

// Check if file already exists
if (file_exists($target_file)) {
   $msg='file_exist';
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 50000000) {
    $msg='file_large';
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $msg='not_match';
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
 else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo 'ok';
        $st = mysql_query("Update asset_user set PROFILE='$target_file' where ID=$id");
        $_SESSION['image']=$target_file;
        if (!$st) {
            echo mysql_error();
        } else {
            echo 'sucess';
        }
    }
}}
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
                                        <img src="<?php echo $_SESSION['image']; ?>" alt=""><?php echo $name; ?>
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
                                        <li><a href="profile.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="profile.php?lan=english"  rel="facebox"> English</a></li>
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
                                <h3>Edit Profile</h3>
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
                                        <div class="col-md-2"></div>
                                        <div class="col-md-5">
                                            <div class="panel">

                                                <div class="profile clearfix">

                                                    <div class="profile_pic">
                                                        <img src="<?php echo $_SESSION['image']; ?>" alt="..." class="img-responsive profile_img">

                                                    </div>
                                                    <br>

                                                    <!-- Modal -->
                                                    <div id="myModal" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Select picture</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form enctype="multipart/form-data" class="form-horizontal form-label-left" action="" method="post">
                                                                        <div class="item form-group">
                                                                            <label for="profile" class="control-label col-md-3 col-sm-3 col-xs-12">Profile Picture:</label>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <input type="file" name="file">
                                                                            </div>
                                                                        </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button id="save" type="submit" name="Change_profile" class="btn btn-success">Submit</button>

                                                                    </form>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-2x fa-camera"></i>Change profile Pic</button>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        <table><tr><td><b> &copy; Copy Right Reserved 2017 ASU GC Student</b></td></tr>
                            <tr><td><b>Prepared By Group Three</b></td></tr></table>
                    </div>
                    <div class="clearfix"></div>
                </footer>
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