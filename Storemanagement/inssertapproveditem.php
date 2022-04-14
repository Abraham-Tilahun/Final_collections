<?php
session_start();

if(!isset($__SESSION['Add']))
//header('location: Index.php');

$name=$_POST["ItemName"];
$Iid=$_POST["Itemid"];
$Qaun=$_POST["Qauntity"];
$stat=$_POST["ItemStatus"];
if(!strlen($_POST["ItemName"])||!strlen($_POST["Itemid"])||!strlen($_POST["Qauntity"])
||!strlen($_POST["ItemStatus"])){
$message="You Need To Fill All The Required Field/s.";
}
elseif(!is_numeric($_POST["Itemid"])||!is_numeric($_POST["Qauntity"]))
   {
     $message="Please, You need to enter numbers only on the id and Quantity Field.";
	 
	    }
		elseif($_POST['ItemName']==strval(intval($_POST['ItemName']))){
		$message="Please Enter Characters In The Item Name Field.";
				}
		else{
		

$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$message="no connection established";			
mysql_select_db("dbu",$db) or die("Couldn't select the database.");
$sql=mysql_query("SELECT * FROM newapproveditem where ItemId='$Iid'");//VALUES ('$name', '$Iid', '$pr','$Qaun', '$mod')"); 
$count=mysql_num_rows($sql);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count<='0'){

mysql_query("INSERT INTO `newapproveditem` VALUES ('$name', '$Iid', '$Qaun', '$stat')"); 
$message="Successfully added...";
}
else
{
$q="SELECT Qauntity FROM newapproveditem where ItemId='$Iid' and ItemName='$name'";
$ry=mysql_query($q);
if(!$ry){
$message="sorry,the item id is unique!!!!";
}
else
{
while($row=mysql_fetch_array($ry)){
$i=$row['Qauntity'];

$d= +$i + $Qaun;
mysql_query("UPDATE new_item SET  Qauntity='$d' WHERE ItemId='$Iid'");

}
$message="the item id is already exist,so succussfully apdated!!!!";
}


}
mysql_close($db);
}
include('additem_2approved.php');
?>