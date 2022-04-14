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
                <form action="#" class="form-horizontal animated show" id="RegTp" method="post" enctype="multipart/form-data">
                    <div class="panel panel-default" style="margin-left: 30px; margin-right: 30px !important;">
                        <div class="panel-body">
                            <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-10">
                                <fieldset>
                                    <legend>New Traffic police Registration</legend>
                                    <div class="form-group">
                                        <label for="traffic_id" class="control-label col-xs-4 hidden-xs">ID number <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="traffic_id" name="traffic_id"
                                                   placeholder="Identification number" required="required"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rank" class="control-label col-xs-4 hidden-xs">Rank <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <select name="rank" id="rank" class="form-control">
                                                <option value="Constable">Constable</option>
                                                <option value="Assistant sergeant">Assistant sergeant</option>
                                                <option value="Deputy Sergent">Deputy Sergent</option>
                                                <option value="Sergeant">Sergeant</option>
                                                <option value="Chief Sergeant">Chief Sergeant</option>
                                                <option value="Assistant Inspector">Assistant Inspector</option>
                                                <option value="Deputy Inspector">Deputy Inspector</option>
                                                <option value="Inspector">Inspector</option>
                                                <option value="Chief Inspector">Chief Inspector</option>
                                                <option value="Deputy Commander">Deputy Commander</option>
                                                <option value="Commander">Commander</option>
                                                <option value="Assistant Commissioner">Assistant Commissioner</option>
                                                <option value="Deputy Commissioner">Deputy Commissioner</option>
                                                <option value="Commissioner">Commissioner</option>
                                                <option value="Deputy commissioner General">Deputy commissioner
                                                    General
                                                </option>
                                                <option value="Commissioner General"> Commissioner General</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name" class="control-label col-xs-4 hidden-xs">First Name <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="first_name" name="fname"
                                                   placeholder="first name" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle_name" class="control-label col-xs-4 hidden-xs">Middle Name
                                            <i class="optional-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="middle_name" name="mname"
                                                   placeholder="middle name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name" class="control-label col-xs-4 hidden-xs">Last Name <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="last_name" name="lname"
                                                   placeholder="last name" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-4 hidden-xs">Sex <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <select name="sex" id="sex" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="birth_date" class="control-label col-xs-4 hidden-xs">Birthday <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="date" class="form-control" id="birth_date" name="bday"
                                                   placeholder="mm/dd/yyy" required="required" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="control-label col-xs-4 hidden-xs">Role <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <select name="role" id="role" class="form-control">
                                                <option value="Traffic police Administrator">Traffic police
                                                    Administrator
                                                </option>
                                                <option value="Field Traffic Police" selected="selected">Field Traffic
                                                    Police
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="woreda" class="control-label col-xs-4 hidden-xs">woreda <i
                                                class="optional-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="woreda" placeholder="woreda" name="woreda">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kebele" class="control-label col-xs-4 hidden-xs">Kebele <i
                                                class="optional-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="kebele" placeholder="kebele" name="kebele" />
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
                                                   placeholder="phone number" required="required" value="09"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="profile" class="control-label col-md-4 hidden-xs">Profile picture
                                        <i class="optional-field">*</i></label>
                                        <div class="col-md-8">
                                            <input type="file" class="form-control" name="profile" id="profile" accept="image/*">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-xs-offset-5">
                                    <button type="submit" id="registertpolice"  class="btn btn-primary col-xs-3">Register

                                    </button>
                                    <button id="canceltpolice" type="reset"
                                            class="btn btn-warning col-xs-offset-1 col-xs-3">
                                        Cancel
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
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