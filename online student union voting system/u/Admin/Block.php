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
	margin-top: 1%;
	overflow-x: hidden;
	overflow-y: hidden;
	width:80%;
}
		.textbox
	{
		padding-left: 10px;
		height: 30px;
		width: 220px;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		border: none;
		
	}
	.textarea
	{
		height: 100px;
		width: 500px;
		border: none;
		
	}
	#btn
	{
		background-color: #2692d9;
		height: 50px;
		width: 170px;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
		margin-top: 20px;
		float: right;
	}
	#btn:hover
	{
		background-color: #808c97;
		height: 50px;
		width: 170px;
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
	border:1px solid #b2b8ad;
	display:inline-block;
	cursor:pointer;
	color:#fff;
	font-family:Times New Roman;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ced9bf;
	float: none;
	height: 50px;
	width: 170px;
}

.myButton:active {
	position:relative;
	top:1px;
}
.stextbox{
height: 40px;
	width: 170px;	
}
</style>

</script>
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
				<fieldset style="border: none;">
			<center>
<div id="ContentRight" style="background-color: white;height: 150px;">
<form action="" method="post"><h2>Search And Block Users</h2>
	<font color="#006699" size="5px">Enter User Name
	</font><input type="text" name="ID" required="true"class="stextbox" title="Search username here"/>
	<input type="submit" name="search" value="search" class="myButton" title="Search"/>
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
							if(mysqli_affected_rows($conn))
							 {
							$row=mysqli_fetch_assoc($recorfound);
											
	echo	"<form action='' method='post' enctype='multipart/form-data'>";
	echo	"<table>";
	echo	"<tr><td>First_Name</td><td><input type='text' name='fname' value='".$row["fname"]."'readonly class='textbox' title='can not modify'/></td></tr>";
	echo	"<tr><td>Last_Name</td><td><input type='text' name='lname' value='".$row["lname"]."'  readonly='true'class='textbox'title='can not modify'/></td></tr>";
    echo	"<tr><td>Sex</td><td><input type='text' name='sex'  value='".$row["sex"]."'readonly class='textbox'title='can not modify' /></td></tr>";
	echo	"<tr><td>Age</td><td><input type='number' name='age' value='".$row["age"]."' readonly='true'class='textbox'title='can not modify'/></td></tr>";
	echo	"<tr><td>Username</td><td><input type='text' name='username' value='".$row["username"]."'  readonly='true'class='textbox' title='can not modify'/></td></tr>";
	echo	"<tr><td>Password</td><td><input type='text' name='password' value='".$row["password"]."'  readonly='true'class='textbox' title='can not modify'/></td></tr>";
	echo	"<tr><td>Role</td><td><input type='text' name='role'  value='".$row["role"]."'  readonly='true'class='textbox' title='can not modify'/></td></tr>";
	echo	"<tr><td>Status</td><td><input type='text' name='status'  value='".$row["status"]."'  required='true'class='textbox'title='you can block here'/></td></tr>";
	echo	"<tr><td colspan='2'><input type='submit' value='Block' name='Update' id='btn'title=' Block or unblock'/></td></tr></table></form>";
										
										}
										else
	echo "<script type='text/javascript'>alert('No Record Found!')</script>";

									//	echo "No Record Found!!";	
						}
					else if(isset($_POST["Update"]))
									{
						$status=$_POST['status'];	
						$un=$_POST['username'];
					$updated=mysqli_query($conn,"update user set status='$status' where username='$un'");
										if(mysqli_affected_rows($conn))
										echo mysqli_affected_rows($conn)." User Blocked  successfully!";
										 else
									//	echo "Unable to Block User!";
											echo "<script type='text/javascript'>alert('Unable to Block User!!')</script>";		
									}
					}
					else
						echo "Connection faild";
						}
					?>
					</center>
					</fieldset>
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