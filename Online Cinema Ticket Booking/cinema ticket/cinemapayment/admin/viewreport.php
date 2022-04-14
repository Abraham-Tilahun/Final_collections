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
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
<?php
include("../includes/db.php");
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM reservation WHERE confirmation='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo 'Dlivery Date: '.$row['delivery_date'].'<br>';
				echo 'Name: '.$row['firstname'].' '.$row['lastname'].'<br>';
				echo 'Address: '.$row['delivery_type'].' '.$row['kifleketema'].' Kebele '.$row['kebele'].'<br>';
				echo 'Email: '.$row['email'].'<br>';
				echo 'Mobile number: '.$row['mobileno'].'<br>';
				echo 'Home Phone number: '.$row['homephoneno'].'<br>';
				echo 'Street number: '.$row['street'].'<br>';
				echo 'House number: '.$row['houseno'].'<br>';
				echo 'Dlivery Time: '.$row['time'].'<br>';
				echo 'Confirmation: '.$row['confirmation'].'<br>';
				echo 'Bank Branch: '.$row['payment'].'<br>';
				
				
			
	?> 
<table cellpadding="5" cellspacing="0" id="resultTable" border="1" width="100%">
		<tr>
			<td> <strong>Name</strong> </td>
			<td> <strong>Quantity</strong> </td>
			<td> <strong>Price</strong> </td>
			<td> <strong>Total</strong> </td>
		</tr>
	<?php
		
		$id=$_GET['id'];
		$results = mysql_query("SELECT * FROM orders WHERE confirmation='$id'");
		while($rows = mysql_fetch_array($results))
			{
				echo '<tr class="record">';
				echo '<td>'.$rows['product'].'</td>';
				echo '<td>'.$rows['qty'].'</td>';
				echo '<td>'.$rows['price'].'</td>';
				echo '<td>'.$rows['total'].'</td>';
				echo '</tr>';
			}
	?>
	<?php
		$id=$_GET['id'];
		$resulta = mysql_query("SELECT * FROM reservation WHERE confirmation='$id'");
		while($rowa = mysql_fetch_array($resulta))
			{
				echo '<tr class="record">';
				echo '<td colspan=3 align=right><strong>Total Payable</strong></td>';
				echo '<td>'.$rowa['payable'].'</td>';
				echo '</tr>';
			}
	?> 
	<?php
	}
	?>
</table>
</div>