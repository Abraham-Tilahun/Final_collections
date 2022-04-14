<?php
include('dbconnect.php');
$txtitemcode=$_POST['itemcode'];
$txtitem=$_POST['item'];
$txtqty=$_POST['qty'];
$txtsrp=$_POST['srp'];
$txtmarkuprate=$_POST['markuprate'];
$txtsp=($txtsrp*$txtmarkuprate)+$txtsrp;
$sql="INSERT INTO barcode(itemcode,item,qty,srp,markup,sp) VALUES ('".$txtitemcode."','".$txtitem."','".$txtqty."','".$txtsrp."','".$txtmarkuprate."','".$txtsp."')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "<script> alert('1 record added!');
window.location.href='index.php';</script>";
mysql_close($con);
?>