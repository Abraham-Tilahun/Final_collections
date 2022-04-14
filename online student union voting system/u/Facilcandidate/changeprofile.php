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
	.textbox
	{
		height: 30px;
		width: 220px;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		border: none;
		
	}
#content
{
	background-color: white;
	width: 60%;
	height: 600px;
	margin-left: 18%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
}
#rightside
{
	width: 18%;
	height: 600px;
	float: right;
	margin-top: 1%;
	margin-right: 2%;
}
#calander
{
	margin-top: 1px;
	padding-top: 0px;
	width: auto;
	height: 100px;
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
include("../Facilcandidate/candidatemenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("../Facilcandidate/candidatesidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="rightside">
					<div style="background-color: #2d6fd2;color: #fff;">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo "Candidate:".$_SESSION['username'];
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
												<fieldset style="border: none;margin: 30px;background-color:#cde;">
							<h1>Change profile</h1>
						<?php
             if(isset($_SESSION['username'])&&isset($_SESSION['password']))
             {
					
							$un=$_SESSION['username'];				
						echo	"<form action='' method='post' enctype='multipart/form-data'>";

						echo	"<tr><td>photo</td><td><input type='file' name='photo' required='true'class='textbox'/></td></tr>";
						echo"<br>";
						echo	"<tr><td>
						<input type='reset'value='Reset'id='btn'class='myButton'/> 
						<input type='submit' value='Update' name='Update' class='myButton'id='btn'/></td></tr></table></form>";
					 if(isset($_POST["Update"]))
									{	
						$ptmploc=$_FILES["photo"]["tmp_name"];
						$pname=$_FILES["photo"]["name"];
						$psize=$_FILES["photo"]["size"];
						$ptype=$_FILES["photo"]["type"];
						$photopath="../userphoto/$pname";
					$updated=mysql_query("update user set photo='$photopath' where username='$un'");
										if(mysql_affected_rows($con))
									echo "<script type='text/javascript'>alert(' update successfully!')</script>";
										 else
										echo "Unable to update!";
													
									}
					}
					?>
				
						</fieldset>
				    </div>
				<div id="footer">
					<?php
					include("../Facilcandidate/footer.php");
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
