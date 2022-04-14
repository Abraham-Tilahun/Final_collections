
  <!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title> </title>
	<link rel="stylesheet" href="src/style.css" type="text/css" media="screen" charset="utf-8">
<script src="../argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="src/js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="src/lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>
<div style="background-color:#cccccc;width:955px; margin:0 auto;margin-top: 20px;">
<table cellpadding="0" cellspacing="4" id="resultTable" style="width:800px;">
<font size="4" color="#808080"><h3 align="left">Well Come To Account Manage page</u></h3><br> 
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>User Id</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Firest Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Lame Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>User Name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>password</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Phone Number</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Email Address</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>User Type</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>enabled</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='3'>Edit</th>
</tr>    
<?php
$connect=mysql_connect("localhost","root","");
if(!$connect){
die("error connection to db server".mysql_error());
}
$dbselect=mysql_select_db("storem", $connect);
if(!$dbselect){
die("error in selecting db ".mysql_error());
}
$result = mysql_query("SELECT * FROM accou");
while($row = mysql_fetch_array($result))
  {
$User_id=isset($_POST['$User_id']);
$ctrl= $row['User_id'];
$Fname=isset($_POST['Fname']);
$Lname=isset($_POST['Lname']);
$username=isset($_POST['username']);
$password=$row['password'];
$email_address=$row['email_address'];
$usertype=$row['usertype'];
$phone_number=$row['Phone_number'];
$enabled=isset($_POST['$enabled']);
//$enabled=$row['enabled'];
?>
<tr>
<td><?php echo $row['User_id'];?></td>
<td><?php echo $row['Fname'];?></td>
<td><?php echo $row['Lname'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $password;?></td>
<td><?php echo $phone_number ?></td>	
<td><?php echo $row['email_address'];?></td>	
<td><?php echo $usertype;?></td>
<td><?php
						if(($enabled)=='0')
						{
						?>
                       			 <a href="status.php?enabled=<?php echo $row['User_id'];?>" onclick="return confirm('Really you disabled (<?php echo $username?>)');">
                        		<img src="images/activate.png" id="view" width="16" height="16" alt="" />enabled </a>
								
                        <?php
						}
						if(($enabled)=='1')
						{
						?>
                       			 <a href="status.php?enabled=<?php echo $row['User_id'];?>" onclick="return confirm('Really you activate (<?php echo $username?>)');"> 
                       			 <img src="images/deactivate.png" width="16" id="view" height="16" alt=""  />disabled</a>
                        <?php
						}
                        ?>
						</td>
						<?php
						print("<td style='height:30px;'><a href = 'modifyuser.php?User_id=".$ctrl."'>
						<img src = 'images/edit.jpg' width='15px' height='15px' title='Edit' ></img></a></td>
		               <td style='height:30px;' align = 'center' width = '1'>
					   
					   </img></a></td>"); 
					   ?>

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
