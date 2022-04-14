<?php session_start();

if(isset($_POST['login']))
{
	$username = $_POST['username']; 
	$password = md5($_POST['password']);
	include("../Common/connection.php");
	$sql="select *from account where username='$username' and password='$password' and status='1'";
	$result=mysql_query($sql);
	if(mysql_num_rows($result) == 0) {
		$error = "Incorrect Username or Password !!! ";
	} else {
		$row = mysql_fetch_array($result, MYSQL_ASSOC);

		$result2=mysql_query("select *from user where user_id=".$row['user_id']);
		$row2 = mysql_fetch_array($result2,MYSQL_ASSOC);
		$role = $row2['role'];

		if($role=='Manager') {
			$_SESSION['username']=$username;
			$_SESSION['role']=$role;
			echo "<script>window.parent.location.href = '../Manager/manager.php';</script>";
		}
		else if($role=='admin') {
			$_SESSION['username']=$username;
			$_SESSION['role']=$role;
			echo "<script>window.parent.location.href = '../System Admin/System Admin.php';</script>";
		}
		else if($role=='Passenger') {
			$_SESSION['username']=$username;
			$_SESSION['role']=$role;
			echo "<script>window.parent.location.href = '../Passenger/passenger.php';</script>";
		}	
		else if($role=='Ticket_Officer') {
			$_SESSION['username']=$username;
			$_SESSION['role']=$role;
			echo "<script>window.parent.location.href = '../Ticket Officer/Ticket Officer.php';</script>";
		}	
	}
}
?>
<html>
<head>
<title>login form </title>
<link rel="stylesheet" type="text/css" href="../Common../css/style.css">
</head>
<body>
<div class="login-box" style="">
<img src="../image/pho.jpg" class="pho">
<form action="?" method="POST" name="loginform" target="iframe1">
<table>
     <img src="../image/index1.jpg" width="109%" height="50">
     <tr><td style="color:white">User name:</td></tr>
     <tr><td><input type="text" name="username" placeholder="User" required="" autocomplete="off"></td></tr>
     <tr><td style="color:white"> Password:</td>
     <tr><td><input type="password" name="password"  placeholder="*****" required=""></td></tr><br>
     <tr style=""><td style="color: red; padding-left: 10px; margin: 0px;"></td></tr>
     <tr><td><input type="submit" name="login" value="Login"></td></tr>		
</table>
<label style="color: red; margin-top: 10px; display: block"><?php if(isset($error)) echo $error;?></label>
<br>
	<!--<center><a href="change_password.php">Reset password </a></center> -->
</form>
</div>
</body>
</html>