
<?php
session_start();
if(!isset($_SESSION['app']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbu", $con);
//$p = $_POST['id'];
$emp = $_POST['EmployeeId'];
$empname = $_POST['Employeename'];
$item=$_POST['Itemid'];
$itemname=$_POST['Itemname'];
$itemcata=$_POST['Itemcat'];
$borrowstat=$_POST['status'];
$borrow=$_POST['date'];
//$qty=$_POST['qty'];
$qry="select * from accou where EmpId='".$emp ."'";
$results = mysql_query($qry,$con) or die(mysql_error());
$count=mysql_num_rows($results);
if($count<='0'){

//if(!$results) {
		
		//$mess= "<center>Username or password was incorrect! Please try again  </center>";
		//include("checked.php");
	} 
	else
	{
	
mysql_query("INSERT INTO `borrow_item` VALUES ('','$emp', '$empname','$item', '$itemname', '$itemcata', '$borrowstat', '$borrow')"); 
mysql_query("update transfereditem set transferstatus='Accepted' WHERE ItemId='$item'");
$message='<div align="center" ><strong><font color="Green" font-size="+2">Accepted Items Registered by Your EmpId!!!</font></strong></div>';
//mysql_query("update transfereditem set transferstatus='Accepted' WHERE ReceiverEmpId='$emp'");

//header("location: room.php");
mysql_close($con);
}
}
include("transferitem_2.php");
?> 




