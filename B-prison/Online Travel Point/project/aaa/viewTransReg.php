        <html>
         <head>
		    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		    <title> VIEW TRANSFER PRISONER REGISTRATION</title>
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
				<li><a href="registral.php"title="" style="margin-left:155px;">Home</a></li> 
				<li><a href="Aboutas.php" title="">About us</a></li>
				<li><a href="contactus.php" title="">contact us</a>
				<li><a href="logout.php" title="">Logout</a></li>
		   </ul>
       </div><br/>
<!-- ====================================================================start page========================================================================= -->
	 <div id="page">
	<div id="page">
	<!--================================================================= start leftbar====================================================================== -->
	      <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			  <div class="back">
			      <ul>
					<li><a href="changePasswordRegistral.php">changePassword</a></li>
				    <li><a href="prisonRegreg.php"> prison registration </a></li>
					<li><a href="blockReg.php"> Block registration </a></li>
				    <li><a href="roomReg.php"> Room registration </a></li>
					<li><a href="newPrisonerRegistration.php"> new prisoner registration </a></li>
					<li><a href="search1.php"> search prisoners </a></li>
					<li><a href="tran.php"> Add Transfer request</a></li> 
					<li><a href="addCondRe.php">Add conditional release case request</a></li>
				</ul>
		    </div>
	   </div>
<!-- ============================================================================end leftbar===================================================================== -->

<!-- ============================================================= start content ==============================================-->
	<div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
		<div class="post">
           <h2>view transfer request </h2><br><br><br>
						<?php
							echo "<table border=5 height=315 width 500><th>caseOfTransfer</th><th>too</th><th>Prisoner Id</th>
							<th>First Name</th><th>Sex</th>
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
													echo $row['sex'];
												echo '</td>';
												
										}
							}
							}
							
							
									
							echo '</tr>';
							echo "</table>";
						?>
						<table>
						<tr>
						<td><input type="button"  value="Back"  onclick="window.history.back();"></td>
						</tr>
						</table>
	     </div>
	 </div>
<!--============================================================= end content====================================================-->
	<div id="rightbar" class="sidebar">
      <h2>View</h2>
	   <div class="back">
		 <ul>
			        <li> <a href="viewPrisonerInformationreg.php"> View prisoner information </a></li>
					<li><a href="viewTransReg.php">View Transfer Request</a></li>
					<li><a href="viewConreg.php" title=""> ViewConditionalReleaseCase </a></li>
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
