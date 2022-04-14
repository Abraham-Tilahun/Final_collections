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
#calander
{
	margin-top: 0px;
	padding-top: 0px;
	width: auto;
	height: 190px;
}
	#login
{
	margin-top: 0px;
	background-color: #718076;
	height: 250px;
	width: auto;
}
		.textbox
	{
		height: 30px;
		width: 220px;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		border: none;
		
	}
	#btn
	{
		background-color: #2692d9;
		height: 50px;
		width: 170px;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
		margin-top: 20px;
	}
	#btn:hover
	{
		background-color: #808c97;
		height: 50px;
		width: 170px;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
		margin-top: 20px;
	}
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
				<p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 5%;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: 1%;margin-left:10%;margin-right:40%;"><b>Well Come to <?php echo$_SESSION['role'].':'.$_SESSION['username']?></b></p>
				&nbsp;
				<div id="home-list" style="width:50%;background-color:#c4d0d2; margin-left:10%;">
					<p style="background-color:#262626;;color: #e4ebe7;width: auto;
					height: 8%;text-align: center;font-size: 1.2em;font-family:
					Times New Roman;margin-bottom: 10px;padding-top: 6px;margin-top: 4%;
					margin-left:0%;"><b> Registrar Management Links</b></p>
    	<li><h1><a href="../Registrar/ChangePassword.php"title="change your password">Change Password</a></h1></li>
		    <?php
	     $sql = mysql_query("SELECT * from notification where (notification.status='unread' and notification.to='Registrar')");
		$coun = mysql_num_rows($sql);
		if($coun!=0)
		{
		?>
    <li><h1><a href="../Registrar/viewnotification.php"title="view notification send from SSD">Notification<font color="yellow">[<?php echo $coun;?>]</font></a></h1></li>
    <?php
    }
    else
    {
				?>
    <li><h1><a href="../Registrar/viewnotification.php"title="view notification send from SSD">Notification<font color="yellow">[0]</font></a></h1></li>
    <?php
	}
    
    ?>
	<li><h1><a href="../Registrar/deletenotification.php"title="view notification send from SSD">Delete Notification</a></h1></li>
  
		              </div>

		    </div>
		<div id="footer">
			<?php
			include("../Registrar/footer.php");
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