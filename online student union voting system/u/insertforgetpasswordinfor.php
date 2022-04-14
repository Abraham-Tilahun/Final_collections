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

	}
.myButton:hover {
	background-color:#9ba892;
}
.myButtonn:active {
	position:relative;
	top:1px;
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
		height: 10%;
		width: 30%;
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
				<a name="bottom"></a>
				<center>
				
<form method="POST" enctype="multipart/form-data">
 <br><br><br><br><br><br>
 <input type="text" class="textbox" name="username" placeholder=" enter uesrname">

 <br>
 <br>
 
<input type="submit" name="insert"value="insert" class="myButtonn">
</form>
 <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uogosuvs";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['insert'])){
$username=$_POST['username'];
$sql = "SELECT * FROM user where username='".$username."'";
$result = $conn->query($sql);?>
 <?php   
if ( $result->num_rows > 0 ){
	while($row=$result->fetch_assoc()){
		$_SESSION['username']=$row['username'];
	}
	
	if($username==$_SESSION['username']){
		$rand=rand(10000,66666);
		echo $_SESSION['username'];
		$_SESSION['rand']=$rand;
echo $rand;
	header("location:insertverfication.php");
	}
}
	
else
echo"no result found";
//echo "<script type='text/javascript'>alert('no result found')</script>";
}

$conn->close();


 ?>
			
		
						
						</center>
		    </div>
	<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>
</body>
</html>