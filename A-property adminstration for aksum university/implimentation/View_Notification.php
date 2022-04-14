
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 5.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='View_Notification.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
</head><br><br><br><br>
<table align='center'border='4' >
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>FName </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>MName </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>LName </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>User Id </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Item name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Unitmeasure</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Request date </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Request Type</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Request BY</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:336699;'><font color='white' size='3'>Message</th>
</tr>  
<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
//$result = mysql_query("SELECT * FROM request  where status='2' ");
$result = mysql_query("SELECT * FROM request UNION SELECT * FROM request_disposal where status='2' ");

while($row = mysql_fetch_array($result))
  {
$Fname = $row['Fname'];
$Mname = $row['Mname'];
$Lname = $row['Lname'];
$User_id = $row['User_id'];
$Item_name=$row['Item_name'];
$unitmeasure=$row['unitmeasure'];
$Req_Date=$row['Req_Date'];
$description=$row['description'];
$request_type=$row['request_type'];
$requested_by=$row['requested_by'];
$status=$row['status'];

?>
<tr>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Fname;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Mname;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Lname;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $User_id;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Item_name;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $unitmeasure;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Req_Date;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $request_type;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $requested_by;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php
						if(($status)=='2')
						{
						?>
                       			 
                        		<img src="images/wrong.png" id="view" width="16" height="16" alt="" />Your request is approved </a>
                        <?php
						}
						if(($status)=='3')
						{
						?>
                       			
                       			 <img src="images/right.png" width="16" id="view" height="16" alt=""  /> Your request is approved</font></a>
								 
                        <?php
						}
                        ?>
						
						
												
						</td>	
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo '';?></td>
 <!--<?php print("<td style='height:30px;' align = 'center' width = '1'><a href = 'delatenotification.php?key=$Req_ID'>
 <img width='15px' height='15px' src = 'images/actions-delete.png' title='Delete' onclick='isdelete();'></img></a></td>");?>-->						
 
<?php
  }
print( "</table>");

 //}

?>
</td>
		</tr>
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


	
	
	
 
