<html>
<body bgcolor="#999999">
<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("can not connect:" .mysql_error());
}
mysql_select_db("booking",$con);

$ss= mysql_query("SELECT * FROM comments");
echo "<table border='1'bgcolor='cyan' align='center'>
<tr><th>cooment_id</th><th>first name</th><th>last name</th><th>email</th><th>comment</th><th>delete</th></tr>";
while($ss2= mysql_fetch_array($ss))
{
echo "<tr>";
echo "<td>" . $ss2['comment_id'] . "</td>";
echo "<td>" . $ss2['first_name'] . "</td>";
echo "<td>" . $ss2['last_name'] . "</td>";
echo "<td>" . $ss2['email'] . "</td>";
echo "<td>" . $ss2['comment'] . "</td>";
echo "<td bgcolor='white'> <a href=\"comdel.php?comment_id=".$ss2['comment_id']."\">Delete</a> </td>";

echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "<table border=''bgcolor=megnta' align='center'>";
echo "<tr>";
echo "<td bgcolor='green'>";
echo "<a href='/cinema ticket/admin/manager/add_news.php'>back</a>";
echo "</td>";
echo "</tr>";
echo "</table>";
?>
</body>
</html>