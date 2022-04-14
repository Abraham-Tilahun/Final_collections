<?php
session_start();
	if (!isset($_SESSION['userName'])) {
		header('Location: login.php');
		exit; 
	}
	if($_SESSION['userType']=='staff'){
		header('Location: registrationform.php');
		exit; 
	} 
?>
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
		      <img src="images/header.png" style="width: 89%; height: 100%;"></img>
	       </div>
		  
<!--==========================================================================Header end =====================================================================-->
	    </div>
<!--======================================================================== end header ======================================================================-->
       <div id="menu">
		     <ul>
				<li><a href="Home.html"title="" style="margin-left:155px;">Home</a></li> 
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
					<li><a href="staff.php">STAFF</a></li>
				  <li><a href="Schedul.php"> Schedule </a></li>
				  <li><a href="search1.php"> search prisoners </a></li>
				  <li><a href="decision.php"> court decision </a></li>
				  <li><a href="prisonReg.php"> prison registration </a></li>
				  <li><a href="newPrisonerRegistration.php"> new prisoner registration </a></li>
				  <li><a href="visitorregistration.php"> Register Visitor </a></li>
				 <li><a href="tran.php"> Transfer request</a></li>
				<li><a href="conditionalReleaseCase.php"> conditional release case request</a></li>
				</ul>
		    </div>
	   </div>
<!--==================================================================== end leftbar========================================================================= -->
<!--===================================================================== start content =======================================================================-->
	   <div id="content">
		 <div class="post">
          <div class="SLIDE">
	       <script language="JavaScript" align="center">    
	        var i = 0;
            var path = new Array(); 
            // LIST OF IMAGES
            path[0] = "images/uu.jpg";
            path[1] = "images/DSC04813.jpg";
			path[2] = "images/z.jpg";
			path[3] = "images/d.jpg";
            path[4] = "images/DSC04820.jpg";
            path[5] = "images/asme.jpg";
			path[6] = "images/DSC04825.jpg";
                function swapImage()
                    {
                        document.slide.src = path[i];
                           if(i < path.length - 1) i++; else i = 0;
                               setTimeout("swapImage()",3000);
		            }
                        window.onload=swapImage;
      </script>  
           <img  name="slide" SRC="images/v3.JPG" WIDTH=527 HEIGHT=530 ALIGN="CENTER">
		   <br><br>
		 </div>		
		</div>
	 </div>
   <div class="bottom"></div>
				
<!--=================================================================================== end content =============================================================-->
<!--=================================================================================== start rightbar========================================================= -->
	  <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
				  <li><a href="viewSchedule.php"> View Schedule </a></li>
					       <li> <a href="viewPrisonerInformation.php"> View prisoner information </a></li>
					       <li><a href="viewTransfer.php" title=""> ViewTransferRequest </a></li>
					       <li><a href="viewCon.php" title=""> ViewConditionalReleaseCase </a></li>
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
