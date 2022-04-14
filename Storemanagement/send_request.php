<?php
session_start();

if(!isset($_SESSION['Send']))

$EmpId=$_POST["EmployeeId"];
$Iid=$_POST["Itemid"];
$Date=$_POST["date"];
$Qaun=$_POST["Qauntity"];
if(!strlen($_POST["EmployeeId"])||!strlen($_POST["Itemid"])||!strlen($_POST["date"])||!strlen($_POST["Qauntity"])){
$msg="You Need To Fill All The Required Field/s.";

}
elseif(!is_numeric($_POST["EmployeeId"])||!is_numeric($_POST["Itemid"])||!is_numeric($_POST["Qauntity"]))
   {
     $msg="Please, You need to enter numbers only on the id and qauntity Field.";
	 
	    }
		else{


$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$msg="no connection established";		
mysql_select_db("dbu",$db) or die("Couldn't select the database.");


$sql=mysql_query("SELECT * FROM new_item,accou where ItemId='$Iid' and EmpId='$EmpId'"); 
$count=mysql_num_rows($sql);

if($count<='0'){
 $msg="sorry! item id or your Id is incorrect";
  }
 else
 {
 
 $q="SELECT Qauntity  from new_item  WHERE ItemId='$Iid'";
$query=mysql_query($q);
	//$b="select count(Qauntity) from request WHERE ItemId='$item'";
//mysql_query("INSERT INTO `borrow_item` VALUES ('$emp', '$item', '$que','$borrow')"); 
//mysql_query("delete from request  WHERE ItemId='$item'");
while($row=mysql_fetch_array($query)){
$items=$row['Qauntity'];
}
$d= +$items - $Qaun;

if($items==$Qaun){
mysql_query("delete from new_item  WHERE ItemId='$Iid'");
}
elseif($items>$Qaun)
{
mysql_query("INSERT INTO request VALUES ('','$EmpId', '$Iid','$Qaun','$Date')");
mysql_query("update new_item set Qauntity='$d' WHERE ItemId='$Iid'");
$msg= "You successfully SENT....";
}
else
 
 $msg= "The item not found";

 
}
mysql_close($db);
}
include('requestonline_2.php');
?>