       <html>
         <head>
		    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		    <title> NEW PRISONER REGISTERATION FORM</title>
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
				<li><a href="dicipline.php"title="" style="margin-left:155px;">Home</a></li> 
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
					<li><a href="viewPrisonerDeci.php">View Prisoner Information</a></li>
					<li><a href="addTransReq.php">Add Transfer Request</a></li>
					<li><a href="viewTransDici.php">View Transfer Request</a></li>
					<li><a href="changePassword.php">changePassword</a></li>
				</ul>
		    </div>
	   </div>
<!-- ============================================================================end leftbar===================================================================== -->
<!-- =============================================================================start content ===========================================================-->
	
	  <div id="content">
		<div class="post">
           <h2>Prisoner Information </h2><br><br>
						<?php
							echo "<table border=5 height=200 width 450><tr><th>Date Of Entrance</th>
							<th>Offence Type</th><th>First Name</th><th>Last Name</th><th>Sex</th>
							<th>Punishment Year</th><th>release Date</th></tr>";
							include("dbconnet.php");
							mysql_select_db('PRISON');
							
							$sql1="select * from Prisoner";
									$retval = mysql_query( $sql1, $conn );
										if(! $retval )
										{
											die('Could not get data prisoner:' . mysql_error());   
										}
							
									while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
									{ 
								        $pid1=$row['personId'];
										$pid=$row['prisonerId'];
										echo '<tr>';
										echo '<td>';
											echo $row['dateOfEntrance'];
										echo '</td>';
										echo '<td>';
											echo $row['offenceType'];
										echo '</td>';
										
										
										$sql="select * from Person where personId='$pid1'";
										$retval1 = mysql_query( $sql, $conn );
										if(! $retval1 )
										{
											die('Could not get data person:' . mysql_error());   
										}
										
										while($row = mysql_fetch_array($retval1, MYSQL_ASSOC))
										{ 
											
												echo '<td>';
													echo $row['fName'];
												echo '</td>';
												echo '<td>';
													echo $row['lName'];
												echo '</td>';
												echo '<td>';
													echo $row['sex'];
												echo '</td>';
												
										}
										$sql2="select * from CourtDecision where prisonerId='$pid'";
										$retval2 = mysql_query( $sql2, $conn );
										if(! $retval2 )
										{
											die('Could not get data cort:' . mysql_error());   
										}	
										while($row = mysql_fetch_array($retval2, MYSQL_ASSOC))
										{
											echo '<td>';
												echo $row['yearOfPunishment'];
											echo '</td>';
											echo '<td>';
												echo $row['dateOfRelease'];
											echo '</td>';
											echo '</tr>';
											
										}
										
									}
									
							
							echo "</table>";
						?>
						
		</div>
	 </div>
<!--============================================================================ end content =================================================================-->
   <div id="rightbar" class="sidebar">
   <h2>View</h2>
	   <div class="back">
		 <ul>
			<li><a href="addCondRe.php" title="">Add Conditional Release Case request</a></li>
		   <li><a href="viewConditinReq.php" title="">View Conditional Release Case request</a></li>
		 </ul>
		 </div>
<div class="bottom"></div>	
<!--======================================================= end rightbar====================================================================================-->
<div style="clear: both;">&nbsp;</div>
</div>
<!--============================================================================= end page ===================================================================-->
     <div id="footer">
      <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>
<!--==========================================================================End of notice ================================================================-->
     </p>
   </div>
  </div>
 </body>
