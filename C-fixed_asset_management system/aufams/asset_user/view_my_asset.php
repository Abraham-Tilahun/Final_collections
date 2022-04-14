<!DOCTYPE html>
<?php
include 'all.php';
include '../include/connect_db.php';
$name=$_SESSION['fname'];
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: view_my_asset.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("location: view_my_asset.php");

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
        <!-- NProgress -->
        
        <!-- Datatables -->
        <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    
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
                                        <img src="<?php echo $_SESSION['image'];?>" alt=""><?php echo $name; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> Profile</a></li>
                                       
                                        <li><a href="../logout.php?email=<?php echo $_SESSION['email'];?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                       <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $ln_language; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="Prepare_request.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="Prepare_request.php?lan=english"  rel="facebox"> English</a></li>
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
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>General your Asset Information </h2>
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
                                                    <th>Asset Name</th>
                                                    <th>Asset Type</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Price</th>
                                                    <th>Total Price</th>
                                                    <th>Withdraw Date</th>

                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php
                                                $uid = $_SESSION['userId'];
                                                $resul = mysql_query("SELECT asset.ASSET_NAME, asset.MODEL, asset.PRICE,withdraw.QUANTITY, withdraw.WITHDRAW_DATE FROM withdraw INNER JOIN asset ON asset.ASSET_ID=withdraw.ASSET_ID WHERE withdraw.STATUS=0 AND withdraw.ID=$uid");
                                                if (mysql_num_rows($resul)) {
                                                    while ($res = mysql_fetch_assoc($resul)) {
                                                        ?>
                                                        <tr class="record">

                                                            <td><?php echo $res['ASSET_NAME']; ?></td>
                                                            <td><?php echo $res['MODEL']; ?></td>
                                                            <td><?php echo $res['QUANTITY']; ?></td>
                                                            <td><?php echo $res['PRICE'].' ETB'; ?></td>
                                                            <td><?php echo $res['PRICE'] * $res['QUANTITY'].' ETB'; ?></td>

                                                            <td><?php echo $res['WITHDRAW_DATE']; ?></td>

                                                        </tr>
                                                        <?php
                                                    }
                                                } else {
                                                    echo "<div class='alert alert-danger'>" .
                                                    "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                    "<strong>Sorry!</strong> Currently there is no " .
                                                    "asset withdraw with your name." .
                                                    "</div>";
                                                }
                                                ?>




                                                <!-- Modal -->


                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /page content -->

              
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