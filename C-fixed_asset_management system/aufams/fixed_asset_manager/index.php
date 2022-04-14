<?php
include 'all.php';
include '../include/connect_db.php';
if(isset($_GET['lan'])){
$langu=$_GET['lan'];
if($langu=='english'){
$_SESSION['language']='English';
header("location: index.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
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
                                <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $ln_assetmanager;?></span></a>
                            </div>

                            <div class="clearfix"></div>

                            <!-- menu profile quick info -->
                            <div class="profile clearfix">
                                <div class="profile_pic">
                                    <img src="<?php echo $_SESSION['image'];?>" alt="..." class="img-circle profile_img">
                                </div>
                                <div class="profile_info">
                                    <span><?php echo $ln_welcome;?></span>
                                    <h2>
                                        <?php echo ucfirst($_SESSION['fname']); ?></h2>
                                </div>
                            </div>
                            <!-- /menu profile quick info -->

                            <br />

                            <!-- sidebar menu -->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <h3><?php echo $ln_general;?></h3>
                                    <ul class="nav side-menu">
                                        <li><a href="index.php"><i class="fa fa-home"></i> <?php echo $ln_home;?> </a>

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

                                <a data-toggle="tooltip" data-placement="top" title="<?php echo $ln_logout;?>" href="../logout.php?email=<?php echo $_SESSION['email'];?>">
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
                                        <li><a href="index.php?lan=amharic"  rel="facebox"> Amharic</a></li>
                                        <li><a href="index.php?lan=english"  rel="facebox"> English</a></li>
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
                                <h3><?php echo $ln_generalInformation;?></h3>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <label> <h2><?php echo $ln_dashboard;?></h2></label>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <a href="view_asset.php"><div class="tile-stats">
                                                    <div class="icon"><i class="fa fa-users"></i></div>
                                                    <div class="count"><?php echo mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS TOTAL FROM asset"))["TOTAL"]; ?></div>
                                                    <h3><?php echo $ln_assetItem;?></h3>
                                                </div></a>
                                        </div>

                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <a href="withdraw_asset.php"><div class="tile-stats">
                                                    <div class="icon"><i class="fa fa-comments"></i></div>
                                                    <div class="count"><?php echo mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS TOTAL FROM request WHERE STATUS =1"))["TOTAL"]; ?></div>
                                                    <h3><?php echo $ln_approvedRequest;?></h3>
                                                </div></a>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <a href="view_asset.php"><div class="tile-stats">
                                                    <div class="icon"><i class="fa fa-home"></i></div>
                                                    <?php
                                                    $res = mysql_query("SELECT * FROM asset");
                                                    $sum = 0;
                                                    while ($num = mysql_fetch_assoc($res)) {
                                                        $sum+=$num['QUANTITY'];
                                                    }
                                                    ?>
                                                    <div class="count"><?php echo $sum; ?></div>
                                                    <h3><?php echo $ln_asset;?></h3>
                                                </div></a>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <a href="../logout.php?email=<?php echo $_SESSION['email'];?>"><div class="tile-stats">
                                                    <div class="icon" style=" font:bold;color:red;"><i class="fa fa-sign-out"></i></div>
                                                    <div class="count">.</div>
                                                    <h2 style=" font:bold;color:red;"><?php echo $ln_logout;?></h2>

                                                </div></a>
                                        </div>
   <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <?php
                                                                    $auser = $_SESSION['userId'];
                                                                    $qu = mysql_query("SELECT * FROM report where ID=$auser AND STATUS=2 ");
                                                                    $num = mysql_num_rows($qu);
                                                                    if (mysql_num_rows($qu) > 0) {
                                                                        echo '<div class="alert alert-danger">
                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>' . $ln_withdrawAssetInfo . '</strong> <b>' . $num . '</b> '.$ln_rejectedReportNotification . '<br>
      <a href="index.php?ok=" >' . $ln_showMore . '</a>
</div>';
                                                                    }
                                                                    if (isset($_GET['ok'])) {
                                                                        $qu = mysql_query("SELECT * FROM report WHERE STATUS =2 AND ID=$auser");
                                                                        if(mysql_num_rows($qu)>0){
                                                                        ?>
                                                                        <table id="datatable" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th><?php echo $ln_reportType; ?></th>
                                                                                    <th><?php echo $ln_reportContent; ?></th>
                                                                                    <th><?php echo $ln_preparedDate; ?></th>
                                                                                    

                                                                                </tr>
                                                                            </thead>
                                                                            <?php
                                                                            while ($row = mysql_fetch_assoc($qu)) {
                                                                                echo '<tr>';
                                                                                echo '<td>'.$row['TYPE'].'</td>';
                                                                                echo '<td>'.$row['NOTE'].'</td>';
                                                                               echo '<td>'.$row['PREP_DATE'].'</td>';
                                                                                echo '</tr>';
                                                                            }
                                                                            echo '</table>';
                                                                           mysql_query("DELETE FROM report where STATUS=2 AND ID='$auser'");
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
                                        <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <?php
                                                                    $auser = $_SESSION['userId'];
                                                                    $qu = mysql_query("SELECT * FROM report where ID=$auser AND STATUS=1 ");
                                                                    $num = mysql_num_rows($qu);
                                                                    if (mysql_num_rows($qu) > 0) {
                                                                        echo '<div class="alert alert-success">
                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>' . $ln_withdrawAssetInfo . '</strong> <b>' . $num . '</b> '.$ln_approvedReportNotification . '<br>
      <a href="index.php?seen=" >' . $ln_showMore . '</a>
</div>';
                                                                    }
                                                                    if (isset($_GET['seen'])) {
                                                                        $qu = mysql_query("SELECT * FROM report WHERE STATUS =1 AND ID=$auser");
                                                                        if(mysql_num_rows($qu)>0){
                                                                        ?>
                                                                        <table id="datatable" class="table table-striped table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th><?php echo $ln_reportType; ?></th>
                                                                                    <th><?php echo $ln_reportContent; ?></th>
                                                                                    <th><?php echo $ln_preparedDate; ?></th>
                                                                                    

                                                                                </tr>
                                                                            </thead>
                                                                            <?php
                                                                            while ($row = mysql_fetch_assoc($qu)) {
                                                                                echo '<tr>';
                                                                                echo '<td>'.$row['TYPE'].'</td>';
                                                                                echo '<td>'.$row['NOTE'].'</td>';
                                                                               echo '<td>'.$row['PREP_DATE'].'</td>';
                                                                                echo '</tr>';
                                                                            }
                                                                            echo '</table>';
                                                                           mysql_query("Update report Set STATUS=3 where STATUS=1 AND ID='$auser'");
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
                                                                           mysql_query("Update report Set STATUS=3 where STATUS=1 AND ID='$auser'");
                                                                           echo mysql_error();
                                                                    }}
                                                                        ?>
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