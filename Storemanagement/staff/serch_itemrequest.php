<?php
if(isset($_POST['Submit'])){
	$a=$_POST['sel'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from transfereditem where ReceiverEmpId='$a' && transferstatus='Waiting'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else

echo '<div style="width:600px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;" <br /><br /><br />';
echo '<table cellpadding="13" cellspacing="20" id="resultTable" <br /><br /><br /><br /><br /><br />
<tr  style="i">the following item(s) is(are) On Request to You</tr>
<tr style="margin-bottom:5px;">
<th>Sender Name</th>
<th>Sender Id</th>
<th>Item Name</th>
<th>Item Id</th>
<th>Action</>
</tr>';
while($row=mysql_fetch_array($res)){
$ul=$row['ReceiverStaff'];
$aa=$row['SenderStaff'];
$bb=$row['SenderEmpId'];
$cc=$row['ItemName'];
$dd=$row['ItemId'];
echo "<tr>";
 echo "<td> ".$ul.' width="150"' >"</td>";
 echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
 echo '<td>';
  //echo'<a href=deletereq.php?id=' . $row["Req_ID"] . '>' . 'Detail' . '</a>';
  //echo '|';
   echo'<a rel="facebox" href=transfer.php?id=' . $row["ItemId"] . '>' . '<img src="../images/accept.jpg" height="30" width="50" title="Accept Request"' . '</a>';
   echo'<a rel="facebox" href=rejecttransfer.php?id=' . $row["ItemId"] . '>' . '<img src="../images/reject.jpg" height="30" width="50" title="Reject Request"' . '</a>';
 echo '</td>';
  echo "</tr>";
  }
echo "</table>";
}
?>