<!DOCTYPE html>
<?php
include 'all.php';
include '../include/connect_db.php';
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: activate_manager.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("location: activate_manager.php");

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

        <title>Fixed Asset Management System</title>

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!-- Datatables -->
        <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        

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
                                            <li><a href="create_account.php"><?php echo $ln_propertyMangerCreateAccount;?></a></li>

                                            <li><a><i class="fa fa-lock"></i><?php echo $ln_propertyMangerDeactivateUser;?><span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">

                                                    <li><a href="deactivate_user.php"><?php echo $ln_propertyMangerDeactivateAssetUser;?></a></li>
                                                    <li><a href="deactivate_manager.php"><?php echo $ln_propertyMangerDeactivateAssetManager;?></a></li>
                                                </ul>
                                            </li>
                                            <li><a><i class="fa fa-eye"></i><?php echo $ln_propertyMangerViewUser;?> <span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li><a href="view_asset_user.php"><?php echo $ln_propertyMangerViewAssetUser;?></a></li>
                                                    <li><a href="View_asset_manager.php"><?php echo $ln_propertyMangerviewAssetManager;?></a></li>
                                                </ul>
                                            </li>
                                            <li><a><i class="fa fa-unlock"></i><?php echo $ln_propertyMangerActivateUser;?><span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">

                                                    <li><a href="activate_user.php"><?php echo $ln_propertyMangerActivateAssetUser;?></a></li>
                                                    <li><a href="activate_manager.php"><?php echo $ln_propertyMangerActivateAssetManager;?></a></li>
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
                                        <li><a href="activate_manager.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="activate_manager.php?lan=english"  rel="facebox"> English</a></li>
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
                                <h3> <small></small></h3>
                            </div>


                        </div>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>General asset User</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>

                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="col-lg-6">
                                            <?php
                                            if (isset($_POST['deactivate'])) {
                                                $idf = $_POST['userId'];
                                                $st = mysql_query("UPDATE fixed_asset_manager SET STATUS=0 where ID=$idf");
                                                if (!$st) {
                                                    echo mysql_error();
                                                } else {
                                                    echo "<div class='alert alert-success'>" .
                                                    "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                    "<strong>Sucess!</strong> You are sucessfully  " .
                                                    "activated user." .
                                                    "</div>";
                                                }
                                            }
                                            ?>

                                        </div>
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>

                                                    <th>First Name</th>
                                                    <th>M_name</th>
                                                    <th>WORK TYPE</th>
                                                    <th>EMAIL</th>
                                                    <th>SEX</th>
                                                    <th>ADRESS</th>
                                                    <th>PHONE</th>
                                                    <td><b>ACTION</b></td>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php
                                                include('../include/connect_db.php');

                                                $resul = mysql_query("SELECT * FROM fixed_asset_manager WHERE STATUS=1");
                                                while ($res = mysql_fetch_assoc($resul)) {
                                                    ?>
                                                    <tr class="record">

                                                        <td><?php echo ucfirst($res['F_NAME']); ?></td>
                                                        <td><?php echo ucfirst($res['M_NAME']); ?></td>
                                                        <td><?php echo ucfirst($res['WORK_TYPE']); ?></td>
                                                        <td><?php echo $res['EMAIL']; ?></td>
                                                        <td><?php echo ucfirst($res['SEX']); ?></td>
                                                        <td><?php echo ucfirst($res['ADRESS']); ?></td>
                                                        <td><?php echo $res['PHONE']; ?></td>

                                                        <td>
                                                            <a title="Click To Aactivate <?php echo ucfirst($res['F_NAME']); ?>" rel="facebox"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModals<?php echo $res['ID']; ?>"><i class="fa fa-check"></i></button></a>&nbsp;
                                                            <a title="Edit <?php echo ucfirst($res['F_NAME']); ?>'s Information" rel="facebox"><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $res['ID']; ?>"><i class="fa fa-edit"></i></button></a>&nbsp;
                                                    </tr>
                                                    <?php
                                                }
                                                ?>

                                                <!-- Modal -->


                                            </tbody>
                                        </table>
                                         <div class="ln_solid"></div>
                                    </div>
                                </div>


                                <?php
                                $qu = mysql_query("SELECT * FROM fixed_asset_manager WHERE STATUS=1");

                                while ($ro = mysql_fetch_assoc($qu)) {
                                    ?>
                                    <div id="myModals<?php echo $ro['ID']; ?>" class="modal modal-open" role="dialog">
                                        <div class="modal-dialog modal-sm">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <i class="fa fa-2x fa-quote-left-circle-o"></i>  Are You Sure to Activate <?php echo ucfirst($ro['F_NAME']); ?>?
                                                    <form class="form-horizontal form-label-left" method="post" name="request" onsubmit="return validRequest();">
                                                        <div class="item form-group">

                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input name="userId" class="form-control col-md-7 col-xs-12" value="<?php echo $ro['ID']; ?>" type="hidden" >
                                                            </div>
                                                        </div>



                                                        <button type="submit" name="deactivate" class="btn btn-success">Yes</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>

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
                    </div>
                    <?php
                    $qu = mysql_query("SELECT * FROM asset_user WHERE STATUS=0");

                    while ($ro = mysql_fetch_assoc($qu)) {
                        ?>
                        <div id="myModal<?php echo $ro['ID']; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        Edit User Information
                                    </div>
                                    <div class="modal-body">

                                        <form class="form-horizontal form-label-left" method="post" name="request" onsubmit="return validRequest();">
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="aname">First Name*
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input name="fname" class="form-control col-md-7 col-xs-12" value="<?php echo $ro['F_NAME']; ?>" type="text" onblur="validRequest()"><span id="aname"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="aname">Middle Name*
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input name="mname" class="form-control col-md-7 col-xs-12" value="<?php echo $ro['M_NAME']; ?>" type="text" onblur="validRequest()"><span id="aname"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">EMAIL:
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" name="type" type="text" value="<?php echo $ro['EMAIL']; ?>" onblur="validRequest()"><span id="type"></span>
                                                </div>
                                            </div>


                                            <button type="submit" name="save" class="btn btn-success">Approve</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <?php
                    }
                    ?>

                   
                    <!-- /footer content -->
                </div>

                <script src="../vendors/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap -->
                <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>

                <!-- Datatables -->
                <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


                <!-- Custom Theme Scripts -->
                <script src="../build/js/custom.min.js"></script>

                </body>
                </html>