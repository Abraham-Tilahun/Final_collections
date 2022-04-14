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
$unitmeasure=$_POST["unitmeasure"];
$Qauntity=$_POST["Qauntity"];
$Req_Date=$_POST["Req_Date"];
$description=$_POST["description"];
if(!strlen($_POST["User_id"])||!strlen($_POST["Fname"])||!strlen($_POST["Mname"])||!strlen($_POST["Lname"])||!strlen($_POST["Item_name"])||!strlen($_POST["unitmeasure"])||!strlen($_POST["Qauntity"])||!strlen($_POST["Req_Date"])||!strlen($_POST["description"]))
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
mysql_query("INSERT INTO request (Fname,Mname,Lname,User_id,Item_name,unitmeasure,Qauntity,Req_Date,description,request_type,requested_by) 
   VALUES ('$Fname','$Mname','$Lname','$User_id','$Item_name','$unitmeasure', '$Qauntity','$Req_Date','$description','Request_property','user')");
    echo '<script language="javascript">';
    echo 'alert(" Request is successfully Send..."); location.href="Request property.php"';
    echo '</script>';
}

//include("feedback.php");

?>