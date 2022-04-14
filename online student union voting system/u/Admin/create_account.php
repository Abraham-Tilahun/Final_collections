<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
include("../Database/connection.php");
?>
<html>
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>
<head>
<title>Financial management sytem for gondar town water supply service</title>
<style>

	.textbox
	{
		height:30px;
		width: 300px;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
	}
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
<script>
		var loadFile = function(event) 
		{
		var reader = new FileReader();
		reader.onload = function()
		{
		var output = document.getElementById('output');
		output.src = reader.result;
		};
		reader.readAsDataURL(event.target.files[0]);
		};
		function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert("please enter	Only letters! ")
            return false;
			}}
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
				
					<fieldset style="border: none; margin-left:10%;">
				<legend><h2>Create User account Page</h2></legend>
				<form action="" method="post" enctype="multipart/form-data" onSubmit="return validate()">
					<table>
					<tr><td>First Name:</td><td><input type="text" name="fname" required=""pattern="[a-zA-Z0-9\]+" class="textbox"></td></tr>
					<tr><td>Last Name:</td><td><input type="text" name="lname" required=""pattern="[a-zA-Z0-9\]+" class="textbox"></td></tr>
					<tr><td>Sex</td><td>Male<input type="radio"required="1" name="sex" value="Male"/>
				  	Female<input type="radio" name="sex" value="Female"/></td></tr>
					<tr><td>Age</td><td><input type="number" name="age" required="true"class="textbox"/></td></tr>
					<tr><td>Username:</td><td><input type="text" name="username" required="1" onKeyPress="return ValidateAlpha(event)"title="enter username only character"></td></tr>
					<tr><td>password:</td><td><input type="password" name="password" required ="1"pattern=".{3,}" title="three or more characters" class="textbox"></td></tr>
						  <script type="text/javascript">
				    var f1 = new LiveValidation('password');
				   f1.add(Validate.Presence,{failureMessage: "X"});
				 </script>
					<tr><td>select role:</td><td>
					<select name="role" required="true" class="textbox">
					<?php
				$role=array("","Financemanager","FinanceOfficer","SystemAdmin","Customer","Bill reader");
				foreach($role as $i)
				echo "<option value=$i>$i</option>";
				?>	
				</select>
			</td></tr>
			<tr><td>User Photo:</td><td><input type="file" name="photo" required class="textbox"></td></tr>
			<tr><td colspan="2"><input type="reset" value="Reset" class="myButton"><input type="submit" value="Sign Up" name="register" class="myButton">
			</td></tr>
			</table>
			</form>
			
<?php
//if(isset($_SESSION['username'])&&isset($_SESSION['password']))
   // {
				 if(isset($_POST['register']))
					{
							$fn=$_POST['fname'];
							$ln=$_POST['lname'];
							$sex=$_POST['sex'];
							$age=$_POST['age'];
							$un=$_POST['username'];
							$pw=$_POST['password'];
							//$pw=MD5($_POST['password']);
							$role=$_POST['role'];
							$ptmploc=$_FILES["photo"]["tmp_name"];
							$pname=$_FILES["photo"]["name"];
							$psize=$_FILES["photo"]["size"];
							$ptype=$_FILES["photo"]["type"];
							
				if($conn)
				{
				$sql="select * from user where username='$un'";
				$userexist=mysqli_query($conn,$sql);
				if(mysqli_affected_rows($conn))
					echo "Username already exist please change your username and try again!";
				else{
					
						if($psize<=1000000&&($ptype=="image/jpeg"||$ptype=="image/jpg"||$ptype=="image/png"))
				{
					if(!file_exists("userphoto"))
						mkdir("userphoto");
					$photopath="userphoto/$pname";
					if(copy($ptmploc,$photopath))
					{
					$sql=mysqli_query($conn,"insert into user values('identity(1,1)','$fn','$ln','$sex','$age','$un','$pw','$role','1','$photopath','','')");
					$inserted=mysqli_query($conn,$sql);
								if(mysqli_affected_rows($conn))
									echo "User registered successfully!";
								else	
									echo "Unable to register the user";
							}else
								echo "Unable to upload the photo!";
						}
						else
						{
							if($psize>1000000)
								echo "Photo size should not be greater than 2Kb!";
							else
								echo "Photo should be in jpeg format";
						}
					}
					}
					else
				echo "Connection Failed";
				}
				//}
				?>
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
