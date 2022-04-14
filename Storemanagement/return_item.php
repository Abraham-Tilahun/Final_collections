<?php
session_start();

if(!isset($__POST['R']))
{
//header('location: Index.php');

//$name=$_POST["itemname"];
$Iid=$_POST["itemid"];
//$pr=$_POST["price"];
$Qaun=$_POST["quantity"];
$return=$_POST["start"];
$eid=$_POST["eid"];
//$mod=$_POST["model"];

if(!strlen($_POST["itemid"])||!strlen($_POST["quantity"])||!strlen($_POST["eid"])||!strlen($_POST["start"])){
$me="You Need To Fill All The Required Field/s.";
}
elseif(!is_numeric($_POST["itemid"])||!is_numeric($_POST["quantity"])||!is_numeric($_POST["eid"]))
   {
     $me="Please, You need to enter numbers only on the id,qauntity and price Field.";
	 
	    }
		elseif(!ctype_digit($_POST["itemid"])||!ctype_digit($_POST["quantity"]))
		{
		$me="You Can Only Enter Normal Numbers Bigger Than or Equal To Zero IN THE id,price and qauntity FIELD";
		
		
		}
		//elseif($_POST['itemname']==strval(intval($_POST['itemname']))){
		//$message="Please Enter Characters In The Item Name Field.";
			//	}
		else{
		

$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$me="no connection established";			
mysql_select_db("dbu",$db) or die("Couldn't select the database.");
$sql=mysql_query("SELECT * FROM borrow_item where ItemId='$Iid' and EmpId='$eid'");//VALUES ('$name', '$Iid', '$pr','$Qaun', '$mod')"); 
$count=mysql_num_rows($sql);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count<='0'){
$me="sory!item id must be unique";

}
else
{
//mysql_query("INSERT INTO `new_item` VALUES ('$name', '$Iid', '$pr','$Qaun', '$mod')"); 
//$q="SELECT Qauntity  from new_item  WHERE Itemid='$Iid'";
$x="SELECT quantity  from borrow_item  WHERE ItemId='$Iid' ";

//$query=mysql_query($q);
$quer=mysql_query($x);

while($rows=mysql_fetch_array($quer)){
$item=$rows['quantity'];
}
//$d= +$items - $Qaun;
//$z=+$items + $Qaun;
$c=+$item-$Qaun;
//echo "&nbsp;&nbsp;&nbsp;&nbsp;$c";
if($item==$Qaun){
mysql_query("INSERT INTO `returned_item` VALUES ('','$eid', '$Iid', '$Qaun','$return')"); 
mysql_query("delete from borrow_item  WHERE ItemId='$Iid' and EmpId='$eid'");
//mysql_query("update new_item set Qauntity='$d' WHERE Itemid='$Iid'");
}
elseif($item>$Qaun)

{
mysql_query("INSERT INTO `returned_item` VALUES ('','$eid', '$Iid', '$Qaun','$return')"); 
//mysql_query("update new_item set Qauntity='$z' WHERE Itemid='$Iid'");
mysql_query("update borrow_item set quantity='$c' WHERE ItemId='$Iid' and EmpId='$eid'");
$me="Successfully ..";
}
}
mysql_close($db);
}}
include('chreturnitem_2.php');

?>			