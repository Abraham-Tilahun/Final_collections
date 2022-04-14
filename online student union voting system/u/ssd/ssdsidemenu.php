<html>
<head>
<link rel="stylesheet" href="fontawesome.css"/>
<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<style type="text/css">
				.menu ul 
					{
				
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    width: 100%;
			    background-color:  #e5e5e5;
			}

			.menu li a {
			    display: block;
			    color: #fff;
			    padding:15px;
			    text-decoration: none;
			    border-top: 1px solid white;
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
<p style="background-color: #36a2e2;color: #e4ebe7;width: auto; height: 40px;text-align: center;font-size: 1.2em;font-family: Times New Roman;margin-bottom: 5px;padding-top: 6px;margin-top: -5px;"><b>SSD Management Links</b></p>
<ul>
	<li style="border-bottom: 1px solid #fff;height: 40px;">		
	<div style="color: #fff;margin-left: 0%;height: 45px;width:99%;background-color:#36a2e2;"> 
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
	<?php
	     $sql = mysqli_query($conn,"SELECT * from notification where (notification.status='unread' and notification.to='SSD')");
		$coun = mysqli_num_rows($sql);
		if($coun!=0)
		{
		?>
    <li><a href="../ssd/Viewnotification.php"title ="view notification send from Admin"><i class="fa fa-inbox"></i>Notification<font color="yellow">[<?php echo $coun;?>]</font></a></li>
    <?php
    }
    else
    {		?>
    <li><a href="../ssd/Viewnotification.php"title="view notification send from Admin"><i class="fa fa-inbox"></i>Notification<font color="yellow">[0]</font></a></li>
    <?php
	}
    ?>
	<li><a href="../ssd/Notice.php"title="Add notice"> <i class="fa fa-sarch"><i class="fa fa-plus-square"></i>Add Notice</i></a> </li>
  <li><a href="../ssd/ssdnotification.php"title="send notification for Registerar "><i class="fa fa-envelope"></i>Send Notification</a></li>
	<li><a href="../ssd/ChangePassword.php"title="change your password"><i class="fa fa-edit"></i>Change Password</a> </li>
		<li><a href="../ssd/changeprofile.php"title="change your password"><i class="fa fa-edit"></i>Change Profile</a> </li>
</ul>
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