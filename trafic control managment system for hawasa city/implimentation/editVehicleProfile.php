<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Edit Vehicle Record</title>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/customone.css">

</head>
<body oncontextmenu=" return false">
<?php
session_start();
if (empty($_SESSION["login_user"])) {
    header('location:index.php');
}
elseif((strtolower($_SESSION["role"])==strtolower("Administrator"))){
    header('location:adminhome.php');
}
?>
<div class="col-md-offset-1 col-md-10">
    <?php
    include_once 'empnavheader.php';
    ?>
    <div id="main-content" class="row">

        <div class="panel panel-default">
            <div class="panel-body">
                <form role="form" class="form-horizontal" method="post" id="upVehicle">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <nav class="navbar navbar-default"
                                 style="margin-top: -15px;margin-right: -15px;margin-left: -15px;">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <a class="navbar-brand" href="javascript:void(0);"><i class="fa fa-home"
                                                                                              style="color: Black"></i>
                                            Edit Vehicle Information</a>
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>
                            <!--Edit Employee Record-->
                            <div class="row">
                                <?php
                                $id = $_GET['id'];
                                $sqlEdit = "SELECT * FROM vehicle WHERE plateNumber='$id';";
                                $result = mysqli_query($db, $sqlEdit);
                                $count = mysqli_num_rows($result);
                                $edRow = mysqli_fetch_array($result); ?>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend>Owner Description</legend>
                                        <div class="form-group">
                                            <label for="oname" class="control-label col-xs-4">Name</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" id="oname" name="ownerName"
                                                       value="<?php echo $edRow['oname'];?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="sex" class="control-label col-xs-4 hidden-xs">Sex <i
                                                    class="required-field">*</i></label>
                                            <div class="col-xs-8">
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
                                        </div>
                                        <div class="form-group">
                                            <label for="region" class="control-label col-xs-4">Region</label>
                                            <div class="col-xs-8">
                                                <select name="region" id="region" class="form-control">
                                                    <option value="aa"<?php if($edRow['region']=="aa") echo "selected";?>>Addis Ababa</option>
                                                    <option value="afar" <?php if($edRow['region']=="afar") echo "selected";?>>Afar Region</option>
                                                    <option value="amhara" <?php if($edRow['region']=="amhara") echo "selected";?>>Amhara Region</option>
                                                    <option value="bgr" <?php if($edRow['region']=="bgr") echo "selected";?>>Benishangul-Gumuz Region</option>
                                                    <option value="diredawa" <?php if($edRow['region']=="diredawa") echo "selected";?>>Dire Dawa</option>
                                                    <option value="harari" <?php if($edRow['region']=="harari") echo "selected";?>>Harari Region</option>
                                                    <option value="oro" <?php if($edRow['region']=="oro") echo "selected";?>>Oromiya Region</option>
                                                    <option value="somali" <?php if($edRow['region']=="somali") echo "selected";?>>Somali Region</option>
                                                    <option value="ssnp" <?php if($edRow['region']=="ssnp") echo "selected";?>>Southern Nations, Nationalities, and
                                                        Peoples Region
                                                    </option>
                                                    <option value="tigray" <?php if($edRow['region']=="tigray") echo "selected";?>>Tigray Region</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="town" class="control-label col-xs-4">Town</label>

                                            <div class="col-xs-8">
                                                <input type="text" name="town" class="form-control" id="town" value="<?php echo $edRow['town'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="woreda" class="control-label col-xs-4 hidden-xs">Woreda</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" name="woreda" id="woreda" value="<?php echo $edRow['woreda'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phon_num" class="control-label col-xs-4">phone Number</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" name="phoneNumber" id="phon_num" value="<?php echo $edRow['phone'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="plate_number" class="control-label col-xs-4">Plate Number</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" id="plate_number" name="plateNumber"
                                                       value="<?php echo $edRow['plateNumber'];?>" readonly>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend>Vehicle Description</legend>
                                        <div class="form-group">
                                            <label for="vehicle_type" class="control-label col-xs-4">Vehicle Type</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" id="vehicle_type" name="vehicleType"
                                                       value="<?php echo $edRow['vehicleType'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="madein" class="control-label col-xs-4">Made-In</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" name="madeIn" id="madein" value="<?php echo $edRow['madeIn'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="chassis_number" class="control-label col-xs-4">Chassis Number</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" id="chassis_number" name="chassisNumber"
                                                       value="<?php echo $edRow['chassisNumber'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="motor_number" class="control-label col-xs-4">Motor Number</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" id="motor_number" name="motorNumber"
                                                       value="<?php echo $edRow['motorNumber'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="color" class="control-label col-xs-4 hidden-xs">Vehicle Color</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" name="color" id="color" value="<?php echo $edRow['color'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fuel_type" class="control-label col-xs-4">Fuel Type</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" id="fuel_type" name="fuelType"
                                                       value="<?php echo $edRow['fuelType'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cylinder_number" class="control-label col-xs-4">Number Of Cylinder</label>

                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" id="cylinder_number" name="cylinderNumber"
                                                       value="<?php echo $edRow['cylinderNumber'];?>">
                                            </div>
                                        </div>

                                    </fieldset>
                                </div>


                            </div>
                        </div>
                        <div class="panel-footer">
                            <a href="adminhome.php" class="btn btn-default">Back
                            </a>
                            <button type="button" class="btn btn-primary saveChages pull-right" id="saveChages">
                                Save changes
                            </button>
                        </div>
                    </div><!-- /.modal-content -->

                </form>
            </div>
        </div>

    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/changePassword.js"></script>
    <script src="js/ajaxregVeh.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/forgotPassword.js"></script>
    <script type="application/javascript">
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