
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
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>User_id </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Item_name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Item_id</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Qauntity</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Req_Date </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Status</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Approve_Request</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>DisApprove_request</th>
</tr>  
<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
$result = mysql_query("SELECT * FROM   request_property_dep where status='0' ");
while($row = mysql_fetch_array($result))
  {
$User_id = $row['User_id'];
$Item_name=$row['Item_name'];
$Item_id=$row['Item_id'];
$Qauntity=$row['Qauntity'];
$Req_Date=$row['Req_Date'];
$description=$row['description'];
$status=$row['status'];
?>
<tr>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $User_id;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Item_name;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Item_id;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Qauntity;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Req_Date;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $description;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php
						if(($status)=='0')
						{
						?>
                       			  <a href="approval_req.php?status=<?php echo $row['User_id'];?>" onclick="return confirm('Really you want approve <?php echo $description?>');">
                        		<img src="images/wrong.png" id="view" width="16" height="16" alt="" />not approved </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
                       			<a href="approval_req.php?status=<?php echo $row['User_id'];?>" onclick="return confirm('Really you want disapproved (<?php echo $description?>)');"> 
                       			 <img src="images/right.png" width="16" id="view" height="16" alt=""  />approved</font></a>
                        <?php
						}
                        ?>
						
						<?php
						print("
		           <td> DisApprove_request</td>");?>				
 
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


	
	
	
 
