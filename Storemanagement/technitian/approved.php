
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
$item=$_POST['iid'];
$que=$_POST['qut'];
$borrow=$_POST['start'];
$username=$_POST['uname'];
$password=$_POST['pass'];

//$qty=$_POST['qty'];
$qry="select * from accou where username='".$username."' and password='".$password ."' and EmpId='".$emp ."'";
$results = mysql_query($qry,$con) or die(mysql_error());
$count=mysql_num_rows($results);
if($count<='0'){

//if(!$results) {
		
		$mess= "<center>Username or password was incorrect! Please try again  </center>";
		//include("checked.php");
	} 
	else
	{
$q="SELECT Qauntity  from new_item  WHERE ItemId='$item'";
$query=mysql_query($q);
	
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
$mess= "succssfully ";
}

//header("location: room.php");
mysql_close($con);
}
include("checked_2.php");
?> 




