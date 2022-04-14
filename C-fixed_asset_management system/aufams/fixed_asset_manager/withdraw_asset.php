<?php
include 'all.php';
include '../include/connect_db.php';
$msg = '';
$return = '';
$serial = '';
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: withdraw_asset.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("location: withdraw_asset.php");

}
}
if (isset($_POST['save'])) {
    $date = date("Y-m-d");
    $reqid = $_POST['rid'];
    $che = mysql_query("SELECT WITHDRAW_TYPE, QUANTITY FROM request WHERE RQ_ID=$reqid");
    $rw = mysql_fetch_assoc($che);
    $wtype = $rw['WITHDRAW_TYPE'];
    $number = $rw['QUANTITY'];
    if ($wtype == 'borrow') {
        $return = $_POST['returndate'];
        if ($return == "0000-00-00") {
            $msg = "emptydate";
        } else if ($return <= $date) {
            $msg = 'pastdate';
        }
    } else {
        $return = '-';
    }
    if ($number == 1) {
        $serial = $_POST['serial'];
    } else {
        $serial = '- - - ';
    }
    if (($msg != "emptydate") && ($msg != "pastdate")) {
        $uid = $_POST['uid'];
        $uname = ucfirst($_POST['uname']);
        $aname = $_POST['aname'];
        $type = $_POST['type'];
        $quantity = $_POST['quantity'];
        $current;
        $sum = 0;
        $query1 = mysql_query("SELECT * FROM asset WHERE ASSET_NAME='$aname' AND MODEL='$type' AND QUANTITY>0 ORDER BY PRICE ASC");
        while ($ru = mysql_fetch_assoc($query1)) {
            $current = $ru['QUANTITY'];
            $sum+=$current;
        }
        if ($sum >= $quantity) {
            $quey2 = mysql_query("SELECT * FROM asset WHERE ASSET_NAME='$aname' AND MODEL='$type' AND QUANTITY>0 ORDER BY PRICE ASC");
            if (!$quey2) {
                echo mysql_error();
            }
            $num = mysql_num_rows($quey2);
            for ($i = 1; $i <= $num; $i++) {
                $now = mysql_fetch_assoc($quey2);
                $ahun = $now['QUANTITY'];
                $aid = $now['ASSET_ID'];
                $pric = $now['PRICE'];
                $temp = $ahun - $quantity;
                if ($temp >= 0) {
                    $tot = $pric * $temp;

                    $qry1 = mysql_query("UPDATE asset SET QUANTITY=$temp , TOTAL_PRICE=$tot WHERE ASSET_ID=$aid");

                    $qw00 = mysql_query("INSERT INTO withdraw (ID, ASSET_ID, QUANTITY, SERIAL,WITHDRAW_DATE, APPOITEMENT_DATE, RETURNED_DATE) VALUES ($uid, $aid, $quantity, '$serial', '$date', '$return', '')");
                    if (!$qw00) {
                        echo mysql_error();
                    }
                    break;
                } else {
                    $qry1 = mysql_query("UPDATE asset SET QUANTITY=0, TOTAL_PRICE=0 WHERE ASSET_ID=$aid");
                    $qw4 = mysql_query("INSERT INTO withdraw (ID, ASSET_ID, QUANTITY, SERIAL,WITHDRAW_DATE, APPOITEMENT_DATE, RETURNED_DATE) VALUES ($uid, $aid, $ahun, '', '$date', '', '')");
                    $qry1 = mysql_query("SELECT * FROM asset WHERE QUANTITY>0 AND ASSET_NAME='$aname' AND MODEL='$type' ORDER BY PRICE ASC");
                    if (!$qry1) {
                        echo mysql_error();
                    }

                    $quantity = (-1 * $temp);
                }
            }
            $qry1 = mysql_query("UPDATE request SET STATUS=2 WHERE RQ_ID=$reqid");
            $msg = 'success';
        } else {
            $msg = 'not_beki';
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
        <script src="../js/validation.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.css" rel="stylesheet">
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

                                        </li>
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
                                        <li><a href="withdraw_asset.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="withdraw_asset.php?lan=english"  rel="facebox"> English</a></li>
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
                                        <h2><?php echo $ln_withdrawAssetInnerTitle; ?></h2>
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
    if ($msg == 'not_beki') {
        echo "<div class='alert alert-danger'>" .
        "<button class='close' data-dismiss='alert'>&times;</button>" .
        "<strong>" . $ln_fail . " </strong> " . $ln_withdrawAssetNotEnough .
        "</div>";
    } elseif ($msg == 'success') {
        echo "<div class='alert alert-success'>" .
        "<button class='close' data-dismiss='alert'>&times;</button>" .
        "<strong>" . $ln_success . " </strong> " . $ln_withdrawAssetSuccess . $uname .
        "</div>";
    } else if ($msg == "pastdate") {
        echo "<div class='alert alert-danger'>" .
        "<button class='close' data-dismiss='alert'>&times;</button>" .
        "<strong>" . $ln_fail . " </strong> " . $ln_withdrawAssetPastDate .
        "</div>";
    } else if ($msg == "emptydate") {
        echo "<div class='alert alert-danger'>" .
        "<button class='close' data-dismiss='alert'>&times;</button>" .
        "<strong>" . $ln_fail . " </strong> " . $ln_withdrawAssetEmptyDate .
        "</div>";
    }
}

$result = mysql_query("SELECT asset_user.F_NAME, asset_user.M_NAME, asset_user.WORK_TYPE,request.RQ_ID,request.PREPARE_DATE,request.ASSET_NAME,request.TYPE,request.QUANTITY,request.WITHDRAW_PURPOSE, request.WITHDRAW_TYPE FROM request INNER JOIN asset_user ON asset_user.ID=request.ID WHERE request.STATUS=1 ORDER BY request.RQ_ID ASC");
if (mysql_num_rows($result) > 0) {
    ?>
                                            <table id="datatable" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th> <?php echo $ln_withdrawAssetAssetId; ?> </th>
                                                        <th > <?php echo $ln_withdrawAssetAssetUserName; ?> </th>

                                                        <th> <?php echo $ln_withdrawAssetAssetOccupation; ?></th>
                                                        <th> <?php echo $ln_withdrawAssetAssetPrepare_date; ?></th>
                                                        <th> <?php echo $ln_withdrawAssetAssetAssetName; ?></th>
                                                        <th> <?php echo $ln_withdrawAssetAssetAssetType; ?></th>
                                                        <th> <?php echo $ln_withdrawAssetAssetAssetQuantity; ?></th>
                                                        <th> <?php echo $ln_withdrawAssetAssetPurpose; ?> </th>
                                                        <th colspan="2"> <?php echo $ln_withdrawAssetAssetAction; ?> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
    <?php
    while ($row = mysql_fetch_array($result)) {
        ?>
                                                        <tr >
                                                            <td><?php echo $row[3]; ?></td>
                                                            <td><?php echo ucfirst($row[0]) . ' ' . ucfirst($row[1]); ?></td>

                                                            <td><?php echo ucfirst($row[2]); ?></td>
                                                            <td><?php echo $row[4]; ?></td>
                                                            <td><?php echo ucfirst($row[5]); ?></td>
                                                            <td><?php echo ucfirst($row[6]); ?></td>
                                                            <td><?php echo $row[7]; ?></td>
                                                            <td><?php echo $row[8]; ?></td>
        <?php
        $with_type = $row[9];


        if ($with_type == 'borrow') {
            echo '<td><a><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal' . $row[3] . '">' . $ln_withdrawAssetAssetActionborrow . '</button></a>&nbsp; ';
        } else {
            echo '<td><a><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal' . $row[3] . '">' . $ln_withdrawAssetAssetActionwithdraw . '</button></a>&nbsp; ';
        }
        ?>
                                                        </tr>


                                                            <?php
                                                        }
                                                        ?>
                                                </tbody>
                                            </table>  
                                                    <?php
                                                } else {
                                                    $msg = 'notexist';
                                                }
                                                ?>
                                    </div>
                                </div>
                                        <?php
                                        if ($msg != '') {
                                            if ($msg == 'notexist') {
                                                echo "<div class='alert alert-danger'>" .
                                                "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                "<strong>" . $ln_fail . "</strong> " . $ln_withdrawAssetnoapproved .
                                                "</div>";
                                            } else if ($msg == 'notenough') {
                                                echo "<div class='alert alert-warning'>" .
                                                "<button class='close' data-dismiss='alert'>&times;</button>" .
                                                "<strong>" . $ln_fail . "</strong>" . $ln_withdrawAssetnoasset .
                                                "</div>";
                                            }
                                        }
                                        ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

<?php
$re = mysql_query("SELECT asset_user.ID, asset_user.F_NAME, asset_user.M_NAME,asset_user.PROFILE, asset_user.WORK_TYPE,request.WITHDRAW_TYPE, request.RQ_ID,request.PREPARE_DATE,request.ASSET_NAME,request.TYPE,request.QUANTITY,request.WITHDRAW_PURPOSE FROM request INNER JOIN asset_user ON asset_user.ID=request.ID WHERE request.STATUS=1 ORDER BY request.RQ_ID ASC");
if (!$re) {
    echo mysql_error();
}
while ($a = mysql_fetch_assoc($re)) {
    ?>
                <div class="modal fade" id="myModal<?php echo $a['RQ_ID']; ?>" role="dialog">
                    <div class="modal-dialog modal-md">
                <?php
                $im = '';
                if ($a['PROFILE'] == '' || $a['PROFILE'] == null) {
                    $im = '../images/user.png';
                } else {
                    $im = $a['PROFILE'];
                }
                ?>  
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div id="printableArea">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Are You Sure To <?php echo ucfirst($a['WITHDRAW_TYPE']) . ' for ' . ucfirst($a['F_NAME']); ?></h4>
                                </div>

                                <div class="modal-body">
                                    <form class="form-horizontal form-label-left" method="post" onsubmit="return withdraw();">


                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input class="form-control col-md-7 col-xs-12" name="rid" value="<?php echo $a['RQ_ID']; ?>" type="hidden">
                                        </div>

                                        <div class="item form-group">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" name="uid" value="<?php echo $a['ID']; ?>" type="hidden">
                                            </div>
                                        </div>


                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" name="uname" value="<?php echo $a['F_NAME']; ?>" type="hidden">
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" name="type" value="<?php echo $a['TYPE']; ?>" type="hidden">
                                            </div>

                                        </div>

    <?php
    $anum = $a['QUANTITY'];
    $with = $a['WITHDRAW_TYPE'];

    if ($anum == 1) {
        ?>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Serial Number: </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" name="serial" class="form-control col-md-7 col-xs-12" onblur="withdraw()"><span  class="warning" id="returndate"></span>
                                                </div>
                                            </div>   
        <?php
    }

    if ($with == 'borrow') {
        ?>
                                            <div class="item form-group">
                                                <label for="returndate" class="control-label col-md-3 col-sm-3 col-xs-12">Returned Date</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="date" name="returndate" class="form-control col-md-7 col-xs-12" onblur="createForm()"><span  class="warning" id="returndate"></span>
                                                </div>
                                            </div>
        <?php
    }
    ?>
                                        <div class="item form-group">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" name="aname" value="<?php echo $a['ASSET_NAME']; ?>" type="hidden">
                                            </div>
                                        </div>
                                        <div class="item form-group">

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" name="quantity" value="<?php echo $a['QUANTITY']; ?>" type="hidden">
                                            </div>
                                        </div>



                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success" name="save"><?php echo $ln_withdrawAssetYes; ?></button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $ln_withdrawAssetNo; ?></button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>








    <?php
}
?>

            <div class="clearfix"></div>
            <!-- /page content -->

            <!-- footer content -->

            <!-- /footer content -->


        </div>

        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Datatables -->
        <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">

        <script src="../build/js/custom.min.js"></script>

    </body>
</html>