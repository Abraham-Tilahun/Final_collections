<!DOCTYPE html>
<?php
//include'../common/language.php';
include 'all.php';
include '../include/connect_db.php';
$name = $_SESSION['fname'];
if (isset($_GET['lan'])) {
    $langu = $_GET['lan'];
    if ($langu == 'english') {
        $_SESSION['language'] = 'English';
        header("location: lost_asset.php");
    } else if ($langu == 'amharic') {
        unset($_SESSION['language']);
        $_SESSION['language'] = 'Amharic';
        header("location: lost_asset.php");
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
        <!-- Custom Theme Style -->
        <link href="../build/css/custom.css" rel="stylesheet">
    </head>
    <body class="nav-md footer_fixed">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $ln_assetUserTitle; ?></span></a>
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
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo $ln_logout; ?>" href="../logout.php?email=<?php echo $_SESSION['email']; ?>">
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

                                        <li><a href="../logout.php?email=<?php echo $_SESSION['email']; ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $ln_language; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="lost_asset.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="lost_asset.php?lan=english"  rel="facebox"> English</a></li>
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
                                <h3><?php echo $ln_lostAssetPayement; ?></h3>
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
                                        <h2><?php echo $ln_loginInnerTitle; ?> </h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <form class="form-horizontal form-label-left" method="post" name="request" onsubmit="return validRequest();">

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><?php echo $ln_requestAssetName; ?>
                                                </label>
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                    <select name="aname" class="form-control col-md-3 col-xs-6"  onblur="validRequest()">

                                                        <?php
                                                        $id = $_SESSION['userId'];
                                                        $result = mysql_query("SELECT DISTINCT asset.ASSET_NAME FROM withdraw INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE withdraw.ID=$id ORDER BY asset.ASSET_NAME ASC");
                                                        echo mysql_error();
                                                        echo mysql_num_rows($result);
                                                        while ($row = mysql_fetch_assoc($result)) {
                                                            ?>
                                                            <option value="<?php echo $row['ASSET_NAME']; ?>"><?php echo $row['ASSET_NAME']; ?></option>
                                                        <?php } ?>
                                                    </select><span id="aname"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><?php echo $ln_requestmaterialType; ?>
                                                </label>
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                    <select name="atype" class="form-control col-md-3 col-xs-6"  onblur="validRequest()">

                                                        <?php
                                                        $id = $_SESSION['userId'];
                                                        $result = mysql_query("SELECT DISTINCT asset.MODEL FROM withdraw INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE withdraw.ID=$id ORDER BY asset.ASSET_NAME ASC");
                                                        echo mysql_error();
                                                        echo mysql_num_rows($result);
                                                        while ($row = mysql_fetch_assoc($result)) {
                                                            ?>
                                                            <option value="<?php echo $row['MODEL']; ?>"><?php echo $row['MODEL']; ?></option>
                                                        <?php } ?>
                                                    </select>   </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity"><?php echo $ln_requestquantity; ?>
                                                </label>
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                    <input type="number" name="quantity" class="form-control col-md-7 col-xs-12" onblur="validRequest()"><span id="quantity"></span>
                                                </div>
                                            </div>                                          
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="note"><?php echo $ln_accountNumber; ?> 
                                                </label>
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                    <input type="text"  name="baccount" class="form-control col-md-7 col-xs-12" onblur="validRequest()"><span id="quantity"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="note"><?php echo $ln_AccountPassword; ?> 
                                                </label>
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                    <input type="password"  name="acpassword" class="form-control col-md-7 col-xs-12" onblur="validRequest()"><span id="quantity"></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3 col-md-offset-3">
                                                    <button type="reset" class="btn btn-primary"><?php echo $ln_cancel; ?></button>
                                                    <button type="submit" name="save" class="btn btn-success"><?php echo $ln_submit; ?></button>
                                                </div>
                                            </div>
                                            <?php
                                            if (isset($_POST['save'])) {
                                                $aname = $_POST['aname'];
                                                $atype = $_POST['atype'];
                                                $quan = $_POST['quantity'];
                                                $sccountnum = $_POST['baccount'];
                                                $pass = $_POST['acpassword'];
                                                $uid = $_SESSION['userId'];
                                                $date = date('Y-m-d');
                                                $sum = 0;
                                                $price = 0;
                                                $temp = 0;
                                                $msg = '';
                                                $v = 0;
                                                if($quan<=0){
                                                                                               echo '<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>' . $ln_lostAssetNoAssetQuantityNegative .  '
</div>';  
                                                }else{
                                                $result = mysql_query("SELECT asset.ASSET_NAME FROM withdraw INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE asset.ASSET_NAME='$aname' AND withdraw.ID=$uid AND asset.MODEL='$atype'");
                                                echo mysql_error();
                                                if (mysql_num_rows($result) > 0) {
                                                    $result1 = mysql_query("SELECT asset.ASSET_NAME, withdraw.QUANTITY FROM withdraw INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE asset.ASSET_NAME='$aname' AND withdraw.ID=$uid AND asset.MODEL='$atype'");
                                                    while ($row = mysql_fetch_assoc($result1)) {
                                                        $sum = $sum + $row['QUANTITY'];
                                                    }
                                                    if ($sum < $quan) {
                                                        echo '<div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>' . $ln_lostAssetNoAssetMoreQuantity . ' ' . $aname . '
</div>';
                                                    } else {
                                                        //do here the payment   
                                                        $result2 = mysql_query("SELECT asset.ASSET_ID, asset.ASSET_NAME,asset.PRICE, withdraw.QUANTITY FROM withdraw INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE asset.ASSET_NAME='$aname' AND withdraw.ID=$uid AND asset.MODEL='$atype' AND withdraw.QUANTITY>0 ORDER BY asset.REG_DATE DESC");
                                                        echo mysql_error();
                                                        $n = mysql_num_rows($result2);
                                                        $rw = mysql_fetch_assoc($result2);
                                                        if ($rw['QUANTITY'] >= $quan) {
                                                            $price = $quan * $rw['PRICE'];
                                                            $v = $price;
                                                            $price1 = $price;
                                                        } else {
                                                            $p = 0;
                                                            $keri = 0;
                                                            for ($i = 0; $i < $n; $i++) {
                                                                $resul = mysql_query("SELECT asset.ASSET_ID, asset.ASSET_NAME,asset.PRICE, withdraw.W_ID, withdraw.QUANTITY FROM withdraw INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE asset.ASSET_NAME='$aname' AND withdraw.ID=$uid AND asset.MODEL='$atype' AND withdraw.QUANTITY>0 AND withdraw.STATUS=0 ORDER BY asset.REG_DATE DESC");
                                                                $rows = mysql_fetch_assoc($resul);
                                                                $keri = $quan - $rows['QUANTITY'];
                                                                if ($keri <= 0) {
                                                                    $p = $quan * $rows['PRICE'];
                                                                    $price+=$p;
                                                                    break;
                                                                } else {
                                                                    $p = ($quan - $keri) * $rows['PRICE'];
                                                                    $temp = $quan - $rows['QUANTITY'];
                                                                }
                                                                $quan = $temp;
                                                                $price+=$p;
                                                                $aid = $rows['W_ID'];
                                                                $up = mysql_query("UPDATE withdraw set STATUS=1 WHERE W_ID=$aid");
                                                            }
                                                            $price1 = $price;
                                                        }
                                                        $v = $price;
                                                        $ast = $_POST['quantity'];
                                                        $con = mysql_connect("localhost", "root", "");
                                                        $db = mysql_select_db("ecb", $con);
                                                        $ass = mysql_query("SELECT * FROM bank_account WHERE account_number='1000069505858'");
                                                        $c = mysql_fetch_assoc($ass);
                                                        $result = mysql_query("SELECT * FROM bank_account WHERE account_number='$sccountnum'");
                                                        if (mysql_num_rows($result) > 0) {
                                                            $result1 = mysql_query("SELECT * FROM bank_account WHERE account_number='$sccountnum' AND password='$pass'");
                                                            if (mysql_num_rows($result1) > 0) {
                                                                $payment = mysql_query("SELECT * FROM bank_account WHERE account_number='$sccountnum' AND password='$pass' AND ammount>=$price");
                                                                if (mysql_num_rows($payment) > 0) {
                                                                    $a = mysql_fetch_assoc($payment);
                                                                    $money = $a['ammount'] - $price;
                                                                    $asu = $c['ammount'] + $price;
                                                                    $upuser = mysql_query("UPDATE  bank_account set ammount=$money WHERE account_number=$sccountnum");
                                                                    echo mysql_error();
                                                                    $upasu = mysql_query("UPDATE  bank_account set ammount=$asu WHERE account_number='1000069505858'");
                                                                    echo mysql_error();
                                                                    include '../include/connect_db.php';

                                                                    $res = mysql_query("SELECT asset.ASSET_ID, asset.ASSET_NAME,asset.PRICE,withdraw.W_ID, withdraw.QUANTITY FROM withdraw INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE asset.ASSET_NAME='$aname' AND withdraw.ID=$uid AND asset.MODEL='$atype' AND withdraw.QUANTITY>0 ORDER BY asset.REG_DATE DESC");
                                                                    echo mysql_error();
                                                                    $n = mysql_num_rows($res);
                                                                    $rw = mysql_fetch_assoc($res);
                                                                    $quantity = $rw['QUANTITY'];
                                                                    $quan = $_POST['quantity'];
                                                                    if ($quantity >= $quan) {
                                                                        $ahun = $rw['QUANTITY'] - $quan;
                                                                        $wid = $rw['W_ID'];

                                                                        $v = $price;
                                                                        $upwithdraw = mysql_query("UPDATE withdraw set QUANTITY=$ahun WHERE W_ID=$wid");
                                                                        $delete = mysql_query("DELETE FROM withdraw WHERE QUANTITY=0");
                                                                        echo mysql_error();


                                                                        if ($upwithdraw && $upuser && $upasu) {
                                                                            include '../include/connect_db.php';
                                                                            $payed = mysql_query("INSERT INTO payement(ID, ASSET_NAME, ASSET_TYPE,QUANTITY, AMMOUNT, PAYEMENT_DATE) VALUES($uid, '$aname', '$atype',$ast, $price1,'$date')");
                                                                            echo mysql_error();
                                                                            echo '<div class="col-sm-2"></div><div class="col-sm-6"><div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-check"></i></strong>' . $ln_lostAssetAccountPayed . $price1 . $ln_birr . '
</div></div>';
                                                                        } else {
                                                                            echo 'Something wrong';
                                                                        }
                                                                    } else {
                                                                        $p = 0;
                                                                        $keri = 0;

                                                                        for ($i = 0; $i < $n; $i++) {
                                                                            include '../include/connect_db.php';
                                                                            $resul = mysql_query("SELECT asset.ASSET_ID, asset.ASSET_NAME,asset.PRICE, withdraw.W_ID, withdraw.QUANTITY FROM withdraw INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE asset.ASSET_NAME='$aname' AND withdraw.ID=$uid AND asset.MODEL='$atype' AND withdraw.QUANTITY>0 ORDER BY asset.REG_DATE DESC");
                                                                            $rows = mysql_fetch_assoc($resul);
                                                                            $keri = $quan - $rows['QUANTITY'];
                                                                            if ($keri >= 0) {
                                                                                $p = ($quan - $keri) * $rows['PRICE'];
                                                                                $temp = $quan - $rows['QUANTITY'];

                                                                                $wid = $rows['W_ID'];
                                                                                $asu = $c['ammount'] + $p;
                                                                                $money = $a['ammount'] - $p;
                                                                                $quan = $temp;
                                                                                $upwithdraw = mysql_query("UPDATE withdraw set QUANTITY=0 WHERE W_ID=$wid");
                                                                                $delete = mysql_query("DELETE FROM withdraw WHERE QUANTITY=0 AND ID=$uid");
                                                                                echo mysql_error();
                                                                            } else {
                                                                                $p = $quan * $rows['PRICE'];
                                                                                $price+=$p;
                                                                                $wid = $rows['W_ID'];
                                                                                $asu = $c['ammount'] + $price;
                                                                                $money = $a['ammount'] - $price;
                                                                                $ahun = $rows['QUANTITY'] - $quan;
                                                                                include '../include/connect_db.php';
                                                                                $upwithdraw = mysql_query("UPDATE withdraw set QUANTITY=$ahun WHERE W_ID=$wid");
                                                                                echo mysql_error();


                                                                                if ($upwithdraw && $upuser && $upasu) {
                                                                                    include '../include/connect_db.php';
                                                                                    $payed = mysql_query("INSERT INTO payement(ID, ASSET_NAME, ASSET_TYPE,QUANTITY, AMMOUNT, PAYEMENT_DATE) VALUES($uid, '$aname', '$atype',$ast, $price1,'$date')");
                                                                                    echo mysql_error();
                                                                                    echo '<div class="col-sm-2"></div><div class="col-sm-6"><div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-check"></i></strong>' . $ln_lostAssetAccountPayed . $price1 . $ln_birr . '
</div></div>';
                                                                                } else {
                                                                                    echo 'Something wrong';
                                                                                }
                                                                                break;
                                                                            }






                                                                            //$up = mysql_query("UPDATE withdraw set STATUS=1 WHERE W_ID=$aid");
                                                                        }
                                                                    }
                                                                } else {
                                                                    include '../include/connect_db.php';
                                                                    $quey = mysql_query("UPDATE withdraw SET STATUS=0 WHERE STATUS=1");
                                                                    echo '<div class="col-sm-2"></div><div class="col-sm-6"><div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>' . $ln_lostAssetAccountNotEnoughmoney . '
</div></div>';
                                                                }
                                                            } else {
                                                                include '../include/connect_db.php';
                                                                $quey = mysql_query("UPDATE withdraw SET STATUS=0 WHERE STATUS=1");
                                                                echo '<div class="col-sm-2"></div><div class="col-sm-6"><div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>' . $ln_lostAssetAccountPaswordnotFound . '
</div></div>';
                                                            }
                                                        } else {
                                                            include '../include/connect_db.php';
                                                            $quey = mysql_query("UPDATE withdraw SET STATUS=0 WHERE STATUS=1");
                                                            echo '<div class="col-sm-2"></div><div class="col-sm-6"><div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>' . $ln_lostAssetAccountNumbernotFound . '
</div></div>';
                                                        }
                                                        //echo $price.'<br>';
                                                    }
                                                } else {
                                                    include '../include/connect_db.php';
                                                    $quey = ("UPDATE withdraw SET STATUS=0 WHERE STATUS=1");
                                                    echo '<div class="col-sm-2"></div><div class="col-sm-6"><div class="alert alert-danger"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><i class="fa fa-2x fa-times-circle"></i></strong>' . $ln_lostAssetNoAssetName . '
</div></div>';
                                                }
                                            }}
                                            ?>

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
        <script src="../build/js/custom.min.js"></script>

    </body>
</html>