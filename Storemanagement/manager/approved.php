
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
$emp = $_POST['EmpId'];
$item=$_POST['ItemId'];
$que=$_POST['quantity'];
$borrow=$_POST['start'];
$q="SELECT Qauntity  from new_item  WHERE ItemId='$item'";
$query=mysql_query($q);
$results = mysql_query($qry,$con) or die(mysql_error());
$count=mysql_num_rows($results);
if($count<='0'){

mysql_query("INSERT INTO `borrow_item` VALUES ('','$emp', '$item', '$que','$borrow')"); 
mysql_query("delete from request  WHERE Req_ID='$p'");
while($row=mysql_fetch_array($query)){
$it=$row['Qauntity'];
}
$d= +$it - $que;

if($it==$que){
mysql_query("delete from new_item  WHERE ItemId='$item'");
}
elseif($it>$que)

{
mysql_query("update new_item set Qauntity='$d' WHERE ItemId='$item'");
}
else
mysql_query("INSERT INTO `borrow_item` VALUES ('','$emp', '$item', '$que','$borrow')");
$mess= "The Request Succssfully Approved ";
}

//header("location: room.php");
mysql_close($con);
}
include("checked_2.php");
?> 




