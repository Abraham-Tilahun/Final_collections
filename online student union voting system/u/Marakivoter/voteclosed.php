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
	margin-top: 5px;
	width: auto;
	height: 190px;
}

#content{
	background-color: white;
	width: 80%;
	height: 600px;
	margin-left: 18%;
	margin-top: 0%;
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
include("../Marakivoter/votermenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("../Marakivoter/votersidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
								   <a name="bottom"></a>
			<img src="userphoto/onlinevotingclosed.jpg" width="100%" height="100%"/>
		    </div>
		<div id="footer">
			<?php
			include("../Marakivoter/footer.php");
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
   <a name="bottom"></a>
	</div>
</body>
</html>