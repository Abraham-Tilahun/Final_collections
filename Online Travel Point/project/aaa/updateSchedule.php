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
		    <title> update visiting time schedule</title>
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
				<li><a href="police.php"title="" style="margin-left:155px;">Home</a></li> 
				<li><a href="Aboutas.php" title="">About us</a></li>
				<li><a href="contactus.html" title="">contact us</a>
				<li><a href="logout.php" title="">Logout</a></li>
		   </ul>
       </div><br/>
<!-- ====================================================================start page========================================================================= -->
	 <div id="page">
	<!--================================================================= start leftbar====================================================================== -->
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
<!--==================================================================== end leftbar========================================================================= -->
<!--===================================================================== start content =======================================================================-->
	   <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	   <form name="frm" action="updateScheduleVisiting.php" method="post" onSubmit="return register()"><br> 
	      <table border="1">
		  <tr>
		  <th>Date</th>
		  <th>Time</th>
		  <th>&nbsp;</th>
		  </tr>
		  <?php
							include("dbconnet.php");
							mysql_select_db('PRISON');
							$sql = "SELECT *from  schedule";
							$retval1 = mysql_query( $sql, $conn );
								while($row2=mysql_fetch_assoc($retval1))
							       { 
							   $date=$row2['date'];
							   $time=$row2['time'];							     
											echo '<tr>';
											echo '<td>'."$date ".'</td>';
											echo '<td>'."$time".'</td>';
											echo  '<td>';
											echo '<a style="width: 100px;height: 20px;border:none;color:blue" href="updateScheduleVisiting.php? date='.$date.' & time='.$time.'" >Update_Schedule</a> </td>';
											echo  '</td>';
											echo '</tr>';
										}
						?>
			</table>
			</form>
		</div>
<!--=================================================================================== end content =============================================================-->
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
<!--============================================================================================ end page================================================================ -->
  <div id="footer">
   <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=========================================================================================End of notice =========================================================--> 
     </p>
    </div>
   </div>
  </body>
<!--============================================================================================ end page================================================================ -->
 