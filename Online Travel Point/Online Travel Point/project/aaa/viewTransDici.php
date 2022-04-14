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
				</ul>
		    </div>
	   </div>
<!-- ============================================================================end leftbar===================================================================== -->

<!-- ============================================================= start content ==============================================-->
	<div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
		<div class="post">
           <h2>view transfer request </h2>
						<?php
							echo "<table border=5 height=200 width 450><tr><th>caseOfTransfer</th><th>fromm </th><th>too</th><th>Prisoner Id</th>
							<th>First Name</th><th>Last Name</th><th>Sex</th>
							</tr>";
							include("dbconnet.php");
							mysql_select_db('PRISON');
							
							$sql2="select *from TRANSFER_REQUEST";
										$retval = mysql_query( $sql2, $conn );
										if(! $retval )
										{
											die('Could not get data:' . mysql_error());   
										}	
										while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
										{
											echo '<tr>';
											$pid=$row['prisonerId'];
											echo '<td>';
												echo $row['caseOfTransfer'];
											echo '</td>';
											echo '<td>';
												echo $row['too'];
											echo '</td>';
											
									$sql1="select * from Prisoner where prisonerId='$pid' ";
									$retval1 = mysql_query( $sql1, $conn );
										if(! $retval1 )
										{
											die('Could not get data:' . mysql_error());   
										}
							
										while($row = mysql_fetch_array($retval1, MYSQL_ASSOC))
										{ 
									        $pid1=$row['personId'];
											echo '<td>';
												echo $row['prisonerId'];
											echo '</td>';
											
									
									$sql="select *from Person where personId='$pid1'";
										$retval2 = mysql_query( $sql, $conn );
										if(! $retval2 )
										{
											die('Could not get data:' . mysql_error());   
										}
										
										while($row = mysql_fetch_array($retval2, MYSQL_ASSOC))
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
							}
							}
							
							
									
							echo '</tr>';
							echo "</table>";
						?>
	     </div>
	 </div>
<!--============================================================= end content====================================================-->
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
<!-- ============================================================ end page=========================================================-->
    <div id="footer">
    <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--============================================================= End of notice ===================================================-->

   </div>
  </div>
</body>
