<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>AU OES-Exam Committee Page</title>
</head>

<body>
<div id="container">
	<?php
		include "Header.php";
		?>
    
        
	<div id="content">
		<div id="left">
			<h1>Hi!,<?php echo $_SESSION['Name'];?> Welcome To AU OES</h1>
                        <img src="images/EC.jpg"/>
                        <br><h2><hr></hr>You are exam committee of the system for <?php echo $_SESSION['Dept'];?> Department</h2></br>
                        <h3><strong>You can now play your role </strong></h3>
			
	<p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer">Copyright &copy; 2014 AU Online Examination System <br/> All rights reserved.&nbsp;</div>		
</div>
</body>
</html>