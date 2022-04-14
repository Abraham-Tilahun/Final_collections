
<!DOCTYPE html>
<?php
include 'all.php';
include '../include/connect_db.php';
if (isset($_GET['lan'])) {
    $langu = $_GET['lan'];
    if ($langu == 'english') {
        $_SESSION['language'] = 'English';
        header("location: view_asset_manager.php");
    } else if ($langu == 'amharic') {
        unset($_SESSION['language']);
        $_SESSION['language'] = 'Amharic';
        header("location: view_asset_manager.php");
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
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
                                        <li><a href="view_asset_manager.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="view_asset_manager.php?lan=english"  rel="facebox"> English</a></li>
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
                                        <h2><?php echo $ln_generalAssetmanager;?></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>

                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>

                                                   <th><?php echo $ln_propertyMangerViewUserFullname; ?></th>
                                                    <th><?php echo $ln_propertyMangerViewUseroccupation; ?></th>
                                                    <th><?php echo $ln_email; ?></th>
                                                    <th><?php echo $ln_propertyMangerViewUserSex; ?></th>
                                                    <th><?php echo $ln_propertyMangerViewUserAdress; ?></th>
                                                    <th><?php echo $ln_propertyMangerViewUserPhone; ?></th>
                                                   
                                                </tr>
                                            </thead>


                                            <tbody>
<?php
include('../include/connect_db.php');

$resul = mysql_query("SELECT * FROM fixed_asset_manager where STATUS=0");
while ($res = mysql_fetch_assoc($resul)) {
    ?>
                                                    <tr class="record">

                                                        <td><?php echo ucfirst($res['F_NAME']).' '.  ucfirst($res['M_NAME']); ?></td>
                                                        
                                                        <td><?php echo $res['WORK_TYPE']; ?></td>
                                                        <td><?php echo $res['EMAIL']; ?></td>
                                                        <td><?php echo $res['SEX']; ?></td>
                                                        <td><?php echo $res['ADRESS']; ?></td>
                                                        <td><?php echo $res['PHONE']; ?></td>
                                                    </tr>
    <?php
}
?>




                                                <!-- Modal -->


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="ln_solid"></div>
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