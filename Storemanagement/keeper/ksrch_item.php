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

echo '<div style="width:750px; height:250px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:0%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">
<tr><font color="#00CCFF" size="+2">Details of selected Item</font></tr>
<tr bgcolor="#3366FF" style="margin-bottom:5px;">
<th>Item Name</th>
<th>ItemId</th>
<th>Price</th>
<th>Qauntity</th>
<th>Model</th>
<th>ItemStatus</th>
<th>ItemCatagory</th>
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
$hh=$row['ItemImage'];
echo "<tr>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
  echo "<td>" . $ee . "</td>";
  echo "<td>" . $ff . "</td>";
  echo "<td>" . $gg . "</td>";
  echo '<td> <img src="images/'.$hh.'" width="150" height="100"></td>';
  echo "</tr>";
  }
echo "</table>";
}
?>