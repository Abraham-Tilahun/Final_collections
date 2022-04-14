<?php
session_start();
if (isset($_POST['save']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbu", $con);
$id = $_POST['Itemid'];
$in=$_POST['emid'];
$pr=$_POST['brate'];
//$mo=$_POST['model'];
$qty=$_POST['description'];


mysql_query("UPDATE request SET ItemId='$id', quantity ='$qty', Req_Date='$pr' WHERE EmpId='$in'");
$s='succssfuly updated!!';
include("cancelreq_4.php");
mysql_close($con);
}
?> 