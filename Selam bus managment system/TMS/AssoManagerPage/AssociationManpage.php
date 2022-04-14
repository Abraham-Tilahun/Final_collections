<?php
include("../connection/connection.php");  
 session_start();
if(isset($_SESSION['USER_ID']))
 {
  $mail=$_SESSION['USER_ID'];
 } else {
 ?>

<script>
  alert('You are not logged In !! Please Login to access this page');
  alert(window.location='../login.php');
 </script>
 <?php
 }
 ?>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet"
type="text/css"
href="../css/adminstyle.css">
</head>
<body>
<div id="container">
<header><table border="2px" color="white"><tr><td><img src="../images/b2.jpg" height="70px"width="150px"/>
</td><br><td><img src="../images/.png" width="1050" height="80px"/></td>
<td><img src="../images/b4.jpg" height="80px" width="150px"/>	</td></tr></table></header>
	<?php 
	include '../logoutlink.php';
	?>
	</div>
	<div id="main">
	<div id="sidebar1">
	<div id="admin">
<ul><li><a>Association Man Tasks</a></li></ul>
	<ul>
	<li><a href="Schedulepermissionview.php"target="myframe">Approve Schedule Request</a></li>
	</ul>
	<ul>
	<li><a href="viewrequest.php"target="myframe">Accept_Request</a></li>
	</ul>
	<ul>
	<li><a href="../imageupload.php"target="myframe">Upload Notice </a></li>
	</ul>
	<ul>
	<li><a href="../updateindividualuser.php"target="myframe">Update Account </a></li>
	</ul>
	<ul>
	<li><a href="Post_and_comment/index.php"target="myframe">Post </a></li>
	</ul>
	
</div>
<?php 

?>
	
	</br></br></br></br></br>
	<?php
	include '../imagelink.php';
	?>
	</div>
	<div id="sidebar2">
		<?php 
	include '../timecalendar.php';
		?>
     
	</div>
	<div id="column1"> 
    <?php
	include '../ifram.php';
	?>
	</div>
	
	</div>
	</body>
	<footer>
	<?php 
	include '../footer.php';
	?>
	</footer>
</html>