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
	
  <fieldset style="border: none;margin: 50px;">
<?php
               	$result=mysqli_query($conn,"select * from feedback order by Date desc");
     if($row1=mysqli_fetch_array($result))
     {
       $result=mysqli_query($conn,"select * from feedback order by Date desc");
	  
	echo "<h2>Detail's Of Feedbacks and Delete Them</h2>
	<div id=form><form action='' method=post>
	<table border=1 style='border-collapse:collapse; background-color:#cde;'>
	<tr><th>Number</th><th> Email</th>
	<th>Comment</th><th>Date</th><th>Delete All
	<input type=checkbox name=deleteall value=all>
	<input type=submit name=deleteab value='Delete All'></th></tr>";
		$num=1;
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr><td>".$num."</td>
			<td>".$row['email']."</td>
			<td>".$row['comment']."</td>
			<td>".$row['date']."</td>
			<td><input type=radio name=delete value=".$row['id'].">
			<input type=submit name=deleteb value='Delete'></td>
			<tr>";
			$num++;
		}
		echo "</table></form></div>";
       }
else{
	 echo "<font color=red><center><img src='../IMG/delete.jpg' style='height:19px;'/>
		
						 no record Feedback?.</center></font>";
	}
	if(isset($_POST['deleteab'])||isset($_POST['deleteb']))
	{
			if(isset($_POST['deleteall'])&&isset($_POST['deleteab'])){
				$result=mysqli_query("delete from feedback");
			echo "All feedback is delete!";
			}
			else if(isset($_POST['delete']) &&isset($_POST['deleteb']))
			{
				$deletevalue=$_POST['delete'];
				$result=mysqli_query("delete from feedback where id='$deletevalue'");
			}
	if($result)
		//echo "Record deleted!</";
			echo "<script type='text/javascript'>alert('Record deleted!')</script>";
	else 
		//echo "No records found!</div>";
		echo "<script type='text/javascript'>alert('No records found!')</script>";
	
	
	}
	?>
</fieldset>
		    </div>
			</font>
		<div id="footer">
			<?php
			include("../Admin/footer.php");
			
			?>
			<a name="bottom"></a>
	</div>
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