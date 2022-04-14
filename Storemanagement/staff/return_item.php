
<?php
session_start();
if(!isset($_SESSION['R']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbu", $con);
$Iid=$_POST["itemid"];
$pr=$_POST["ename"];
$Qaun=$_POST["quantity"];
$return=$_POST["date"];
$eid=$_POST["eid"];
//$qty=$_POST['qty'];
$qry="select * from accou where EmpId='".$eid ."'";
$results = mysql_query($qry,$con) or die(mysql_error());
$count=mysql_num_rows($results);
if($count<='0'){

//if(!$results) {
		
		//$mess= "<center>Username or password was incorrect! Please try again  </center>";
		//include("checked.php");
	} 
	else
	{
mysql_query("INSERT INTO `returned_item` VALUES ('','$eid', '$pr', '$Iid', '$Qaun', '$return')"); 
mysql_query("update new_item set ItemStatus='Free' WHERE Itemid='$Iid'");
mysql_query("update borrow_item set BorowedItemStatus='Returned' WHERE Itemid='$Iid'");
$message='<div align="center" ><strong><font color="Green" font-size="+2">The Item Successfully Returned!!!</font></strong></div>';
}

//header("location: room.php");
mysql_close($con);
}
include("chreturnitem_2.php");
?> 




