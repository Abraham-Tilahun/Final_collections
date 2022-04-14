<?php
	session_start();
	if (!isset($_SESSION['userName'])) {
		header('Location: login.php');
		exit; 
	                   }
?>
      <html>
         <head>
		    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		    <title> MESSAGESEEADMIN FORM</title>
		    <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
        </head>
       <body>
	  <div id="main">
<!--==================================================================start header========================================================================== -->
             <div id="header">
               <div id="logo">
		      <img src="images/header.png" style="width: 100%; height: 100%;"></img>
	       </div>
		  
<!--==========================================================================Header end =====================================================================-->
	    </div>
<!--======================================================================== end header ======================================================================-->
       <div id="menu">
		     <ul>
				<li><a href="adminstrator.php"title="" style="margin-left:155px;">Home</a></li> 
				<li><a href="Aboutas.php" title="">About us</a></li>
				<li><a href="contactas.php" title="">contact us</a>
				<li><a href="logout.php" title="">Logout</a></li>
		   </ul>
       </div><br/>
	   <div id="page">
<!-- ====================================================================start page========================================================================= -->
	 <div id="page">
	<!--================================================================= start leftbar====================================================================== -->
<div id="page">	     
		 <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			  <div class="back">
			      <ul>
				    <li><a href="changePasswordAdmin.php">changePassword</a></li>
					<li><a href="messageSeeadmin.php">messageSeeform</a></li> 
					<li><a href="staffadmin.php">Create user account</a></li>
					<li><a href="#">Generate Report</a></li>
				</ul>
		    </div>
	   </div>
<!--==================================================================== end leftbar========================================================================= -->
<!--===================================================================== start content =======================================================================-->
	   <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	  <table border="1">
	  <?php 
	  include("dbconnet.php");
	  $sql="SELECT Name,Email, Message FROM  Message WHERE seen='0'";
		mysql_select_db('PRISON');
		$retval = mysql_query($sql);
		if(!$retval)
		{
			die('can not'.mysql_error());
		}
		echo "<table border=1 height=30 width 600><tr><td>Name</td><td>Email</td><td>Message</td><tr>";
	   while($row=mysql_fetch_array($retval, MYSQL_ASSOC)){
		   echo"<tr><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['Message']."</td><tr>";
	   }
	   $sql = "update message set seen='1' where seen='0'";
	   $retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not update data: ' . mysql_error());   
		}
		mysql_close($conn); 
	   ?>
	   </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <div class="bottom"></div>
		</div>	
    	
<!--=================================================================================== end content =============================================================-->
      <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li><a href="viewPrisonerInfoAdmin.php"> View Prisoner information</a></li>
				   </ul>
	</div>
				
	<!-- end====================================================================================== rightbar====================================================== -->
	 <div style="clear: both;">&nbsp;</div>
   </div>
<!--============================================================================================ end page================================================================ -->
  <div id="footer">
   <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=========================================================================================End of notice =========================================================--> 
     </p>
    </div>
   </div>
  </body>
