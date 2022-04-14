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
} elseif ((strtolower($_SESSION["role"]) == strtolower("Administrator"))) {
    header('location:adminhome.php');
}
?>
<div class="col-md-offset-1 col-md-10">
    <?php
    require_once 'empnavheader.php';
    ?>
    <div id="main-content" class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">Driver Punishment Fee Form</h4>
                </div>
                <form class="form-horizontal" method="post" role="form" id="payment">
                    <div class="panel-body">
                        <?php
                        $sqlPunishmnetFee = "SELECT License_NO FROM punishment WHERE paymentStatus='not payed';";
                        $resultPhnihsmentFee = mysqli_query($db, $sqlPunishmnetFee);
                        if (!$resultPhnihsmentFee) {
                            die("something Wrong !");
                        }
                        /*$count=mysqli_num_rows($resultPhnihsmentFee);
                        if($count <0){
                            die("No Punished Driver Is Found");
                        }*/ ?>
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="form-group">
                                    <label for="licenseNumber" class="col-md-4 control-label">License Number</label>
                                    <div class="col-md-8">
                                        <select name="LicenseNumber" id="licenseNumber" class="form-control">
                                            <option value="-1">Select Driver License Number</option>
                                            <?php
                                            while ($rowPunishmnet = mysqli_fetch_array($resultPhnihsmentFee, MYSQL_BOTH)) {
                                                ?>
                                                <option
                                                    value="<?= $rowPunishmnet['License_NO']; ?>"><?= $rowPunishmnet['License_NO']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="amount" class="col-md-4 control-label">Amount</label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="amount" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="receiptNumber" class="col-md-4 control-label">Receipt Number </label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="receiptNumber"
                                               placeholder="Enter Reciept Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer pull-right">
                        <button type="submit" class="btn btn-primary">
                            Apply
                        </button>
                    </div>
                </form><!-- /.end form -->
            </div>
        </div>
    </div>
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/sweetalert2.min.js"></script>
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
            $('#licenseNumber').change(function () {

                var licenseNumber = $('#licenseNumber').val();
                if (licenseNumber != "-1") {
                    var i=1;
                    var dataString = "licenseNumber=" + licenseNumber + "&type=" + "getAmount";
                    $.ajax({
                        type: 'post',
                        url: 'punishedAmount.php',
                        data: dataString,
                        cache: false,
                        success: function (data) {
                            $('#amount').val(data);
                        }
                    });
                }
            });
            $('#payment').on('submit', (function (e) {
                e.preventDefault();
                var licenseNumber = $('#licenseNumber').val();
                var receiptNumber = $('#receiptNumber').val().trim();
                var regReceipt = /^[a-zA-Z]+[0-9]+$/;
                if (receiptNumber.length == 0 || !(regReceipt.test(receiptNumber))) {
                    $('#receiptNumber').focus();
                    alert("Error in Reciept Number");
                    return false;
                }
                var dataString = "licenseNumber=" + licenseNumber + "&receiptNumber=" + receiptNumber + "&pay=pay";
                var x=1;
                $.ajax({
                    type: 'post',
                    url: "punishedAmount.php",
                    data: dataString,
                    cache: false,
                    success: function (data) {
                        alert(data);
                    }
                });
            }));
        });
    </script>
</body>
</html>