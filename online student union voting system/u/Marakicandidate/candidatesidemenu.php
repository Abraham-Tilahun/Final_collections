<html>
<head>

<style type="text/css">
	.menu ul 
					{
				
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    width: 100%;
			    background-color: #508abb;
			}

			.menu ul li a {
			    display: block;
			    color: #fff;
			    padding:15px;
			    text-decoration: none;
			    
			}

			/* Change the link color on hover */
			.menu li a:hover {
			    background-color: #006699;
			    color: #fff;
			}
</style>
</head>
<body>
<div class="menu">
<?php
$id=$_SESSION['userid'];
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
?>
<p style="background-color: #36a2e2;color: #e4ebe7;width: auto; height: 40px;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: -5px;">
<b>maraki Candidate Management Links</b></p>
<ul>
	<li style="border-bottom: 1px solid #fff;height: 40px;">		
	<div style="color: #fff;margin-left: 50px;height: 45px;"> 
			<script src="../js/dateandtime.js"></script>
					<script type="text/javascript">
					var calendarDate = getCalendarDate();
					document.write(calendarDate);
					</script>
					<form name="clock">
					<input type="submit" class="trans" name="face" value="" style="color: #fff;border: none;background-color: #508abb;">
				</form>
	</div>
	</li>

	
	<li style="border-top: 1px solid white;"><a href="../Marakicandidate/vote.php"><i class='fa fa-hand-o-up'></i>Vote</a></li>
	<li style="border-top: 1px solid white;"><a href="../Marakicandidate/ViewElectionResult.php" title="view election Result"><i class='fa fa-info-circle'></i>View Election Result</a> </li>
	<li style="border-top: 1px solid white;"><a href="../Marakicandidate/viewcandidate.php"title="view candidate"><i class='fa fa-info-circle'></i>View Candidates</a></li>
	<li style="border-top: 1px solid white;"><a href="../Marakicandidate/viewvoter.php"title="view Voter"><i class='fa fa-info-circle'></i>View Voter</a></li>
	<li style="border-top: 1px solid white;"><a href="../Marakicandidate/ChangePassword.php" title="change your password"><i class='fa fa-edit'></i>Change Password</a> </li>
	<li style="border-top: 1px solid white;"><a href="../Marakicandidate/changeprofile.php" title="change your proflie"><i class='fa fa-edit'></i>Change proflie</a> </li>
	
</ul>
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
</body>
</html>