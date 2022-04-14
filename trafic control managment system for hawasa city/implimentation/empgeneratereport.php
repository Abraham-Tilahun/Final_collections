<?php
require_once 'include/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Employee Panel</title>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/customone.css">
    <link rel="stylesheet" href="css/jquery-ui-datepicker.min.css">
</head>
<body oncontextmenu=" return false">
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
    require_once 'empnavheader.php';
    ?>
    <div id="main-content" class="row">
        <?php
        require_once 'generatReport.php';
        ?>
    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui-datapicker.min.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/changePassword.js"></script>
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
            $('#from-date').datepicker({
                dateFormat: "yy-mm-dd",                 // since you have defined a mask
                maxDate: "0d",
                showAnim: 'show',
                showOtherMonths: true
            });
        });
    </script>
</body>
</html>