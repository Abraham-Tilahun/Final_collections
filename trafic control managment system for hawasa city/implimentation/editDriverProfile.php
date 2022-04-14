<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Edit Vehicle Record</title>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/jquery-ui-datepicker.min.css">
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
                <form role="form" method="post" enctype="multipart/form-data" id="upDriver">
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
                                $sqlEdit = "SELECT * FROM driver WHERE lnumber='$id';";
                                $result = mysqli_query($db, $sqlEdit);
                                $count = mysqli_num_rows($result);
                                $edRow = mysqli_fetch_array($result); ?>
                                <div class="form-group col-md-4">
                                    <label for="first_name" class="control-label  hidden-xs">First Name
                                        <i
                                            class="required-field">*</i></label>
                                    <input type="text" class="form-control first_name" id="first_name" name="fname"
                                           value="<?php echo $edRow['fname']; ?>" required
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
                                    <label for="region" class="control-label">Region</label>
                                    <select name="region" id="region" class="form-control">
                                        <option value="AA"<?php if($edRow['region']=="AA") echo "selected";?>>Addis Ababa</option>
                                        <option value="Afar" <?php if($edRow['region']=="Afar") echo "selected";?>>Afar Region</option>
                                        <option value="Amhara" <?php if($edRow['region']=="Amhara") echo "selected";?>>Amhara Region</option>
                                        <option value="Benishangul-Gumuz" <?php if($edRow['region']=="Benishangul-Gumuz") echo "selected";?>>Benishangul-Gumuz Region</option>
                                        <option value="Diredawa" <?php if($edRow['region']=="Diredawa") echo "selected";?>>Dire Dawa</option>
                                        <option value="Harari" <?php if($edRow['region']=="Harari") echo "selected";?>>Harari Region</option>
                                        <option value="oromiya" <?php if($edRow['region']=="oromiya") echo "selected";?>>Oromiya Region</option>
                                        <option value="Somali" <?php if($edRow['region']=="Somali") echo "selected";?>>Somali Region</option>
                                        <option value="SSNP" <?php if($edRow['region']=="SSNP") echo "selected";?>>Southern Nations, Nationalities, and
                                            Peoples Region
                                        </option>
                                        <option value="Tigray" <?php if($edRow['region']=="Tigray") echo "selected";?>>Tigray Region</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="birth_date" class="control-label hidden-xs">Birthday <i
                                            class="required-field">*</i></label>
                                    <input type="text" class="form-control birth_date" id="birth_date" name="bday"
                                           value="<?php echo $edRow['bday']; ?>" readonly>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="license_number" class="control-label hidden-xs">License Number <i
                                            class="required-field">*</i></label>
                                    <input type="text" class="form-control birth_date" id="license_number" name="lnumber"
                                           value="<?php echo $edRow['lnumber']; ?>" readonly>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="level" class="control-label hidden-xs">Level <i
                                            class="required-field">*</i></label>
                                    <input type="text" class="form-control birth_date" id="level" name="level"
                                           value="<?php echo $edRow['level']; ?>">

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
                                    <label for="place" class="control-label hidden-xs">Registration Place
                                        <i class="required-field">*</i></label>
                                    <input type="text" class="form-control phone_num" id="place" name="place"
                                           value="<?php echo $edRow['place']; ?>" autocomplete="off">

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="photo" class="control-label hidden-xs">Profile Picture
                                        <i class="required-field">*</i></label>
                                    <input type="file" class="form-control" accept="image/*" id="photo" name="profile"/>

                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a href="adminhome.php" class="btn btn-default">Back
                            </a>
                            <button type="submit" class="btn btn-primary saveChagess pull-right" id="saveChagess">
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
    <script src="js/jquery-ui-datapicker.min.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/changePassword.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/ajaxregDriv.js"></script>
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