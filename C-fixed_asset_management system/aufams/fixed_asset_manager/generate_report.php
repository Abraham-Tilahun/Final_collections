<!DOCTYPE html>
<?php
include 'all.php';
include '../include/connect_db.php';
include '../PHPExcel.php';
$with = '';
$reg = '';
$msg = '';
if (isset($_GET['lan'])) {
    $langu = $_GET['lan'];
    if ($langu == 'english') {
        $_SESSION['language'] = 'English';
        header("location: generate_report.php");
    } else if ($langu == 'amharic') {
        unset($_SESSION['language']);
        $_SESSION['language'] = 'Amharic';
        header("location: generate_report.php");
    }
}
if (isset($_POST['save'])) {
    $uid = $_SESSION['userId'];
    $from;
    $type = $_POST['report_type'];
    $note = $_POST['content'];
    if ($type == "one week") {
        $from = date('Y-m-d', strtotime("-7 days"));
    } else if ($type == "monthly") {
        $from = date('Y-m-d', strtotime("-30 days"));
    } else if ($type == "three month") {
        $from = date('Y-m-d', strtotime("-90 days"));
    } else if ($type == "six month") {
        $from = date('Y-m-d', strtotime("-180 days"));
    } else if ($type == "yearly") {
        $from = date('Y-m-d', strtotime("-365 days"));
    }
    $to = date("Y-m-d");

    require_once('../PHPExcel.php');
    $excelWriter = new PHPExcel();
    $query = mysql_query("SELECT *  FROM asset WHERE REG_DATE BETWEEN '$from' AND '$to'");
    if (mysql_num_rows($query) > 0) {
        $excel = $excelWriter->setActiveSheetIndex(0);
        $line = 4;
        $excel->setTitle("General asset");

        $excel->setCellValue("A$line", "ASSET ID");
        $excel->setCellValue("B$line", "ASSET NAME");
        $excel->setCellValue("C$line", "ASSET MODEL");
        $excel->setCellValue("D$line", "QUANTITY");
        $excel->setCellValue("E$line", "UNIT PRICE");
        $excel->setCellValue("F$line", "TOTAL PRICE");
        $excel->setCellValue("G$line", "REGISTERED DATE");

        $excel->getStyle("A$line:G$line")->getFont()->setSize(15);
        $excel->getStyle("A$line:G$line")->getFont()->setBold(true);

        $excel->getStyle("A$line:G$line")->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);

        $line++;



        while ($row = mysql_fetch_assoc($query)) {
            $id = $row["ASSET_ID"];
            $aname = $row["ASSET_NAME"];
            $amodel = $row["MODEL"];
            $aquantity = $row["QUANTITY"];
            $uprice = $row["PRICE"];
            $tprice = $row["TOTAL_PRICE"];
            $date = $row["REG_DATE"];

            $excel->setCellValue("A$line", $id);
            $excel->setCellValue("B$line", strtoupper($aname));
            $excel->setCellValue("C$line", ucwords("$amodel"));
            $excel->setCellValue("D$line", $aquantity);
            $excel->setCellValue("E$line", $uprice);
            $excel->setCellValue("F$line", $tprice);
            $excel->setCellValue("G$line", $date);

            $line++;
        }
        $excel->getColumnDimension('A')->setWidth(10);
        $excel->getColumnDimension('B')->setWidth(15);
        $excel->getColumnDimension('C')->setWidth(15);
        $excel->getColumnDimension('D')->setWidth(15);
        $excel->getColumnDimension('E')->setWidth(15);
        $excel->getColumnDimension('F')->setWidth(15);
        $excel->getColumnDimension('G')->setWidth(15);

        $excel->setCellValue("A1", "Assosa University Asset");
        $excel->mergeCells('A1:G1');
        $excel->setCellValue("A2", " " . $type . " Report From " . $from . " To" . $to);
        $excel->mergeCells('A2:G2');

        $excel->getStyle('A1')->getAlignment()->setHorizontal('center');
        $excel->getStyle('A2')->getAlignment()->setHorizontal('center');
        $excel->getStyle('A1')->applyFromArray(
                array('font' => array(
                        'size' => 24,
                    )
        ));
        $excel->getStyle('A2')->applyFromArray(
                array('font' => array(
                        'size' => 24,
                    )
        ));
        $excel->getStyle('A4:G4')->applyFromArray(
                array('font' => array(
                        'bold' => true,
                    ),
                    'border' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THICK
                        )
                    )
        ));
        $aaa = $line - 1;
        $excel->getStyle("A4:G" . $aaa)->applyFromArray(
                array(
                    'borders' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN
                        ),
                        'vertical' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THICK
                        )
                    )
                )
        );

        foreach (range("A", "G") as $col) {

            $excel->getColumnDimension($col)->setAutoSize(true);
        }
        $reg = 'register';
    } else {
        $reg = 'not_register';
    }
    ///withdraw

    $query = mysql_query("SELECT asset_user.*, asset.ASSET_NAME, asset.MODEL, asset.PRICE, withdraw.* FROM withdraw INNER JOIN asset_user ON withdraw.ID=asset_user.ID  INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE withdraw.WITHDRAW_DATE BETWEEN '$from' AND '$to'");
    if (mysql_num_rows($query) > 0) {
        $excelWriter->createSheet();
        $excel = $excelWriter->setActiveSheetIndex(1);
        $line = 4;

        $excel->setTitle("General withdraw");

        $excel->setCellValue("A$line", "ASSET USER NAME");
        $excel->setCellValue("B$line", "ASSET NAME");
        $excel->setCellValue("C$line", "ASSET MODEL");
        $excel->setCellValue("D$line", "QUANTITY");
        $excel->setCellValue("E$line", "UNIT PRICE");
        $excel->setCellValue("F$line", "TOTAL PRICE");
        $excel->setCellValue("G$line", "REGISTERED DATE");

        $excel->getStyle("A$line:G$line")->getFont()->setSize(15);
        $excel->getStyle("A$line:G$line")->getFont()->setBold(true);

        $excel->getStyle("A$line:G$line")->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);

        $line++;



        while ($row = mysql_fetch_assoc($query)) {

            $aname = $row["ASSET_NAME"];
            $aufname = $row['F_NAME'];
            $aumname = $row['M_NAME'];
            $amodel = $row["MODEL"];
            $aquantity = $row["QUANTITY"];
            $uprice = $row["PRICE"];
            $total = $aquantity * $uprice;
            $date = $row["WITHDRAW_DATE"];

            $excel->setCellValue("A$line", ucwords($aufname . ' ' . $aumname));
            $excel->setCellValue("B$line", strtoupper($aname));
            $excel->setCellValue("C$line", ucwords("$amodel"));
            $excel->setCellValue("D$line", $aquantity);
            $excel->setCellValue("E$line", $uprice);
            $excel->setCellValue("F$line", $total);
            $excel->setCellValue("G$line", $date);

            $line++;
        }
        $excel->getColumnDimension('A')->setWidth(10);
        $excel->getColumnDimension('B')->setWidth(15);
        $excel->getColumnDimension('C')->setWidth(15);
        $excel->getColumnDimension('D')->setWidth(15);
        $excel->getColumnDimension('E')->setWidth(15);
        $excel->getColumnDimension('F')->setWidth(15);
        $excel->getColumnDimension('G')->setWidth(15);
        $excel->mergeCells('A1:G1');
        $excel->setCellValue("A1", "Assosa University General Withdraw");
        $excel->mergeCells('A2:G2');
        $excel->setCellValue("A2", " " . $type . " Report From " . $from . " To " . $to);


        $excel->getStyle('A1')->getAlignment()->setHorizontal('center');
        $excel->getStyle('A2')->getAlignment()->setHorizontal('center');
        $excel->getStyle('A1')->applyFromArray(
                array('font' => array(
                        'size' => 24,
                    )
        ));
        $excel->getStyle('A2')->applyFromArray(
                array('font' => array(
                        'size' => 24,
                    )
        ));
        $excel->getStyle('A4:G4')->applyFromArray(
                array('font' => array(
                        'bold' => true,
                    ),
                    'border' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THICK
                        )
                    )
        ));
        $aaa = $line - 1;
        $excel->getStyle("A4:G" . $aaa)->applyFromArray(
                array(
                    'borders' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN
                        ),
                        'vertical' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THICK
                        )
                    )
                )
        );

        foreach (range("A", "G") as $col) {

            $excel->getColumnDimension($col)->setAutoSize(true);
        }
        $with = 'withdraw';
    } else {
        $with = 'not_withdraw';
    }
    //payement
    $query = mysql_query("SELECT asset_user.*, payement.* FROM payement INNER JOIN asset_user ON payement.ID=asset_user.ID WHERE payement.PAYEMENT_DATE BETWEEN '$from' AND '$to'");
    if (mysql_num_rows($query) > 0) {
        $excelWriter->createSheet();
        $excel = $excelWriter->setActiveSheetIndex(2);
        $line = 4;

        $excel->setTitle("General Payement");

        $excel->setCellValue("A$line", "ASSET USER NAME");
        $excel->setCellValue("B$line", "ASSET NAME");
        $excel->setCellValue("C$line", "ASSET TYPE");
        $excel->setCellValue("D$line", "QUANTITY");
        $excel->setCellValue("E$line", "AMMOUNT");
        $excel->setCellValue("F$line", "PAYEMENT DATE");
        

        $excel->getStyle("A$line:F$line")->getFont()->setSize(15);
        $excel->getStyle("A$line:F$line")->getFont()->setBold(true);

        $excel->getStyle("A$line:F$line")->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);

        $line++;



        while ($row = mysql_fetch_assoc($query)) {

            $aname = $row["ASSET_NAME"];
            $aufname = $row['F_NAME'];
            $aumname = $row['M_NAME'];
            $amodel = $row["ASSET_TYPE"];
            $aquantity = $row["QUANTITY"];
            $uprice = $row["AMMOUNT"];
            
            $date = $row["PAYEMENT_DATE"];

            $excel->setCellValue("A$line", ucwords($aufname . ' ' . $aumname));
            $excel->setCellValue("B$line", strtoupper($aname));
            $excel->setCellValue("C$line", ucwords("$amodel"));
            $excel->setCellValue("D$line", $aquantity);
            $excel->setCellValue("E$line", $uprice);
           $excel->setCellValue("F$line", $date);

            $line++;
        }
        $excel->getColumnDimension('A')->setWidth(10);
        $excel->getColumnDimension('B')->setWidth(15);
        $excel->getColumnDimension('C')->setWidth(15);
        $excel->getColumnDimension('D')->setWidth(15);
        $excel->getColumnDimension('E')->setWidth(15);
        $excel->getColumnDimension('F')->setWidth(15);
        
        $excel->mergeCells('A1:F1');
        $excel->setCellValue("A1", "Assosa University General Asset Payement");
        $excel->mergeCells('A2:F2');
        $excel->setCellValue("A2", " " . $type . " Report From " . $from . " To " . $to);


        $excel->getStyle('A1')->getAlignment()->setHorizontal('center');
        $excel->getStyle('A2')->getAlignment()->setHorizontal('center');
        $excel->getStyle('A1')->applyFromArray(
                array('font' => array(
                        'size' => 24,
                    )
        ));
        $excel->getStyle('A2')->applyFromArray(
                array('font' => array(
                        'size' => 24,
                    )
        ));
        $excel->getStyle('A4:F4')->applyFromArray(
                array('font' => array(
                        'bold' => true,
                    ),
                    'border' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THICK
                        )
                    )
        ));
        $aaa = $line - 1;
        $excel->getStyle("A4:F" . $aaa)->applyFromArray(
                array(
                    'borders' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN
                        ),
                        'vertical' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THICK
                        )
                    )
                )
        );

        foreach (range("A", "F") as $col) {

            $excel->getColumnDimension($col)->setAutoSize(true);
        }
        $with = 'withdraw';
    } else {
        $with = 'not_withdraw';
    }


    if (($with != "not_withdraw") || ($reg != "not_register")) {


        $check = mysql_query("SELECT * FROM report WHERE ID=$uid AND TYPE='$type' AND PREP_DATE='$to'");

        if (mysql_num_rows($check) > 0) {
            $msg = 'not';
        } else {
            $writer = PHPExcel_IOFactory::createWriter($excelWriter, 'Excel2007');
            $fileName = "../generate/" . 'reports' . round(microtime(true)) . ".xlsx";
            $writer->save($fileName);

            $query = mysql_query("INSERT INTO report(ID, CONTENT, NOTE, TYPE, PREP_DATE) VALUES($uid, '$fileName', '$note', '$type', '$to')");
            $msg = 'success';
        }
    } else {
        echo 'bado new';
    }
    //header("Location: $fileName");
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
        <script src="form_validation.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
                <!-- /top navigation -->
                

                <!-- page content -->
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
                                        <li><a href="generate_report.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="generate_report.php?lan=english"  rel="facebox"> English</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3><?php echo $ln_generateReportTitle; ?></h3>
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
                                        <h2><?php echo $ln_generateReportInnerTitle; ?> </h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
