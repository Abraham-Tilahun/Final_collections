<?php
session_start();
include"../connection/connection.php";
if(isset($_POST['serach'])){  
$searchq = $_POST['serach'];
$searchq = preg_replace("#[^0-9a-z]#i","",$searchq); 
$query = mysql_query("SELECT *FROM shedule_request WHERE OPERATOR_ID = '$searchq'") 
or die("could not sea");
$count = mysql_num_rows($query);
if($count==0){
 echo'<script type="text/javascript">alert("Terse is no such data in the database !! ");window:location=\'SearchForSchedule.php\';</script>';	
}
else{
while($row= mysql_fetch_array($query)){
$r1=$row["OPERATOR_ID"];
$r7=$row["REQUEST_FOR"];
$r2 = $row["ASSOCATION_NAME"];
$r5= $row["FROM"]; 
$r6= $row["TO"]; 
$r8=$row["BORD_NO"];
$r9= $row["LEVEL"];		
}
}}
echo"</tr>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Schedule From</title>
<link rel="stylesheet" type="text/css" 
href="../css/schedulestyle.css">
</head>
  <style>
	.ass select{
	 width:180px;
     height:26px;	
     border-radius:5px;	   
		}
</style>
<body bgcolor="white">
<div class="header">
<h1> Schedule Form</h1>
</div>
<div id="wrapper">
	<form method="POST"action="schedule.php"onsubmit="return validate()"name="vfrom">

	    <label> Operator ID</label>
			<input type="text" name="id"readonly value="<?php echo $r1;?>"class="textInput">
			<div id="dname_error"class="val_error"></div>
		<div>
		    <label>Association Name</label>
			<input type="text" name="aname"class="textInput"readonly value="<?php echo $r2;?>">
			<div id="ass_error"class="val_error"></div>
		</div>
		<div>
		    <label>From</label></br>
			<input type="text" name="intial"readonly value="<?php echo $r5;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
		    <label>To</label></br>
			<input type="text" name="destination"readonly value="<?php echo $r6;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
		    <label>Bord No</label></br>
			<input type="text" name="bord"readonly value="<?php echo $r8;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
		    <label>Level</label></br>
			<input type="text" name="level"readonly value="<?php echo $r9;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
		    <label>Distance</label></br>
			<input type="text" name="distance"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
		    <label>Tariff</label></br>
			<input type="text" name="tarif"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
			<input type="submit" value="Register" class="btn"name="Applay">
			<input type="reset" value="Reset" class="btn"name="reset">
		</div>
	</form>
</div>
</body>
</html>