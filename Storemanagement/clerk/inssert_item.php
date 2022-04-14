<?php
//session_start();

if(isset($_POST['Add'])){
//header('location: Index.php');
//$item=$_POST["Item"];
$name=$_POST["ItemName"];
$pr=$_POST["price"];
$Qaun=$_POST["Qauntity"];
$catagory=$_POST["Itemcatagory"];
$mod=$_POST["model"];
$stat=$_POST["ItemStatus"];
$Iid=$_POST["collage"];
$assigned=$_POST["sno"];
$shelf=$_POST["Shelf_Number"];
$img=$_POST["ItemImage"];
$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
{
$message="no connection established";			
}
mysql_select_db("dbu",$db) or die("Couldn't select the database.");

mysql_query("INSERT INTO `new_item` VALUES ('', '$name', '$pr','$Qaun', '$catagory', '$mod', '$stat', '$Iid', '$assigned', '$shelf', '$img')"); 
//echo $message="Product Details inserted sucessfully !!";
$message='<div align="center"><strong><font color="Green">Product Details inserted sucessfully !!</font></Strong></div>';

mysql_close($db);

}
include("additem_2.php");
?>