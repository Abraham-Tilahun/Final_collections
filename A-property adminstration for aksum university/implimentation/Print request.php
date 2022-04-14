<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<?php

//session_start();
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

echo '<div style="width:560px;height:750px; margin:0 auto; position:relative; 
border:2px solid rgba(0,0,0,0); -webkit-border-radius:2px; -moz-border-radius:5px;
 border-radius:3px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 9px rgba(0,0,0,0.4); 
 box-shadow:0 0 9px rgba(0,0,0,0.4); margin-top:5%;">';
echo '<table cellpadding="5" cellspacing="5" id="resultTable">
<tr bgcolor="#33FF00" style="margin-bottom:2px;">
<th>Item_name</th>
<th>Req_ID</th>
<th>User_id</th>
<th>Item_id</th>
<th>Qauntity</th>
<th>Req_Date</th>
<a href="javascript:Clickheretoprint()">Print on this request</a>
<div id="print_content">

</tr>';
while($row=mysql_fetch_array($res)){
$aa=$row['ItemId'];
$bb=$row['ItemName'];
//$cc=$row['Qauntity'];
//$dd=$row['Requestquanity'];
//$ee=$row['Request price'];
 echo "<tr>";
  echo "<td>" . $aa . "</td>";
  echo "<td>" . $bb . "</td>";
  //echo "<td>" . $cc . "</td>";
  //echo "<td>" . $dd . "</td>";
  //echo "<td>" . $ee . "</td>";
  
  //echo "</tr>";
   
 //}
 $sq="SELECT sum(quantity) from request_item WHERE ItemId='$aa' ";
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
//echo '<br>';
echo '<br>';
$result7= mysql_query("SELECT sum(quantity) FROM request_item ");
				                        while($row7 = mysql_fetch_array($result7))
				                           {
echo 'Toal request item: ';
echo $row7['sum(quantity)'];
}
//echo '<br>';
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