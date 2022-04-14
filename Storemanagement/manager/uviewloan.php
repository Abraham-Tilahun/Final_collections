<?php
if (isset($_POST['Submit']))
{
	$a=$_POST['sel'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from borrow_item where EmpId='$a'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not fond";
}
else
echo '<div style="width:570px; margin:0%; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">
<tr  style="i">the following item(s) is(are) borrowed by you</tr>
<tr style="margin-bottom:5px;">
<th>EmpId</th>
<th>EmpName</th>
<th>ItemId</th>
<th>ItemName</th>
<th>qauntity</th>
<th>borrw_date</th>
<th>TakenItem Status</th>
</tr>';
while($row=mysql_fetch_array($res)){
$aa=$row['EmpId'];
$aa1=$row['Employee Name'];
$bb=$row['ItemId'];
$bbc=$row['Item Name'];
$dd=$row['Borrow_date'];
$ee=$row['BorowedItemStatus'];
echo "<tr>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $aa1 . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $bbc . "</td>";
    echo "<td>" . $dd . "</td>";
 echo "<td>" . $ee. "</td>";
  
  echo "</tr>";
  }
  
echo "</table>";
 echo'<a  href=viewreq.php?id=' . $row["EmpId"] . '>' . 'Back' . '</a>';
}
?>