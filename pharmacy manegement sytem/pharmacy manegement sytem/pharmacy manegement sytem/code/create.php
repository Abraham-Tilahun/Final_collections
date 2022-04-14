<?php
$conn=mysql_connect("localhost","root","");
$db1=mysql_select_db("pharmacy",$conn);
if(isset($_POST['create']))
{
$accountid=$_POST['accountid'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$result = mysql_query("SELECT * FROM account where position='manager' ");
if(mysql_num_rows($result)==0)
{
 $sql="INSERT INTO account (position,accountid,username,password,confirmpassword)
 VALUES 
 ('manager','$_POST[accountid]','$_POST[username]','$_POST[password]','$_POST[confirmpassword]')";
// if successfully insert data into database, displays message "Successful"
 if(mysql_query($sql,$conn))
 {
  echo "<script>alert('Account created successfully!!')</script>";
 echo' <meta content="3;login1.php" http-equiv="refresh" />';
 }
 else{
  echo "<script>alert('error in creating acount!!')</script>";
}
}
else{
  echo "<script>alert('Manager account already exist!!')</script>";
 echo' <meta content="3;login1.php" http-equiv="refresh" />';
}
 mysql_close($conn);
 } 
?>
