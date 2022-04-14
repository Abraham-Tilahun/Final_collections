
<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
 //session_start();
if(isset($_SESSION['Req_ID']))
 {
  $mail=$_SESSION['Req_ID'];
 } else {
 ?>
 <?php
 }
 ?>
<head>
</head><br><br><br><br>
<table align='center'border='1' >
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='5'>User_id </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='5'>Item_name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='5'>Req_ID</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='5'>Item_id</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='5'>Item_id</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='5'>Qauntity</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='5'>Req_Date </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='5'>Status</th>

</tr>  
<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
$result = mysql_query("SELECT * FROM  request where status='1' ");
while($row = mysql_fetch_array($result))
  {
$ctrll = $row['User_id'];
$Item_name=$row['Item_name'];
$Req_ID=$row['Req_ID'];
$Item_id=$row['Item_id'];
$Qauntity=$row['Qauntity'];
$Req_Date=$row['Req_Date'];
$status=$row['status'];
?>
<tr>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $User_id;?></td>

<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Item_name;?></td>

<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Req_ID;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Item_id;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Qauntity;?></td>
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo $Req_Date;?></td>

 <td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php
						if(($status)=='0')
						{
						?>
                       			 
                        		<img src="IMG/wrong.png" id="view" width="16" height="16" alt="" />not approved </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
                       			
                       			 <img src="IMG/right.png" width="16" id="view" height="16" alt=""  />approved</font></a>
                        <?php
						}
                        ?>
						</td>
						
<td style='height:30px;	color:#000;	font-weight:bold;background-color:white;'><font color='black'><?php echo '';?></td>
 <!--<?php print("<td style='height:30px;' align = 'center' width = '1'><a href = 'delatestats.php?key=$ctrll'><img src='images/icon/delete.gif' title='Delete' onclick='isdelete();'></img></a></td>");?>-->
		</tr>
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


	
	
	
 
