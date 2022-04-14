        <html>
         <head>
		    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		    <title> VIEW TRANFER REQUEST</title>
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
					<li><a href="newPrisonerRegistration.php"> new prisoner registration </a></li>
					<li><a href="search1.php"> search prisoners </a></li>
					<li><a href="tran.php"> Transfer request</a></li>
                    <li><a href="conditionalReleaseCase.php">Add conditional release case request</a></li>						
				</ul>
		    </div>
	   </div>
<!-- ============================================================================end leftbar===================================================================== -->

<!-- ============================================================= start content ===============================================================================-->
	<div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
		<div class="post">
		 <form name="frm" action="approveTransfer.php" method="post" onSubmit="return register()">
           <h2>view transfer request </h2><BR><BR><BR><BR>
						<?php
							echo "<table border=1><tr><th>caseOfTransfer</th><th>too</th><th>Prisoner Id</th>
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
											$too=$row['too'];											
											echo '<td>';
											echo $too;
											echo '</td>';
										$sql1="select * from Prisoner where prisonerId='$pid' ";
									$retval1 = mysql_query( $sql1, $conn );
										if(! $retval1 )
										{
											die('Could not get data:' . mysql_error());   
										}
							
										while($row = mysql_fetch_array($retval1, MYSQL_ASSOC))
										{ 
									        $doe=$row['dateOfEntrance'];
									        $pid1=$row['personId'];
											$ot=$row['offenceType'];
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
						<table>
			<tr><td>&nbsp;</td></tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		    <!--<td ><input type="submit" value="Approve" ></a></td>-->
		    <td><input type="button"  value="Back"  onclick="window.history.back();"></td>
		 </tr>
	  </table>
				</form>
	     </div>
	 </div>
<!--============================================================= end content====================================================-->
	<div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li><a href="viewScheduleReg.php"> View Schedule </a></li>
				   <li> <a href="viewPrisonerInformation.php"> View prisoner information </a></li>
				   <li><a href="viewTransferRequest.php" title=""> ViewTransferRequest </a></li>
				   <li><a href="viewCon.php" title=""> ViewConditionalReleaseCase </a></li>
				</ul>
	</div>
				
	<!-- end====================================================================================== rightbar====================================================== -->
	 <div style="clear: both;">&nbsp;</div>
   </div>
<!-- ============================================================ end page=========================================================-->
    <div id="footer">
    <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--============================================================= End of notice ===================================================-->

   </div>
  </div>
</body>
