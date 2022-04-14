<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/zabuto_calendar.min.css">
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
        Hawassa City Road Transport managment system
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Dashbord<small>/Control panel</small></h3>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Welcome to the Administrator dashboard!
                    </div>
                </div>
                <div class="row"><!--Graphical Desciption and Calander-->
                    <?php
                    include_once 'totalData.php';
                    ?>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
    </div>    <!-- /#wrapper -->

    <!-- Java script files-->
    <script src="js/jQuery.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/zabuto_calendar.min.js"></script>
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

            $('#my-calander').zabuto_calendar({
                today: true,
                cell_border: true,
                show_days: true,
                nav_icon: {
                    prev: '<i class="fa fa-chevron-circle-left"></i>',
                    next: '<i class="fa fa-chevron-circle-right"></i>'
                }
            });
            $.ajax({
                type: "POST",
                url: "count.php",
                data: {},
                cache: false,
                success: function (data) {
                    var JsonResult = JSON.parse(data);
                    var employee = parseInt(JsonResult.emp);
                    var driver = parseInt(JsonResult.driv);
                    var vehicle = parseInt(JsonResult.veh);
                    var tpolice = parseInt(JsonResult.tp);
                    var BarChart = {
                        labels: ["Employee", "Drivers", "Vehicles", "Traffic police"],
                        datasets: [
                            {
                                fillColor: "rgba(252,147,65,0.5)",
                                strokeColor: "rgba(255,255,255,1)",
                                data: [employee, driver, vehicle, tpolice]
                            }
                        ]

                    };

                    var myBarChart = new Chart(document.getElementById("canvas").getContext("2d")).Bar(BarChart, {
                        scaleFontSize: 13,
                        scaleFontColor: "#ffa45e"
                    });
                }
            });

        });
    </script>
</body>
</html>