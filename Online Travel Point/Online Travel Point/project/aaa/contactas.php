					<html>
					 <head>
						<meta http-equiv="content-type" content="text/html; charset=utf-8" />
						<title>view schedule</title>
						<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
					 </head>
					 <body>
	  <div id="main">
<!-- ================================================start header ==========================================================================================-->
					   <div id="header">
						 <div id="logo">
						  <img src="images/header.png" style="width: 100%; height: 100%;"></img>
						</div>
					</div>
<!--======================================================Header end =======================================================================================-->
			
<!-- =====================================================end header ======================================================================================-->
	<div id="menu">
				  <ul>
					<li><a href="Home.php"title="" style="margin-left:155px;">Home</a></li> 
					<li><a href="Aboutas.php" title="">About us</a></li>
					<li><a href="contactas.php" title="">contact us</a>
					<li><a href="logout.php" title="">Logout</a></li>
				</ul>
		   </div><br/>
<!--================================================================= start page================================================================================-->
<!--================================================================ start leftbar ==========================================================================-->	
		<div id="page">
         <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			  <div class="back">
			      <ul>
					<li><a href="changePasswordPolice.php">Change Password</a></li>
					<li><a href="visitorregistration.php"> Register Visitor</a></li>
					<li><a href="Schedul.php">Add Schedule</a></li>
					<li><a href="updateSchedule.php"> Update Schedule</a></li>
					<li><a href=""> Generet Report</a></li>
					
				</ul>
		    </div>
	   </div>
<!-- ====================================================================end leftbar======================================================================== -->
<!-- ==================================================================start content =======================================================================-->
	
	    <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
		  <div class="post">
               <h2>SCHEDULE INFORMATION </h2><br><br>
			   <table style="color: black;">
					<?php
						include("dbconnet.php");
						mysql_select_db('PRISON');
						$sql="select *from Schedule";
						$retval = mysql_query( $sql, $conn );
                        if(!$retval)
						{
							die('Could not get data:' . mysql_error());   
						}
						echo "<table border=5 width=500 height=450><th>DATE</th><th>TIME</th>";
						while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
						{ 
							echo '<tr>';
							echo '<td>';
							echo $row['date'];
							echo '</td>';
							echo '<td>';
								echo $row['time'];
							echo '</td>';
							echo '</tr>';
						}
                        echo "</table>";
					?>
				</div>
				</div>
 <!--==================================================================== end content==================================================================== -->
<!-- ===================================================start rightbar ====================================================================================-->
	                 <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li><a href="viewPrisonerPolice.php">View Prisoner Information</a></li>
					<li><a href="viewSchedule.php">View Schedule</a></li>
				   </ul>
	</div>
				
	<!-- end====================================================================================== rightbar====================================================== -->
	 <div style="clear: both;">&nbsp;</div>
   </div>

 <!--======================================================== end page========================================================================================== -->
                       <div id="footer">
                     <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=================================================================End of notice ==============================================================-->
         </p>
    </div>
  </div>
 </body>
