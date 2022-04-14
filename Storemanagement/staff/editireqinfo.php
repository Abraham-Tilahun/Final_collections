<?php
session_start();
if (isset($_POST['save']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("storem", $con);
$itemid = $_POST['Id'];
$itemname=$_POST['in'];
$price=$_POST['pri'];
$mol=$_POST['mol'];
$qty=$_POST['qty'];

mysql_query("UPDATE new_item SET ItemName='$itemname', ItemId='$itemid', price='$price', Qauntity='$qty',model='$mol' WHERE ItemId='$itemid'");
$nn= 'succ updated!!!!!!!!!';
include("searchitem_3.php");
mysql_close($con);
}
?> 