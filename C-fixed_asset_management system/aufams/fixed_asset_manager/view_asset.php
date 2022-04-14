<?php
include 'all.php';
include '../include/connect_db.php';
include '../PHPExcel.php';
if (isset($_GET['lan'])) {
    $langu = $_GET['lan'];
    if ($langu == 'english') {
        $_SESSION['language'] = 'English';
        header("location: view_asset.php");
    } else if ($langu == 'amharic') {
        unset($_SESSION['language']);
        $_SESSION['language'] = 'Amharic';
        header("location: view_asset.php");
    }
}

if (isset($_POST["submit"])) {
    $id = $_SESSION['userId'];
    $excelWriter = new PHPExcel();
    require_once('../PHPExcel.php');
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

    $query = mysql_query("SELECT *  FROM asset ");

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

    $excel->setCellValue("A1", "Assosa University Fixed Asset Management");
    $excel->mergeCells('A1:G1');
    $excel->setCellValue("A2", " General Asset Information");
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
                    'outline' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THICK
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


    $excelWriter->setActiveSheetIndex(0);
    $writer = PHPExcel_IOFactory::createWriter($excelWriter, 'Excel2007');
    $fileName = "../images/" . round(microtime(true)) . 'asser' . ".xlsx";
    $writer->save($fileName);
    header("Location: $fileName");
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
                                        <li><a href="view_asset.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="view_asset.php?lan=english"  rel="facebox"> English</a></li>
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
<?php
if (isset($_POST["submit"])) {
    ExportExcel("csv");
}
?>
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                    <form name="export" method="post" action="view_asset.php">
                                        <button type="submit" value="Export to Excel" name="submit" class="btn-success" ><span class="fa  fa-download"><?php echo $ln_propertyMangerViewAssetExport; ?></span></button>
                                        <button type="button" onclick="return printDiv();" value="print asset" ><span class="fa  fa-print"><?php echo "Print"; ?></span></button>
                                    </form>


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
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th><?php echo $ln_assetId; ?></th>
                                                            <th><?php echo $ln_assetName; ?></th>
                                                            <th><?php echo $ln_assetModel; ?></th>
                                                            <th><?php echo $ln_quantity; ?></th>
                                                            <th><?php echo $ln_price; ?></th>
                                                            <th><?php echo $ln_totalPrice; ?></th>
                                                            <th><?php echo $ln_regDate; ?></th>

                                                        </tr>
                                                    </thead>


                                                    <tbody>
<?php
include_once '../include/connect_db.php';
$query = "select * from asset";
$res = mysql_query($query);
if (!$res) {
    echo mysql_error();
} else {

    while ($row = mysql_fetch_assoc($res)) {
        $id = $row['ASSET_ID'];
        $aname = $row["ASSET_NAME"];
        $amodel = $row["MODEL"];
        $quanti = $row["QUANTITY"];
        $pr = $row["PRICE"];
        $to = $row["TOTAL_PRICE"];
        $da = $row["REG_DATE"];


        echo "<tr>";

        echo "<td>" . $id . "</td>";
        echo "<td>" . $aname . "</td>";
        echo "<td>" . $amodel . "</td>";
        echo "<td>" . $quanti . "</td>";
        echo "<td>" . $pr . " ETB</td>";
        echo "<td>" . $to . " ETB</td>";
        echo "<td>" . $da . "</td>";

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

        <script src="../build/js/custom.min.js"></script>
    </body>
</html>