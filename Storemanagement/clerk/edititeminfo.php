<?php
//session_start();

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbu", $con);
$itemid = $_POST['Id'];
$itemname=$_POST['in'];
$price=$_POST['pri'];
$mol=$_POST['mol'];
//$qty=$_POST['qty'];
$stat=$_POST['ItemStatus'];
$assfor=$_POST['AssignedFor'];
//$img=$_POST['ItemImage'];

mysql_query("UPDATE new_item SET ItemName='$itemname', ItemId='$itemid', price='$price', model='$mol', ItemStatus='$stat', SerialNumber='$assfor' WHERE SerialNumber='$assfor'");
$message="Item Details Succesfully Updated !!!";
include("searchitem_3.php");
mysql_close($con);
?> 