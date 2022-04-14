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
#calander
{
	margin-top: 0px;
	padding-top: 0px;
	width: auto;
	height: 190px;
}
	#login
{
	margin-top: 0px;
	background-color: #718076;
	height: 250px;
	width: auto;
}
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
#rightside
{
	width: 18%;
	height: 600px;
	float: left;
	margin-left: 0px;
	margin-top: 5px;
	margin-right: 10px;
}
		.myButton {
	border:1px solid #b2b8ad;
	cursor:pointer;
	color:#fff;
	font-family:Times New Roman;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #0d100a;
	float: none;
	width: 130px;
	height: 50px;
	margin-left: -50px;
	background-color: #96a0a0;
     cursor: pointer;
	padding: 2px;
    font-size: 18px;
	 border-radius: 150px;;
	  
}
.myButton:hover {
	
	background-color:#9ba892;
}
.myButton:active {
	position:relative;
	top:1px;
	background-color: #2d8cd2;
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
include("../Registrar/registrarmenu.php");
		?>
	</div>

					<div id="rightside">
					<div id="login">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo "Registrar:".$_SESSION['username'];
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
				<div id="content">
				<div style="margin-left:10%;margin-top:10%;">
		                      <?php
							if($con)
					{
					if(isset($_REQUEST['sid'])){
	
	                    $_SESSION['sid']=$_REQUEST['sid'];//getting id from url
						$dd= $_SESSION['sid'];
	                                
					
								$sql="select * from student where sid='$dd'";
								$recorfound=mysql_query($sql);
							if(mysql_affected_rows($con))
							 {
							$row=mysql_fetch_assoc($recorfound);
											
						echo	"<form action='' method='post' enctype='multipart/form-data'>";
						echo	"<table style='width:50%; background-color:#cde;'>";
						echo	"<tr><td>Id</td><td><input type='text' name='sid' value='".$row["sid"]."' required='true' readonly class='textbox'/></td></tr>";
						echo	"<tr><td>First_Name</td><td><input type='text' name='fname' value='".$row["fname"]."'  required='true'class='textbox'/></td></tr>";
					    echo	"<tr><td>Last_name</td><td><input type='text' name='lname'  value='".$row["lname"]."' class='textbox'/></td></tr>";
						echo	"<tr><td>Sex</td><td><input type='text' name='sex' value='".$row["gender"]."' required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Age</td><td><input type='text' name='age' value='".$row["age"]."'  requried='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Faculity</td><td><input type='text' name='faculity' value='".$row["collage"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Department</td><td><input type='text' name='dep'  value='".$row["department"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Year</td><td><input type='text' name='year'  value='".$row["year"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>CGPA</td><td><input type='text' name='cgpa'  value='".$row["cgpa"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Program</td><td><input type='text' name='program'  value='".$row["program"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Campus</td><td><input type='text' name='campus'  value='".$row["campus"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td colspan='2'><input type='submit' value='Update' name='Update' id='btn'/>&nbsp&nbsp<input type='reset'
						 value='Reset'id='btn'/></td></tr></table></form>";
						 ?>
										</div>
										<?php
										}
										else
									echo "<script type='text/javascript'>alert('No Record Found!!')</script>";

										//echo "No Record Found!!";	
						}
							}
					else
						echo "Connection faild";
					
					 if(isset($_POST["Update"]))
									{
				 $_SESSION['sid']=$_REQUEST['sid'];//getting id from url
						$dd= $_SESSION['sid'];
						$fn=$_POST['fname'];
						$ln=$_POST['lname'];
						$sex=$_POST['sex'];
						$age=$_POST['age'];
						$faculity=$_POST['faculity'];
						$dep=$_POST['dep'];
						$year=$_POST['year'];
						$cgpa=$_POST['cgpa'];
						$program=$_POST['program'];
                         $campus=$_POST['campus'];						
		 $mysql=mysql_query("update  student set fname='$fn',lname='$ln',gender='$sex',age='$age',collage='$faculity',department='$dep',year='$year',cgpa='$cgpa',program='$program',campus='$campus'where sid='$dd'") or die(mysql_error()); 
	  
	  if($mysql){
		  
		  
		  echo "<script type='text/javascript'>alert('Succefuly update!!!')</script>";
		  
	  }
	  else
       echo "<script type='text/javascript'>alert('unable to update !!!')</script>";
													
									}
				
						
					?>
		
	</table>
		    </div>
		<div id="footer">
			<?php
			include("../Registrar/footer.php");
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