<?php
if ($msg != '') {
    if ($msg == 'success') {
        if (($reg != '') || ($with != '')) {
            if (($reg == 'not_register') && ($with == 'not_withdraw')) {
                ?>
                                                    <div class="x_content">
                                                        <div class="alert alert-danger">
                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                            <strong>Warning!</strong> Sorry <?php echo $type; ?> there is no either withdraw nor register asset. 
                                                        </div>
                <?php
            } else if (($reg == 'not_register') && ($with == 'withdraw')) {
                ?>
                                                        <div class="x_content">
                                                            <div class="alert alert-success">
                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                <strong><?php echo $ln_success; ?>!</strong><?php echo $ln_generateReportWithdrawNoRegister; ?>
                                                            </div>
                <?php
            } else if (($reg == 'register') && ($with == 'withdraw')) {
                ?>
                                                            <div class="x_content">
                                                                <div class="alert alert-success">
                                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                    <strong><?php echo $ln_success; ?>!</strong> <?php echo $ln_generateReportWithdrawRegister; ?>
                                                                </div>
                <?php
            } else if (($reg == 'register') && ($with == 'not_withdraw')) {
                ?>
                                                                <div class="x_content">
                                                                    <div class="alert alert-success">
                                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                        <strong><?php echo $ln_success; ?>!</strong> <?php echo $ln_generateReportNoWithdrawRegister; ?>
                                                                    </div>
                <?php
            }
        }
    } else if ($msg == 'not') {
        ?>
                                                            <div class="x_content">
                                                                <div class="alert alert-danger">
                                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                    <h3> <strong><?php echo $ln_fail; ?>!</strong> <?php echo $ln_generateReportTheSameDay; ?>
                                                                </div>  
        <?php
    }
}
?>

                                                        <form class="form-horizontal form-label-left" action="" method="post" name="create" onsubmit="return generateReport();">

                                                            <div class="item form-group">
                                                                <div class="col-lg-3">
                                                                    <label  class="control-label col-md-7 col-sm-7 col-xs-12"><?php echo $ln_reportType; ?></label>
                                                                </div>

                                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                                    <select name="report_type" class="form-control col-md-3 col-xs-6">

                                                                        <option value="one week"><?php echo $ln_weeklyReport; ?></option>
                                                                        <option value="monthly"><?php echo $ln_monthlyReport; ?></option>
                                                                        <option value="three month"><?php echo $ln_threeMonthReport; ?></option>
                                                                        <option value="six month"><?php echo $ln_sixMonthReport; ?></option>
                                                                        <option value="yearly"><?php echo $ln_yearReport; ?></option>

                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="item form-group">
                                                                <div class="col-lg-3">
                                                                    <label class="control-label col-md-7 col-sm-7 col-xs-12"><?php echo $ln_reportContent; ?>:</label> 
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                                    <textarea class="form-control col-md-7 col-xs-4" rows="5" name="content" placeholder="<?php echo $ln_generateReportPlaceHolder; ?>" onblur="generateReport()"></textarea><span  id="contents"></span>
                                                                </div>
                                                            </div>




                                                            <div class="form-group">
                                                                <div class="col-md-6 col-md-offset-6">
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->



        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>


        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>

    </body>
</html>