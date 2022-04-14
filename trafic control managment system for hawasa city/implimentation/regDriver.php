<!DOCTYPE html>
<html lang="en">
<head oncontextmenu="return false;">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1,name=" viewport
    ">
    <title>Register Driver</title>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery-ui-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/customone.css">
</head>
<body oncontextmenu="return false;">
<?php
session_start();
//if an authorizd user try to pass without authentication the session handles it from accessing this page
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
        <form action="#" class="form-horizontal" method="post" enctype="multipart/form-data" id="regDriver">
            <div class="panel panel-default custom" style="margin-left: 30px; margin-right: 30px !important;">
                <div class="panel-body">
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-10">
                        <fieldset>
                            <legend style="text-align: center">Driver License Registration </legend>
                            <div class="form-group">
                                <label for="first_name" class="control-label col-xs-4 hidden-xs">Name<i
                                        class="required-field">*</i></label>

                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="first_name" name="fname"
                                           placeholder="first name" required>
                                </div>

                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="last_name" name="lname"
                                           placeholder="last name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sex" class="control-label col-xs-4 hidden-xs">Sex <i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <select name="sex" id="sex" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="region" class="control-label col-xs-4">Region</label>

                                <div class="col-xs-8">
                                    <select name="region" id="region" class="form-control">
                                        <option value="AA">Addis Ababa</option>
                                        <option value="Afar">Afar Region</option>
                                        <option value="Amhara">Amhara Region</option>
                                        <option value="Benishangul-Gumuz">Benishangul-Gumuz Region</option>
                                        <option value="Diredawa">Dire Dawa</option>
                                        <option value="Harari">Harari Region</option>
                                        <option value="oromiya">Oromiya Region</option>
                                        <option value="Somali">Somali Region</option>
                                        <option value="SSNP" selected>Southern Nations, Nationalities, and Peoples
                                            Region
                                        </option>
                                        <option value="Tigray">Tigray Region</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="birth_date" class="control-label col-xs-4 hidden-xs">Birthday <i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="birth_date" required="required"
                                           name="bday"
                                           placeholder="Clicke Here"
                                           readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="license_number" class="control-label col-xs-4 hidden-xs">Driver License
                                    Number
                                    <i class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="license_number" required="required"
                                           name="lnumber"
                                           placeholder="Driver License number">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="level" class="control-label col-xs-4 hidden-xs">
                                    Level<i class="required-field">*</i>
                                </label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="level" id="level" placeholder="Level"
                                           required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="woreda" class="control-label col-xs-4 hidden-xs">Address <i
                                        class="optional-field">*</i></label>

                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="woreda" id="woreda"
                                           placeholder="woreda">
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="kebele" id="kebele"
                                           placeholder="kebele">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="house_num" class="control-label col-xs-4 hidden-xs">House Number <i
                                        class="optional-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="house_num" name="hnum"
                                           placeholder="house number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone_num" class="control-label col-xs-4 hidden-xs">Phone Number <i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="phone_num" name="pnum"
                                           value="09">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="place" class="control-label col-xs-4 hidden-xs">የተሰጠበት ቦታ <i
                                        class="required-field">*</i></label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" id="place" name="place"
                                           placeholder="የተሰጠበት ቦታ" value="Hawassa">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="profile" class="control-label col-xs-4 hidden-xs">Profile Picture <i
                                        class="required-field">*</i></label>

                                <div class="col-xs-8">
                                    <input type="file" class="form-control" accept="image/*" id="profile"
                                           name="profile"/>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-offset-5">
                            <button type="submit" id="registerDriver" class="btn btn-primary col-xs-3">Register

                            </button>
                            <button id="canceltDriver" type="reset"
                                    class="btn btn-success col-xs-offset-1 col-xs-3">
                                Cancel
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdownhover.min.js"></script>
    <script src="js/jquery-ui-datapicker.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/ajaxregDriv.js"></script>
    <script src="js/changePassword.js"></script>
    <script src="js/forgotPassword.js"></script>
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