
   <?php
	mysql_select_db('storem');
    mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
if(isset($_SESSION['User_id']))
 {
  $mail=$_SESSION['User_id'];
 } else {
 ?>
 <?php
 }
 ?>

<?php

$User_id=isset($_SESSION['User_id']);
$result=mysql_query("select * from accou where User_id='$User_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
 $FullName=isset($_POST ['FullName']); 
 $password=isset($_POST['password']); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 5.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='editaccount.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
</head>
<body>
<table  border="0" align="center" width="750px">
<font size="4" align="center"><a href="adminpage.php" target="adminpage">Back to Admin page </a> 
<table align="center" id="insides" width="850px">
<tr>
<!--Sub menus-->
<tr>
<h1><td><img src="images/default.png" width="120" height='120'>&nbsp;<a href="editaccount.php">User Account management</a></td></h1>
</tr>
</table>
<table align='center'border='6' >
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>User Id</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Firest Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Midle Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Lame Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>User Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>password</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Phone Number</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Email Address</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Gender</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>User Type</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>enabled</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Edit</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>delete</th>
</tr> 
<?php
$result = mysql_query("SELECT * FROM accou");
while($row = mysql_fetch_array($result))
  {
$User_id = $row['User_id'];
$Fname = $row['Fname'];
$Mname = $row['Mname'];
$Lname = $row['Lname'];
$username = $row['username'];
$password = $row['password'];
$password=$row['password'];
$Phone_number=$row['Phone_number'];
$email_address=$row['email_address'];
$Gender=$row['Gender'];
$usertype=$row['usertype'];
$enabled=$row['enabled'];
?>
<tr>
<td><?php echo $row['User_id'];?></td>
<td><?php echo $row['Fname'];?></td>
<td><?php echo $row['Mname'];?></td>
<td><?php echo $row['Lname'];?></td>
<td><?php echo $username."&nbsp;".$username;?></td>
<td><?php echo $password;?></td>
<td><?php echo $Phone_number;?></td>
<td><?php echo $email_address;?></td>
<td><?php echo $Gender;?></td>
<td><?php echo $usertype;?></td>
	
<td><?php
						if(($enabled)=='0')
						{
						?>
                       			 <a href="status.php?enabled=<?php echo $row['User_id'];?>" onclick="return confirm('Really you activate (<?php echo $username?>)');">
                        		<img src="images/deactivate.png" id="view" width="16" height="16" alt="" />disabled </a>
                        <?php
						}
						if(($enabled)=='1')
						{
						?>
                       			 <a href="status.php?enabled=<?php echo $row['User_id'];?>" onclick="return confirm('Really you disabled (<?php echo $username?>)');"> 
                       			 <img src="images/activate.png" width="16" id="view" height="16" alt=""  />enabled</a>
                        <?php
						}
                        ?>
						</td>
						<?php
						print("<td style='height:30px;'><a href = 'modifyuser.php?User_id=".$User_id."'>
						<img src = 'images/edit.jpg' width='15px' height='15px' title='Edit' ></img></a></td>
		           <td style='height:30px;' align = 'center' width = '1'><a href = 'deleteaccount.php?key=".$User_id."'>
		          <img width='15px' height='15px' src = 'images/actions-delete.png' title='Delete' onclick='isdelete();'></img></a></td>");?>

		</tr>
<?php
  }
print( "</table>");

?>
</td>
</tr>
</table>
<!--End Body of section-->
</table>
<!--Footer-->



<!--End of Footer-->
</body>
</html>
