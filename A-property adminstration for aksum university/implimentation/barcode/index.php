<html>
<body>
<form action=add.php method=POST>
<table border=0 align=center bgcolor="#99FF00">
<tr>
<td>ITEM CODE</td><td><input type="text" name="itemcode" /></td></tr>
<tr><td>ITEM</td><td><input type="text" name="item" /></td></tr>
<tr><td>QTY</td><td><input type="text" name="qty" /></td></tr>
<tr><td>SRP</td><td><input type="text" name="srp" /></td></tr>
<tr><td>MARKUP RATE</td><td><input type="text" name="markuprate" /></td></tr>
<tr><td colspan=2 align=center><input type=submit value=add><input type=reset value=cancel>
</table>


</form>
<html>
<body>

<?php
require_once('dbconnect.php');
$result=mysql_query("SELECT * from barcode order by id");
echo "<center><table border=1>";
echo"<tr><th>ITEM CODE:</th><th>ITEM:</th><th>QTY</th><th>SRP</th><th>MARKUP RATE</th><th>SELLING PRICE</th><th>ACTION</th></tr>";
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo "<td align= center>".$row['itemcode']."</td>";
echo "<td align=center>".$row['item']."</td>";
echo "<td align=center>".$row['qty']."</td>";
echo "<td align=center>".$row['srp']."</td>";
echo "<td align=center>".$row['markup']."</td>";
echo "<td align=center>".$row['sp']."</td>";
echo"<td> <a href='edit.php?id=".$row['id']."'>EDIT</a>
<a href=delete.php?id=".$row['id']."'>DELETE</a></td>";
echo"</tr>";
}
echo "</table>";
mysql_close($con);
?>
</div>
<a href=search.php>search</a>
</body>
</html>
</body>
</html>