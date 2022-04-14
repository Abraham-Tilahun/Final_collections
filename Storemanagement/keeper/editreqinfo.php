<?php
//session_start();

if(!isset($__SESSION['save']))
//header('location: Index.php');
$itemid = $_POST['Id'];
$itemname=$_POST['in'];
$itemname1=$_POST['Itname'];
$price=$_POST['pri'];
$mol=$_POST['mol'];
$qty=$_POST['qty'];
$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$message="no connection established";			
mysql_select_db("dbu",$db) or die("Couldn't select the database.");
$sql=mysql_query("SELECT * FROM borrow_item where ItemId='$price'");//VALUES ('$name', '$Iid', '$pr','$Qaun', '$mod')"); 
$count=mysql_num_rows($sql);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count<='0'){

mysql_query("INSERT INTO `borrow_item` VALUES ('','$itemid', '$itemname', '$itemname1','$price', '$mol', '$qty')"); 
$message="Successfully added...";
}
else
{
$q="SELECT Qauntity FROM borrow_item where ItemId='$Iid' and ItemName='$name'";
$ry=mysql_query($q);
if(!$ry){
$message="sorry,the item id is unique!!!!";
}
else
{
while($row=mysql_fetch_array($ry)){
$i=$row['Qauntity'];

$d= +$i - $Qaun;
mysql_query("UPDATE new_item SET  Qauntity='$d' WHERE ItemId='$Iid'");

}
$message="the item id is already exist,so succussfully apdated!!!!";
mysql_close($db);

}
include("approveduser.php");
?>