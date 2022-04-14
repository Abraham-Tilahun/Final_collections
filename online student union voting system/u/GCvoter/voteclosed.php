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
	margin-top: 0%;
	overflow-x: scroll;
	overflow-y: scrool;
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
include("../GCvoter/Votermenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("../GCvoter/votersidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
			<img src="userphoto/onlinevotingclosed.jpg" width="100%" height="100%"/>
		    </div>
		<div id="footer">
			<?php
			include("../GCvoter/footer.php");
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