<?php
//session_start();
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
$pr=$_POST['iname'];
$qty=$_POST['description'];

//$mo=$_POST['model'];



mysql_query("UPDATE request SET ItemId='$id',Item Name='$pr'  quantity ='$qty' WHERE EmpId='$in'");
$s='<div align="center" ><strong><font color="Green" font-size="+2">succssfuly updated!!</font></strong></div>';
include("cancelreq_4.php");
mysql_close($con);
}
?> 