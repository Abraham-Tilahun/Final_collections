<?php
session_start();
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

echo '<div style="width":950px; margin:0 auto; position:relative; 
border:3px solid rgba(0,0,0,0); -webkit-border-radius:3px; -moz-border-radius:10px; border-radius:10px; 
-webkit-box-shadow:0 0 9px rgba(0,0,0,0.4); -moz-box-shadow:0 0 9px rgba(0,0,0,0.4); box-shadow:0 0 9px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="15" cellspacing="15" id="resultTable">
<tr  style="i"><h3>WELLL COME TO ACCOUNT MANAGIMENT PAGE<h2></tr>
<tr bgcolor="#33FF00" style="margin-bottom:2px;">

<th>User_id</th>
<th>username</th>
<th>phone_number</th>
<th>email_address</th>
<th>Gender</th>
<th>Emp_Id</th>
<th>password</th>
<th>usertype</th>
<th>De-Activate</th>
<th>Edit</th>
</tr>';
while($row=mysql_fetch_array($res)){
$uid=$row['User_id'];
$un=$row['username'];
$Phone_number=$row['Phone_number'];
$email_address=$row['email_address'];
$Gender=$row['Gender'];
$eid=$row['Emp_Id'];
$password=$row['password'];
$usertype=$row['usertype'];
//$De-Activate=$row['De-Activate'];
$Edit=$row['Edit'];
  echo "<tr>";
  echo "<td>" . $uid . "</td>";
  echo "<td>" . $un . "</td>";
  echo "<td>" . $Phone_number . "</td>";
  echo "<td>" . $email_address . "</td>";
  echo "<td>" . $Gender . "</td>";
  echo "<td>" . $eid . "</td>";
  echo "<td>" . $password . "</td>";
  echo "<td>" . $usertype . "</td>";
 //echo "<td>" . $De-Activate . "</td>";
 echo "<td>" . $Edit . "</td>";
  echo '<td>';
  echo "</tr>";
  
  }
echo "</table>";

mysql_close($con);
?>