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
	height: 600px;
	margin-left: 18%;
	margin-top: 7px;
	overflow-x: hidden;
	overflow-y: hidden;
	width:80%;
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
				<div id="content">
				<font color="black">
				<a name="bottom"></a>
<fieldset style="border: none;margin: 20px;">
<?php
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
    {
		  $sql=mysqli_query($conn,"select * from  feedback");
		  if(mysqli_num_rows($sql)>0)
		  {
		  	
			echo"<table border=1 style='border-collapse:collapse; background-color:#cde;'>";
			echo"<caption class='title'>Details Of All FeedBacks</caption>";
			echo"<tr><th>ID_Number</th><th>Email_Address</th><th>Comment</th><th>Date</th></tr>";
				$num=1;
				while($row=mysqli_fetch_array($sql))
				{
					
					echo "<tr><td>".$num."</td><td>".$row['email']."</td>
					<td>".$row['comment']."</td><td>".$row['date']."</td></tr>";
					$num++;
				}
				
		echo"</table></center>";
		}
		else
				 echo "<font color=red><center><img src='../IMG/delete.jpg' style='height:19px;'/>	 no record Feedback?.</center></font>";
	
		}
		?>
		</fieldset>
		</div>
		<div id="footer">
			<?php
			include("../Admin/footer.php");
			?>
	</div>
	</font>
	<?php
	}
	else
	{
	?>	<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../home.php');
 </script>
 <?php
	}
?>
	</div>
</body>
</html>
