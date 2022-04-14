<?php
session_start();
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
if (isset($_POST['Send']))
$Fname=$_POST["Fname"];
$Mname=$_POST["Mname"];
$Lname=$_POST["Lname"];
$User_id=$_POST["User_id"];
$Item_name=$_POST["Item_name"];
$Item_number=$_POST["Item_number"];
$unitmeasure=$_POST["unitmeasure"];
$Req_Date=$_POST["Req_Date"];
$requested_by=$_POST["requested_by"];
$description=$_POST["description"];
if(!strlen($_POST["User_id"])||!strlen($_POST["Fname"])||!strlen($_POST["Mname"])||!strlen($_POST["Lname"])||!strlen($_POST["Item_name"])||!strlen($_POST["Item_number"])||!strlen($_POST["unitmeasure"])||!strlen($_POST["Req_Date"])||!strlen($_POST["requested_by"])||!strlen($_POST["description"]))
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
mysql_query("INSERT INTO request_purchase (Fname,Mname,Lname,User_id,Item_name,Item_number,unitmeasure,Req_Date,description,requested_by,request_type) 
   VALUES ('$Fname','$Mname','$Lname','$User_id','$Item_name','$Item_number','$unitmeasure', '$Req_Date','$description','$requested_by','Request_purchase')");
    echo '<script language="javascript">';
    echo 'alert("Request purchase is successfully Send..."); location.href="Requestpurchase.php"';
    echo '</script>';
}

//include("feedback.php");

?>