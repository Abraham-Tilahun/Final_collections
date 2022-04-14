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
	width: 80%;
	height: 600px;
	margin-left: 18%;
	margin-top: 7px;
	overflow-x: hidden;
	overflow-y: hidden;
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
include("../Registrar/registrarmenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="login">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo "Registrar:".$_SESSION['username'];
						echo "</b>";
						?>
					</div> 
					<div id="calander">
					<b style="color: #12d7ed;">Calander</b>
						<?php
						include("../calander.php");
						?>
					</div>    
				</div>
				<div id="content">
			
			<fieldset style="border: none;">
<?php
	$date=date('Y-m-d hh:mm');
	$sql1=mysql_query("SELECT * from notification where (notification.status='unread' and notification.to='Registrar')");
	$ro=mysql_num_rows($sql1);
	if($ro!='0')
	{
	$sql=mysql_query("SELECT * from notification where (notification.status='unread' and notification.to='Registrar')");
	while($row=mysql_fetch_array($sql))
	{
	?>
	<div id="msg" style="width: 90%;height:200px;margin-top: 25px;background-color:#dfdfdf;font-size: 20px;">
	<u><label style="font-size: 20px;margin-left: 40%;">
	<?php echo $row['subject']; ?></label></u>
	<p style="padding-left:3%;"><?php echo $row['message']; ?></p>
	<label style="margin-left: 70px;">
	<a href="viewnotification.php?send=<?php echo $row['id'];?>" style="text-decoration: none;height: 10px;background-color: #29d6bc;width: 100px;color: #fff4f4;margin-left:50%;margin-bottom:0%;">send know</a></label>
          <!-- echo"<font size='4' color='#00000b'><br><u><i>Posted By:".$row['sender']."</i></u>"."</p>";-->
   </div>
       <?php
	     }
			 if(isset($_GET['send']))
	                {
		             $block=$_GET['send'];
					 mysql_query("UPDATE notification SET status='read' where id='$block'");  
						header("location:stud.php");
				}
	}
	else
	{
		echo "<center>No Sended Notification!!!</center>";
		
	}
?>
</fieldset>
		    </div>
		<div id="footer">
			<?php
			include("../Registrar/footer.php");
			?>
	</div>
		    </div>
			 <a name="bottom"></a>

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