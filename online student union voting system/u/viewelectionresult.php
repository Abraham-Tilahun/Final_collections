<?php
session_start();
include("Database/connection.php");
	?>
<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<head>
<title>Online Stuidenet Union Voting System</title>
<style>
#content
{
	background-color: white;
	width: 80%;
	height: 600px;
	margin-left: 19%;
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
		include("headerhome.php");
	   ?>
		</div>
		<div id="menu">
		<?php
		include("menu.php");
		?>
	</div>

				<div id="leftside">
				
						<?php
						include("homesidemenu.php");
					   ?>
		 </div>
			<div id="content">
			
				<fieldset style="margin-left:0%;width:100%;border: none;">
				<legend align="center" style="color: #418cbe;font-size: 30px;">Total Election Result For all campus</legend>
				<table class="data-table"  border="1" style="border-collapse: collapse;">
				<?php
				$con=new mysqli("localhost","root","","uogosuvs");
				
				?>
				<thead style="background-color: #89bcae;">
				<th>Full Name</th>
				<th>sex</th>
				<th>faculity</th>
				<th>Department</th>
				<th>Year</th>
				<th>CGPA</th>
				<th> campus</th>
				<th>Information</th>
				<th>Number of Voice</th>
				<th>Rank</th>
				<th>Selected As</th></tr></thead>
				<?php 
				$sql=mysql_query("select * from counter2 ORDER BY VOICE DESC ");
				$rank=1;
				while($row1=mysql_fetch_assoc($sql))
				{
					$ID=$row1['CID'];
					$fullname=$row1['fullname'];
                   if($rank==1){
                   $selected='Presdant';
				   $delet="DELETE FROM `count` WHERE CID=$ID";
	              if($con->query($delet))
				  {
		          echo "$fullname,";
				  }
	              else 
				  {
		         echo "No records found!";
				  }
				   }
                   elseif($rank==2){
                   $selected='Vice Presdant';
				   $delet="DELETE FROM `count` WHERE CID=$ID";
	              if($con->query($delet))
				  {
		          echo "$fullname,";
				  }
	              else 
				  {
		         echo "No records found!";
				  }
				   }
                   elseif($rank==3){
                   $selected='Secretary';
				   $delet="DELETE FROM `count` WHERE CID=$ID";
	              if($con->query($delet))
				  {
		          echo "$fullname and";
				  }
	              else 
				  {
		         echo "No records found!";
				  }
				   }
				   elseif($rank==4){
                   $selected='Discipline committee';
				   $delet="DELETE FROM `count` WHERE CID=$ID";
	              if($con->query($delet))
				  {
		          echo "$fullname  are sucssfully voted!";
				  }
	              else 
				  {
		         echo "No records found!";
				  }
				   }
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
				</fieldset>
					<a name="bottom"></a>
</div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>
	</div>

</body>
</html>