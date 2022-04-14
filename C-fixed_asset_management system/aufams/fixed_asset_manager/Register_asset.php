<?php
include 'all.php';
include '../include/connect_db.php';
$msg = '';
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: withdraw_asset.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("location: Register_asset.php");

}
}

if (isset($_POST['save'])) {
    $date = date("Y-m-d");
    $aname = strtolower($_POST['aname']);
    $model = strtolower($_POST['amodel']);
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total = $quantity * $price;
    $serial = $_POST["serial"];
if($quantity>0){
    if($price>0){
    $query1 = mysql_query("SELECT * FROM asset WHERE ASSET_NAME='$aname' AND MODEL='$model' AND PRICE=$price");
    if (mysql_num_rows($query1) > 0) {
        while ($row = mysql_fetch_assoc($query1)) {
            $aid=$row['ASSET_ID'];
            $equantity = $row["QUANTITY"];
            $etotal = $row["TOTAL_PRICE"];
            $ntotal = $total + $etotal;
            $nquantity = $quantity + $equantity;
            $nprice = $etotal + ($quantity * $price);

            $ae = mysql_query("update asset set QUANTITY=$nquantity,TOTAL_PRICE=$nprice, PRICE=$price, REG_DATE='$date' WHERE ASSET_ID=$aid");
            $msg = 'update';
           
        }
    } else {
        $query3 = mysql_query("insert into asset(ASSET_NAME, MODEL, SERIAL, QUANTITY,PRICE, TOTAL_PRICE,REG_DATE) values ('$aname', '$model', '$serial', $quantity, $price,$total,'$date')");
        if ($query3) {
            $msg = 'registered';
        }
    }
}
else{
    $msg="money";
}
        }
else{
    $msg="negative";
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
        <script src="../js/form_validation.js" type="text/javascript"></script>
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
                                        <li><a href="Register_asset.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="Register_asset.php?lan=english"  rel="facebox"> English</a></li>
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
                                <h3><?php echo $ln_registerAssetTitle; ?></h3>
                            </div>

                            <div class="title_right">

                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><?php echo $ln_registerAssetInnerTitle; ?> </h2>
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
                                        $message='';
                                        if (isset($_POST["importFromExcel"])) {
                                            $regDate = date('y-m-d');
                                            $excelFile = basename($_FILES["excelFile"]["name"]);
                                            $allowedExts = array("xlsx", "xlx");
                                            $temp = explode(".", $_FILES["excelFile"]["name"]);
                                            $extension = end($temp);

                                            if ($extension == "xlsx" || $extension == ".xlx") {
                                                $temp = explode(".", $_FILES["excelFile"]["name"]);
                                                $newfilename = round(microtime(true)) . '.' . end($temp);
                                                move_uploaded_file($_FILES["excelFile"]["tmp_name"], "../generate/newAsset/" . $newfilename);
                                            } else {
                                                $msg = "file_upload_error";
                                            }

                                            if ($newfilename != "") {
                                                $fileLocation = "../generate/newAsset/" . $newfilename;
                                                require_once('../PHPExcel/IOFactory.php');

                                                $excelObject = PHPExcel_IOFactory::load($fileLocation);
                                                $workSheet = $excelObject->getSheet(0);
                                                $total = $workSheet->getHighestRow();

                                                $check = "";
                                                for ($i = 2; $i < $total; $i++) {

                                                    $assetName = $workSheet->getCell("A" . $i)->getValue();
                                                    $assetModel = $workSheet->getCell("B" . $i)->getValue();
                                                    $quantity = $workSheet->getCell("C" . $i)->getValue();
                                                    $price = $workSheet->getCell("D" . $i)->getValue();
                                                    $TO = $workSheet->getCell("E" . $i)->getValue();
                                                    //$regDate = $workSheet->getCell("F" . $i)->getValue();



                                                    if (!(gettype($quantity) == "double")) {
                                                        unlink($fileLocation);
                                                        floor($quantity);
                                                        $check = "Invalid Quantity for " . $assetName . " " . $assetModel . " placed in cell D" . $i . ". "
                                                                . "Please correct the excel file and upload again!";
                                                        break;
                                                    }
                                                    if (!(gettype($price) == "double")) {
                                                        unlink($fileLocation);
                                                        floor($price);
                                                        $check = "Invalid Price for " . $assetName . " " . $assetModel . " placed in cell E" . $i . ". "
                                                                . "Please correct the excel file and upload again!";
                                                        break;
                                                    }

                                                    if ($price < 0) {
                                                        unlink($fileLocation);
                                                        $check = "Price <b>'" . $price . "'</b> of " . $assetName . " " . $assetModel . " placed in cell D" . $i . ". "
                                                                . "is lessan zero  Please correct the excel file and upload again!";
                                                        break;
                                                    }


                                                    if ($quantity < 0) {
                                                        unlink($fileLocation);
                                                        $check = "Quantity  <b>'" . $quantity . "'</b> of " . $assetName . " " . $assetModel . " placed in cell D" . $i . ". "
                                                                . "quantity is lessan zero. Please correct the excel file and upload again!";
                                                        break;
                                                    }
                                                }
                                                if ($check != "") {
                                                    echo '<div class=col-sm-2></div><div class=col-sm-8><h2><div class="alert alert-warning"><strong>' . $check . '!</strong> ' . $ln_SuccessMessageRegistered . $quantity . ' ' . $aname . ' ' .
                                                    '</div></div><div class=col-sm-2></div></h2>';
                                                } else {
                                                    for ($j = 2; $j < $total; $j++) {
                                                        $assetName = strtolower(trim($workSheet->getCell("A" . $j)->getValue()));
                                                        $assetModel = strtolower(trim($workSheet->getCell("B" . $j)->getValue()));
                                                        $quantity = strtolower(trim($workSheet->getCell("C" . $j)->getValue()));
                                                        $price = trim($workSheet->getCell("D" . $j)->getValue());
                                                        $total = $workSheet->getCell("E" . $j)->getValue();
                                                        
                                                        
                                                        $query1 = mysql_query("SELECT * FROM asset WHERE ASSET_NAME='$assetName' AND MODEL='$assetModel' AND PRICE= '$price' ");
                                                        echo mysql_error();
                                                        if (mysql_num_rows($query1) > 0) {
                                                            $row = mysql_fetch_assoc($query1);
                                                            $assetId = $row['ASSET_ID'];
                                                            $equantity = $row["QUANTITY"];
                                                            $etotal = $row["TOTAL_PRICE"];
                                                            $ntotal = $total + $etotal;
                                                            $nquantity = $quantity + $equantity;
                                                            $nprice = $etotal + ($quantity * $price);

                                                            $ae = mysql_query("update asset set QUANTITY=$nquantity,TOTAL_PRICE=$nprice, PRICE=$price, REG_DATE='$regDate' WHERE ASSET_ID='$assetId'");
                                                            $message = 'registered';
                                                         
                                                        } else {
                                                            $query3 = mysql_query("insert into asset(ASSET_NAME, MODEL, SERIAL, QUANTITY,PRICE, TOTAL_PRICE,REG_DATE) values ('$assetName', '$assetModel', ' ', $quantity, $price,$total,'$regDate')");
                                                            if ($query3) {
                                                                $message = 'registered';
                                                            }
                                                        }
                                                    }
                                                    unlink($fileLocation);
                                                    $message = "import_excel_file_success";
                                                }
                                            }
                                        }
                                         if ($msg != '') {
                                            if ($msg == "update") {
                                                echo '<div class=col-sm-2></div><div class=col-sm-8><h2><div class="alert alert-success">
  <strong>' . $ln_success . '!</strong>' . $ln_SuccessMessageUpdate . $nquantity . ' ' . $aname . ' ' . $ln_SuccessLast .
                                                '</div></div><div class=col-sm-2></div></h2>';
                                            } elseif ($msg == 'registered') {
                                                echo '<div class=col-sm-2></div><div class=col-sm-8><h2><div class="alert alert-success"><strong>' . $ln_success . '!</strong> ' . $ln_SuccessMessageRegistered . $quantity . ' ' . $aname . ' ' .
                                                '</div></div><div class=col-sm-2></div></h2>';
                                            }
                                             elseif ($msg == 'negative') {
                                                echo '<div class=col-sm-2></div><div class=col-sm-8><h2><div class="alert alert-danger"><strong>' . $ln_fail . '!</strong> ' . $ln_registerAssetNegative. 
                                                '</div></div><div class=col-sm-2></div></h2>';
                                            }
                                             elseif ($msg == 'money') {
                                                echo '<div class=col-sm-2></div><div class=col-sm-8><h2><div class="alert alert-danger"><strong>' . $ln_fail . '!</strong> ' . $ln_registerMoneyNegative. 
                                                '</div></div><div class=col-sm-2></div></h2>';
                                            }
                                        }
                                        if($message!=''){
                                            if ($message == "update") {
                                                echo '<div class=col-sm-2></div><div class=col-sm-8><h2><div class="alert alert-success">
  <strong>' . $ln_success . '!</strong>' . $ln_SuccessMessageUpdate.
                                                '</div></div><div class=col-sm-2></div></h2>';
                                            }
                                            elseif ($message == 'import_excel_file_success') {
                                            echo '<div class=col-sm-2></div><div class=col-sm-8><h2><div class="alert alert-success"><strong>' . $ln_success . '!</strong> ' . $ln_SuccessMessageRegistered .
                                            '</div></div><div class=col-sm-2></div></h2>';
                                        } elseif ($message == 'file_upload_error') {
                                            echo '<div class=col-sm-2></div><div class=col-sm-8><h2><div class="alert alert-danger"><strong>Something is Wrong!</strong> ' . $ln_SuccessMessageRegistered . ' ' .
                                            '</div></div><div class=col-sm-2></div></h2>';
                                        }
                                        }
                                        ?>
                                        <form class="form-horizontal form-label-left" action="" method="post" name="register" onsubmit="return registerAsset();">
                                            <div class="item form-group">
                                                <label class="control-label col-md-3"><?php echo $ln_assetName; ?>:
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" name="aname" class="form-control col-md-7 col-xs-4"><span  id="aname"></span>                                          
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3"><?php echo $ln_assetModel; ?>: 
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" name="amodel"  type="text"><span id="amodel"></span>
                                                </div>
                                            </div> 
                                            <div class="item form-group">
                                                <label class="control-label col-md-3"><?php echo $ln_serialNumber; ?>: 
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="form-control col-md-7 col-xs-12" name="serial"  type="text"><span id="serial"></span>
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $ln_quantity; ?>:
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="number"  name="quantity" class="form-control col-md-7 col-xs-12"><span  id="quantity"></span>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3"><?php echo $ln_price; ?>:</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="number" name="price" class="form-control col-md-7 col-xs-12"><span id="price"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-6">
                                                    <button type="reset" class="btn btn-primary"><?php echo $ln_cancel; ?></button>
                                                    <button id="save" type="submit" name="save" class="btn btn-success"><?php echo $ln_submit; ?></button>
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Import From Excel</button>
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>

                                        </form>
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
                                                                <label for="profile" class="control-label col-md-3 col-sm-3 col-xs-12">Import Data From Excel:</label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="file" name="excelFile">
                                                                </div>
                                                            </div>


                                                            <div class="modal-footer">
                                                                <button id="save" type="submit" name="importFromExcel" class="btn btn-success">Submit</button>

                                                        </form>
                                                    </div>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

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