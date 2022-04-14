
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

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
					<th>Price</th>
					<th>Quantity</th>
					<th>Model</th>
					<th>Action</th>

</tr>";
		  while($row=mysql_fetch_array($res)){
//$aa=$row['Req_ID'];
$bb=$row['ItemName'];
$cc=$row['Itemid'];
$cc=$row['price'];
$dd=$row['Qauntity'];
$ee=$row['model'];
echo "<tr>";
  //echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
  echo "<td>" . $ee . "</td>";
  echo '<td>';
echo'<a rel="facebox" href=edititem.php?id=' . $row["Itemid"] . '>' . 'update' . '</a>';
echo ' | ';
echo'<a rel="facebox" href=deleteroom.php?id=' . $row["Itemid"] . '>' . 'Delete' . '</a>';
echo '</td>';
  echo "</tr>";
   
  }
echo "</table>";

?>