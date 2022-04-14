<?php
session_start();
include("../Database/connection.php");
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
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
				<table class="data-table" style="margin-left: 1%;margin-right: 1%;margin-top: 1%;">
		<caption class="title">Total Election Result for Tewodrows</caption>
		<thead style="height: 20px;">
			<tr>
				<th>Full Name</th><th>sex</th>
				<th>faculity</th><th>Department</th>
				<th>Year</th>
				<th>CGPA</th>
				<th> campus
				</th><th>Information</th>
				<th>Number of Voice</th>
				<th>Rank</th>
				<th>Selected As</th></tr></thead>
				<?php 
				$sql=mysqli_query($conn,"select * from count where campus='tedy' ORDER BY VOICE DESC ");
				$rank=1;
				while($row1=mysqli_fetch_assoc($sql))
				{
                   if($rank==1)
                   $selected='Presdant';
                   elseif($rank==2)
                   $selected='Vice Presdant';
                   elseif($rank==3)
                   $selected='Secretary';
                   elseif($rank==4)
                   $selected='Discipline committee';
				   elseif($rank==5)
				   $selected='Sport Committee';
				   elseif($rank==6)
				   $selected='club help committee';
				   elseif($rank==7)
				   $selected='Gender and HIV Committee';
				   elseif($rank==8)
				   $selected='Finance Committee';
				   elseif($rank==9)
				   $selected='people comunication Committee';
				   else
				   $selected='Member of Student Union';
                   ?>
				<tr>
				<td><?php echo $row1['fullname'];?></td>
				<td><?php echo $row1['sex'];?></td>
				<td><?php echo $row1['faculity'];?></td>
				<td><?php echo $row1['department'];?></td>
				<td><?php echo $row1['year'];?></td>
				<td><?php echo $row1['cgpa'];?> </td>
				<td><?php echo $row1['campus'];?></td>
				<td><?php echo$row1['information'];?></td>
				<td><?php echo $row1['VOICE'];?></td>
				<td><?php echo $rank;?></td>
				<td><?php echo $selected;?></td></tr>
				<?PHP
				$rank++;
				}
				?>
				</table>
		    </div>
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