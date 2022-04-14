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

				<div id="leftside">
				
						<?php
						include("homesidemenu.php");
					   ?>	
				    
				</div>
				<div id="content">
				<a name="bottom"></a>
				<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="uogosuvs"; // Database name 
$tbl_name="aresponse"; // Table name 
$con = mysqli_connect('localhost', 'root', '','uogosuvs');
// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
//$id=$_GET['email'];
$cfname=$_REQUEST['key'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE requestid='{$cfname}'";
$result=mysqli_query($con,$sql);

// if successfully deleted
if($result){
   
echo "<script type='text/javascript'>alert(' succesfully deleted')</script>";


}

else {
echo "ERROR";
}

// close connection 
mysqli_close($con);

?>



 </fieldset>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>

	</div>
</body>
</html>