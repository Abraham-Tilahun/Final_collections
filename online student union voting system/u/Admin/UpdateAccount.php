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
	background-color:white;
	height: 600px;
	margin-left: 18%;
	margin-top: 1%;
	overflow-x: hidden;
	overflow-y: hidden;
	width:80%;
}
		.textbox
	{
		padding-left: 10px;
		height: 30px;
		width:60%;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		border: none;
		
	}
	#btn
	{
		background-color: #2692d9;
		height: 50px;
		width: 40%;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
	    margin-top: 20px;
	
	}
	#btn:hover
	{
		background-color: #2692d9;
		height: 50px;
		width: 40%;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
		margin-top: 20px;
	}
	.myButton {
   background-color: #2692d9;
	font-size: 20px;
	margin-top: 20px;
	border-radius:6px;
	border-radius:6px;
	border:1px solid #b2b8ad;
	display:inline-block;
	cursor:pointer;
	color:#fff;
	font-family:Times New Roman;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ced9bf;
	float: none;
   height: 50px;
	width: 20%;
}
.myButton:hover{
	width:20%;
	
}

.myButton:active {
	position:relative;
	top:1px;
}
.stextbox{
	height: 40px;
		width: 20%;
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

				<div id="leftside" >
					<div id="applyside">
						<?php
							include("../Admin/Adminsidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
				<a name="bottom"></a>

			<center>
<div id="ContentRight" style="height: 20%;width:50%;'">
<form action="" method="post"><h2>Update User information</h2>
	<font color="#006699" size="5px">Enter User Name</font>
	<input type="text" name="ID" required="true"class="stextbox"/>
	<input type="submit" name="search" value="search" class="myButton"/>
</form>
</div>
<?php
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
    {
					if($conn)
					{
					if(isset($_POST['search']))
						{
								$Search_ID=$_POST['ID'];
								$sql="select * from user where username='$Search_ID'";
								$recorfound=mysqli_query($conn,$sql);
							if(mysql_affected_rows($recorfound))
							 {
							$row=mysql_fetch_assoc($recorfound);
											
						echo	"<form action='' method='post' enctype='multipart/form-data'>";
						echo	"<table style='width:50%;'>";
						echo	"<tr><td>First_Name</td><td><input type='text' name='fname' value='".$row["fname"]."' required='true' class='textbox'/></td></tr>";
						echo	"<tr><td>Last_Name</td><td><input type='text' name='lname' value='".$row["lname"]."'  required='true'class='textbox'/></td></tr>";
					    echo	"<tr><td>Sex</td><td><input type='text' name='sex'  value='".$row["sex"]."' class='textbox'/></td></tr>";
						echo	"<tr><td>Age</td><td><input type='number' name='age' value='".$row["age"]."' required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Username</td><td><input type='text' name='username' value='".$row["username"]."'  readonly='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Password</td><td><input type='text' name='password' value='".$row["password"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Role</td><td><input type='text' name='role'  value='".$row["role"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>Status</td><td><input type='text' name='status'  value='".$row["status"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td>photo</td><td><input type='file' name='photo'  value='".$row["photo"]."'  required='true'class='textbox'/></td></tr>";
						echo	"<tr><td colspan='2'><input type='submit' value='Update' name='Update' id='btn'/>&nbsp&nbsp<input type='reset'
						 value='Reset'id='btn'/></td></tr></table></form>";
										
										}
										else
														echo "<script type='text/javascript'>alert('No Record Found!!')</script>";

										//echo "No Record Found!!";	
						}
					else if(isset($_POST["Update"]))
									{
						$fn=$_POST['fname'];
						$ln=$_POST['lname'];
						$sex=$_POST['sex'];
						$age=$_POST['age'];
						$un=$_POST['username'];
						$pw=$_POST['password'];
						$role=$_POST['role'];
						$status=$_POST['status'];	
						$ptmploc=$_FILES["photo"]["tmp_name"];
						$pname=$_FILES["photo"]["name"];
						$psize=$_FILES["photo"]["size"];
						$ptype=$_FILES["photo"]["type"];
						$photopath="../userphoto/$pname";
					$updated=mysqli_query($conn,"update user set fname='$fn',lname='$ln',sex='$sex',age='$age',password='$pw',role='$role',status='$status',photo='$photopath' where username='$un'");
										if(mysqli_affected_rows($conn))
										echo mysqli_affected_rows($conn)." record/s update successfully!";
										 else
										echo "Unable to update!";
													
									}
					}
					else
						echo "Connection faild";
						}
					?>
					</center>
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

</body>
</html>