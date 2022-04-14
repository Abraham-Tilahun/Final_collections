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
.myButtonn {
		background-color: #2692d9;
		height: 50px;
		width: 170px;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
		margin-top: 20px;
	}
}
.myButtonn:hover {
	background-color:#9ba892;
}
.myButtonn:hover {
	background-color:#9ba892;
}
.myButtonn:active {
	position:relative;
	top:1px;
}


	.textbox
	{
		height: 30px;
		width: 170px;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		border: none;
		margin-top: 20px;
		
	}
#content
{
	background-color: white;
	width: 60%;
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

				<div id="content">
<?php
$vv=$_SESSION['rand'];
?>
<center>
<div class="center">
<form action="insertverfication.php" method="POST">
<br><br><br><br><br>
	<input type="text"name="verify_no" placeholder="enter your verfication number" class="textbox"><br>
<input type="submit" name="verify"value="insert" class="myButtonn">	
</form>

<?php

 echo$_SESSION['rand'];
if(isset($_POST['verify']))
{

$verify=$_POST['verify_no'];
	if($verify==$_SESSION['rand']){
		header("location:forgotpassword.php");
	}
	else
		echo"verfication not seccessfull";
}?>
				</div>
		
						</fieldset>
						</center>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>
	</div>
	
</body>
</html>