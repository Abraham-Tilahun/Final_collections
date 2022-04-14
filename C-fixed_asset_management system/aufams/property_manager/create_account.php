<!DOCTYPE html>
<?php
include 'all.php';
include('../include/connect_db.php');
$msg = '';
if (isset($_GET['lan'])) {
    $langu = $_GET['lan'];
    if ($langu == 'english') {
        $_SESSION['language'] = 'English';
        header("location: create_account.php");
    } else if ($langu == 'amharic') {
        unset($_SESSION['language']);
        $_SESSION['language'] = 'Amharic';
        header("location: create_account.php");
    }
}
if (isset($_POST['save'])) {

    $fname = strtolower($_POST['fname']);
    $mname = strtolower($_POST['lname']);
    $email = strtolower($_POST['email']);
    $password = md5($_POST['password1']);
    $sex = $_POST['sex'];
    $occupation = strtolower($_POST['occupation']);
    $user_type = strtolower($_POST['user_type']);
    $phone = $_POST['phone'];
    $adress = strtolower($_POST['adress']);

    $query1 = mysql_query("SELECT * from user_account WHERE EMAIL='$email'");
    if (mysql_num_rows($query1) > 0) {
        $msg = 'not_create';
    }
    
    
    else {
        $phones=mysql_query("SELECT * FROM $user_type WHERE PHONE='$phone'");
        if(mysql_num_rows($phones)>0){
            $msg='Phone';
        }else{
        $query3 = "insert into user_account (EMAIL, PASSWORD, USER_TYPE) values ('$email', '$password', '$user_type')";
        $res3 = mysql_query($query3, $connect);
        if (!$res3) {
            echo mysql_error();
        } else {
            $query4 = "insert into $user_type(F_NAME, M_NAME, WORK_TYPE, EMAIL, SEX, ADRESS, PHONE, PROFILE) values ('$fname', '$mname', '$occupation', '$email', '$sex', '$adress', '$phone','')";
            $res4 = mysql_query($query4, $connect);
            if (!$res4) {
                echo mysql_error();
            }
            $msg = 'success';
        }
    }
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

        <script src="../js/propery_manager/createAccount.js" type="text/javascript"></script>
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

                                        <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> <?php echo $ln_logout; ?></a></li>
                                        <li><a href="profile.php"><i class=""></i> profile</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<?php echo $ln_language; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="create_account.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="create_account.php?lan=english"  rel="facebox"> English</a></li>
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
                                <h3><?php echo $ln_createAccountTop; ?></h3>
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
                                        <h2><?php echo $ln_createTitle ?> </h2>
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
    if ($msg == "not_create") {
        echo '<div class="col-sm-2"></div><div class="col-sm-8"><h2><div class="alert alert-danger">
  <strong>' . $ln_fail . '</strong>' . $ln_createAccountFail . '
</div></div></h2>';
    } elseif ($msg == 'success') {
        echo '<div class="col-sm-2"></div><div class="col-sm-8"><h2><div class="alert alert-success"><strong>' . $ln_success . '</strong>' . $ln_createAccountSuccess . '
                                                </div></div></h2>';
    }
    else if($msg=="Phone"){
      echo '<div class="col-sm-2"></div><div class="col-sm-8"><h2><div class="alert alert-danger">
  <strong>' . $ln_fail . '</strong>' . $ln_createAccountFailPhone . '
</div></div></h2>';   
}
    }
?>
                                        <form class="form-horizontal form-label-left" action="" method="post" name="create" onsubmit="return createForm();" enctype="multipart/form-data">

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-6" for="name"><?php echo $ln_createAccountFirstName; ?>
                                                </label>
                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                    <input class="form-control col-md-4 col-xs-8"  name="fname" placeholder="e.g fekadu" type="text" onblur="createForm()"><span class="warning" id="fname"></span>                                          
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-6" for="name"><?php echo $ln_createAccountMiddleName; ?>
                                                </label>
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <input class="form-control col-md-4 col-xs-8" name="lname" placeholder="e.g Eshetu" type="text" onblur="createForm()"><span  class="warning" id="lname"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-6" for="email"><?php echo $ln_email; ?>
                                                </label>
                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                    <input type="email" name="email" class="form-control col-md-4 col-xs-8" onblur="createForm()"><span  class="warning" id="email"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-6" for="email" ><?php echo $ln_createAccountConfirmEmail; ?>
                                                </label>
                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                    <input type="email" name="confirm_email" class="form-control col-md-4 col-xs-8" onblur="createForm()"><span  class="warning" id="confirme"></span>
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-6" for="sex"><?php echo $ln_createAccountSex; ?> <span class="required">*</span>
                                                </label>
                                                <div class="item form-group">
                                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                                        <input id="male" type="Radio" Value="male" name="sex" checked="checked"><label class="control-label col-md-3 col-sm-3 col-xs-3" for="male">Male </label>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                                        <input id="female" type="Radio" Value="female" name="sex" ><label class="control-label col-md-3 col-sm-3 col-xs-3" for="female">Female </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-6" for="occupation"><?php echo $ln_createAccountOccupation; ?> <span class="required">*</span>
                                                </label>
                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                    <input type="text" name="occupation" class="form-control col-md-4 col-xs-8" onblur="createForm()"><span  class="warning" id="occupation"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="password" class="control-label col-md-3"><?php echo $ln_password; ?></label>
                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                    <input type="password" name="password1" class="form-control col-md-4 col-xs-8" onblur="createForm()"><span  class="warning" id="password1"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-6"><?php echo $ln_createAccountConfirmPassword; ?></label>
                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                    <input type="password" name="password2" class="form-control col-md-4 col-xs-8" onblur="createForm()"><span  class="warning" id="password2"></span>
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label for="user_type" class="control-label col-md-3 col-sm-3 col-xs-6"><?php echo $ln_createAccountUserType; ?></label>

                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                    <select name="user_type" class="form-control col-md-4 col-xs-8" onblur="createForm()"> 
                                                        <option value="default"><?php echo $ln_createAccountSelect ?></option>
                                                        <option value="asset_user">Asset User</option>
                                                        <option value="fixed_asset_manager">Fixed Asset Manager</option>
                                                        <option value="property_manager">Property Manager</option>

                                                    </select><span class="warning" id="user_type"></span>
                                                </div>

                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-6" for="telephone"><?php echo $ln_createAccountTelephone; ?> 
                                                </label>
                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                    <input type="text" name="phone" class="form-control col-md-4 col-xs-8" onblur="createForm()"><span  class="warning" id="phone"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-6" for="adress"><?php echo $ln_createAccountAdress; ?>
                                                </label>
                                                <div class="col-md-4 col-sm-4 col-xs-8">
                                                    <input type="text"  name="adress" class="form-control col-md-4 col-xs-8" onblur="createForm()"><span  class="warning" id="adress"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3 col-md-offset-3">
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
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- validator -->
        <script src="../vendors/validator/validator.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>






    </body>
</html>