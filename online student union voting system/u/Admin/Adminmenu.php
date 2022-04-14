<html>
<head>

<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
</head>
<?php
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
		?>
		<ul>
    <li><a href="../Admin/Admin.php" title="home"title="home"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="#" title="Manage Feedback"title="Manage Feedback"><i class="fa fa-comments"></i>Manage feedback <span style="font-size: 7px;">&#9660;</span></a>
			<ul>
				<li   style="border-top: none;"><a href="../Admin/viewfeedback.php">&nbsp;View feedback</a> </li>
				<li   style="border-top: none;"><a href="../Admin/deletefeedback.php">&nbsp;Delete feedback</a> </li>
			</ul>
	</li> 
	
		<li><a href="#" title ="Manage Account"title="Manage Account">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i>Manage Acount<span style="font-size: 7px;">&#9660;</span></a>
			<ul>
				<li   style="border-top: none;"><a href="../Admin/create_account.php">&nbsp;Create Account</a> </li>
				<li   style="border-top: none;"><a href="../Admin/ViewAccount.php">&nbsp;View Users Account</a> </li>
				<li   style="border-top: none;"><a href="../Admin/UpdateAccount.php">&nbsp;Update Account</a> </li>
				<li   style="border-top: none;"><a href="../Admin/Block.php">&nbsp;Block Account</a> </li>
			</ul>
	</li> 
		
	<li>
	<li><a href="" title="view"title="view"><i class="fa fa-info-circle"></i>View<span style="font-size: 7px;">&#9660;</span></a>
	<ul>
	<li><a href="../Admin/viewstudentdata.php">View Students Data</a> </li>	
	<li><a href="../Admin/viewcandidate.php">View Candidates</a> </li>
	<li><a href="../Admin/viewvoter.php">View Voters</a> </li>
		
	</ul></li>
	<li><a href="" title="view election result"title="view election result"><i class="fa fa-info-circle"></i>View election result</a>
	<ul>
	<li><a href="../Admin/TViewElectionResult.php">Tewodros</a> </li>	
	<li><a href="../Admin/MViewElectionResult.php">Maraki</a> </li>
	<li><a href="../Admin/GViewElectionResult.php">GC</a> </li>
	<li><a href="../Admin/FViewElectionResult.php">Facil</a> </li>
	<li><a href="../Admin/MZViewElectionResult.php">Melesi zenaw</a> </li>
	</ul></li>
	<li><a href="" title="Approve Candidate"title="Approve Candidates">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-square"></i>approve candidate</a>
	<ul>
	<li><a href="../Admin/approvetedycandidate.php">Tewodros</a> </li>	
	<li><a href="../Admin/approvemarakicandidate.php">Maraki</a> </li>
	<li><a href="../Admin/approveGCcandidate.php">GC</a> </li>
	<li><a href="../Admin/approvefacilcandidate.php">Facil</a> </li>
	<li><a href="../Admin/approveMZcandidate.php">Melesi zenaw</a> </li>
	</ul></li>
	
	<!--<li><a href="logout.php">logout</a></li>-->
		<div id="photologin">	
	<?php
		echo "<li style='margin-left:2%'><a href=../logout.php title=' click here to logout the system Administrator:".$_SESSION['username']."'><i class='fa fa-unlock'></i>logout(".$_SESSION['username'].")</a></li>";

if($_SESSION['role']=="Adminstrator")
{
echo "<li style='float:right;margin-top:0%;margin-left:-8%'><p><b>.</b>Online</p>". "<img src='".$_SESSION['sphoto']."'</li>";

}
	else
	echo "";
?>
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
			<li  ><a href="#bottom" style="color:black;" ><i class="fa fa-arrow-down"></i></a></li>		
</ul>


	</html>