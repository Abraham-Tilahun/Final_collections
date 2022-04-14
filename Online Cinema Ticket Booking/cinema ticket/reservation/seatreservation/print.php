<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title></title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
Print and present this details upon boarding the Movie<br><br>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<strong>Ticket Reservation Details For Hibret Hotel Cinema</strong><br><br>
<?php
include('db.php');
$id=$_GET['id'];
$setnum=$_GET['setnum'];
$result = mysql_query("SELECT * FROM customer WHERE transactionum='$id'");
while($row = mysql_fetch_array($result))
	{
		echo 'Transaction Number: '.$row['transactionum'].'<br>';
		echo 'Name: '.$row['fname'].' '.$row['lname'].'<br>';
		echo 'Address: '.$row['address'].'<br>';
		echo 'Contact: '.$row['contact'].'<br>';
		echo 'Payable: '.$row['payable'].'<br>';
	}
$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$id'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['movie_type'];
		echo 'MovieName and Type of Movie: ';
		$resulta = mysql_query("SELECT * FROM movie_name WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo $rowa['movie_name'].'     :'.$rowa['type'];
			$time=$rowa['time'];
			}
		echo 'Time of seen: '.$time.'<br>';
		echo '<br>';
		echo 'Seat Number: '.$setnum.'<br>';
		echo 'Date Of Reserved: '.$rows['date'].'<br>';
		
	}
?>
</div>
<a href="../../index.php">Home</a>