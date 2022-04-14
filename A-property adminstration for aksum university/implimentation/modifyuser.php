
<?php   

 session_start(); 
//$a=$_GET['User_id'];
 if(isset($_SESSION['User_id']))
 {
  $id=$_SESSION['User_id'];
  
 } else {
 ?>
 <?php
 }
 ?>
 <?php
//$User_id=$_SESSION['User_id'];
$con=mysql_connect('localhost','root','');
mysql_select_db('storem');
	$User_id=isset($_POST['User_id']); 
$result=mysql_query("select * from accou where user_id='$User_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$username=$row['username'];
$password=$row['password'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online property administration system</title>
<link href="css/online.css" rel="stylesheet" type="text/css" />
<?php
$query ="SELECT * FROM accou  ";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$id=$row['User_id'];
$username=isset($_POST['username']); 
$Phone_number=isset($_POST['Phone_number']); 
$usertype=$row['usertype'];
?>
<tr>
<br>

  <div style="width:550px; height:560px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('storem');
	$ctrl = $_REQUEST['User_id'];
	$query="SELECT * FROM accou where User_id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("user not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row['Phone_number'];
$r1=$row['password'];
$r2=$row['confirmpassword'];
$r3=$row['email_address'];
$r4=$row['User_id'];
$r5=$row['Gender'];
$r6=$row['usertype'];
$r7=$row['username'];
}
?>
  <form id="form1" method="POST" action="modifyuser.php">
 <div style="background-color:#336699;border-radius:15px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
  <div style="float:left;" ><strong><font color="white" size="4px">Update user Account</font></strong></div>
<div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
<a href="adminpage.php" title="Close"><img src="images/back.png"></a></div> 
</div> 
 <table valign='top' align="center" border="4">
 
<tr>
<tr><td>
ID:</td><td bgcolor="red" ><input type='text'name='User_id' id='User_id'readonly='readonly' value="<?php echo "$r4"?>"></td></tr>
<tr><td>username:</td><td><input type='text' name='username' id='username' value="<?php echo "$r7"?>"></td></tr>
<tr><td>password:</td><td><input type='text' name='password' id='password' value="<?php echo "$r1"?>"></td></tr>
<tr><td>Confirm Password:</td><td><input type='text' name='confirmpassword' id='confirmpassword' value="<?php echo "$r2"?>"></tr></td>
<tr><td>email_address:</td><td ><input  type='text' id='email_address' name='email_address'  value="<?php echo "$r3"?>"></td></tr>
<tr><td>Gender:</td><td ><input  type='text' name='Gender'  id='Gender' value="<?php echo "$r5"?>"></td></tr>
<tr><td>usertype :</td><td><input type='text' name='usertype' id='usertype'  value="<?php echo "$r6"?>"></tr></td>
<tr><td>Phone No:</td><td><input type='text' name='Phone_number' id='Phone_number' onKeyPress="return isNumberKey(event)" value="<?php echo "$r0"?>"></tr></td>

<tr><td colspan=2 align='center'><input type='submit' name='update' value='Save Changes' class="button_example"></tr></td>
</table><br><br><br></br></br>
 <?php
}
	  

?>
 
 <?php
  if(isset($_POST['update']))
  {
	            $id=$_POST['User_id'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$confirmpassword=$_POST['confirmpassword'];
	            $email_address=$_POST['email_address'];
				$Gender=$_POST['Gender'];
				$usertype=$_POST['usertype'];
				$phone_number=$_POST['Phone_number'];
			
				
				if($password==$confirmpassword)
				{
  $update = mysql_query("update accou set username='$username', password='$password',confirmpassword='$confirmpassword', email_address='$email_address' 
	,Gender='$Gender',usertype='$usertype',phone_number='$phone_number'  WHERE User_id='$id'") Or die(mysql_error);
 //echo'<meta content="3;raccount.php" http-equiv="refresh"/>';
  echo "Update user Account succesfull";
 echo "<script></script>";
  }
  else
  {
  echo'  <p class="wrong">Your Password Does not match!!</p>';
	 //  echo'<meta content="4;raccount.php" http-equiv="refresh" />';
  }
  }
  ?>
  </form>  
 
</body>
</html>










