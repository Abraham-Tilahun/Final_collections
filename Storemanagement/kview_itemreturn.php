
<?php
	//$a=$_POST['b'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from approvedforreturn ";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not found";
}
else
echo '<div style="width:500px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable" bgcolor="#FFCC66" width="500">
<tr><th colspan="5"><font size="+2" color="#000000" >List of Approved Items For Return</font><th></tr>
<tr style="margin-bottom:5px; font-size:18px; font-weight:bold; font-family:times;" >

<td>ItemName</td>
<td>ReturnedItemID</td>
<td>Quantity</td>
<th>ItemStatus</th>
<th>EmpId</th>
</tr>';
		  while($row=mysql_fetch_array($res)){
$aa=$row['ItemName'];
$bb=$row['ReturnedItemID'];
$dd=$row['Quantity'];
$ff=$row['ItemStatus'];
$gg=$row['EmpId'];
echo "<tr>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $dd . "</td>";
   echo "<td>" . $ff . "</td>";
   echo "<td>" . $gg . "</td>";
  echo "</tr>";
  }
echo "</table>";

?>
</html>