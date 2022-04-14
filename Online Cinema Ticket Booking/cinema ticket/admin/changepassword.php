<?php
	session_start();
include("db.php");	
 if(isset($_SESSION['SESS_MEMBER_ID']))
 {
 $mail=$_SESSION['SESS_MEMBER_ID'];
 }
 else{
 
?>

<script>
alert('please login');
alert(window.location='cinema ticket/login.php');
</script>
<?php
}

?>
<?php
$transum=$_SESSION['SESS_MEMBER_ID'];
?>
 
 <?php

$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'");
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
</head>
<body>
     <table align="center">
<td  valign="top">
<!--------body  --->
<br><br>
<form action="ChangePasswords.php" method="post" onsubmit='return formValidation()'>
<fieldset style="background-color:white">
<p align="center"><img src="changepass.GIF" height="100" width="300"></p>
<p><font size="3">Old Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="password" id='old'placeholder='OldPassword'><br><br>
<p><font size="3">New Password:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="pass" id='new' placeholder='NewPassword'><br><br>
<p><font size="3">Confirm New password:</font>&nbsp;<input type="password" name="rpass" id='confi' placeholder='ConfrimPassword'><br>
<p align="center"><input type="submit" name="update" value="update" Onclick="return check(this.form);"/>&nbsp;&nbsp;
<input type='reset' value='Reset'></p><br><br>

</fieldset>
</form>	
	<?php
if(isset($_POST['update']))
{
$password = $_POST['password'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
//define("db_server","localhost");
//define("db_user","root");
define("db_pass","");
//define("db_name","epcsdb");

$query="select * from user where password='{$password}' ";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
}
if(mysql_num_rows($result)==1){
if($pass==$rpass){
$query="update user set password='{$pass}' 	where password='{$password}' ";
$result=mysql_query($query);
}
else{
echo"<script language='javascript'>";
echo"alert('New Password AND Confirm Password Not Match!')";
echo"</script>";
}
if(!$result)
{
die("Query update is failed" .mysql_error());
}
else
{
echo"<script language='javascript'>";
echo"alert('Update password is succesfull!')";
echo"</script>";

}
}
else
{
echo"<script language='javascript'>";
echo"alert('Wrong Old Password')";
echo"</script>";
}
}
?>
</div>
</table>
</body>
</html>