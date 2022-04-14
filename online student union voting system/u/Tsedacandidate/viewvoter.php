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
	overflow-x: hidden;
	overflow-y: hidden;
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
include("../Tsedacandidate/candidatemenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("../Tsedacandidate/candidatesidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
		<?php
$result=mysql_query("select * from requesttable WHERE requesttype='Voter'and campus='Tseda'");  
if(mysql_num_rows($result)>0)
{
	?>
	<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
		<caption class="title"> Voters Detail Information Melese Zenawi campus</caption>
		<thead style="height: 20px;">
			<tr>
			    <th>N<u>O</u></th>
				<th>ID_Number</th>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>Sex</th>
				<th>Age</th>
				<th>faculity</th>
				<th>Department</th>
				<th>Year</th>
				<th>CGPA</th>
				<th>campus</th>
			</tr>
		</thead>
		<?php
		$nuber=1;
		while($row=mysql_fetch_array($result))
				{
					
					echo '<tr>
					<td>'.$nuber.'</td>
					<td>'.$row['student_ID'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['sex'].'</td>
					<td>'.$row['age'].'</td>
					<td>'.$row['faculity'].'</td>
					<td>'.$row['deparment'].'</td>
					<td>'.$row['year'].'</td>
					<td>'.$row['cgpa'].'</td>
					 <td>'.$row['campus'].'</td>
				</tr>';
				$nuber++;
		}
		
		?>
	</table>
	<?php
	}
	else
	print "<font color=red><b>No New student Data is found</b></font>";
	?>
		    </div>
		    
		<div id="footer">
			<?php
			include("../Tsedacandidate/footer.php");
			?>
	</div>
	<?php
	}
	else
	{
		header("location:../home.php");
	}?>
	<a name="bottom"></a>
	</div>
</body>
</html>
