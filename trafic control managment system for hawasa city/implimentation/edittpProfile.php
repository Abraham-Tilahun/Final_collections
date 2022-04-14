<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Register Traffic police</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
    <link rel="stylesheet" href="css/jquery-ui-datepicker.min.css">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/customone.css">
</head>
<body oncontextmenu="return rightClick(); return false;">
<?php
session_start();
if (empty($_SESSION["login_user"])) {
    header('location:tpindex.php');
}
//echo '<div>'.$_SESSION['login_user'].'</div>'
?>
<div class="row">
    <div class=" col-md-4 logo">
        <img src="image/logo.png" class="img-circle" alt="Logo">
    </div>
    <div class="col-md-6 navbar-text pull-right tagline">
        Hawassa City Traffic control and managment system
    </div>
</div>
<?php
require_once 'tpnavheader.php';
?>
<div id="wrapper">
    <!-- Sidebar -->
    <?php
    require_once 'tpsidebar.php';
    ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class=" col-md-12">
                    <form role="form" method="post" enctype="multipart/form-data" id="upTp">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <nav class="navbar navbar-default"
                                     style="margin-top: -15px;margin-right: -15px;margin-left: -15px;">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <a class="navbar-brand" href="javascript:void(0);"><i class="fa fa-home"
                                                                                                  style="color: Black"></i>
                                                Edit Employee Information</a>
                                        </div><!-- /.navbar-collapse -->
                                    </div><!-- /.container-fluid -->
                                </nav>
                                <!--Edit Employee Record-->
                                <div class="row">
                                    <?php
                                    $id = $_GET['id'];
                                    require_once 'include/db.php';
                                    $sqlEdit = "SELECT * FROM traffic_police WHERE tp_id='$id';";
                                    $result = mysqli_query($db, $sqlEdit);
                                    $count = mysqli_num_rows($result);
                                    $edRow = mysqli_fetch_array($result); ?>
                                    <div class="form-group col-md-4">
                                        <label for="traffic_id" class="control-label  hidden-xs">Traffic Police ID<i
                                                class="required-field">*</i></label>
                                        <input type="text" class="form-control emp_id" id="traffic_id" name="traffic_id"
                                               value="<?php echo $edRow['tp_id']; ?>" readonly
                                               autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="rank" class="control-label hidden-xs">Rank</label>
                                        <select name="rank" id="rank" class="form-control">
                                            <option value="Constable"<?php  if($edRow['rank']=="Constable") echo "selected";?>>Constable</option>
                                            <option value="Assistant sergeant" <?php  if($edRow['rank']=="Assistant sergeant") echo "selected";?>>Assistant sergeant</option>
                                            <option value="Deputy Sergent" <?php  if($edRow['rank']=="Deputy Sergent") echo "selected";?>>Deputy Sergent</option>
                                            <option value="Sergeant" <?php  if($edRow['rank']=="Sergeant") echo "selected";?>>Sergeant</option>
                                            <option value="Chief Sergeant" <?php  if($edRow['rank']=="Chief Sergeant") echo "selected";?>>Chief Sergeant</option>
                                            <option value="Assistant Inspector" <?php  if($edRow['rank']=="Assistant Inspector") echo "selected";?>>Assistant Inspector</option>
                                            <option value="Deputy Inspector" <?php  if($edRow['rank']=="Deputy Inspector") echo "selected";?>>Deputy Inspector</option>
                                            <option value="Inspector" <?php  if($edRow['rank']=="Inspector") echo "selected";?>>Inspector</option>
                                            <option value="Chief Inspector" <?php  if($edRow['rank']=="Chief Inspector") echo "selected";?>>Chief Inspector</option>
                                            <option value="Deputy Commander" <?php  if($edRow['rank']=="Deputy Commander") echo "selected";?>>Deputy Commander</option>
                                            <option value="Commander" <?php  if($edRow['rank']=="Commander") echo "selected";?>>Commander</option>
                                            <option value="Assistant Commissioner" <?php  if($edRow['rank']=="Assistant Commissioner") echo "selected";?>>Assistant Commissioner</option>
                                            <option value="Deputy Commissioner" <?php  if($edRow['rank']=="Deputy Commissioner") echo "selected";?>>Deputy Commissioner</option>
                                            <option value="Commissioner" <?php  if($edRow['rank']=="Commissioner") echo "selected";?>>Commissioner</option>
                                            <option value="Deputy commissioner General" <?php  if($edRow['rank']=="Deputy commissioner General") echo "selected";?>>Deputy commissioner
                                                General
                                            </option>
                                            <option value="Commissioner General" <?php  if($edRow['rank']=="Commissioner General") echo "selected";?>> Commissioner General</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="first_name" class="control-label  hidden-xs">First Name
                                            <i class="required-field">*</i></label>
                                        <input type="text" class="form-control first_name" id="first_name" name="fname"
                                               value="<?php echo $edRow['fname']; ?>" required
                                               autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="middle_name" class="control-label hidden-xs">Middle Name <i
                                                class="optional-field">*</i></label>
                                        <input type="text" class="form-control last_name" id="middle_name" name="mname"
                                               value="<?php echo $edRow['mname']; ?>"
                                               autocomplete="off">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_name" class="control-label hidden-xs">Last Name <i
                                                class="required-field">*</i></label>
                                        <input type="text" class="form-control last_name" id="last_name" name="lname"
                                               value="<?php echo $edRow['lname']; ?>" required
                                               autocomplete="off">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="sex" class="control-label hidden-xs">Sex <i
                                                class="required-field">*</i></label>
                                        <select name="sex" id="sex" class="form-control sex">
                                            <option
                                                value="female"<?php if ($edRow['sex'] == "female") echo "selected"; ?>>
                                                Female
                                            </option>
                                            <option
                                                value="male"<?php if ($edRow['sex'] == "male") echo "selected"; ?>>
                                                Male
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="role" class="control-label hidden-xs">Role <i
                                                class="required-field">*</i></label>
                                        <select name="role" id="role" class="form-control role">
                                            <option
                                                value="Traffic police Administrator"<?php if ($edRow['role'] == "Traffic police Administrator") echo "selected"; ?>>
                                                Traffic police Administrator
                                            </option>
                                            <option
                                                value="Field Traffic Police"<?php if ($edRow['role'] == "Field Traffic Police") echo "selected"; ?>>
                                                Field Traffic Police
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="birth_date" class="control-label hidden-xs">Birthday <i
                                                class="required-field">*</i></label>
                                        <input type="text" class="form-control birth_date" id="birth_date" name="bday"
                                               value="<?php echo $edRow['bday']; ?>" readonly>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="woreda" class="control-label hidden-xs">Woreda <i
                                                class="optional-field">*</i></label>
                                        <input type="text" class="form-control woreda" id="woreda" name="woreda"
                                               value="<?php echo $edRow['woreda']; ?>"
                                               autocomplete="off">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="kebele" class="control-label hidden-xs">Kebele <i
                                                class="optional-field">*</i></label>
                                        <input type="text" class="form-control kebele" id="kebele" name="kebele"
                                               value="<?php echo $edRow['kebele']; ?>" autocomplete="off">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="house_num" class="control-label hidden-xs">House Number
                                            <i
                                                class="optional-field">*</i></label>

                                        <input type="text" class="form-control house_num" id="house_num" name="hnum"
                                               value="<?php echo $edRow['hno']; ?>" autocomplete="off">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="phone_num" class="control-label hidden-xs">Phone Number
                                            <i class="required-field">*</i></label>
                                        <?php $pnum = $edRow['phone']; ?>
                                        <input type="text" class="form-control phone_num" id="phone_num" name="pnum"
                                               value="<?php echo $pnum; ?>" autocomplete="off">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="profile" class="control-label hidden-xs">Phone Number
                                            <i class="required-field">*</i></label>
                                        <input type="file" class="form-control" id="profile" name="profile" />

                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="tpa.php" class="btn btn-default" id="me"><i class=" fa fa-step-backward"></i>Home
                                </a>
                                <button type="submit" class="btn btn-primary pull-right" id="updatetp"> <i class="fa fa-save"></i>
                                    Save Changes
                                </button>
                            </div>
                        </div><!-- /.modal-content -->

                    </form>
                </div>
            </div>

            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->

        <script src="js/jQuery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/sidebar_menu.js"></script>
        <script src="js/jquery-ui-datapicker.min.js"></script>
        <script src="js/ajaxregtp.js"></script>
        <script src="js/changePassword.js"></script>
</body>
</html>