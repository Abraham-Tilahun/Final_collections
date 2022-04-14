<?php

session_start();
	//$a=$_POST['b'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);
$sql="select * from new_item ";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else

echo '<div style="width:500px; margin:0 auto; position:relative; 
border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="20" id="resultTable">

<tr bgcolor="#33FF00" style="margin-bottom:5px;">
<th>Item Id</th>
<th>Item Name</th>
<th>Available Item</th>
<th>Borrowed quantity</th>
<th>Returned quanity</th>

</tr>';
while($row=mysql_fetch_array($res)){
$aa=$row['ItemId'];
$bb=$row['ItemName'];
$cc=$row['Qauntity'];
//$dd=$row['quantity'];
//$ee=$row['quantitys'];

echo "<tr>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  echo "<td>" . $cc . "</td>";
  //echo "<td>" . $dd . "</td>";
 // echo "<td>" . $ee . "</td>";
  
  //echo "</tr>";
   
 //}
 $sq="SELECT sum(quantity) from borrow_item WHERE ItemId='$aa' ";
$rs=mysql_query($sq);
while($row=mysql_fetch_array($rs)){

$ee=$row['sum(quantity)'];
//$ee=$row['quantitys'];

//echo "<tr>";
  
echo '<br>';
  echo "<td>" . $ee . "</td>";
 // echo "<td>" . $ee . "</td>";
  
  //echo "</tr>";
   
  
 }
 
 
  $sq="SELECT sum(quantitys) from returned_item WHERE ItemId='$aa' ";
$rs=mysql_query($sq);
while($row=mysql_fetch_array($rs)){

$dd=$row['sum(quantitys)'];
//$ee=$row['quantitys'];

//echo "<tr>";
  
  echo "<td>" . $dd . "</td>";
 // echo "<td>" . $ee . "</td>";
  
  //echo "</tr>";
   
  }}
  $result5 = mysql_query("SELECT sum(Qauntity) FROM new_item ");
				                        while($row5 = mysql_fetch_array($result5))
				                           {
echo 'Toal available item: ';
echo $row5['sum(Qauntity)'];
}
echo '<br>';
echo '<br>';
$result7= mysql_query("SELECT sum(quantity) FROM borrow_item ");
				                        while($row7 = mysql_fetch_array($result7))
				                           {
echo 'Toal borrowed item: ';
echo $row7['sum(quantity)'];
}
echo '<br>';
echo '<br>';
$result6 = mysql_query("SELECT sum(quantitys) FROM returned_item ");
				                        while($row6 = mysql_fetch_array($result6))
				                           {
echo 'Toal return item: ';
echo $row6['sum(quantitys)'];
}
echo "</table>";
mysql_close($con);
?>