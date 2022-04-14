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
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Requestdate </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Req_ID </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>FullName </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>User_id </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>pro_name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>property_Id</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>pro_number</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Qauntity</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Status</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Con_Request</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>delete_request</th>
</tr>  
<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
$result = mysql_query("SELECT * FROM  request_property_dep where status='0' ");
while($row = mysql_fetch_array($result))
  {
$Req_Date=isset($_POST["Req_Date"]);
$Req_ID=isset($_POST["Req_ID"]);
$FullName=isset($_POST["FullName"]);
$User_id=isset($_POST["User_id"]);
$property_name=isset($_POST["property_name"]);
$property_Id=isset($_POST["property_Id"]);
$property_number=isset($_POST["property_number"]);
$Qauntity=isset($_POST["Qauntity"]);
$description=isset($_POST["description"]);
$status=$row['status'];
?>
<tr>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Req_Date;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Req_ID;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $FullName;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $User_id;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $property_name;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $property_Id;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $property_number;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Qauntity;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $description;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php
						if(($status)=='0')
						{
						?>
                       			  <a href="approvel_purchase.php?status=<?php echo $row['Req_ID'];?>" onclick="return confirm('Really you want approve <?php echo $description?>');">
                        		<img src="images/wrong.png" id="view" width="16" height="16" alt="" />not approved </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
                       			<a href="approvel_purchase.php?status=<?php echo $row['Req_ID'];?>" onclick="return confirm('Really you want disapproved (<?php echo $description?>)');"> 
                       			 <img src="images/right.png" width="16" id="view" height="16" alt=""  />approved</font></a>
                        <?php
						}
                        ?>
						
						<?php
						print("<td style='height:30px;' align = 'center' width = '1'>
						<a href = '?key=".$Req_ID."'><img src='images/actions-delete.png' title='Delete' onclick='isdelete();'></img></a></td>");?>				
 
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


	
	
	
 
