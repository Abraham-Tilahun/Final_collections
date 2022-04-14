<?php
include 'all.php';
include '../include/connect_db.php';
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: approve_returned_asset.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("location: approve_returned_asset.php");

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
        <script src="../js/validation.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->

        <script src="../js/validation.js" type="text/javascript"></script>
        <!-- Custom Theme Style -->
        <link href="../build/css/custom.css" rel="stylesheet">
    </head>
    <body class="nav-md footer_fixed">
        <div class="container body">
            <div class="main_container">
                <div class="left">
                    <div class="col-md-3 left_col">
                        <div class="left_col scroll-view">
                            <div class="navbar nav_title" style="border: 0;">
                                <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $ln_assetmanager; ?></span></a>
                            </div>

                            <div class="clearfix"></div>

                            <!-- menu profile quick info -->
                            <div class="profile clearfix">
                                <div class="profile_pic">
                                    <img src="<?php echo $_SESSION['image']; ?>" alt="..." class="img-circle profile_img">
                                </div>
                                <div class="profile_info">
                                    <span><?php echo $ln_welcome; ?></span>
                                    <h2>
                                        <?php echo ucfirst($_SESSION['fname']); ?></h2>
                                </div>
                            </div>
                            <!-- /menu profile quick info -->

                            <br />

                            <!-- sidebar menu -->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <h3><?php echo $ln_general; ?></h3>
                                    <ul class="nav side-menu">
                                        <li><a href="index.php"><i class="fa fa-home"></i> <?php echo $ln_home; ?> </a>

                                        <li><a href="register_asset.php"><i class="fa fa-book"></i><?php echo $ln_registerAsset; ?></a>
                                        <li><a href="Withdraw_asset.php"><i class="fa fa-minus-circle"></i><?php echo $ln_withdrawAsset; ?></a>
                                        <li><a href="view_asset.php"><i class="fa fa-eye"></i><?php echo $ln_viewAssetInformation; ?></a>
                                        <li><a href="generate_report.php"><i class="fa fa-file"></i><?php echo $ln_generateReport; ?></a>
                                        <li><a href="approve_returned_asset.php"><i class="fa fa-check-circle"></i><?php echo $ln_approveReturnedAsset; ?></a>
                                        <li><a href="view_announcement.php"><i class="fa fa-comment-o"></i><?php echo $ln_viewAnnouncement; ?></a>
                                        <li><a href="change_password.php"><i class="fa fa-edit"></i><?php echo $ln_updateAccount; ?></a>

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
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="col-sm-6"></div>
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">

                                <li class="col-sm-2">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo $_SESSION['image']; ?>" alt=""><?php echo ucfirst($_SESSION['fname']); ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="profile.php"> Profile</a></li>

                                        <li><a href="../logout.php?email=<?php echo $_SESSION['email']; ?>"><i class="fa fa-sign-out pull-right"></i> <?php echo $ln_logout; ?></a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-2">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<?php echo $ln_language; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="approve_returned_asset.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="approve_returned_asset.php?lan=english"  rel="facebox"> English</a></li>
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

                                        <h2>General asset</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>

                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                        <div id="printableArea">
                                            <div class="x_content">
                                                <?php
                                                if (isset($_POST['returned'])) {
                                                    $asset_id = $_POST['asset_id'];
                                                    $withdraw_id = $_POST['withdraw_id'];
                                                    $quan = $_POST['quantity'];
                                                    $query = mysql_query("SELECT * FROM withdraw WHERE W_ID=$withdraw_id");
                                                    $rows = mysql_fetch_assoc($query);
                                                    $current = $rows['QUANTITY'];
                                                    if ($quan < 1) {
                                                        echo '<div class="col-sm-2"></div><div class="col-sm-8"><div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>'.$ln_approveReturnAssetnegative.
'</div></div>';
                                                    } else if ($quan > $current) {
                                                        echo '<div class="col-sm-2"></div><div class="col-sm-8"><div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>' .$ln_approveReturnAssetMore.
'</div></div>';
                                                    } else {
                                                    $quer = mysql_query("SELECT * FROM asset WHERE ASSET_ID=$asset_id");
                                                    $rows1 = mysql_fetch_assoc($quer); 
                                                    $num=$rows1['QUANTITY']+$quan;
                                                    $totalprice=$rows1['PRICE']*$num;
                                                    $withcu=$current-$quan;
                                                   
                                                    $upwithdraw=  mysql_query("UPDATE withdraw SET QUANTITY=$withcu WHERE W_ID=$withdraw_id");
                                                    echo mysql_error();
                                                    $upasset=  mysql_query("UPDATE asset SET QUANTITY=$num, TOTAL_PRICE=$totalprice WHERE ASSET_ID=$asset_id");
                                                    echo mysql_error();
                                                        if($upwithdraw && $upasset){
                                                            $delete=  mysql_query("DELETE FROM withdraw WHERE QUANTITY=0");
                                                                                          
                                                            echo '<div class="col-sm-2"></div><div class="col-sm-8"><div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-check-circle"></i></strong>' .$ln_approveReturnAssetSuccess.
'</div></div>';
                          
                                                        }
                                                    }
                                                }
                                                ?>
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th><?php echo $ln_assetUserName; ?></th>
                                                            <th><?php echo $ln_withdrawAssetAssetAssetName; ?></th>
                                                            <th><?php echo $ln_assetModel; ?></th>
                                                            <th><?php echo $ln_serialNumber; ?></th>
                                                            <th><?php echo $ln_quantity; ?></th>
                                                            <th><?php echo $ln_price; ?></th>
                                                            <th><?php echo $ln_withdrawAssetAssetDate; ?></th>
                                                            <th><?php echo $ln_appoitementDate; ?></th>
                                                            <th><?php echo $ln_action; ?></th>

                                                        </tr>
                                                    </thead>


                                                    <tbody>
