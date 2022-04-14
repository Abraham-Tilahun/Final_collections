<?php
include 'all.php';
include '../include/connect_db.php';
$name = ucfirst($_SESSION['fname']);

$uid = $_SESSION['userId'];
if (isset($_GET['lan'])) {
    $langu = $_GET['lan'];
    if ($langu == 'english') {
        $_SESSION['language'] = 'English';
        header("location: index.php");
    } else if ($langu == 'amharic') {
        unset($_SESSION['language']);
        $_SESSION['language'] = 'Amharic';
        header("location: index.php");
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

                                        <li><a href="../logout.php?email=<?php echo $_SESSION['email']; ?>"><i class="fa fa-sign-out pull-right"></i> <?php echo $ln_logout; ?></a></li>
                                    </ul>
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $ln_language; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="index.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="index.php?lan=english"  rel="facebox"> English</a></li>
                                    </ul>
                                </li>

                               

                                    </nav>
                                    </div>
                                    </div>
                                    <!-- /top navigation -->

                                    <!-- page content -->
                                    <div class="right_col" role="main">
                                        <div class="">
                                            <div class="page-title">
                                                <div class="title_right">
                                                    <h3>
                                                        <?php
                                                        $uid=$_SESSION['userId'];
                                                        $day = date("Y-m-d", strtotime('7 days'));
                                                        $day1 = date('Y-m-d');
                                                        $num = mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS TOTAL FROM withdraw WHERE APPOITEMENT_DATE BETWEEN '$day1' AND '$day' AND ID=$uid"))['TOTAL'];
                                                        if ($num > 0) {
                                                            echo '<div class="alert alert-warning">
                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>' . $ln_withdrawAssetInfo . '</strong>' . $ln_withdrawAssetReturnMessage . $num . $ln_withdrawAssetItem . '<br>
      <a href="index.php?id=1" >' . $ln_showMore . '</a>
</div>';
                                                        }
                                                        ?>
                                                    </h3>
                                                </div>

                                                <div class="title_left">
                                                    <h2> <label class="label"></label></h2>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="x_panel">
                                                        <div class="x_title">
                                                            <h2> </h2>
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
                                                            if (isset($_GET['id'])) {
                                                                $day = date("Y-m-d", strtotime('7 days'));
                                                                $day1 = date('Y-m-d');
                                                                $id = $_SESSION['userId'];
                                                                $query = mysql_query("SELECT asset.ASSET_NAME, asset.MODEL, withdraw.QUANTITY, withdraw.APPOITEMENT_DATE FROM withdraw INNER JOIN asset ON withdraw.ASSET_ID=asset.ASSET_ID WHERE withdraw.ID=$id AND withdraw.APPOITEMENT_DATE BETWEEN '$day1' AND '$day' ");
                                                                echo mysql_error();
                                                                ?>
                                                                <table id="datatable" class="table table-striped table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo $ln_viewAssetName; ?></th>
                                                                            <th><?php echo $ln_viewAssetModel; ?></th>
                                                                            <th><?php echo $ln_quantity; ?></th>
                                                                            <th><?php echo $ln_withdrawAppoitement; ?></th>


                                                                        </tr>
                                                                    </thead>


                                                                    <?php
                                                                    while ($row = mysql_fetch_assoc($query)) {
                                                                        echo '<tr>';
                                                                        echo '<td>' . $row['ASSET_NAME'] . '</td>';
                                                                        echo '<td>' . $row['MODEL'] . '</td>';
                                                                        echo '<td>' . $row['QUANTITY'] . '</td>';
                                                                        echo '<td>' . $row['APPOITEMENT_DATE'] . '</td>';
                                                                        echo '</tr>';
                                                                    }
                                                                    echo '</table>';
                                                                }
                                                                ?>
                                                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                    <a href="view_my_asset.php"><div class="tile-stats">
                                                                            <div class="icon"><i class="fa fa-home"></i></div>
                                                                            <?php
                                                                            $uid = $_SESSION['userId'];
                                                                            ?>
                                                                            <div class="count"><?php echo mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS TOTAL FROM withdraw WHERE ID =$uid"))["TOTAL"]; ?></div>
                                                                            <h3><?php echo $ln_assetItem; ?></h3>
                                                                        </div></a>
                                                                </div>
                                                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                    <a href="view_my_asset.php"><div class="tile-stats">
                                                                            <div class="icon"><i class="fa fa-home"></i></div>
                                                                            <?php
                                                                            $qr = mysql_query("SELECT * FROM withdraw WHERE ID=$uid");
                                                                            $sum = 0;
                                                                            while ($ro = mysql_fetch_assoc($qr)) {
                                                                                $sum+=$ro['QUANTITY'];
                                                                                ;
                                                                            }
                                                                            ?>
                                                                            <div class="count"><?php echo $sum; ?></div>
                                                                            <h3><?php echo $ln_totalAsset; ?></h3>
                                                                        </div></a>
                                                                </div>
                                                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                    <a href="index.php?view="><div class="tile-stats">
                                                                            <div class="icon"><i class="fa fa-question-circle"></i></div>
                                                                            <?php
                                                                            $qr = mysql_query("SELECT * FROM request WHERE ID=$uid AND STATUS=1");
                                                                           $num=  mysql_num_rows($qr);
                                                                            ?>
                                                                            <div class="count"><?php echo $num; ?></div>
                                                                            <h3><?php echo $ln_approvedRequest; ?></h3>
                                                                        </div></a>
                                                                </div>


                                                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                                    <a href="../logout.php?email=<?php echo $_SESSION['email']; ?>"><div class="tile-stats">
                                                                            <div class="icon"style=" font:bold;color:red;"><i class="fa fa-sign-out"></i></div>
                                                                            <div class="count">.</div>
                                                                            <h2 style=" font:bold;color:red;"><?php echo $ln_logout; ?></h2>

                                                                        </div>
                                                                    </a>
                                                                </div><br>
                                                                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <?php
                                                                    $auser = $_SESSION['userId'];
                                                                    $qu = mysql_query("SELECT asset_user.F_NAME, asset_user.M_NAME, asset_user.PROFILE, asset_user.WORK_TYPE,request.RQ_ID,request.PREPARE_DATE,request.ASSET_NAME,request.TYPE,request.QUANTITY,request.WITHDRAW_PURPOSE FROM request INNER JOIN asset_user ON asset_user.ID=request.ID WHERE request.STATUS=5 AND request.ID=$auser ");
                                                                    $num = mysql_num_rows($qu);
                                                                    if (mysql_num_rows($qu) > 0) {
                                                                        echo '<div class="alert alert-danger">
                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>' . $ln_withdrawAssetInfo . '</strong> <b>' . $num . '</b> rejected Request' . '<br>
      <a href="index.php?ok=" >' . $ln_showMore . '</a>
</div>';
                                                                    }
                                                                    if (isset($_GET['ok'])) {
                                                                        $qu = mysql_query("SELECT asset_user.F_NAME, asset_user.M_NAME, asset_user.PROFILE, asset_user.WORK_TYPE,request.RQ_ID,request.PREPARE_DATE,request.ASSET_NAME,request.TYPE,request.QUANTITY,request.WITHDRAW_PURPOSE FROM request INNER JOIN asset_user ON asset_user.ID=request.ID WHERE request.STATUS=5 AND request.ID=$auser ");
                                                                        if(mysql_num_rows($qu)>0){
                                                                        ?>
                                                                        <table id="datatable" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th><?php echo $ln_viewAssetName; ?></th>
                                                                                    <th><?php echo $ln_viewAssetModel; ?></th>
                                                                                    <th><?php echo $ln_quantity; ?></th>
                                                                                    <th><?php echo $ln_requestAppoitement; ?></th>


                                                                                </tr>
                                                                            </thead>
                                                                            <?php
                                                                            while ($row = mysql_fetch_assoc($qu)) {
                                                                                echo '<tr>';
                                                                                echo '<td>'.$row['ASSET_NAME'].'</td>';
                                                                                echo '<td>'.$row['TYPE'].'</td>';
                                                                                echo '<td>'.$row['QUANTITY'].'</td>';
                                                                                echo '<td>'.$row['PREPARE_DATE'].'</td>';
                                                                                echo '</tr>';
                                                                            }
                                                                            echo '</table>';
                                                                           mysql_query("DELETE FROM request where STATUS=5 AND ID='$auser'");
                                                                           echo mysql_error();
                                                                    }}
                                                                    if (isset($_GET['view'])) {
                                                                        $qu = mysql_query("SELECT asset_user.F_NAME, asset_user.M_NAME, asset_user.PROFILE, asset_user.WORK_TYPE,request.RQ_ID,request.PREPARE_DATE,request.ASSET_NAME,request.TYPE,request.QUANTITY,request.WITHDRAW_PURPOSE FROM request INNER JOIN asset_user ON asset_user.ID=request.ID WHERE request.STATUS=1 AND request.ID=$uid ");
                                                                        if(mysql_num_rows($qu)>0){
                                                                        ?>
                                                                        <table id="datatable" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th><?php echo $ln_viewAssetName; ?></th>
                                                                                    <th><?php echo $ln_viewAssetModel; ?></th>
                                                                                    <th><?php echo $ln_quantity; ?></th>
                                                                                    <th><?php echo $ln_requestAppoitement; ?></th>


                                                                                </tr>
                                                                            </thead>
                                                                            <?php
                                                                            while ($row = mysql_fetch_assoc($qu)) {
                                                                                echo '<tr>';
                                                                                echo '<td>'.$row['ASSET_NAME'].'</td>';
                                                                                echo '<td>'.$row['TYPE'].'</td>';
                                                                                echo '<td>'.$row['QUANTITY'].'</td>';
                                                                                echo '<td>'.$row['PREPARE_DATE'].'</td>';
                                                                                echo '</tr>';
                                                                            }
                                                                            echo '</table>';
                                                                           mysql_query("DELETE FROM request where STATUS=5 AND ID='$auser'");
                                                                           echo mysql_error();
                                                                    }}
                                                                        ?>
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



                                    <!-- jQuery -->
                                    <script src="../vendors/jquery/dist/jquery.min.js"></script>
                                    <!-- Bootstrap -->
                                    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                                    <!-- FastClick -->
                                    <script src="../vendors/fastclick/lib/fastclick.js"></script>
                                    <!-- NProgress -->
                                    <script src="../vendors/nprogress/nprogress.js"></script>
                                    <!-- validator -->
                                    <script src="../vendors/validator/validator.js"></script>

                                    <!-- Custom Theme Scripts -->
                                    <script src="../build/js/custom.min.js"></script>

                                    </body>
                                    </html>

