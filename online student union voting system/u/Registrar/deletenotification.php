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
#leftside
{
	width: 18%;
	height: 600px;
	float: left;
	margin-left: 0px;
	margin-top: 0%;
	margin-right: 10px;
}
#msg{
	overflow-x: scroll;
	overflow-y: scroll;
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
				   <a name="bottom"></a>
			<div id="content">
			<fieldset style="border: none;">
<?php
	$date=date('Y-m-d hh:mm');
	$sql1=mysql_query("SELECT * from notification where (notification.status='unread' or notification.status='read'  and notification.to='Registrar')");
	$ro=mysql_num_rows($sql1);
	if($ro!='0')
	{
	$sq2=mysql_query("SELECT * from notification where (notification.status='unread'  or notification.status='read' and notification.to='Registrar')");
	while($row=mysql_fetch_array($sq2))
	{
	?>
	<div id="msg" style="width: 500px;height:200px;margin-top: 25px;background-color:#dfdfdf;font-size: 20px;">
	<u><label style="font-size: 20px;margin-left: 70px;">
	<?php echo $row['subject']; ?></label></u>
	<p><?php echo $row['message']; ?></p>
	<label style="margin-left: 70px;">
	<?php
	$_SESSION['id']=$row['id'];
	$ctrl=$_SESSION['id'];
	
	echo"<a href = 'deletenotification.php?send=".$ctrl."'\" onClick=\"return confirm('Are you sure you want to delete?')\"><img width='25px' height='25px' src = '../IMG/remove.png' title='remove'></img></a></td></label>";
			             
?>

          <!-- echo"<font size='4' color='#00000b'><br><u><i>Posted By:".$row['sender']."</i></u>"."</p>";-->
   </div>
       <?php
	     $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="uogosuvs"; // Database name 
$tbl_name="notification"; // Table name 
$con = mysqli_connect('localhost', 'root', '','uogosuvs');
// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");
	                 if(isset($_GET['send']))
	                {
		             $block=$_REQUEST['send'];
	
					 $sql="DELETE FROM $tbl_name WHERE id='{$block}'";
$result=mysqli_query($con,$sql);

// if successfully deleted
if($result){
   
echo " succesfully deleted";


}

else {
echo "ERROR";
} 
	}
	//	header("location:deletenotification.php");
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
		<div id="footer">
			<?php
		include("../Registrar/footer.php");
		
			?>
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