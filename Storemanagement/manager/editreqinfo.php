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
$qty=$_POST['qty'];
$stat=$_POST['ItemStatus'];

mysql_query("UPDATE new_item SET ItemName='$itemname', ItemId='$itemid', price='$price', model='$mol', Qauntity='$qty', ItemStatus='$stat' WHERE Req_Id='$itemid'");
$nn='Succfully updated!!!!!!!!!';
include("viewreq.php");
mysql_close($con);
?> 