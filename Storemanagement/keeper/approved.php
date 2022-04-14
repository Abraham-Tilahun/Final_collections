
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
$p = $_POST['id'];
$emp = $_POST['empid'];
$empname = $_POST['empname'];
$item=$_POST['iid'];
$itemname=$_POST['iname'];
//$itemcat=$_POST['icat'];
$borrowstat=$_POST['status'];
$borrow=$_POST['start'];
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
	
mysql_query("INSERT INTO `borrow_item` VALUES ('','$emp', '$empname','$item', '$itemname', '$borrowstat', '$borrow')"); 
$message='<div align="center" ><strong><font color="Green" font-size="+2">Taken Items Registered!!!</font></strong></div>';
mysql_query("update request set ApprovedItems='Taken' WHERE Req_ID='$p'");
mysql_query("update new_item set ItemStatus='Taken' WHERE ItemId='$item'");
}

//header("location: room.php");
mysql_close($con);
}
include("approvereq_2.php");
?> 




