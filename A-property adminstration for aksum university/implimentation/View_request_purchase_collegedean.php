
<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
 //session_start();
if(isset($_SESSION['User_id']))
 {
  $mail=$_SESSION['User_id'];
 } else {
 ?>
 <?php
 }
 ?>
<head>
</head><br><br><br><br>
<table align='center'border='1' >
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>User Name </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>User Id </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Item name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Unitmeasure</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Qauntity</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Request date </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>description </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Request Type</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Request BY</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Status</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Approve Request</th>
</tr>     
<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
$result = mysql_query("SELECT * FROM request_purchase where status='0' ");
while($row = mysql_fetch_array($result))
  {
$username = $row['username'];
$User_id = $row['User_id'];
$Item_name=$row['Item_name'];
$unitmeasure=$row['unitmeasure'];
$Qauntity=$row['Qauntity'];
$Req_Date=$row['Req_Date'];
$description=$row['description'];
$request_type=$row['request_type'];
$requested_by=$row['requested_by'];
$status=$row['status'];
mysql_query("insert into  request VALUES 
('$username','$User_id','$Item_name', '$unitmeasure','$Qauntity','$Req_Date','$description','Request_property','requested_by')");
?>
<tr>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $username;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $User_id;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Item_name;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $unitmeasure;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Qauntity;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Req_Date;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $description;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $request_type;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $requested_by;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $status;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php
						if(($status)=='0')
						{
						?>
                       			  <a href="Approve_vic.php?status=<?php echo $row['User_id'];?>" onclick="return confirm('Really you want approve <?php echo $description?>');">
                        		<img src="images/wrong.png" id="view" width="16" height="16" alt="" />not approved </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
                       			<a href="Approve_vic.php?status=<?php echo $row['User_id'];?>" onclick="return confirm('Really you want disapproved (<?php echo $description?>)');"> 
                       			 <img src="images/right.png" width="16" id="view" height="16" alt=""  />approved</font></a>
                        <?php
						}
                        ?>
						
						
                     <?php
  }
print( "</table>");

 //}

?>
</td>
</tr>
</table>
<!--End Body of section-->
</table>
<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";

 ?>
</html>


	
	
	
 
