<?php
//session_start();
	//$a=$_POST['b'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);
$sql="select * from feedback ";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else

echo '<div style="background-color:#cccccc;width:650px; margin:0 auto; position:relative;
 border:3px solid rgba(0,0,0,0); -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:15px;
 -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="10" cellspacing="10" id="resultTable">
<tr  style="i">the following feedbaks are sent from users</tr>
<tr bgcolor="#33FF00" style="margin-bottom:5px;">
<th>User Id</th>
<th>User Name</th>
<th>Comment</th>
<th>Date</th>
</tr>';
while($row=mysql_fetch_array($res)){
//$Fedbackid=$row['Fedbackid'];
$EmployeeId=$row['EmployeeId'];
$FullName=$row['FullName'];
$cont=$row['cont'];
$Date=$row['Date'];
  echo "<tr>";
  echo "<td>" . $EmployeeId . "</td>";
  //echo "<td>" .$Fedbackid . "</td>";
  echo "<td>" . $FullName . "</td>";
  echo "<td>" . $cont . "</td>";
  echo "<td>" . $Date . "</td>";
  echo '<td>';
 //echo'<a href=deletefed.php?fedid=' . $row["fedbackid"] . '>' . 'delete' . '</a>'.'<br>';
 // echo'<a href=viewfedback.php?fedid=' . $row["fedbackid"] . '>' . 'view' . '</a>';
  echo '</td>';
  
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>