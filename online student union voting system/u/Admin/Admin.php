<?php
session_start();
include("../Database/connection.php");
?>
<html>
<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>
<head>
<title>Online Stuidenet Union Voting System</title>
<style>
#content
{
	background-color: white;
	width: 60%;
	margin-left: 18%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
}

#calander
{
	margin-top: 0%;
	padding-top: 0px;
	width: auto;
	height: 190px;
}
</style>

</head>
<body>
<div id="container" style=" width:94%;">
		<div id="header" style="width:100%; border: 25%;">
			<?php
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
			{
				include("../header.php");
			   ?>
				</div>
				<div id="menu" style="width:98%">
				<?php
		include("../Admin/Adminmenu.php");
				?>
			</div>

						<div id="leftside">
						
							<div id="applyside">
							
								<?php
									include("../Admin/Adminsidemenu.php");
							   ?>	
							</div>    
						</div>
							<div id="rightside">
							<div style="background-color: #2d6fd2;color: #fff;">
							<?php
							echo "<b>";
								echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
								echo "Adiministrator:".$_SESSION['username'];
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
				<p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 5%;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: 1%;margin-left:1%;margin-right:10%;"><b>Well Come to Administrator:<?php echo$_SESSION['username']?></b></p>
				&nbsp;
				<div id="home-list" style="width:40%;background-color:#c4d0d2; margin-left:3%;">
					<p style="background-color:#262626;;color: #e4ebe7;width: auto;
					height: 8%;text-align: center;font-size: 1.2em;font-family:
					Times New Roman;margin-bottom: 10px;padding-top: 6px;margin-top: 4%;
					margin-left:0%;"><b> Feedback Management Links</b></p>
		
			<li   style="border-top: none;"><a href="../Admin/viewfeedback.php">&nbsp;view feedback</a> </li>
		    <li   style="border-top: none;"><a href="../Admin/deletefeedback.php">&nbsp;Dlete feedback</a> </li>
		
	                  <p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 8%;text-align: center;font-size: 1.2em;
					   font-family: Times New Roman;margin-bottom: 2%;padding-top: 6px;margin-top: 0%;margin-left:0%;"><b> view Elction Result Links</b></p>
	         <li><a href="../Admin/TViewElectionResult.php">Tewodros Election Result</a> </li>	
	         <li><a href="../Admin/MViewElectionResult.php">Maraki  Election Result</a> </li>
	         <li><a href="../Admin/GViewElectionResult.php">GC Election Result</a> </li>
	         <li><a href="../Admin/FViewElectionResult.php">Facil Election Result</a> </li>
	          <li><a href="../Admin/MZViewElectionResult.php">Melesi zenaw Election</a> </li>
		              <p style="background-color: #262626;;color: #e4ebe7;width: auto;
					height: 8%;text-align: center;font-size: 1.2em;font-family:
					Times New Roman;margin-bottom: 10px;padding-top: 6px;margin-top: 4%;
					margin-left:0%;"><b> view Links</b></p>
			<li><a href="../Admin/viewstudentdata.php">View Students Data</a> </li>	
	        <li><a href="../Admin/viewcandidate.php">View Candidates</a> </li>
	         <li><a href="../Admin/viewvoter.php">View Voters</a> </li>
		              </div>
					  
		         <div id="home-list" style="width:40%;background-color:#c4d0d2;margin-left:50%; margin-top:-60%;">
					<p style="background-color: #262626;;;color: #e4ebe7;width: auto; height: 8%;text-align: center;font-size: 1.2em;
					font-family: Times New Roman;margin-bottom: 2%;padding-top: 6px;margin-top: -10px;margin-left:0%;"><b> Acount Management Links</b></p>
					
				<li   style="border-top: none;"><a href="../Admin/create_account.php">&nbsp;Create Account</a> </li>
				<li   style="border-top: none;"><a href="../Admin/ViewAccount.php">&nbsp;View Users Account</a> </li>
				<li   style="border-top: none;"><a href="../Admin/UpdateAccount.php">&nbsp;Update Account</a> </li>
				<li   style="border-top: none;"><a href="../Admin/Block.php">&nbsp;Block Account</a> </li>
				
	                <p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 8%;text-align: center;font-size: 1.2em;
					font-family: Times New Roman;margin-bottom: 2%;padding-top: 6px;margin-top: 0%;margin-left:0%;"><b> Approve Management links</b></p>
	                 <li><a href="../Admin/approvetedycandidate.php">Tewodros</a> </li>	
	              <li><a href="../Admin/approvemarakicandidate.php">Maraki</a> </li>
	               <li><a href="../Admin/approveGCcandidate.php">GC</a> </li>
	              <li><a href="../Admin/approvefacilcandidate.php">Facil</a> </li>
	              <li><a href="../Admin/approveMZcandidate.php">Melesi zenaw</a> </li>
				  <p style="background-color:#262626;;color: #e4ebe7;width: auto; height: 8%;text-align: center;font-size: 1.2em;
					font-family: Times New Roman;margin-bottom: 2%;padding-top: 6px;margin-top: 0%;margin-left:0%;"><b> Request Management Links</b></p>
				  	     <?php
	     $sql="select * from requesttable where requesttype='Candidate' and approved='no'";
		$query = mysqli_query($conn,$sql);
		$coun = mysqli_num_rows($query);
		if($coun!=0)
		{
		?>
	<li style="border-top: none; color:black;"><a href="../Admin/candidaterequest.php"title="view and approve candidate request"><font color="yellow" size="3px">Candidate Request [<font size="4px" color="#16f40b"><?php echo $coun;?></font>]</a></li>
	<?php
	}
	else
	{
		?>
			<li style="color:black;"><a href="../Admin/candidaterequest.php" title="view and approve candidate request"><font color="white" >Candidate Request <font color="yellow">[0]</font></a></li>
	<?php
	}
	?>
				     <?php 
		$sql="select * from requesttable where requesttype='Voter' and approved='no'";
		$query = mysqli_query($conn,$sql);
		$coun = mysqli_num_rows($query);
		if($coun!=0)
		{
		?>
	<li style="border-top: 1px solid white;"><a href="../Admin/voterrequest.php"title="view and approve voter request"><font color="white">Voter Request For Account[<font  color="#16f40b"><?php echo $coun;?></font>]</a></li>
	<?php
	}
	else
	{
		?>
		<li style="border-top: 1px solid white;"><a href="../Admin/voterrequest.php" title="view and approve voter request"><font color="white" >Voter Request For Account <font color="yellow">[0]</font></a></li>
	<?php
	}
	?>
		              </div>
					<a name="bottom"></a>
				    </div>
				<div id="footer">
				
					<?php
					
					include("../Admin/footer.php");
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
