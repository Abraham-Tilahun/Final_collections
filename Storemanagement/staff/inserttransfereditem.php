<?php
session_start();

if(!isset($_SESSION['Add']))
//header('location: Index.php');

$name=$_POST["sendername"];
$Iid=$_POST["senderid"];
$pr=$_POST["itname"];
$Qaun=$_POST["itid"];
$stat=$_POST["receive"];
$statt=$_POST["received"];
$transfer=$_POST["transtatus"];
if(!strlen($_POST["sendername"])||!strlen($_POST["senderid"])||!strlen($_POST["itname"])||!strlen($_POST["itid"])
||!strlen($_POST["receive"])){
$message="You Need To Fill All The Required Field/s.";
}
elseif(!is_numeric($_POST["senderid"])||!is_numeric($_POST["itid"]))
   {
     $message="Please, You need to enter numbers only on the id,qauntity,Shelf Number and price Field.";
	 
	    }
		
		elseif($_POST['sendername']==strval(intval($_POST['receive']))){
		$message="Please Enter Characters In The Item Name Field.";
				}
		else{
		

$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$message="no connection established";			
mysql_select_db("dbu",$db) or die("Couldn't select the database.");
$sql=mysql_query("SELECT * FROM new_item where ItemId='$Iid'");//VALUES ('$name', '$Iid', '$pr','$Qaun', '$mod')"); 
$count=mysql_num_rows($sql);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count<='0'){

mysql_query("INSERT INTO `transfereditem` VALUES ('', '$name', '$Iid', '$pr','$Qaun', '$stat', '$statt', '$transfer')"); 
mysql_query("update borrow_item set BorowedItemStatus='Transfered' WHERE ItemId='$Qaun'");
$message='<div align="center" ><strong><font color="black" font-size="+2">Transfer Request sent Successfuly!!</font></strong></div>';
}
else
{
$message="sorry,the item id is unique!!!!";
}
include("transferitem_2.php");
mysql_close($db);
}

?>