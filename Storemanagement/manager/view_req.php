<?php
//session_start();
	//$a=$_POST['b'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from request where requeststatus='Waiting' ";
$res=mysql_query($sql) or die("query error".mysql_error());
if($res=='0'){
echo "No request is on the Waiting state!!!";
}
else

echo '<div style="width:785px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">
<tr bgcolor="fffff" style="margin-bottom:5px;">
<th>Req_ID</th>
<th>EmpId</th>
<th>Employee Name</th>
<th>ItemId</th>
<th>Item Name</th>
<th>qauntity</th>
<th>Req_Date</th>
<th>action</th>
</tr>';
while($row=mysql_fetch_array($res)){
$aa=$row['Req_ID'];
$bb=$row['EmpId'];
$bbc=$row['Employee Name'];
$cc=$row['ItemId'];
$bbd=$row['Item Name'];
$ee=$row['Req_Date'];
echo "<tr>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $bbc . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $bbd . "</td>";
    echo "<td>" . $ee . "</td>";
  echo '<td>';
  //echo'<a href=deletereq.php?id=' . $row["Req_ID"] . '>' . 'Detail' . '</a>';
  //echo '|';
 echo'<a rel="facebox" href=rejectreq.php?id=' . $row["Req_ID"] . '>' . '<img src="../images/reject.jpg" height="30" width="50" title="Reject"' . '</a>';
 echo'<a rel="facebox" href=approvereq.php?id=' . $row["Req_ID"] . '>' . '<img src="images/approve.jpg" height="30" width="50" title="Approve"' . '</a>';
  echo'<a href=viewuloan.php?id=' . $row["EmpId"] . '>' . 'Taken Items' . '</a>';
  echo '</td>';
  echo "</tr>";
   
  }
echo "</table>";
mysql_close($con);
?>