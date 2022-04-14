<?php
session_start();
include("../Common/connection.php");
if(isset($_POST['first_name'])) {
	$sql = "insert into user values('', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['sex']."'";
	if(isset($_POST['DOB']))
		$sql = $sql.", '".$_POST['DOB']."'";

	$sql = $sql.", '".$_POST['age']."'";

	if(isset($_POST['city']))
		$sql = $sql.", '".$_POST['city']."'";

	$sql = $sql.", 'Passenger'";

	$sql = $sql.", '".$_POST['phone_number']."'";

	if(isset($_POST['email']))
		$sql = $sql.", '".$_POST['email']."'";

	$sql = $sql.", null)";

	mysql_query($sql);

	$result = mysql_query("select *from user");
	$user_id = null;
	while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		$user_id = $row['user_id'];
	}
	mysql_query("insert into account values('".$_POST['username']."', '".md5($_POST['password'])."', '1', ".$user_id.",'')");

	$_SESSION['username']=$_POST['username'];
	$_SESSION['role']="Passenger";
	echo "<script>window.parent.location.href = '../Passenger/passenger.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.inputs {
			display: inline-block;
			width: 70%;
			background: none;
			border: none;
			border-bottom: 1px solid white;
		}
		.labels {
			display: inline-block;
			width: 25%;
		}
		.container {
			margin-top: 10px;
			width: 100%;
		}
		.error {
  	color: red;
  	display: none;
  }  
	</style>
</head>
<body>
<div class = "CreateAccount" style ="width:800px; margin-left:10px;height: 500px;" align="center">
	 <center><h2>Create Account </h2></center>
<form name="f1" action="Register.php" method="POST" onsubmit="return check()">  
<table  border = "0 " style= "height: 400px; border: 1px solid black; padding-left: 20px; padding-right: 20px;">

	<tr>
		<td>First Name:</td><td><input id="first_name" type="text" name="first_name" ></td>
		<td id="first_name_error" class="error">Please Enter Valied Name</td>
	</tr>

	<tr>
		<td>Last Name:</td><td><input type="text" id="last_name" name="last_name"/></td>
		<td id="last_name_error" class="error">Last name is not valid</td>
	</tr>

	<tr>
		<td>Age:</td><td><input type="text" name="age" id="age"/></td>
		<td id="age_error" class="error">Age should be in number</td>
		<td id="age_error_2" class="error">Age should be above 10 or <100</td>
	</tr>

	<tr>
		<td>Date of Birth:</td><td><input type="Date" name="DOB" id="DOB"/></td>
		<td id="DOB_error" class="error">Please Enter Valied DOB</td>
	</tr>

	<tr>
		<td>Sex:</td><td><label><input type="radio" name="sex" value="F" checked="" />Female</label><label><input type="radio" name="sex" value="M" />Male</label></td>
	</tr>

	<tr>
		<td>City:</td><td><input type="text" name="city" id="city"/></td>
		<td id="city_error" class="error">Invalid Entry</td>
	</tr>

	<tr>
		<td>Phone No:</td><td><input type="text" name="phone_number" id="phone"/></td>
		<td id="phone_error" class="error">Invalid Phone Number</td>
	</tr>

	<tr>

	   <td>Email*:</td><td><input type="Email" name="email" id="email" /></td>
		
		<td id="email_error" class="error">Please Enter Valied Name</td>
	</tr>

	<tr>
		<td>Username:</td>
		<td>
			<input type="text" name="username" id="username"/>
		</td>
		<td id="username_error" class="error">please enter valid username</td>
	</tr>

	<tr>
		<td>Password:</td>
		<td>
			<input type="password" name="password" id="password"/>
		</td>
		<td id="password_error" class="error">please fill at list 4 characters</td>
	</tr>

	<tr>
		<td>Confirm Password:</td>
		<td>
			<input type="password" name="copassword" id="confirm_password"/>
		</td>
		<td id="confirm_password_error" class="error">Please Confirm The password again</td>
		<td id="confirm_password_error_2" class="error">The two passwords do not match</td>
	</tr>

	
	<tr>
		<td colspan="2">
			<center>
				<input type="submit" value="Create" name="submit"/> 
				<input type="reset" value="Cancel" name="Cancel" id="b2"/>
			</center>
		</td>
	</tr>
</table>
</form>
	<script type="text/javascript">
	function check() {
		var stringOnly = /^[a-zA-Z]+$/;
		var stringWithSpace = /^[a-zA-Z_ ]*$/;
		var numOnly = /^[0-9]+$/;
		var phoneExp1 = /^\d{3}\d{3}\d{4}$/;

		if(!document.getElementById("first_name").value.match(stringOnly) || document.getElementById("first_name").value=="")  {
			document.getElementById('first_name_error').style.display = "block";
			return false;
		} else {
			document.getElementById('first_name_error').style.display = "none";
		}
		if (!document.getElementById("last_name").value.match(stringOnly)||document.getElementById("last_name").value=="") {
			document.getElementById('last_name_error').style.display="block";
			return false;
		}
		else{
			document.getElementById("last_name_error").style.display="none";
		}
		if (!document.getElementById("age").value.match(numOnly)) {
			document.getElementById("age_error").style.display="block";
			document.getElementById("age_error_2").style.display="none";
			return false;
		}
		else if (parseInt(document.getElementById("age").value) < 10 ||parseInt(document.getElementById("age").value) >100) {
			document.getElementById("age_error_2").style.display="block";
			document.getElementById("age_error").style.display="none";
			return false;
		}
		else{
			document.getElementById("age_error").style.display="none";
			document.getElementById("age_error_2").style.display="none";
		}

		if(document.getElementById("DOB").value=="")  {
			document.getElementById('DOB_error').style.display = "block";
			return false;
		} else {
			document.getElementById('DOB_error').style.display = "none";
		}

		if(!document.getElementById("city").value.match(stringWithSpace) || document.getElementById("city").value=="")  {
			document.getElementById('city_error').style.display = "block";
			return false;
		} else {
			document.getElementById('city_error').style.display = "none";
		}

		if (!document.getElementById("phone").value.match(phoneExp1)) {
			document.getElementById("phone_error").style.display="block";
			return false;
		}
		else{
			document.getElementById("phone_error").style.display="none";
		}
		
		if(!document.getElementById("username").value.match(stringOnly) || document.getElementById("username").value=="") {
			document.getElementById('username_error').style.display = "block";
			return false;
		} else {
			document.getElementById('username_error').style.display = "none";
		}

		if(document.getElementById("password").value=="") {
			document.getElementById('password_error').style.display = "block";
			return false;
		} else {
			document.getElementById('password_error').style.display = "none";
		}

		if(document.getElementById("confirm_password").value=="") {
			document.getElementById('confirm_password_error').style.display = "block";
			return false;
		} else {
			document.getElementById('confirm_password_error').style.display = "none";
		}

		if((document.getElementById("password").value+"") != (document.getElementById("confirm_password").value+"")) {
			document.getElementById("confirm_password_error_2").style.display="block";
			return false;
		}
		else{
			document.getElementByI("confirm_password_error_2").style.display="none";
		}

	}
</script>
</div>
</body>
</html>