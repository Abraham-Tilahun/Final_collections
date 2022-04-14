
<?php
session_start();
if(isset($__SESSION['Submit']))
{
$w=$_POST['xx'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from message where EmpId='$w'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else
echo '<div style="width:450px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">
<tr>List of stored items in our store</tr>
<tr bgcolor="#33FF00" style="margin-bottom:5px;">


<th>EmpId</th>
<th>name</th>
<th>email</th>
<th>position</th>
<th>content</th>
</tr>';
		  while($row=mysql_fetch_array($res)){
$bb=$row['EmpId'];
$cc=$row['name'];
$dd=$row['email'];
$ee=$row['position'];
$ff=$row['content'];

echo "<tr>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
  echo "<td>" . $ee . "</td>";
  echo "<td>" . $ff . "</td>";
 
  echo "</tr>";
  }
echo "</table>";
}
//mysql_close($con);
?>
