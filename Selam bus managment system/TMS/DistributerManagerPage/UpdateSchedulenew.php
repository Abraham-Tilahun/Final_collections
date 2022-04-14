<?php
session_start();
include"../connection/connection.php";
if(isset($_POST['serach'])){  
$searchq = $_POST['serach']; 
$query = mysql_query("SELECT *FROM schedule WHERE REQ_ID = '$searchq'") 
or die("could not sea");
//check the data is found in the database
$count = mysql_num_rows($query);
if($count==0){
 echo'<script type="text/javascript">alert("Terse is no such data in the database !! ");window:location=\'ScheduleUpdatesearch.php\';</script>';	
}
else{
while($row= mysql_fetch_array($query)){
$r2 = $row["BORD_NUMBER"];
$r3= $row["ASSOCIATION_NAME"];
$r4= $row["REQ_ID"]; 
$r5= $row["INITIAL_PLACE"]; 
$r6= $row["DESTINATION_PLACE"]; 
$r8=$row["LEVEL"];
$r9= $row["PREPARED_DATE"];	
$r10= $row["DISTANCE"];	
$r11= $row["TARIFF"];
$r12=$row["PREPARED_DATE"];		
}
}}
echo"</tr>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Schedule update</title>
<link rel="stylesheet" type="text/css" 
href="../css/schedulestyle.css">
</head>
<body bgcolor="white">
<div class="header">
<h1> Schedule update</h1>
</div>
<div id="wrapper">
	<form method="POST"action="UpdateScheduleAction.php"onsubmit="return validate()"name="vfrom">
			    <label>Bord No</label></br>
			<input type="text" name="bord"readonly value="<?php echo $r2;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		<div>
		    <label>Association Name</label>
			<input type="text" name="aname"class="textInput"readonly value="<?php echo $r3;?>">
			<div id="ass_error"class="val_error"></div>
		</div>
		
		
		<div>
	    <label> Operator ID</label>
			<input type="text" name="id"readonly value="<?php echo $r4;?>"class="textInput">
			<div id="dname_error"class="val_error"></div>
		</div>
		<div>
		    <label>From</label></br>
			<input type="text" name="intial" value="<?php echo $r5;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
		    <label>To</label></br>
			<input type="text" name="destination" value="<?php echo $r6;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		
		<div>
		    <label>Level</label></br>
			<input type="text" name="level"readonly value="<?php echo $r8;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
		    <label>Distance</label></br>
			<input type="text" name="distance"value="<?php echo $r10;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
		    <label>Tariff</label></br>
			<input type="text" name="tarif"value="<?php echo $r11;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
        <div>
		    <label>Prepared Date</label></br>
			<input type="text" name="datt" value="<?php echo $r12;?>"class="textInput">
			<div id="intial_error"class="val_error"></div>
		</div>
		<div>
			<input type="submit" value="Register" class="btn"name="Update">
			<input type="reset" value="Reset" class="btn"name="reset">
		</div>
	</form>
</div>
</body>
</html>