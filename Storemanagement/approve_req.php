<?php
if(isset($_POST['submit'])){
	$a=$_POST['co'];
	
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from request where EmpId='$a'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else

echo '<div style="width:400px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">
<tr  style="i">the following item(s) is(are) borrowed by you</tr>
<tr bgcolor="#33FF00" style="margin-bottom:5px;">

<th>EmpId</th>
<th>ItemId</th>
<th>qauntity</th>
<th>action</th>

</tr>';
while($row=mysql_fetch_array($res)){
$aa=$row['Req_ID'];
$bb=$row['EmpId'];
$cc=$row['ItemId'];
$dd=$row['quantity'];
//$ee=$row['Borrow_date'];
echo "<tr>";
  //echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
  
 // echo "<td>" . $ee . "</td>";
  echo "<td>";
 echo'<a  href=checked.php?id='. $row["Req_ID"] . '>' . 'Borrow' . '</a>';
  echo "</td>";
  
  echo "</tr>";
  }
echo "</table>";
}
?>