<?php
            session_start();
           if(!isset($_SESSION['username'])){?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Admin Student mgt</title>
</head>

<body>
 

<div id="container">
	    
         <?php 
		include "Header.php";
 	?>
	<div id="content">
            <?php
                    //include "left_head.php";
                    ?>
		<div id="left">
                    <div id="logout" align="left"><h2>Would you want to <a href="Logout.php">Logout</a></h2></div>
                    <img src="images/Admin.png"  alt="Admin Welcome"/><h1>Welcome to Online Examination System<br/>you are Admin of the Sytem </h1>
               
			
	<p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
    <div id="footer">Copyright &copy; 2014 AU Online Examination System. </br> All rights reserved.&nbsp;</div>	
</div>
</body>
</html>
<?php 

           }
 else {
               session_start();
    header("Location:../index.php");
}
