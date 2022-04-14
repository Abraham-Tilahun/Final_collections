

<?php
$conn=mysql_connect("localhost","root","");
$db1=mysql_select_db("pharmacy",$conn);
if(isset($_POST['search']))
  {
   $custid=$_POST['cid'];
  
	
$result = mysql_query("SELECT * FROM solddrug where customerid='{$custid}'  AND status='true'");
if(mysql_num_rows($result)>0)
	{
echo"&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<br><br>";

echo "<table id='vtable' style='width:700px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>";
echo"<br>";
echo"<tr align='center'><td colspan='9' align='center' bgcolor='white'><img src='images/photo.jpg' width='50' height='50'></font></td></tr>";
echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Ethiopia Red cross society</font></td></tr>";
echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Pharmacy Drug Store</font></td></tr>";
echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Location: Debre Tabor</font></td></tr>";
echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>Address: Phone:0937340026 &0935857649</font></td></tr>";echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'> Email:redcrosspharm@gmail.com  </font></td></tr>";
echo"<tr align='cente'><td colspan='9' align='center' bgcolor='white'><font color='red' face='monotype corsiva' size='5'>cashiers Name ..............signature........... </font></td></tr>";
echo"<tr>";
echo"<br><br>";
echo"<td bgcolor='#FFFFCC'><font color='red'>customer&nbsp;-&nbsp;id</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Name-&nbsp;&nbsp;&nbsp;Of-&nbsp;&nbsp;&nbsp;customer</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Drug-&nbsp;Name</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Company-&nbsp;Name</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Quantity</font></td>";
echo"<td bgcolor='#FFFFCC'><font color='red'>Unit-&nbsp;Price</font></td>";
echo"<td height='40' bgcolor='white'><font color='red'>Total</font></td>";

echo"</tr>";
$total = 0;
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  $bach=$row['bachnumber'];
  $bach=mysql_query("select * from drug where bachnumber='{$bach}'");
  $col=mysql_fetch_array($bach);

  $cust=$row['customerid'];
  $cid=mysql_query("select * from customer where customerid='{$cust}'");
  $r=mysql_fetch_array($cid);
 $cust=$r['customerid'];
$ab=$r['firstname'];
$mn=$r['midlename'];
$ln=$r['lastname'];
echo "<td>";
echo $cust;
echo "</td>";
echo "<td>";
echo $ab;
echo"&nbsp;&nbsp;&nbsp;"; 
echo $mn;
echo"&nbsp;&nbsp;&nbsp;";
echo $ln;
echo "</td>";
echo "<td>" . $col['drugname'] . "</td>";
 echo "<td>" . $col['companyname'] . "</td>";
 echo "<td>" . $row['quantity'] . "</td>";
 echo "<td>" . $col['unitprice'] . "</td>";
echo"<td>" .$row['quantity'] * $col['unitprice']. "</td>";
$total = $total + ($row['quantity'] * $col['unitprice']);
	
  $up1=mysql_query("UPDATE solddrug SET status='true' WHERE customerid = '$custid' ");
 
  echo "</tr>";
  }
	
  echo"<br>";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<font face='monotype corsiva' size='5' color='red'>";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo" <input type='button' value='Print Page' Onclick='window.print()' align='center' style='margin-center:-420px'/></font>";
echo"<br><br>";

echo "</table><br>";
	
echo "<div style='padding-left:3em'><font size='4px' align='center'>";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<font color='black'>Total Price</font>&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' value= $total readonly size=5>";
	
	}
  else
	{
   echo '<center>';
  echo '<font face="monotype corsiva" size="6"color="red">Such id is already searched!!</font>'; 
  
   echo '</center>';
   }
  }
  
mysql_close($conn);
?>
<a href="cashier.php">back</a>