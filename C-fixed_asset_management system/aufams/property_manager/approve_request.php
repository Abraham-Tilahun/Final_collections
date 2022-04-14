<?php
include 'all.php';
include '../include/connect_db.php';
$msg = '';
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: approve_request.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("location: approve_request.php");

}
}
if(isset($_POST['reject'])){
  $rq_id = $_POST['id'];  
  $qr4 = mysql_query("UPDATE request set STATUS=5 WHERE RQ_ID=$rq_id");
                if ($qr4) {
                    $msg = 'reject';
                }
}
if (isset($_POST['save'])) {
    $rq_id = $_POST['id'];
    $aname = $_POST['aname'];
    $type = $_POST['type'];
    $with_type = $_POST['withdraw_type'];
    $quantity = $_POST['quantity'];
    $sum = 0;
    $qr = mysql_query("select * from asset where ASSET_NAME= '$aname' AND QUANTITY>0");
    if (mysql_num_rows($qr) > 0) {
        $qr2 = mysql_query("select * from asset where ASSET_NAME='$aname' AND QUANTITY>0 AND MODEL='$type'");
        if (mysql_num_rows($qr2) > 0) {
            $qr3 = mysql_query("select * from asset where ASSET_NAME='$aname' AND QUANTITY>=0 AND MODEL='$type'");
            while ($ro = mysql_fetch_assoc($qr3)) {
                $sum+=$ro['QUANTITY'];
            }
            if ($sum >= $quantity) {
                $qr4 = mysql_query("UPDATE request set ASSET_NAME='$aname', TYPE='$type', QUANTITY=$quantity, STATUS=1, WITHDRAW_TYPE='$with_type' WHERE RQ_ID=$rq_id");
                if ($qr4) {
                    $msg = 'sucess';
                } else {
                    echo mysql_error();
                }
            } else {
                $msg = 'quantity';
            }
        } else {
            $msg = 'type';
        }
    } else {
        $msg = 'aname';
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

        <title>Fxed Asset Management System</title>
       
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <script src="../js/propery_manager/approverequest.js" type="text/javascript"></script>
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

                                            <li><a><i class="fa fa-xing-square"></i><?php echo $ln_propertyMangerDeactivateUser;?><span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">

                                                    <li><a href="deactivate_user.php"><?php echo $ln_propertyMangerDeactivateAssetUser;?></a></li>
                                                    <li><a href="deactivate_manager.php"><?php echo $ln_propertyMangerDeactivateAssetManager;?></a></li>
                                                </ul>
                                            </li>
                                            <li><a><i class="fa fa-users"></i><?php echo $ln_propertyMangerViewUser;?> <span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li><a href="view_asset_user.php"><?php echo $ln_propertyMangerViewAssetUser;?></a></li>
                                                    <li><a href="View_asset_manager.php"><?php echo $ln_propertyMangerviewAssetManager;?></a></li>
                                                </ul>
                                            </li>
                                            <li><a><i class="fa fa-check-circle-o"></i><?php echo $ln_propertyMangerActivateUser;?><span class="fa fa-chevron-down"></span></a>
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
                                        <li><a href="approve_request.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="approve_request.php?lan=english"  rel="facebox"> English</a></li>
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
                                        <h2><?php echo $ln_generalAssetUserRequest;?></h2>
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
                                            if ($msg == 'sucess') {
                                                echo "<div class='alert alert-success'>" .
                                                "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                " <strong>Sucess!</strong> You are sucessfully approved." .
                                                "</div>";
                                            } 
                                            if ($msg == 'reject') {
                                                echo "<div class='alert alert-success'>" .
                                                "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                " <strong>Sucess!</strong> You are sucessfully rejected." .
                                                "</div>";
                                            } else if ($msg == 'quantity') {
                                                echo "<div class='alert alert-warning'>" .
                                                "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                " <strong>Sorry</strong> Quantity are much minimise." .
                                                "</div>";
                                            } else if ($msg == 'type') {
                                                echo "<div class='alert alert-warning'>" .
                                                "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                " <strong>Sorry</strong> Such asset type are not exist correct it." .
                                                "</div>";
                                            } else if ($msg == 'aname') {
                                                echo "<div class='alert alert-warning'>" .
                                                "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                " <strong>Sorry</strong> Such asset name are not exist correct it." .
                                                "</div>";
                                            }
                                        }
                                         $result = mysql_query("SELECT asset_user.F_NAME, asset_user.M_NAME, asset_user.WORK_TYPE,request.RQ_ID,request.PREPARE_DATE,request.ASSET_NAME,request.TYPE,request.QUANTITY,request.WITHDRAW_PURPOSE FROM request INNER JOIN asset_user ON asset_user.ID=request.ID WHERE request.STATUS=0 ORDER BY request.RQ_ID ASC");
                                                if (mysql_num_rows($result) > 0) {
                                        ?>

                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    
                                                   <th><?php echo $ln_propertyMangerViewUserFullname; ?></th>
                                                    <th><?php echo $ln_propertyMangerViewUseroccupation; ?></th>
                                                    <th><?php echo $ln_approveReportPrepareDate; ?></th>
                                                    <th><?php echo $ln_assetName; ?></th>
                                                    <th><?php echo $ln_assetItem; ?></th>
                                                    <th><?php echo $ln_quantity; ?></th>
                                                    <th><?php echo $ln_withdrawAssetAssetPurpose; ?></th>
                                                    <th><?php echo $ln_action; ?></th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                               
                                                    while ($row = mysql_fetch_assoc($result)) {
                                                        ?>
                                                        <tr class = "record">
                                                           
                                                            <td><?php echo ucfirst($row['F_NAME']).' '.ucfirst($row['M_NAME']); ?></td>
                                                           <td><?php echo ucfirst($row['WORK_TYPE']); ?></td>
                                                            <td><?php echo $row['PREPARE_DATE']; ?></td>
                                                            <td><?php echo ucfirst($row['ASSET_NAME']); ?></td>
                                                            <td><?php echo ucfirst($row['TYPE']); ?></td>
                                                            <td><?php echo $row['QUANTITY']; ?></td>
                                                            <td><?php echo $row['WITHDRAW_PURPOSE']; ?></td>
                                                            <?php
                                                            echo '<td><a><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal' . $row['RQ_ID'] . '">'.$ln_approve.'</button></a>&nbsp; ';
                                                            echo '<a><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModals' . $row['RQ_ID'] . '">'.$ln_reject.'</button></a>&nbsp; </td>';
                                                            ?>
                                                        </tr>


                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>  
                                            <?php
                                        } else {

                                            echo "<div class='alert alert-danger'>" .
                                            "<button class='close' data-dismiss='alert'>&times;</button>" .
                                            "<strong>Sorry!</strong> Currently there is no request " .
                                            "</div>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <?php
            $qu = mysql_query("SELECT asset_user.F_NAME, asset_user.M_NAME, asset_user.PROFILE, asset_user.WORK_TYPE,request.RQ_ID,request.PREPARE_DATE,request.ASSET_NAME,request.TYPE,request.QUANTITY,request.WITHDRAW_PURPOSE FROM request INNER JOIN asset_user ON asset_user.ID=request.ID WHERE request.STATUS=0 ORDER BY request.RQ_ID ASC");
            while ($ro = mysql_fetch_assoc($qu)) {
                ?>
                <div id="myModal<?php echo $ro['RQ_ID']; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
 <?php
                                $im = '';
                                if ($ro['PROFILE'] == '' || $ro['PROFILE'] == null) {
                                    $im = '../images/user.png';
                                } else {
                                    $im = $ro['PROFILE'];
                                }
                                ?>
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="profile_pic">
                                    <img src="<?php echo $im; ?>" width="50" height="60" alt="..." class="img-preview profile_img">

                                </div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Approve User <?php echo ucfirst($ro['F_NAME']); ?>'s request</h4>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                
                                </div>
                                <form class="form-horizontal form-label-left" method="post" name="request" onsubmit="return validateRequest();">
                                    <div class="item form-group">

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control col-md-7 col-xs-12" name="id" value="<?php echo $ro['RQ_ID']; ?>" type="hidden">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="aname">Asset Name*
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="aname" class="form-control col-md-7 col-xs-12" value="<?php echo $ro['ASSET_NAME']; ?>" type="text"><span id="aname"></span>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Material Type
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control col-md-7 col-xs-12" name="type" type="text" value="<?php echo $ro['TYPE']; ?>" ><span id="type"></span>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                                <label for="withdraw_type" class="control-label col-md-3 col-sm-3 col-xs-12">Withdraw type</label>

                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <select name="withdraw_type" class="form-control col-md-7 col-xs-12"> 
                                                        <option value="normal">Withdraw</option>
                                                        <option value="borrow">Borrow</option>
                                                        
                                                        

                                                    </select><span class="warning" id="withdraw_type"></span>
                                                </div>

                                            </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity">Quantity*
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" name="quantity" class="form-control col-md-7 col-xs-12" value="<?php echo $ro['QUANTITY']; ?>" onblur="validRequest()"><span id="quantity"></span>
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

            <?php
            $qu = mysql_query("SELECT asset_user.F_NAME, asset_user.M_NAME, asset_user.PROFILE, asset_user.WORK_TYPE,request.RQ_ID,request.PREPARE_DATE,request.ASSET_NAME,request.TYPE,request.QUANTITY,request.WITHDRAW_PURPOSE FROM request INNER JOIN asset_user ON asset_user.ID=request.ID WHERE request.STATUS=0 ORDER BY request.RQ_ID ASC");
            while ($ro = mysql_fetch_assoc($qu)) {
                ?>
                <div id="myModals<?php echo $ro['RQ_ID']; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm">
 <?php
                                $im = '';
                                if ($ro['PROFILE'] == '' || $ro['PROFILE'] == null) {
                                    $im = '../images/user.png';
                                } else {
                                    $im = $ro['PROFILE'];
                                }
                                ?>
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                               
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Approve You sure to reject request?</h4>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                
                                </div>
                                <form class="form-horizontal form-label-left" method="post" name="request" onsubmit="return validRequest();">
                                    <div class="item form-group">

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control col-md-7 col-xs-12" name="id" value="<?php echo $ro['RQ_ID']; ?>" type="hidden">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" name="reject" class="btn btn-success">Reject</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
                <?php
            }
            ?>


 <div class="ln_solid"></div>





            <!-- /page content -->

            <!-- footer content -->
            
            <!-- /footer content -->
        </div>

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