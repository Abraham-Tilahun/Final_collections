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
	overflow-x: scroll;
	overflow-y: hidden;
	width:80%;
}
#leftside
{
	width: 18%;
	height: 600px;
	float: left;
	margin-left: 0px;
	margin-top: 0%;
	margin-right: 10px;
}
</style>
</head>
<body>
<div id="container">
		<div id="header">
		<?php
		include("../discipline_committee/header.php");
	   ?>
		</div>
		<div id="menu">
		<?php
include("../discipline_committee/discipline_committeemenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<div id="login">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo "Discipline_committee:".$_SESSION['username'];
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
				</div>
				<div id="content">
<form method="post" enctype="multipart/form-data">
<fieldset style="border: none;">
<div style="border: 1px solid #fff;height: 140px;background-color: transparent;font-size: 25px;width: 70%;">
<legend style="color: #4b9cd1;margin-left: 150px;font-size: 30px;">Student Dscipline Record Submit Page</legend>
	 Select Student Data:
	 <input type="file" name="file" class="l" required="true" />
	 	<input type="submit" name="submit" value="Send" class="myButton"/>
	 	</div>
	 <?php
if(isset($_POST["submit"]))
{
	if($_FILES['file']['name'])
	{
		$filename=explode(".",$_FILES['file']['name']);
		if($filename[1]=='csv')
		{
			$handle=fopen($_FILES['file']['tmp_name'],"r");
			while($data=fgetcsv($handle))
			{
					
					$fname=mysql_real_escape_string($data[0]);
					$lname=mysql_real_escape_string($data[1]);
					$gender=mysql_real_escape_string($data[2]);
					$age=mysql_real_escape_string($data[3]);
					$collage=mysql_real_escape_string($data[4]);
					$dept=mysql_real_escape_string($data[5]);
					$year=mysql_real_escape_string($data[6]);
					$crime=mysql_real_escape_string($data[7]);
					$sid=mysql_real_escape_string($data[8]);
					$campus=mysql_real_escape_string($data[9]);
				$sql=mysql_query("insert into discipline values('identity(1,100)','$fname','$lname','$gender','$age','$collage','$dept','$year','$crime','$sid','$campus')");
			}
			if($sql)
			{
				print"Submited Successfully";
			}
			else
			print"Not Submited Successfully";
          	?>
<?php
}
else
		print "<font color=red>file is not csv type</font>";
}
}
		?>
        <table class="data-table" style="margin-left: 0%;margin-right: 0%;margin-top: 0%;">
		<caption class="title">Submited Students Detail Data</caption>
		<thead style="height: 20px;">
			<tr>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>Sex</th>
				<th>Age</th>
				<th>Faculity</th>
				<th>Department</th>
				<th>Year</th>
				<th>Discipline_type</th>
				<th>Sid</th>
				<th>campus</th>
				<th>Edit</th>
			</tr>
		</thead>
		<?php
$result=mysql_query("select * from discipline");  
		while($row=mysql_fetch_array($result))
				{
			echo '<tr>';
					echo'<td>'.$row['fname'].'</td>';
					echo'<td>'.$row['lname'].'</td>';
					echo'<td>'.$row['gender'].'</td>';
					echo'<td>'.$row['age'].'</td>';
					echo'<td>'.$row['faculity'].'</td>';
				     echo'<td>'.$row['department'].'</td>';
					echo'<td>'.$row['year'].'</td>';
					echo'<td>'.$row['discipline_type'].'</td>';
					echo'<td>'.$row['sid'].'</td>';
                     echo   '<td>'.$row['campus'].'</td>';
					?><?php echo '<td><a href="gotoeditdisciplinestudent.php?sid=';?><?php echo $row['sid'];?> <?php echo '">Edit</a></td>
				</tr>';
		}?>

</table>
	 </fieldset>
</form>
		    </div>
		<div id="footer">
			<?php
			include("../discipline_committee/footer.php");
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