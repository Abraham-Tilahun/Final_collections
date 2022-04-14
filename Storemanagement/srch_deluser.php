<?php
if(isset($_POST['Submit'])){
	$a=$_POST['slct'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from accou where EmpId='$a'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else
/*echo '<div style="width:400px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">
<tr  style="i">the following item(s) is(are) borrowed by you</tr>
<tr bgcolor="#33FF00" style="margin-bottom:1px;">
<th>EmpId</th>
<th>First Name</th>
<th>Last Name</th>
<th>User Name</th>
</tr>';
while($row=mysql_fetch_array($res)){
$aa=$row['EmpId'];
$bb=$row['FirstName'];
$cc=$row['LastName'];
$dd=$row['username'];
echo "<tr>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $dd . "</td>";
  echo "<td>" . $cc . "</td>";
  //echo '<input name="ok" type="submit" value="Approved" />';
  echo "</tr>";
  
  }
echo "</table>";*/
while($row=mysql_fetch_array($res)){
//$aa=$row['EmpId'];
$bb=$row['FirstName'];
$cc=$row['LastName'];
$dd=$row['username'];
echo 'EmpId:';
echo '<input name="uname"  type="text" value="'. $a .'" />';
echo '<br>';

echo 'First Name:';
echo '<input name="uname"  type="text" value="'. $bb .'" />';
echo '<br>';

echo 'Last Name:';
echo '<input name="uname"  type="text" value="'. $cc .'" />';
echo '<br>';
echo 'User Name:';
echo '<input name="uname"  type="text" value="'. $dd.'" />';
echo '<br>';
echo '<input name="ok" type="submit" value="Approved" />';
}
//header("location: deleteuser.php");
}
?>