<?php
include_once '../include/connect_db.php';

$res = mysql_query("SELECT asset_user.F_NAME, asset_user.M_NAME, asset.ASSET_NAME, asset.MODEL,asset.PRICE, withdraw.SERIAL, withdraw.W_ID, withdraw.WITHDRAW_DATE,withdraw.APPOITEMENT_DATE, withdraw.QUANTITY FROM withdraw INNER JOIN asset_user ON asset_user.ID=withdraw.ID INNER JOIN asset ON asset.ASSET_ID=withdraw.ASSET_ID WHERE withdraw.QUANTITY>0");
if (!$res) {
    echo mysql_error();
} else {

    while ($row = mysql_fetch_assoc($res)) {
        $fname = $row['F_NAME'];
        $lname = $row['M_NAME'];

        $aname = $row["ASSET_NAME"];
        $amodel = $row["MODEL"];
        $quanti = $row["QUANTITY"];
        $pr = $row["PRICE"];
        $to = $row["APPOITEMENT_DATE"];
        $serial = $row["SERIAL"];
        $ser = "";
        if ($serial == "") {
            $ser = "-----";
        } else {
            $ser = $serial;
        }
        $dates = "";
        if ($to == "0000-00-00") {
            $dates = "---";
        } else {
            $dates = $to;
        }
        $da = $row["WITHDRAW_DATE"];



        echo "<tr>";

        echo "<td>" . ucfirst($fname) . ' ' . ucfirst($lname) . "</td>";
        echo "<td>" . $aname . "</td>";
        echo "<td>" . $amodel . "</td>";
        echo "<td>" . $ser . "</td>";
        echo "<td>" . $quanti . "</td>";
        echo "<td>" . $pr . " ETB</td>";
        echo "<td>" . $da . "</td>";
        echo "<td>" . $dates . "</td>";
        echo '<td><a data-toggle="tooltip" data-placement="top" title="' . $ln_approveReturnedAssetTooltip . '"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal' . $row['W_ID'] . '"><span class="fa fa-check"></span></button></a>&nbsp; ';
        echo "</tr>";
    }
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
                    </div>
                </div>
<?php
$res = mysql_query("SELECT asset_user.F_NAME, asset_user.M_NAME, asset.ASSET_NAME, asset.MODEL,asset.PRICE, asset.ASSET_ID, withdraw.SERIAL, withdraw.W_ID, withdraw.WITHDRAW_DATE,withdraw.APPOITEMENT_DATE, withdraw.QUANTITY FROM withdraw INNER JOIN asset_user ON asset_user.ID=withdraw.ID INNER JOIN asset ON asset.ASSET_ID=withdraw.ASSET_ID WHERE withdraw.QUANTITY>0");
if (!$res) {
    echo mysql_error();
} else {

    while ($row = mysql_fetch_assoc($res)) {
        ?>
                        <div id="myModal<?php echo $row['W_ID']; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <?php echo $ln_returnAssetFrom . ucfirst($row['F_NAME']); ?>                      
                                    </div>
                                    <div class="modal-body">

                                        <form class="form-horizontal form-label-left" method="post" name="request" onsubmit="return validRequest();">
                                            <input type="hidden" name="withdraw_id" value="<?php echo $row['W_ID']; ?>"/>
                                            <input type="hidden" name="asset_id" value="<?php echo $row['ASSET_ID']; ?>"/>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="feedback"><?php echo $ln_quantity; ?>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" name="quantity" class="form-control col-md-7 col-xs-12" value="<?php echo $row['QUANTITY']; ?>" onblur="validRequest()" /><span id="feedback"></span>
                                                </div>
                                            </div>
                                            <div class="text-center"> <button type="submit" name="returned" class="btn btn-success"><?php echo $ln_submit; ?></button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $ln_cancel; ?></button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
        <?php
    }
}
?>

                <div class="clearfix"></div>


                <!-- /page content -->

                <!-- footer content -->

            </div>
        </div>

        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Datatables -->
        <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
    </body>
</html>