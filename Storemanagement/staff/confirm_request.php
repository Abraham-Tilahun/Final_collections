<?php
if (isset($_POST['Submit']))
{
	$a=$_POST['sel'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from transfereditem where ReceiverStaff='$a' && transferstatus='Waiting'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not fond";
}
else

 
 echo '<div style="width:700px; margin:0%; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:2px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">
<tr  style="i">the following item(s) is(are)On Request to you</tr>
<tr style="margin-bottom:5px;">
<th width="150">Sender Name</th>
<th>Sender Id</th>
<th>Item Name</th>
<th>Item Id</th>
<th>Quantity</th>
<th>Action</th>
</tr>';
while($row=mysql_fetch_array($res)){
$aa=$row['SenderStaff'];
$bb=$row['SenderEmpId'];
$cc=$row['ItemName'];
$dd=$row['ItemId'];
$ee=$row['Quantity'];
echo "<tr>";
 echo '<td> <img src="images/'.$aa.'" width="150" ></td>';
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $dd . "</td>";
 echo "<td>" . $ee . "</td>";

  
  echo "</tr>";
  }
echo "</table>";
}
?>