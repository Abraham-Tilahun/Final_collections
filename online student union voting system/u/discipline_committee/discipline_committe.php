<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
include("../Database/connection.php");
?>
<html>
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
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
include("../discipline_committee/header.php");
		?>
		</div>
		<div id="menu">
		<?php
include("../discipline_committee/discipline_committeemenu.php");
		?>
	</div>

					<div id="leftside">
					<div id="login">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo "discipline_committee:".$_SESSION['username'];
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
<p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 5%;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: 1%;margin-left:10%;margin-right:40%;"><b>Well Come to <?php echo$_SESSION['role'].':'.$_SESSION['username']?></b></p>
				&nbsp;
				<div id="home-list" style="width:50%;background-color:#c4d0d2; margin-left:10%;">
					<p style="background-color:#262626;;color: #e4ebe7;width: auto;
					height: 8%;text-align: center;font-size: 1.2em;font-family:
					Times New Roman;margin-bottom: 10px;padding-top: 6px;margin-top: 4%;
					margin-left:0%;"><b> Discipline Committee Management Links</b></p>
<li><a href="../discipline_committee/ChangePassword.php"title="change your password">Change Password</a></li>
<li><a href="../discipline_committee/Deciplne.php"title="add displine student">Add discipline student</a></li>
		         </div>
		    </div>
		<div id="footer">
			<?php
			include("../discipline_committee/footer.php");
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