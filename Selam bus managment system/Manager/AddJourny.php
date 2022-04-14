<?php 
session_start();

if(isset($_POST['R_submit'])) {
	include("../Common/connection.php");
	$result7 = mysql_query("select user_id from account where username='".$_SESSION['username']."'");
	$row7 = mysql_fetch_array($result7,MYSQL_ASSOC);
	$user_id = $row7['user_id'];

	$departure_place=$_POST['departure_place'];
	$destination_place=$_POST['destination_place'];
	$departure_time=$_POST['departure_time'];
	$destination_time=$_POST['destination_time'];

	$query1="insert into journy values('','$departure_place','$destination_place','$departure_time','$destination_time', $user_id)"; 
	$query2=mysql_query($query1);
	if($query2){
		echo "data inserted Successfully";
	}
}
?>
<html>
<head>
<link href="formmapt.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
 .error {
  	color: red;
  	display: none;
  }  
 </style>
</head>  
<body>
<center>
<div style ="width:700px;height:300px;margin-left:10px">
	 <h2> Add Journey Information</h2>	 
<form name="f1" action="?" method="post" onsubmit="return check()">  
	<table  border = "0 " style="border: 1px solid black; padding: 30px 30px">

	<tr>
		<td>From:</td><td><input type="text" name="departure_place" id="departure_place" /></td>
		<td id="departutre_place_error" class="error">Departure place should be in strings</td>
		<td id="departutre_place_error_2" class="error">please fill departure place </td>
	</tr>

	<tr>
		<td>To:</td><td><input type="text" name="destination_place" id="destination_place" /></td>
		<td id="destination_error" class="error">destination name should be in characters</td>
		<td id="destination_error_2" class="error">Please fill destination</td>
	</tr>
	<tr>	
		<td>Departure Time:</td><td><input type="time" name="departure_time" id="departure_time" /></td>
		<td id="departure_time_error" class="error">Please fill departure time</td>
	</tr>
	<tr>
		<td>Destination Time:</td><td><input type="time" name="destination_time" id="destination_time" /></td>
		<td id="destination_time_error" class="error" >Please fill destination time</td>
	</tr>
	<tr style="height: 20px;">
		
	</tr>
	<tr>
		<td colspan="2"><center><input type="submit" value="Submit" name="R_submit"/> <input type="reset" value="Cancel" name="R_Cancel" id="b2"/></div>
	</center> </td>
	</tr>
	</table>
</form>
</div>
<script type="text/javascript">
	function check() {
		var stringOnly = /^[a-zA-Z]+$/;
		var stringWithSpace = /^[a-zA-Z_ ]*$/;
		var numOnly = /^[0-9]+$/;
			var phoneExp = /^\d{3}\d{3}\d{4}$/;
		if(document.getElementById("departure_place").value==""){
			document.getElementById('departutre_place_error_2').style.display="block";
			document.getElementById('departutre_place_error').style.display = "none";
			
			return false;
		}else if(!document.getElementById("departure_place").value.match(stringWithSpace) )  {
			document.getElementById('departutre_place_error').style.display = "block";
			document.getElementById('departutre_place_error_2').style.display="none";
			return false;
		}
		else{
			document.getElementById('departutre_place_error').style.display = "none";
			document.getElementById('departutre_place_error_2').style.display = "none";
		}
		if(document.getElementById('destination_place').value==""){
			document.getElementById('destination_error_2').style.display="block";
			document.getElementById("destination_error").style.display="none";
			return false;
		}
		
		else if (!document.getElementById("destination_place").value.match(stringWithSpace)) {
			document.getElementById('destination_error').style.display="block";
			document.getElementById('destination_error_2').style.display="none";
			return false;
		} 
		else{
			document.getElementById('destination_error_2').style.display="none";
			document.getElementById("destination_error").style.display="none";
		}

	    if (document.getElementById("departure_time").value=="") {
			document.getElementById('departure_time_error').style.display="block";
		
			return false;
		} 
		else{
			document.getElementById('departure_time_error').style.display="none";
		}

		if (document.getElementById("destination_time").value=="") {
			document.getElementById('destination_time_error').style.display="block";
		
			return false;
		} 
		else{
			document.getElementById('destination_time_error').style.display="none";
		}
		
	}
</script>
</body>  
</html>
						