
      <html>
         <head>
		    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		    <title>view Schedule</title>
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
				<li><a href="Home.php"title="" style="margin-left:155px;">Home</a></li> 
		          <li><a href="Aboutas.php" title="">About us</a></li>
		          <li><a href="contactas.php" title="">contact as</a></li>
			      <li><a href="login.php" title=""style="align right">LogIn</a></li>
		   </ul>
       </div><br/>
	   <div id="page">
<!-- ====================================================================start page========================================================================= -->
			 <div id="page">
								<!-- start leftbar -->
			   <div id="leftbar" class="sidebar">
			
					<h2>SERVICE</h2>
					<div class="back">

				<ul>
				<li><a href="job.php">job opportunity</a></li>
				<li><a href="Desci.php"> Descion house</a></li>
			  </ul>
					</div><div class="bottom"></div>
						<div class="bottom"></div>
					   </div>
<!--==================================================================== end leftbar========================================================================= -->
<!--===================================================================== start content =======================================================================-->
    	    <div id="content">
		  <div class="post">
               <h2>SCHEDULE INFORMATION </h2><br><br>
			   <table style color:black;>
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
   <div class="bottom"></div>
				
<!--=================================================================================== end content =============================================================-->
<!--============================================================================================ end page================================================================ -->
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