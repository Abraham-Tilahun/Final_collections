<?php
//session_start();
	//$a=$_POST['b'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);
$sql="select * from  accou ";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else

echo '<div style="background-color:#cccccc;width:950px; margin:0 auto; position:relative;
 border:3px solid rgba(0,0,0,0); -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:15px;
 -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="10" cellspacing="10" id="resultTable">
<tr  style="i">The following are users</tr>
<tr bgcolor="#33FF00" style="margin-bottom:1px;">
<th>User Id</th>
<th>Firest Name</th>
<th>Last Name</th>
<th>User Name</th>
<th>Password</th>
<th>Phone Number</th>
<th>Email Address</th>
<th>User Type</th>
</tr>';
while($row=mysql_fetch_array($res)){
$User_id=$row['User_id'];
$Fname=$row['Fname'];
$Lname=$row['Lname'];
$username=$row['username'];
$password=$row['password'];
$Phone_number=$row['Phone_number'];
$email_address=$row['email_address'];
$usertype=$row['usertype'];
  echo "<tr>";
  echo "<td>" . $User_id . "</td>";
  echo "<td>" . $Fname . "</td>";
  echo "<td>" . $Lname . "</td>";
  echo "<td>" . $username . "</td>";
  echo "<td>" . $password . "</td>";
  echo "<td>" . $Phone_number . "</td>";
  echo "<td>" . $email_address . "</td>";
  echo "<td>" . $usertype . "</td>";
  echo '<td>';
  echo "</tr>";
  
  }
echo "</table>";

mysql_close($con);
?>