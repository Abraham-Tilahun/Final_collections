<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
include("../Database/connection.php");
?>
<html>
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>
<head>
<title>Online Stuidenet Union Voting System</title>
<style>
#content
{
	background-color: white;
	height: 600px;
	margin-left: 18%;
	margin-top: 7px;
    overflow-x: hidden;
	overflow-y: hidden;
    width:80%;
}
</style>
</head>
<body>
<div id="container">
		<div id="header">
		<?php
		include("../header.php");
	   ?>
		</div>
		<div id="menu">
		<?php
include("../ssd/ssdmenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("../ssd/ssdsidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
			<div id="content">
			   <a name="bottom"></a>
<?php
	$date=date('Y-m-d hh:mm');
	$sql1=mysqli_query($conn,"SELECT * from notification where (notification.status='unread' and notification.to='SSD')");
	$ro=mysqli_num_rows($sql1);
	if($ro!='0')
	{
	$sql=mysqli_query($conn,"SELECT * from notification where (notification.status='unread' and notification.to='SSD')");
	while($row=mysqli_fetch_array($sql))
	{
	?>
	<div style="width: 90%;margin-top: 3%;background-color:#dfdfdf;font-size: 110%;margin-left: -2%;">
   <u><label style="font-size: 110%;margin-left: 30%;">
	<?php echo $row['subject']; ?></label></u>
	<p style="padding-left:3%;"><?php echo $row['message']; ?></p>
	<label style="margin-left: 80%;"><a href="viewnotification.php?send=<?php echo $row['id'];?>" style="text-decoration: none;height: 10px;background-color: #29d6bc;width: 100px;color: #fff4f4;">Delete</a></label>
          <!-- echo"<font size='4' color='#00000b'><br><u><i>Posted By:".$row['sender']."</i></u>"."</p>";-->
   </div>
       <?php
	     }
			 if(isset($_GET['send']))
	                {
		             $block=$_GET['send'];
					 mysql_query("delete from notification where id='$block'");  
						header("location:viewnotification.php");
				}
	}
	else
	{
		echo "<center>No Sended Notification!!!</center>";
		
	}
?>

		    </div>
		<div id="footer">
			<?php
			include("../footer.php");
			?>
	</div>
		    </div>
		<div id="footer">
			<?php
			include("../ssd/footer.php");
			?>
			<a name="bottom"></a>
	</div>
	<?php
	}
	else
	{
	?>	
	<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../home.php');
 </script>
 <?php
	}
   ?>
	</div>
</body>
</html>