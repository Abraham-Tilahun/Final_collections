<?php
//session_start();
	//$a=$_POST['b'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select * from request where requeststatus='Approved' && ApprovedItems='Waiting' ";
$res=mysql_query($sql) or die("query error".mysql_error());
if($res=='0'){
echo "No request is on the Waiting state!!!";
}
else
echo '<div style="width:570px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:0%;"> <br>';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">
<tr  style="margin-bottom:5px;">
<th>EmpId</th>
<th>Employee Name</th>
<th>ItemId</th>
<th>Item Name</th>
<th>qauntity</th>
<th>action</th>
</tr>';
while($row=mysql_fetch_array($res)){
$aa=$row['Req_ID'];
$bb=$row['EmpId'];
$ee=$row['Employee Name'];
$cc=$row['ItemId'];
$ff=$row['Item Name'];
echo "<tr>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $ee . "</td>";
  echo "<td>" . $cc . "</td>";
  echo "<td>" . $ff. "</td>";
  echo '<td>';
  //echo'<a href=deletereq.php?id=' . $row["Req_ID"] . '>' . 'Detail' . '</a>';
  //echo '|';
 echo'<a rel="facebox" href=checked.php?id='. $row["Req_ID"] . '>' . 'Borrow' . '</a>';
  echo '</td>';
  echo "</tr>";
   
  }
echo "</table>";
mysql_close($con);
?>