
      <html>
       <head>
       <meta http-equiv="content-type" content="text/html; charset=utf-8" />
       <title> conditional release case</title>
       <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="register.js"></script>
       </head>
       <body>
       <div id="main">

<!-- ==========================================start header====================================================================================-->
           <div id="header">
           <div id="logo">
          <img src="images/header.png" style="width: 100%; height: 100%;"></img>
      </div>
<!--===========================================================Header end ==========================================================================-->

     </div>
<!--============================================================= end header =========================================================================-->
     <div id="menu">

         <ul>
           <li><a href="Home.html"title="" style="margin-left:155px;">Home</a></li> 
           <li><a href="Aboutus.html" title="">About us</a></li>
			<li><a href="contactus.html" title="">contact Us</a></li>
			<li><a href="logout.php" title="">Logout</a></li>
		 </ul>
     </div><br/>
<!-- =========================================================================start page============================================================= -->
    <div id="page">
<!-- =====================================================================start leftbar =========================================================-->
	 <div id="leftbar" class="sidebar">
			  <h2>REGISTRATION</h2>
			  <div class="back">
                <ul>
				   <li><a href="staff.php">STAFF</a></li>
				    <li><a href="Schedul.php">Schedule</a></li>
					<li><a href="search1.php">search prisoners</a></li>
 				    <li><a href="decision.php">court decision</a></li>
					<li><a href="prisonReg.php">prison registration</a></li>
					<li><a href="newPrisonerRegistration.php">new prisoner registration</a></li>
					<li><a href="visitorregistration.php">Register Visitor</a></li>
					<li><a href="tran.php">Transfer request</a></li>
					<li><a href="conditionalReleaseCase.php">conditional release case</a></li>
				</ul>
				</div>
	<div class="bottom"></div>
	 </div>
<!--======================================================================== end leftbar================================================================= -->
	<!-- start content -->
      <div id="content">
		  <div class="post">
			 <h2>Prisoner Information </h2>
					<?php
						include("dbconnet.php");
							mysql_select_db('PRISON');
							$sql="select *from registerprisoner";
							$retval = mysql_query( $sql, $conn );
							if(! $retval ){
								die('Could not get data:' . mysql_error());   
								}
							echo "<table border=1><tr><th>firstName</th><th>lastName</th>
							<th>dateOfEntrance</th>
							<th>prisonerId</th><th>dateofRelease</th><th>offenceType</th><th>address</th></tr>";
							while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){ 
								echo "<tr><td>{$row['prisoner_id']} </td> "
									."<td>{$row['fname']}</td> "
									."<td>{$row['lname']}</td> "
									."<td>{$row['address']}</td> "
									."<td>{$row['DateOfEntrance']}<td>"
									."<td>{$row['dateOfRelease']}<td>"
									."<td>{$row['prisonerId']}<td>"
									."<td>{$row['dateOfRelease']}<td></tr> ";
							}
							echo "</table>";
						?>
					</div>
				</div>
<!-- ====================================================end content=============================================================================== -->
<!-- =====================================================start rightbar============================================================================ -->
	<div id="rightbar" class="sidebar">
			<h2>View</h2>
			<div class="back">
			  <ul>
                 <li> <a href="viewPrisonerInfo.php"> View prisoner information</a></li>
				 <li><a href="prisonReg.php">prison registration</a></li>		
				 <li><a href="viewSchedule.php">View Schduling time</a></li>
				<li> <a href="viewPrisonerInfo.php"> View prisoner information</a></li>
			 </ul>
			</div>
				
<!--============================================================== end rightbar =====================================================================-->
	   <div style="clear: both;">&nbsp;</div>
       </div>
<!-- ===============================================================end page============================================================================ -->
     <div id="footer">
    <p>Copyright ; 2015. <a href="#">cs 4th</a>  <a href="#">orginal</a>  <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">project</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">IP</abbr></a></p> 
<!--==================================================================End of notice =====================================================================-->
    </p>
	</div>
  </div>
 </body>