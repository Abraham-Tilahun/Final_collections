<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator/About us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link href="css/simple-sidebar.css" rel="stylesheet">
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
        <div class="row">
            <div class="col-md-offset-2  col-md-3">
                <div class="jumbotron">
                    <div class="thumbnail">
                        <img src="images/btz.JPG" alt="Betzazu Alemu" class="img-circle">
                        <div class="caption">
                            <h3>Betzazu Alemu</h3>
                            <p></p>
                            <p>
                                <button type="button" class="btn btn-info">Read more</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <div class="thumbnail">
                        <img src="images/gech.JPG" alt="Getabalew Amtate" class="img-circle">
                        <div class="caption">
                            <h3>Getabalew Amtate</h3>
                            <p></p>
                            <p><button type="button" class="btn btn-info">Reade more</button></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="jumbotron">
                    <div class="thumbnail">
                        <img src="images/joni.JPG" alt="Jhon Admsu" class="img-circle">
                        <div class="caption">
                            <h3>Admasu Wodaje</h3>
                            <p></p>
                            <p><button type="button" class="btn btn-info">Reade more</button></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>    <!-- /#wrapper -->
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebar_menu.js"></script>
    <script src="js/changePassword.js"></script>
    <script>
        function rightClick() {
            alert("right click is not allowed for security reason");
        }
        $(document).ready(function () {
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
        });
    </script>
</body>
</html>