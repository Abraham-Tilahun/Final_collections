<?php
session_start();
include("../Common/connection.php");
if(isset($_POST['first_name'])) {
	$sql = "update user set first_name='".$_POST['first_name']."', last_name='".$_POST['last_name']."', sex='".$_POST['sex']."'";
	if(isset($_POST['DOB']))
		$sql = $sql.", DOB='".$_POST['DOB']."'";

	$sql = $sql.", age='".$_POST['age']."'";

	if(isset($_POST['city']))
		$sql = $sql.", city='".$_POST['city']."'";

	$sql = $sql.", PHONE_NO='".$_POST['phone_number']."'";

	if(isset($_POST['email']))
		$sql = $sql.", EMAIL='".$_POST['email']."'";

	$sql = $sql." where user_id=".$_POST['user_id'];

	mysql_query($sql);

	$sql = "update account set username='".$_POST['username']."' ";

	if(isset($_POST['password']) && $_POST['password'] != "")
		$sql = $sql.", password='".md5($_POST['password'])."'";

	$sql = $sql." where user_id=".$_POST['user_id'];

	mysql_query($sql);
	//echo $sql;

	echo "<script>window.location.href = 'updateacc.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		.error {
		  	color: red;
		  	display: none;
		}  
	</style>
</head>
<body >
<div style=" background: white; color: black; margin-top: 40px;padding-top: 20px; padding-bottom: 40px; margin-bottom: 50px; width: 490px;" align="center">
<div style="font-size: 24px;" align=center>
	Update User Information
</div>
<br>
<?php
$result = mysql_query("select *from user where user_id=".$_GET['id']);
$row = mysql_fetch_array($result ,MYSQL_ASSOC);

$result2 = mysql_query("select *from account where user_id=".$_GET['id']);
$row2 = mysql_fetch_array($result2 ,MYSQL_ASSOC);
?>
<form name="f1" action="?" method="POST" onsubmit="return check()" align=center">  
<table  border = "0 " style= "height: 400px; border: 1px solid black; padding-left: 20px; padding-right: 20px;">
	<input type="text" name="user_id" value="<?php echo $_GET['id']; ?>" hidden=true>
	<tr>
		<td>First Name:</td><td><input id="first_name" type="text" name="first_name" value="<?php echo $row['first_name']; ?>"></td>
		<td id="first_name_error" class="error">Please Enter Valied Name</td>
	</tr>

	<tr>
		<td>Last Name:</td><td><input type="text" id="last_name" name="last_name" value="<?php echo $row['last_name']; ?>"/></td>
		<td id="last_name_error" class="error">Last name is not valid</td>
	</tr>

	<tr>
		<td>Age:</td><td><input type="text" name="age" id="age" value="<?php echo $row['age']; ?>"/></td>
		<td id="age_error_2" class="error">Age should be <18 or >100</td>
		<td id="age_error" class="error">Age should be in number</td>
		
	</tr>

	<tr>
		<td>Date of Birth:</td><td><input type="Date" name="DOB" value="<?php echo $row['DOB']; ?>"/></td>
		<td id="DOB_error" class="error">Please Enter Valied Name</td>
	</tr>

<tr>
		<td>Sex:</td><td><label><input type="radio" name="sex" value="F" checked="" />Female</label><label><input type="radio" name="sex" value="M" <?php if($row['sex'] == 'M') echo 'checked="true"'; ?>/>Male</label></td>
	</tr>

	<tr>
		<td>City:</td><td><input type="text" name="city" id="city" value="<?php echo $row['city']; ?>"/></td>
		<td id="city_error" class="error">Invalid Entry</td>
	</tr>

	<tr>
		<td>Phone No:</td><td><input type="text" name="phone_number" id="phone" value="<?php echo $row['PHONE_NO']; ?>"/></td>
		<td id="phone_error" class="error">Invalid Phone Number</td>
	</tr>


		<tr>
		<td>Email:</td><td><input type="Email" name="email" value="<?php echo $row['EMAIL']; ?>"/></td>
		<td id="email_error" class="error">Please Enter Valied Name</td>
	</tr>


	<tr>
		<td>Username:</td><td><input type="text" name="username" id="username" value="<?php echo $row2['username']; ?>"/></td>
		<td id="username_error" class="error">please enter valid username</td>
	</tr>

	<tr>
		<td>Password:</td><td><input type="password" name="password" id="password"/></td>
		<td id="password_error" class="error">please fill at list 4 characters</td>
	</tr>
	<tr>
		<td>Confirm Password:</td><td><input type="password" name="cofirm_password" id="confirm_password"/> </td>
		<td id="confirm_password_error" class="error">Please Confirm The password again</td>
		<td id="confirm_password_error_2" class="error">The two passwords do not match</td>
	</tr>
	<tr><td colspan="2"><center><input type="submit" value="Submit" name="submit"/> 
	<input type="reset" value="Cancel" name="Cancel"id="b2"/></div>
	</center> </td></tr>
</table>
</form>
</div>
</body>
<script type="text/javascript">
	function username() {
		document.getElementById('username').value = "hi";
	}
</script>
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
		else if (parseInt(document.getElementById("age").value) < 18 ||parseInt(document.getElementById("age").value) >100) {
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
		if (document.getElementById("email").value=="") {
			document.getElementById("email_error").style.display="block";
			return false;
		}
		else{
			document.getElementById("email_error").style.display="none";
		}
		
		if (document.getElementById("role").value=="") {
			document.getElementById("role_error").style.display="block";
			return false;
		}
		else{
			document.getElementById("role_error").style.display="none";
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
</html>	