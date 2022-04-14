<?php
session_start();
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
if (isset($_POST['Send']))
$username=$_POST["username"];
$User_id=$_POST["User_id"];
$Item_name=$_POST["Item_name"];
$unitmeasure=$_POST["unitmeasure"];
$Qauntity=$_POST["Qauntity"];
$Req_Date=$_POST["Req_Date"];
$description=$_POST["description"];
if(!strlen($_POST["User_id"])||!strlen($_POST["username"])||!strlen($_POST["Item_name"])||!strlen($_POST["unitmeasure"])||!strlen($_POST["Qauntity"])||!strlen($_POST["Req_Date"])||!strlen($_POST["description"]))
{
$msg="You Need To Fill All The Required Field/s.";
}
elseif(!is_numeric($_POST["User_id"]))
   {
     $msg="Please, You need to enter numbers only on the id Field.";
	 
	    }
		else{


$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
		}
if(!$db){
$msg="no connection established";	
	}	
mysql_select_db("storem",$db) or die("Couldn't select the database.");
{
mysql_query("INSERT INTO request_purchase (username,User_id,Item_name,unitmeasure,Qauntity,Req_Date,description,request_type,requested_by) 
   VALUES ('$username','$User_id','$Item_name','$unitmeasure', '$Qauntity','$Req_Date','$description','Request_purchase','Vic_president')");
    echo '<script language="javascript">';
    echo 'alert("Request purchase is successfully Send..."); location.href="Request_property_to_finance.php"';
    echo '</script>';
}

//include("feedback.php");

?>