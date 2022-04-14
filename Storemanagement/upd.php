<?php
session_start();
if(isset($_POST['update'])){

$a=$_POST['Item Name'];
$b=$_POST['ItemId'];
$c=$_POST['Price'];
$d=$_POST['Qauntity'];
$e=$_POST['Model'];


$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$message="no connection established";


mysql_select_db("dbu",$con);
$sql="update new_item set ItemName='$a',Itemid='$b',price='$c',Qauntity='$d',model='$e' where Itemid='$b'";
$res=mysql_query($sql) or die("query error".mysql_error());
 $message="you have update successfully";
 
mysql_select_db("storem",$db);

}
//mysql_close($db);
?>