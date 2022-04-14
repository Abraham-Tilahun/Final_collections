<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Employee Panel</title>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
    <link rel="stylesheet" href="css/customone.css">
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <link rel="stylesheet" href="css/zabuto_calendar.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <script src="js/Chart.min.js"></script>
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
    require_once 'empnavheader.php';
    ?>
    <div id="main-content" class="row">

       <div class="panel panel-default">
           <div class="panel-body">
              <div class="row">
                  <?php
                  include_once 'totalData.php';
                  ?>
              </div>
           </div>
       </div>
    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/zabuto_calendar.min.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/changePassword.js"></script>
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
            $('#my-calander').zabuto_calendar({
                today: true,
                cell_border: true,
                show_days: true,
                nav_icon: {
                    prev: '<i class="fa fa-chevron-circle-left"></i>',
                    next: '<i class="fa fa-chevron-circle-right"></i>'
                }
            });
        });
    </script>
</body>
</html>