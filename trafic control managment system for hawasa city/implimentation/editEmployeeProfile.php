<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator/Edit Employee Record</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui-datepicker.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/customone.css">
</head>
<body oncontextmenu="rightClick(); return false;">
<?php
session_start();
if (empty($_SESSION["login_user"])) {
    header('location:index.php');
} elseif ((strtolower($_SESSION["role"]) == strtolower("Employee"))) {
    header('location:emphome.php');
}
?>
<div class="row">
    <div class=" col-md-4 logo">
        <img src="image/logo.png" class="img-circle" alt="">
    </div>
    <div class="col-md-6 navbar-text pull-right tagline">
        Hawassa City Traffic control and managment system
    </div>
</div>
<!-- nav header-->
<?php
require_once 'navheader.php';
?>
<div id="wrapper">
    <!-- Sidebar -->
    <?php
    require_once('sidebar.php');
    ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="col-md-12">
                <form role="form" method="post" enctype="multipart/form-data" id="upEmp">
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
                                $sqlEdit = "SELECT * FROM employee WHERE emp_id='$id';";
                                $result = mysqli_query($db, $sqlEdit);
                                $count = mysqli_num_rows($result);
                                $edRow = mysqli_fetch_array($result); ?>
                                <div class="form-group col-md-4">
                                    <label for="emp_id" class="control-label  hidden-xs">Employee ID<i
                                            class="required-field">*</i></label>
                                    <input type="text" class="form-control emp_id" id="emp_id" name="emp_id"
                                           value="<?php echo $edRow['emp_id']; ?>" readonly
                                           autocomplete="off">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="first_name" class="control-label  hidden-xs">First Name
                                        <i
                                            class="required-field">*</i></label>
                                    <input type="text" class="form-control first_name" id="first_name"
                                           value="<?php echo $edRow['fname']; ?>" required name="fname"
                                           autocomplete="off">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="last_name" class="control-label hidden-xs">Last Name <i
                                            class="required-field">*</i></label>
                                    <input type="text" class="form-control last_name" id="last_name"
                                           value="<?php echo $edRow['lname']; ?>" required name="lname"
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
                                            value="Administrator"<?php if ($edRow['role'] == "Administrator") echo "selected"; ?>>
                                            Administrator
                                        </option>
                                        <option
                                            value="Employee"<?php if ($edRow['role'] == "Employee") echo "selected"; ?>>
                                            Employee
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
                                           value="<?php echo $edRow['hnum']; ?>" autocomplete="off">

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone_num" class="control-label hidden-xs">Phone Number
                                        <i class="required-field">*</i></label>
                                    <?php $pnum = $edRow['pnum']; ?>
                                    <input type="text" class="form-control phone_num" id="phone_num" name="pnum"
                                           value="<?php echo $pnum; ?>" autocomplete="off">

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="edu_status" class="control-label hidden-xs">Educational
                                        status <i class="required-field">*</i></label>
                                    <select id="edu_status" class="form-control edu_status" name="eduStatus">
                                        <option
                                            value="Diploma" <?php if ($edRow['edu_status'] == "Diploma") echo "selected"; ?>>
                                            Diploma
                                        </option>
                                        <option
                                            value="BSc" <?php if ($edRow['edu_status'] == "BSc") echo "selected"; ?>>
                                            BSc
                                        </option>
                                        <option
                                            value="BA" <?php if ($edRow['edu_status'] == "BA") echo "selected"; ?>>
                                            BA
                                        </option>
                                        <option
                                            value="MSc" <?php if ($edRow['edu_status'] == "MSc") echo "selected"; ?>>
                                            MSc
                                        </option>
                                        <option
                                            value="MA" <?php if ($edRow['edu_status'] == "MA") echo "selected"; ?>>
                                            MA
                                        </option>
                                        <option
                                            value="Phd" <?php if ($edRow['edu_status'] == "Phd") echo "selected"; ?>>
                                            Phd
                                        </option>
                                    </select>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="profile" class="control-label hidden-xs">Profile Picture</label>
                                    <input type="file" name="profile" class="form-control" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a href="adminhome.php" class="btn btn-default">Back
                            </a>
                            <button type="submit" class="btn btn-primary saveChages pull-right" id="saveChages">
                                Save changes
                            </button>
                        </div>
                    </div><!-- /.modal-content -->

                </form>
            </div>
        </div>
    </div>
</div>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-dropdownhover.min.js"></script>
<script src="js/sidebar_menu.js"></script>
<script src="js/jquery-ui-datapicker.min.js"></script>
<script src="js/ajaxregemp.js"></script>
<script src="js/sweetalert2.min.js"></script>
<script src="js/changePassword.js"></script>
<script>
    function rightClick() {
        alert("right click is not allowed for security reason");
    }
    $('#employeeProfile').click(function (e) {
        e.preventDefault();
        $('#page-content-wrapper').load("employeeProfile.php");
    });
    $('#vehicleProfile').click(function (e) {
        e.preventDefault();
        $('#page-content-wrapper').load("vehicleProfileAdmin.php");
    });
    $('#driverProfile').click(function (e) {
        e.preventDefault();
        $('#page-content-wrapper').load("driverProfileAdmin.php");
    });
    $('#forum').click(function () {
        $('#page-content-wrapper').load("tpforum.php");
    });
</script>
</body>
</html>