<?php
	//$a=$_POST['b'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from new_item ";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else
echo "<table border='1'>
<tr>
<th>Item Name</th>
<th>ItemId</th>
<th>price</th>
<th>Qauntity</th>
<th>Model</th>
</tr>";
		  while($row=mysql_fetch_array($res)){
$aa=$row['ItemName'];
$bb=$row['Itemid'];
$cc=$row['price'];
$dd=$row['Qauntity'];
$ee=$row['model'];
echo "<tr>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
  echo "<td>" . $ee . "</td>";
 
  
  echo "</tr>";
  }
echo "</table>";

?>