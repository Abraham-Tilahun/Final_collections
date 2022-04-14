  <?php
  include("dbconnet.php");
  mysql_select_db('PRISON');
  $sql="SELECT * FROM  conditional_release_case_request";
		mysql_select_db('PRISON');
		$retval = mysql_query($sql);
		if(!$retval)
		{
			die('can not'.mysql_error());
		}
		
        ?>  
   
        <html>
        <head>
		 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <title>VIEW PRISONER INFORMATION</title>
		 <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
        </head>
        <body>
	<div id="main">
<!-- ========================================================== header====================================================================================== -->
                <div id="header">
				 <div id="logo">
				  <img src="images/header.png" style="width: 100%; height: 100%;"></img>
	             </div>
			   </div>
<!--================================================================Header end =============================================================================-->
<!-- ===============================================================end header=============================================================================== -->
			<div id="menu">
				    <ul>
					 <li><a href="registral.php"title="" style="margin-left:155px;">Home</a></li> 
					 <li><a href="Aboutas.php" title="">About us</a></li>
					 <li><a href="contactas.php" title="">contact us</a>
					 <li><a href="logout.php" title="">Logout</a></li>
				  </ul>
		    </div><br/>
<!--===================================================================== start page============================================================================ -->
<!--===================================================================== start leftbar======================================================================== -->
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
<!--============================================================================ end leftbar===================================================================== -->
<!-- ===========================================================================start content================================================================== -->
	 	  <div id="content">
		<div class="post">
           <h2>Prisoner Information </h2><br><br>
		   
						<?php
							echo "<table border=5 height=310 width 460><tr><th>Date Of Entrance</th>
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
												echo $row['date_of_release'];
											echo '</td>';
											echo '</tr>';
											
										}
										
									}
									
							
							echo "</table>";
						?>
						<table>
			<tr><td>&nbsp;</td></tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		    <td><input type="button"  value="Back"  onclick="window.history.back();"></td>
		 </tr>
	  </table>
						
		</div>
	 </div>
<!--=========
<!-- =========================================================================end content===================================================================== -->
<!--========================================================================= start rightbar ===============================================================-->
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
<!--============================================================================ end page=============================================================== -->
        <div id="footer">
          <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=========================================================================End of notice =================================================================-->
       </p>
      </div>
   </div>
  </body>
