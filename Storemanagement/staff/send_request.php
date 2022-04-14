<?php
session_start();
if(!isset($_SESSION['save']))
//c =mysql_query("Select ItemName from new_item where ItemId=Itemid'");
//$name =mysql_fetch_array($c);
//while($row=mysql_fetch_array($name)){
//$Iname=$_POST['Itemname'];
$EmpId=$_POST["empid"];
$Empname=$_POST["empname"];
$Iid=$_POST["Id"];
$Iname=$_POST["iname"];
$Date=$_POST["date"];
$status=$_POST["rstat"];
$approved=$_POST["Aitem"];
if(!strlen($_POST["date"])||!strlen($_POST["Aitem"])){
$msg="You Need To Fill All The Required Field/s.";

}
		else{


$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$msg="no connection established";		
mysql_select_db("dbu",$db) or die("Couldn't select the database.");


$sql=mysql_query("SELECT * FROM new_item,accou where ItemId='$Iid'"); 
$count=mysql_num_rows($sql);

if($count<='0'){
 $msg="sorry! item id is incorrect";
  }
 else
 {
mysql_query("INSERT INTO request VALUES ('','$EmpId', '$Empname',  '$Iid', '$Iname', '$Date', '$status', '$approved' )");
$message='<div align="center" ><strong><font color="Green" font-size="+2">Request Details inserted sucessfully !!</font></strong></div>';
mysql_query("update new_item set ItemStatus='Reserved' WHERE ItemId='$Iid'");
}
mysql_close($db);
}
include('requestonline_2.php');
?>