<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Register Vehicle</title>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css"/>
    <link rel="stylesheet" href="css/customone.css">
</head>
<body oncontextmenu="return false;">
<?php
session_start();
if (empty($_SESSION["login_user"])) {
    header('location:index.php');
} elseif ((strtolower($_SESSION["role"]) == strtolower("Administrator"))) {
    header('location:adminhome.php');
}
?>
<div class="col-md-offset-1 col-md-10">
    <?php
    include_once 'empnavheader.php';
    ?>
    <div id="main-content" class="row">
        <form action="#" class="form-horizontal animated zoomInDown" id="regVehicle" method="post">
            <div class="panel panel-default custom" style="margin-left: 30px; margin-right: 30px !important;">
                <div class="panel-body">
                    <div class="col-md-6 col-sm-12">
                        <fieldset>
                            <legend>Owner Discription</legend>
                            <div class="form-group">
                                <label for="oname" class="control-label col-xs-4">Name <i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="oname" name="ownerName"
                                           placeholder="Vehicle owner name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4">Sex <i class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <select name="sex" id="sex" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="region" class="control-label col-xs-4">Region <i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <select name="region" id="region" class="form-control">
                                        <option value="aa">Addis Ababa</option>
                                        <option value="afar">Afar Region</option>
                                        <option value="amhara">Amhara Region</option>
                                        <option value="bgr">Benishangul-Gumuz Region</option>
                                        <option value="diredawa">Dire Dawa</option>
                                        <option value="harari">Harari Region</option>
                                        <option value="oro">Oromiya Region</option>
                                        <option value="somali">Somali Region</option>
                                        <option value="ssnp" selected="selected">Southern Nations, Nationalities, and
                                            Peoples Region
                                        </option>
                                        <option value="tigray">Tigray Region</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="town" class="control-label col-xs-4">Town <i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="town" id="town" placeholder="Towm">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="woreda" class="control-label col-xs-4 hidden-xs">Woreda <i
                                        class="optional-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="woreda" id="woreda"
                                           placeholder="Woreda">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phon_num" class="control-label col-xs-4">phone Number <i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="phoneNumber" id="phon_num" value="09">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="plate_number" class="control-label col-xs-4">Plate Number <i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="plate_number" name="plateNumber"
                                           placeholder="Vehicle Plate number">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6 col-sm-12" style="border-left: thin solid #e1e1e1">
                        <fieldset>
                            <legend>Vehicle Description</legend>
                            <div class="form-group">
                                <label for="vehicle_type" class="control-label col-xs-4">Vehicle Type<i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="vehicle_type" name="vehicleType"
                                           placeholder="Vehicle type">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="madein" class="control-label col-xs-4">Made-In<i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="madeIn" id="madein"
                                           placeholder="Made in">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="chassis_number" class="control-label col-xs-4">Chassis Number<i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="chassis_number" name="chassisNumber"
                                           placeholder="chassis number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="motor_number" class="control-label col-xs-4">Motor Number<i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="motor_number" name="motorNumber"
                                           placeholder="Vehicle motor number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="color" class="control-label col-xs-4 hidden-xs">Vehicle Color<i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="color" id="color"
                                           placeholder="Vehicle color">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fuel_type" class="control-label col-xs-4">Fuel Type<i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="fuel_type" name="fuelType"
                                           placeholder="Vehicle fuel type">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cylinder_number" class="control-label col-xs-4">Number Of Cylinder<i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="cylinder_number" name="cylinderNumber"
                                           placeholder="Number of cylinder">
                                </div>
                            </div>
                        </fieldset>
                    </div>

                </div>
                <div class="panel-footer">
                    <div class="col-md-offset-5 col-xs-offset-5">
                        <button id="registerVehicle" type="submit" class="btn btn-primary">Register</button>
                        <button type="reset" class="btn btn-warning col-md-offset-1 col-xs-offset-1">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdownhover.min.js"></script>
    <script src="js/ajaxregVeh.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/changePassword.js"></script>
    <script src="js/forgotPassword.js"></script>
    <script src="js/npm.js"></script>
    <script>
        $(document).ready(function () {
            $('#vehicleProfile').click(function (e) {
                e.preventDefault();
                $('#main-content').load("vehicleProfile.php");
            });
            $('#driverProfile').click(function (e) {
                e.preventDefault();
                $('#main-content').load("driverProfile.php");
            });
            $('#forum').click(function (e) {
                e.preventDefault();
                $('#main-content').load('tpforum.php');
            });
        });
    </script>
</body>
</html>