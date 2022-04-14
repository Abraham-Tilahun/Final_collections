<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Employee Panel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui-datepicker.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/customone.css">
</head>
<body oncontextmenu="return false">
<?php
ini_set('session.cookie_httponly', true);
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
<?php
require_once 'navheader.php';
?>
<div id="wrapper">
    <!-- Sidebar -->
    <?php
    require_once 'sidebar.php';
    ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <form action="#" role="form"  method="post" id="regEmp" class="form-horizontal" enctype="multipart/form-data">
                <div class="panel panel-default" style="margin-left: 30px; margin-right: 30px !important;">
                    <div class="panel-body">
                        <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-10">
                            <fieldset>
                                <legend>New Employee Registration</legend>
                                <div class="form-group">
                                    <label for="emp_id" class="control-label col-xs-4 hidden-xs">Employee ID<i
                                            class="required-field">*</i></label>

                                    <div class="col-xs-8">
                                        <input type="text" class="form-control emp_id" name="emp_id"
                                               placeholder="Employee Identification" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_name" class="control-label col-xs-4 hidden-xs">Full Name <i
                                            class="required-field">*</i></label>

                                    <div class="col-xs-4">
                                        <input type="text" class="form-control first_name" name="fname"
                                               placeholder="first name" required autocomplete="off">
                                    </div>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control last_name" name="lname"
                                               placeholder="last name" required autocomplete="off">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                     <label class="control-label col-xs-4 hidden-xs">Sex <i
                                             class="required-field">*</i></label>

                                     <div class="col-xs-8">
                                         <label class="radio-inline"><input id="male" type="radio" name="optradio"
                                                                            value="male">Male</label>
                                         <label class="radio-inline"><input id="female" type="radio"
                                                                            name="optradio"
                                                                            value="female">Female</label>
                                     </div>
                                 </div>-->
                                <div class="form-group">
                                    <label for="sex" class="control-label col-xs-4 hidden-xs">Sex <i
                                            class="required-field">*</i></label>

                                    <div class="col-xs-8">
                                        <select name="sex" id="sex" class="form-control sex">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="role" class="control-label col-xs-4 hidden-xs">Role <i
                                            class="required-field">*</i></label>

                                    <div class="col-xs-8">
                                        <select name="role" id="role" class="form-control role">
                                            <option value="Employee">Employee</option>
                                            <option value="Administrator">Administrator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="birth_date" class="control-label col-xs-4 hidden-xs">Birthday <i
                                            class="required-field">*</i></label>

                                    <div class="col-xs-8" style="font-weight: bold">
                                        <input type="text" name="bday" class="form-control birth_date" id="birth_date"
                                               placeholder="Picke A Date of Birth From Here"
                                               readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="woreda" class="control-label col-xs-4 hidden-xs">Woreda <i
                                            class="optional-field">*</i></label>

                                    <div class="col-xs-8">
                                        <input type="text" name="woreda" class="form-control woreda" id="woreda"
                                               placeholder="woreda"
                                               autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kebele" class="control-label col-xs-4 hidden-xs">Kebele <i
                                            class="optional-field">*</i></label>

                                    <div class="col-xs-8">
                                        <input type="text" name="kebele" class="form-control kebele" id="kebele"
                                               placeholder="kebele"
                                               autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="house_num" class="control-label col-xs-4 hidden-xs">House Number <i
                                            class="optional-field">*</i></label>

                                    <div class="col-xs-8">
                                        <input type="text" name="hnum" class="form-control house_num" id="house_num"
                                               placeholder="house number" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone_num" class="control-label col-xs-4 hidden-xs">Phone Number <i
                                            class="required-field">*</i></label>

                                    <div class="col-xs-8">
                                        <input type="text" name="pnum" class="form-control phone_num" id="phone_num"
                                               value="09" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="edu_status" class="control-label col-xs-4 hidden-xs">Educational
                                        status <i class="required-field">*</i></label>

                                    <div class="col-xs-8">
                                        <select id="edu_status" name="eduStatus" class="form-control edu_status">
                                            <option value="Diploma">Diploma</option>
                                            <option value="BSc">BSc</option>
                                            <option value="BA" selected="selected">BA</option>
                                            <option value="MSc">MSc</option>
                                            <option value="MA">MA</option>
                                            <option value="Phd">Phd</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="profilePic" class="control-label col-xs-4 hidden-xs">Profile
                                        Picture <i class="optional-field">*</i></label>

                                    <div class="col-xs-8">
                                        <input type="file" accept="image/*" class="form-control" id="profilePic" name="profile">
                                    </div>
                                </div>
                            </fieldset>
                        </div>


                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-offset-5">
                                <button type="submit" id="registerEmployee" class="btn btn-primary col-xs-3">Register

                                </button>
                                <button id="canceltpolice" type="reset"
                                        class="btn btn-success col-xs-offset-1 col-xs-3">
                                    Cancel
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="js/jQuery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui-datapicker.min.js"></script>
        <script src="js/sidebar_menu.js"></script>
        <script src="js/sweetalert2.min.js"></script>
        <script src="js/ajaxregemp.js"></script>
        <script src="js/changePassword.js"></script>
        <script>
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