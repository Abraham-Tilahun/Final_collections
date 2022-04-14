<html>

<head>

<style type="text/css">
.menu ul 
					{
				
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    width: 100%;
			   
			}

			.menu ul li a {
			    display: block;
			    color: #fff;
			    padding:15px;
			    text-decoration: none;
			    font-size:110%
				width:18%
				background-color:black;
			}

			/* Change the link color on hover */
			.menu li a:hover {
			    
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
<p style="background-color: #36a2e2;color: #e4ebe7;width: auto; height: 40px;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: -5px;"><b>Management Links</b></p>
<ul>
		<div style="color: #fff;;height: 45px;border-bottom: 1px solid #fff;background-color:#554532;"> 
		<script src="../js/dateandtime.js"></script>
				<label style="margin-left: 50px;background-color:#554532;">
				<script type="text/javascript">
				var calendarDate = getCalendarDate();
				document.write(calendarDate);
				</script>
				
				<form name="clock">
				<input type="submit" class="trans" name="face" value="" style="color: #fff;border: none;background-color: #508abb;margin-left: 50px;">
			</form>
			</label>
		</div>
	     <?php
	     $sql="select * from requesttable where requesttype='Candidate' and approved='no'";
		$query = mysqli_query($conn,$sql);
		$coun = mysqli_num_rows($query);
		if($coun!=0)
		{
		?>
	<li style="border-top: none;"><a href="../Admin/candidaterequest.php"title="view and approve candidate request"><font color="white" ><i class="fa fa-question-circle"></i>Candidate Request [<font  color="#16f40b"><?php echo $coun;?></font>]</a></li>
	<?php
	}
	else
	{
		?>
			<li style="border-top: 1px solid white;"><a href="../Admin/candidaterequest.php" title="view and approve candidate request"><font color="white" ><i class="fa fa-question-circle"></i>Candidate Request <font color="yellow">[0]</font></a></li>
	<?php
	}
	?>
				     <?php 
		$sql=("select * from requesttable where requesttype='Voter' and approved='no'");
		$query = mysqli_query($conn,$sql);
		$coun = mysqli_num_rows($query);
		if($coun!=0)
		{
		?>
	<li style="border-top: 1px solid white;"><a href="../Admin/voterrequest.php"title="view and approve voter request"><font color="white"><i class="fa fa-question-circle"></i>Voter Request [<font  color="#16f40b"><?php echo $coun;?></font>]</a></li>
	<?php
	}
	else
	{
		?>
		<li style="border-top: 1px solid white;"><a href="../Admin/voterrequest.php" title="view and approve voter request"><font color="white" ><i class="fa fa-question-circle"></i>Voter Request <font color="yellow">[0]</font></a></li>
	<?php
	}
	?>
	<li style="border-top: 1px solid white;"><a href="../Admin/sendnotification.php" title="send notification for SSD"><i class="fa fa-envelope"></i>send notification</a></li>


 <li style="border-top: 1px solid white;"><a style="border-top: 1px solid white;" href="candidate_report.php"title="Candidate report"> Candidate  report</a> 

 </li><li style="border-top: 1px solid white;"><a style="border-top: 1px solid white;" href="voter_report.php"title="candidate report"> Voter  report</a> 

 </li>
 	 <li style="border-top: 1px solid white;"><a style="border-top: 1px solid white;" href="voter_and_candidate_report.php" title="candidate and voter report"> Generate report</a> 

 </li>
		<li style="border-top: 1px solid white;"><a href="../Admin/ChangePassword.php" title="change your password here"><i class="fa fa-edit"></i>Change Password</a> </li>
			<li style="border-top: 1px solid white;"><a href="../Admin/changeprofile.php" title="change your Profile here"><i class="fa fa-edit"></i>Change profile</a> </li>
</ul>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
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