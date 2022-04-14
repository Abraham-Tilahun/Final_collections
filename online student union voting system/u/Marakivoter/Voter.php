	<?php
	session_start();
	if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
	include("../Database/connection.php");
	?>
<html>
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>
<link href="../themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<script src="../themes/4/js-image-slider.js" type="text/javascript"></script>
<head>
<title>Online Stuidenet Union Voting System</title>
<style>

#content{
	background-color: white;
	width: 60%;
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
									<div id="rightside">
					<div style="background-color: #2d6fd2;color: #fff;">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo "Voter:".$_SESSION['username'];
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
			<table align="left" style="border:1px solid gray;border-radius:12px;height:50%;width:50%;"><tr><td>
           <div id="sliderFrame">
        <div id="slider" >
            <img src="../IMG/logo.jpg" />
            <img style="../width:5%;" src="IMG/voti1.jpg" />
            <img src="../IMG/slider-3.jpg" />
            <img src="../IMG/slider-4.jpg" />
			<img src="../IMG/slider-5.jpg" />
			<img src="../IMG/slider-6.jpg" />
			<img style="width:10%;" src="../IMG/votei.jpg" />
        </div>
    </div>

        </td></tr></table>
				<div id="home-list" style="width:50%;background-color:#c4d0d2; margin-left:10%;">
					<p style="background-color:#262626;;color: #e4ebe7;width: auto;
					height: 8%;text-align: center;font-size: 1.2em;font-family:
					Times New Roman;margin-bottom: 10px;padding-top: 6px;margin-top: 85%;
					margin-left:0%;"><b> Voter Management Links</b></p>
					<li style="border-top: 1px solid white;"><a href="../Marakivoter/viewcandidate.php" title="view candidate">View Candidates</a></li>
  	<li style="border-top: none;"><a href="../Marakivoter/vote.php" title="vote your representative">Vote</a></li>
	<li style="border-top: 1px solid white;"><a href="../Marakivoter/ViewElectionResult.php"title ="view election result">View Election Result</a></li>
	<li><a href="../Marakivoter/votepresidantforallcampus.php"title="vote presidant for all campus">vote presidant</a></li>
	<li style="border-top: 1px solid white;"><a href="../Marakivoter/ChangePassword.php"title="change your password">Change Password</a></li>
	<li style="border-top: 1px solid white;"><a href="../Marakivoter/viewvoter.php" title="view voter">view voter</a></li>

		         </div>
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