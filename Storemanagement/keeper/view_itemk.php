
<?php
	//$a=$_POST['b'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from new_item LIMIT 10 ";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else
echo '<div style="width:500px; margin:0%; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:0.5%; marigin-left:0%;">';
echo '<table cellpadding="6" cellspacing="9" id="resultTable" bgcolor="ffffff" width="500">
<tr><th colspan="5"><font size="+2" color="#000000" >List of items in the store</font><th></tr>
<tr style="margin-bottom:5px; font-size:18px; font-weight:bold; font-family:times;" >
<td>ItemName</td>
<td>ItemId</td>
<td>price</td>
<td>Qauntity</td>
<td>Model</td>
<th>ItemStatus</th>
<th>Item Catagory</th>
<th>Shelf_Number</th>
<th>ItemImage</th>
</tr>';
		  while($row=mysql_fetch_array($res)){
$aa=$row['ItemName'];
$bb=$row['ItemId'];
$cc=$row['price'];
$dd=$row['Qauntity'];
$ee=$row['model'];
$ff=$row['ItemStatus'];
$gg=$row['ItemCatagory'];
$ggg=$row['Shelf_Number'];
$hh=$row['ItemImage'];
echo "<tr>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
  echo "<td>" . $ee . "</td>";
   echo "<td>" . $ff . "</td>";
  echo "<td>" . $gg . "</td>";
  echo "<td>" . $ggg . "</td>";
  echo '<td> <img src="images/'.$hh.'" width="30" height="30" onclick="height="100" width="100""></td>';
  echo "</tr>";
  }
echo "</table>";

?>
</html>