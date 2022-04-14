
<?php
//session_start();
	//$a=$_POST['b'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from request where requeststatus='approved' ";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not found";
}
else
echo '<div style="width:700px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable" bgcolor="#FFCC66" width="700">
<tr  style="font-color:blue;font-size:20px;">Details Of Your Request</tr>
<tr bgcolor="#33FF00" style="margin-bottom:5px; width:300px;">
<th>EmpId</th>
<th>Employee Name</th>
<th>ItemId</th>
<th>Item Name</th>
<th>qauntity</th>
<th>request_date</th>
<th>Request Status</th>
</tr>';
		  while($row=mysql_fetch_array($res)){
$aa=$row['EmpId'];
$aaa=$row['Employee Name'];
$bb=$row['ItemId'];
$bbb=$row['Item Name'];
$cc=$row['quantity'];
$dd=$row['Req_Date'];
$ee=$row['requeststatus'];
echo "<tr>";
   echo "<td>" . $aa . "</td>";
   echo "<td>" . $aaa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $bbb . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
   echo "<td>" . $ee. "</td>";
  echo "<td>";
   echo '<input type="checkbox" name="borrow" id="borrow" value="borrow"/>';
   echo'<a  href=edrequest.php?id=' . $row["EmpId"] . '>' . 'Borrow' . '</a>';

   echo "</td>";
   echo "</tr>";
  }
echo "</table>";

?>