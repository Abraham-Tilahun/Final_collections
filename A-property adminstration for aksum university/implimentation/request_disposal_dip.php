<?php
session_start();
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
if (isset($_POST['Send']))
$Item_name=$_POST["Item_name"];
//$Req_ID=$_POST["Req_ID"];
$User_id=$_POST["User_id"];
$Item_id=$_POST["Item_id"];
$Qauntity=$_POST["Qauntity"];
$Req_Date=$_POST["Req_Date"];
if(!strlen($_POST["User_id"])||!strlen($_POST["Item_name"])||!strlen($_POST["Item_id"])||!strlen($_POST["Qauntity"])||!strlen($_POST["Req_Date"]))
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
mysql_query("INSERT INTO  request_disposal_dep (User_id,Item_name,Item_id,Qauntity,Req_Date,request_type) 
   VALUES ('$User_id','$Item_name', '$Item_id','$Qauntity','$Req_Date','disposal_request_property')");
    echo '<script language="javascript">';
    echo 'alert("Request Disposal is successfully Send..."); location.href="Departmenthead page.php"';
    echo '</script>';
}

//include("feedback.php");

?>