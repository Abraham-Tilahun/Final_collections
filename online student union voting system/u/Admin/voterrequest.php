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
				<a name="bottom"></a>
				
<?php
$result=mysqli_query($conn,"select * from requesttable where approved='no' and requesttype='Voter'");  
if(mysqli_affected_rows($conn)>0)
  {
	?>
		<table class="data-table" style="margin-left: 1%;margin-right: 1%;margin-top: 1%;">
		<caption class="title">Requests From Voters</caption>
		<thead style="height: 20px;">
			<tr>
				<th>ID_Number</th>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>Sex</th>
				<th>Age</th>
				<th>Faculity</th>
				<th>Department</th>
				<th>Year</th>
				<th>Campus</th>
				<th>Approve</th>
				<th>Delete</th>
			</tr>
		</thead>
		<?php
		while($row=mysql_fetch_array($result))
				{
			echo '<tr>
					<td>'.$row['student_ID'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['sex'].'</td>
					<td>'.$row['age'].'</td>
					<td>'.$row['faculity'].'</td>
					<td>'.$row['deparment'].'</td>
					<td>'.$row['year'].'</td>
					<td>'.$row['campus'].'</td>';
					?>
					 <td><a href="voterrequest.php?updateID=<?php echo $row['student_ID'];?>" style="text-decoration: none;height: 10px;background-color: #29d6bc;width: 100px;color: #fff4f4;">Approve</a></td>
					 <td><a href="voterrequest.php?deleteID=<?php echo $row['student_ID'];?>" style="text-decoration: none;height: 10px;background-color: #29d6bc;width: 100px;color: red;"><i class="fa fa-trash"></i>delete</a></td>
					<?php
				echo '</tr>';
		        }
		 if(isset($_GET['updateID']))
	                {
		             $block=$_GET['updateID'];
					 mysql_query("UPDATE requesttable SET approved='yes' where student_ID='$block'");  
					// mysql_query("UPDATE requesttablepreguess SET approved='yes' where Student_ID='$block'"); 
				$sql=mysql_query("select * from requesttable where Student_ID='$block'");
						while($row=mysql_fetch_assoc($sql))
						{
							$sid=$row['student_ID'];
							$fn=$row['fname'];
							$ln=$row['lname'];
							$sex=$row['sex'];
							$age=$row['age'];
							$un=$row['username'];
							$pw=$row['password'];
							$requesttype=$row['requesttype'];
							$photopath=$row['photo'];
                            $campus=$row['campus'];			
                             	$date=Date("y/m/d");							
							mysql_query("insert into user values('identity(1,1)','$fn','$ln','$sex','$age','$un','$pw','$requesttype','1','$photopath','$sid','$campus')");
							mysql_query("insert into aresponse values('$sid','$date','your account is approved')");
					 //echo "<meta http-equiv='refresh' content='0'>";
					     }

					}
					}
					else
					echo "<font color=red><center><b><br><br><img src='../IMG/delete.jpg' style='height:15px;'/>No New Requests Found</b></center></font>";
				
				
				
				
				
				 if(isset($_GET['deleteID']))
	                {
		             $block=$_GET['deleteID'];
					 $result=mysql_query("select * from requesttable where approved='no' and requesttype='Voter' and student_ID='$block' ");  
                     if(mysql_affected_rows()>0)
                     {
						 $result=mysql_query("delete from requesttable where student_ID= '$block'");
				        	if($result)
									echo "<script type='text/javascript'>alert('you are successfully delete!')</script>";
							else
								echo "<script type='text/javascript'>alert(' sorry record  is no delete!')</script>";
					}
					else
					echo "<font color=red><center><b><br><br>No such user found </b></center></font>";
					}
				
		?>
	</table>
		    </div>
		    
		<div id="footer">
			<?php
			include("../Admin/footer.php");
			?>
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
