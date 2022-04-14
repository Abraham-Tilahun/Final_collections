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
	width: 80%;
	height: 600px;
	margin-left: 18%;
	margin-top: 0%;
	overflow-x: scroll;
	overflow-y: scrool;
}
	}
	.btn
	{
		height: 50px;
		width: 170px;
		margin-left: 80px;
	}
	#reset
{

		height: 50px;
		width: 170px;	
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
include("../GCcandidate/candidatemenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("../GCcandidate/candidatesidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
		<?php
$result=mysql_query("select * from requesttable WHERE requesttype='Voter' and campus='GC'");  
if(mysql_num_rows($result)>0)
{
	?>
	<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
		<caption class="title">Voters Detail Information</caption>
		<thead style="height: 20px;">
			<tr>
			    <th>N<u>O</u></th>
				<th>ID_Number</th>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>Sex</th>
				<th>Age</th>
				<th>Collage</th>
				<th>Department</th>
				<th>Year</th>
				<th>CGPA</th>
			</tr>
		</thead>
		<?php
		$nuber=1;
		while($row=mysql_fetch_array($result))
				{
					
					echo '<tr>
					<td>'.$nuber.'</td>
					<td>'.$row['Student_ID'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['sex'].'</td>
					<td>'.$row['age'].'</td>
					<td>'.$row['collage'].'</td>
					<td>'.$row['department'].'</td>
					<td>'.$row['year'].'</td>
					<td>'.$row['cgpa'].'</td>
					
				</tr>';
				$nuber++;
		}
		
		?>
	</table>
	<?php
	}
	else
	print "<font color=red><b>No New Student Data is found</b></font>";
	?>
		    </div>
		    
		<div id="footer">
			<?php
			include("../GCcandidate/footer.php");
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
