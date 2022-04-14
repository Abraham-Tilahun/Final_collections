<?php
session_start();
include('connection.php');	
if(isset($_POST['update'])) {
	$result = mysql_query("select *from account where username='".$_SESSION['username']."'");
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	if(md5($_POST['old_password']) == ($row['password'])) {
		if($_POST['new_password'] == $_POST["confirm_password"]) {
			mysql_query("update account set password='".md5($_POST['new_password'])."' where username = '".$_SESSION['username']."'");
			$success = "Password changed successfully";
		} else {
			$error = "The password confirmation is incorrect";
		}
	} else {
		$error = "The old password is incorrect ";
	}
}
?>
<html>
<head>
<title>change password </title>
<link href="formmapt.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		
		.error {
  	color: red;
  	display: none;
  } 
	</style>
</head>
<body align='center' style="overflow: hidden;">
<div class = "chage" style ="width:100%;height: 300px;margin-left:10px; background: " align="center">
<form name="f1" action="?" method="post" onsubmit="return check()" style="background: ">  
	<table  border = "0 " style="border: 1px solid black; padding: 20px 20px;">
		<center><h2>Change Password</h2></center>
		<tr>
		<td>Old Password:</td><td><input style='margin-left: 0px;' type="password" name="old_password"  id="old_password"></td><td id="old_pass" class="error">please fill old password</td>
	</tr>

	<tr>
		<td>New Password</td><td><input style='margin-left: 0px;' type="password" name="new_password" id="new_password" /></td><td id="new_pass" class="error">please fill new password</td>
	</tr>

	<tr>
		<td>Confirm Password</td><td><input style='margin-left: 0px;' type="password" name="confirm_password" id="confirm_password" /></td><td id="conf_new_pass" class="error">fiill new password to confirm</td>
	</tr>

	<tr style="margin-top: 20px; display: block;">
		<td colspan="2" style="padding-left: 30px;"><center><input type="submit" value="Submit" name="update"/> <input type="reset" value="Cancel" name="R_Cancel" id="b2"/></div>
	</center> </td>
	</tr>
	
	</table>
	<br>
	<br>
<?php 
if(isset($error))
	echo '<div align="center" style="color: red">'.$error.'</div>';
?>
<?php 
if(isset($success))
	echo '<div align="center" style="color: green">'.$success.'</div>';
?>
</form>
</div>
<script type="text/javascript">
	function check() {
		var stringOnly = /^[a-zA-Z]+$/;
		var stringWithSpace = /^[a-zA-Z_ ]*$/;
		var numOnly = /^[0-9]+$/;
		var phoneExp1 = /^\d{3}\d{3}\d{4}$/;
		
		if(document.getElementById("old_password").value=="")  {
			document.getElementById('old_pass').style.display = "block";
			return false;
		} else {
			document.getElementById('old_pass').style.display = "none";
		}
		if (document.getElementById("new_password").value=="") {
			document.getElementById('new_pass').style.display="block";
			return false;
		}
		else{
			document.getElementById("new_pass").style.display="none";
		}
		
		if (document.getElementById("confirm_password").value=="") {
			document.getElementById('conf_new_pass').style.display="block";
			return false;
		}
		else{
			document.getElementById("conf_new_pass").style.display="none";
		}
		

	}
</script>
</body>
</html>