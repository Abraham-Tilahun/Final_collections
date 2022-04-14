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

echo '<div style="width:770px; height:230px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;" <br/><br></br/>';
echo '<table cellpadding="8" cellspacing="10" id="resultTable">
<tr><font size="+2">Details of selected Item</font></tr>
<tr bgcolor="fffff" style="margin-bottom:5px;">
<th>Item Name</th>
<th>ItemId</th>
<th>Price</th>
<th>Qauntity</th>
<th>Model</th>
<th>ItemStatus</th>
<th>SerialNumber</th>
<th>ItemImage</th>
<th>Action</th>
</tr>';
while($row=mysql_fetch_array($res)){

$aa=$row['ItemName'];
$bb=$row['ItemId'];
$cc=$row['price'];
$dd=$row['ItemCatagory'];
$ee=$row['model'];
$ff=$row['ItemStatus'];
$gg=$row['SerialNumber'];
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
 echo'<a rel="facebox" href=editem.php?id=' . $row["ItemId"] . '>' .'<img src="images/edit.jpg" height="30" width="30" title="Edit"' . '</a>';
 echo "&nbsp;|&nbsp;";
 echo'<a rel="facebox" href=delitem.php?id=' . $row["ItemId"] . '>' . '<img src="../images/remove.png" height="30" width="30" title="Delete"' . '</a>';
  echo "</td>";
  echo "</td>";
  echo "</tr>";
  }
echo "</table>";
}
?>