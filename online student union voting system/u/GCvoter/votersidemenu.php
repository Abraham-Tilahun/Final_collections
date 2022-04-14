<html>
<head>
<link rel="stylesheet" href="fontawesome.css"/>
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
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
?>
<p style="background-color: #36a2e2;color: #e4ebe7;width: auto; height: 40px;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: -5px;"><b>Voter Management Links</b></p>
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
	<li style="border-top: none;"><a href="../GCvoter/vote.php" title="vote for your campus representative"><i class='fa fa-hand-o-up'></i>Vote</a></li>
	<li style="border-top: 1px solid white;"><a href="../GCvoter/ViewElectionResult.php"title="view election result"><i class='fa fa-info-circle'></i>View Election Result</a></li>
	<li style="border-top: 1px solid white;"><a href="../GCvoter/viewcandidate.php"title="view Candidate"><i class='fa fa-info-circle'></i>View Candidates</a> </li>
	<li style="border-top: 1px solid white;"><a href="../GCvoter/ChangePassword.php"title="change password"><i class='fa fa-edit'></i>Change Password</a></li>
	<li style="border-top: 1px solid white;"><a href="../GCvoter/viewvoter.php"title="view candidate"><i class='fa fa-info-circle'></i>view voter</a></li>
	<li style="border-top: 1px solid white;"><a href="../GCvoter/changeprofile.php"title="change profile"><i class='fa fa-edit'></i>Change profile</a></li>
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