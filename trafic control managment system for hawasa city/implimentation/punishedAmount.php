<?php
require_once 'include/db.php';
if (isset($_POST["type"])) {
    $licenseNumber = $_POST['licenseNumber'];
    $sqlGetAmount = "SELECT Amount FROM punishment;";
    $resultAmount = mysqli_query($db, $sqlGetAmount);
    if (!$resultAmount) {
        die("Something Wrong" . mysqli_error($db));
    }
    $rowAmount = mysqli_fetch_array($resultAmount, MYSQLI_BOTH);
    echo $rowAmount['Amount'];
}
if (isset($_POST["pay"])) {
    $licenseNumber = $_POST['licenseNumber'];
    $receiptNumber = $_POST['receiptNumber'];
    $sqlPayment = "UPDATE punishment SET  Receipt_NO='$receiptNumber',paymentStatus='payed'
                     WHERE License_NO='$licenseNumber' AND paymentStatus='not payed' ;";
    $resPayment = mysqli_query($db, $sqlPayment);
    if (!$resPayment) {
        die("Error: gech" . mysqli_error($db) . $receiptNumber);
    }
    echo "yes";
}
?>