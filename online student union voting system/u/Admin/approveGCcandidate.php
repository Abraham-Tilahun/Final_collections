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
	overflow-x: scroll;
	overflow-y: scroll;
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
				<fieldset style="margin: 1%;width:100%;border: none;">
				<legend align="center" style="color: #418cbe;font-size: 150%;">Total Election Result for Facil campus</legend>
				<table class="data-table"  border="1" style="border-collapse: collapse;">
				<thead style="background-color: #89bcae;"><tr>

				<th>Full Name</th>
				<th>sex</th>
				<th>faculity</th>
				<th>Department</th>
				<th>Year</th>
				<th>CGPA</th>
				<th> campus</th>
				<th>information</th>
				<th>Number of Voice</th>
				<th>Rank</th>
				<th>Selected As</th>
				</tr></thead>
				<?php 
				$sql=mysqli_query($conn,"select * from count where campus='GC' ORDER BY VOICE DESC ");
				$rank=1;
				while($row1=mysqli_fetch_assoc($sql))
				{    $candidate_id= $row1['CID'];
					$fullname=$row1['fullname'];
					$faculity=$row1['faculity'];
					$cgpa=$row1['cgpa'];
					$departmnt=$row1['department'];
					$campus=$row1['campus'];
					  $sex=$row1['sex'];
					  $year=$row1['year'];
					 $info=$row1['information'];
                   if($rank==1){
                   $selected='Presdant';
			      
				  mysqli_query($conn,"INSERT INTO `candidate_for_sec_vote` VALUES ('$candidate_id','$fullname','$sex','$faculity','$departmnt',' $year','$cgpa','$campus','$info')");	
				   }
				  elseif($rank==2){
                   $selected='Vice Presdant';
				    mysqli_query($conn,"INSERT INTO `candidate_for_sec_vote` VALUES ('$candidate_id','$fullname','$sex','$faculity','$departmnt',' $year','$cgpa','$campus','$info')");	
                  }
				  elseif($rank==3){
                   $selected='Secretary';
				    mysqli_query($conn,"INSERT INTO `candidate_for_sec_vote` VALUES ('$candidate_id','$fullname','$sex','$faculity','$departmnt',' $year','$cgpa','$campus','$info')");	
				  }
				  elseif($rank==4){
                   $selected='Discipline committee';
				    mysqli_query($conn,"INSERT INTO `candidate_for_sec_vote` VALUES ('$candidate_id','$fullname','$sex','$faculity','$departmnt',' $year','$cgpa','$campus','$info')");	
				   }
				   elseif($rank==5){
				   $selected='Sport Committee';
				    mysqli_query($conn,"INSERT INTO `candidate_for_sec_vote` VALUES ('$candidate_id','$fullname','$sex','$faculity','$departmnt',' $year','$cgpa','$campus','$info')");	
				   }
				   elseif($rank==6){
				   $selected='club help committee';
				    mysqli_query($conn,"INSERT INTO `candidate_for_sec_vote` VALUES ('$candidate_id','$fullname','$sex','$faculity','$departmnt',' $year','$cgpa','$campus','$info')");	
				   }
				   elseif($rank==7){
				   $selected='Gender and HIV Committee';
				    mysqli_query($conn,"INSERT INTO `candidate_for_sec_vote` VALUES ('$candidate_id','$fullname','$sex','$faculity','$departmnt',' $year','$cgpa','$campus','$info')");	
				   }
				   elseif($rank==8){
				   $selected='Finance Committee';
				    mysqli_query($conn,"INSERT INTO `candidate_for_sec_vote` VALUES ('$candidate_id','$fullname','$sex','$faculity','$departmnt',' $year','$cgpa','$campus','$info')");	
				   }
				   elseif($rank==9){
				   $selected='people comunication Committee';
				    mysqli_query($conn,"INSERT INTO `candidate_for_sec_vote` VALUES ('$candidate_id','$fullname','$sex','$faculity','$departmnt',' $year','$cgpa','$campus','$info')");	
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