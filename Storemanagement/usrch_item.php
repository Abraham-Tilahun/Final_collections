<?php

if(isset($_POST['Submit'])){
	$a=$_POST['cb'];
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

		  while($row=mysql_fetch_array($res)){
		  echo '<div style="width:700px; height:450px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable" bordercolor="#3366FF">
<tr  style="i">Detail Of Selected item is here...</tr>
<tr bgcolor="#3366FF" style="margin-bottom:5px;">
<th>Item Name</th>
<th>ItemId</th>
<th>Price</th>
<th>Qauntity</th>
<th>Model</th>
<th>Item Status</th>
<th>AssignedFor</th>
<th>Item Image</th>
</tr>';
		  
$aa=$row['ItemName'];
$bb=$row['ItemId'];
$cc=$row['price'];
$dd=$row['Qauntity'];
$ee=$row['model'];
$ff=$row['ItemStatus'];
$gg=$row['AssignedFor'];
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
  echo "<td>";
  echo "</tr>";
  }
echo "</table>";

}

?>