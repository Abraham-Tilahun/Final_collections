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
#content
{
	background-color: white;
	width: 59%;
	height: 600px;
	margin-left: 18%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
}</style>
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
				<div id="rightside">
					<div style="background-color: #508abb;color: #fff;">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo "Student ServiceDirectorate:<br>".$_SESSION['username'];
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
			<p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 5%;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: 1%;margin-left:1%;margin-right:10%;"><b>Well Come to <?php echo$_SESSION['role'].':'.$_SESSION['username']?></b></p>
				&nbsp;
				<div id="home-list" style="width:40%;background-color:#c4d0d2; margin-left:3%;">
					<p style="background-color:#262626;;color: #e4ebe7;width: auto;
					height: 8%;text-align: center;font-size: 1.2em;font-family:
					Times New Roman;margin-bottom: 10px;padding-top: 6px;margin-top: 4%;
					margin-left:0%;"><b> Apply Time Management Links</b></p>
		
		     <li><a href="../ssd/setapplydate.php">Set Student Apply Date</a></li>
	        <li><a href="../ssd/updateapplydate.php">Update Student Apply Date</a></li>
		
	                  <p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 8%;text-align: center;font-size: 1.2em;
					   font-family: Times New Roman;margin-bottom: 2%;padding-top: 6px;margin-top: 0%;margin-left:0%;"><b> view Elction Result Links</b></p>
	         <li><a href="../ssd/TViewElectionResult.php">Tewodros Election result</a> </li>	
	       <li><a href="../ssd/MViewElectionResult.php">Maraki Election Result</a> </li>
	       <li><a href="../ssd/GViewElectionResult.php">GC Election Result</a> </li>
	       <li><a href="../ssd/FViewElectionResult.php">Facil Election Result</a> </li>
	       <li><a href="../ssd/MZViewElectionResult.php">Melesi zenaw Election Result</a> </li>
		 	
		              </div>
					  
		         <div id="home-list" style="width:40%;background-color:#c4d0d2;margin-left:50%; margin-top:-40%;">
					<p style="background-color: #262626;;;color: #e4ebe7;width: auto; height: 8%;text-align: center;font-size: 1.2em;
					font-family: Times New Roman;margin-bottom: 2%;padding-top: 6px;margin-top: -10px;margin-left:0%;">
					<b> Election Time Management Links</b></p>
					
		    	<li><a href="../ssd/ElectionDate.php">Set Eelection Date</a></li>
             	<li><a href="../ssd/UpdateElectionDate.php">Update Eelection Date</a></li>
				
	                <p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 8%;text-align: center;font-size: 1.2em;
					font-family: Times New Roman;margin-bottom: 2%;padding-top: 6px;margin-top: 0%;margin-left:0%;">
					<b> Other Management links</b></p>
	           <li><a href="../ssd/Notice.php"title="Add notice"> <i class="fa fa-sarch">Add Notice</i></a> </li>
                <li><a href="../ssd/ssdnotification.php"title="send notification for Registerar ">Send Notification</a></li>
	            
				<li><a href="../ssd/ChangePassword.php"title="change your password">Change Password</a> </li>
				<p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 8%;text-align: center;font-size: 1.2em;
					font-family: Times New Roman;margin-bottom: 2%;padding-top: 6px;margin-top: 0%;margin-left:0%;">
					<b> View Management links</b></p>
	           <li><a href="../ssd/viewcandidate.php"title="view candidate">View Candidates</a> </li>
	           <li><a href="../ssd/viewvoter.php"title="view voter">View Voters</a> </li>
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