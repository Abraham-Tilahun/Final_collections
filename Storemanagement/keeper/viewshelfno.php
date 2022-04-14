<?php
if(isset($_POST['Submit'])){
	$a=$_POST['sct'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from new_item where ItemName='$a'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else

echo '<div style="width:550px; height:50px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable" bgcolor="fffff" width="550">
<tr>
<tr width="600" ><td width="600"><font size="+1" color="#3366FF">Shelf Number of selected Item</font></td></tr>
<td><font size="+1">Item Name</font></td>
<td><font size="+1">ShelfNo</font></td>
</tr>';
while($row=mysql_fetch_array($res)){
$bb=$row['ItemName'];
$aa=$row['Shelf_Number'];
echo "<tr>";
   echo "<td>" . $bb . "</td>";
  echo "<td>" . $aa . "</td>";
 
  echo "</td>";
  echo "</tr>";
  }
echo "</table>";
}
?>