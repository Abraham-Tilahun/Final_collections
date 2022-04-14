
<?php
if (isset($_POST['Send']))
{
	$a=$_POST['eid'];
$con=mysql_connect("localhost","root","");

if(!$con){
	die("unable to connect :".mysql_error());
}

mysql_select_db("dbu",$con);
$sql="select * from request where EmpId='$a' && requeststatus='Waiting'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "No Request is On Waiting state by this EmpId!!!";
}
else

echo '<div style="width:570px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">
<tr  style="i">the requested item is cancel</tr>
<tr bgcolor="#33FF00" style="margin-bottom:5px;">
<th>EmpId</th>
<th>ItemId</th>
<th>ItemName</th>
<th>quantity</th>
<th>request_date</th>
<th>Action</th>
</tr>';
while($row=mysql_fetch_array($res)){
//$a=$row['Req_ID'];
$aa=$row['EmpId'];
$bb=$row['ItemId'];
$bbc=$row['Item Name'];
$cc=$row['quantity'];
$dd=$row['Req_Date'];

echo "<tr>";
//echo "<td>" . $a . "</td>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $bbc . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
 echo "<td>";
 echo'<a rel="facebox" href=deleted.php?id=' . $row["ItemId"] . '>' . 'Delete' . '</a>';
 echo "|&nbsp;&nbsp;";
 echo'<a rel="facebox" href=edtreq.php?id=' . $row["ItemId"] . '>' . 'Update' . '</a>';
  
  echo "</td>";
  
  
  echo "</tr>";
  }
echo "</table>";
}
?>