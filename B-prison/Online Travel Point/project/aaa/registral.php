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
				<li><a href="registral.php"title="" style="margin-left:155px;">Home</a></li> 
				<li><a href="Aboutas.php" title="">About as</a></li>
			    <li><a href="contactas.php" title="">contact as</a></li>
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
				  <li><a href="changePasswordRegistral.php">changePassword</a></li>
				   <li><a href="prisonRegreg.php"> prison registration </a></li>
					<li><a href="newPrisonerRegistration.php"> new prisoner registration </a></li>
					<li><a href="search1.php"> search prisoners </a></li>
					<li><a href="tran.php"> Add Transfer request</a></li> 
					<li><a href="addCondRe.php">Add conditional release case request</a></li>
					<li><a href="">Generet Report</a></li>
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
			path[1] = "images/d.jpg";
            path[2] = "images/DSC04813.jpg";
			path[3] = "images/z.jpg";
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
<!--================================================================= start rightbar====================================================================== -->
	  <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li> <a href="viewPrisonerInformationreg.php"> View prisoner information </a></li>
					<li><a href="viewTransReg.php">View Transfer Request</a></li>
					<li><a href="viewConreg.php" title=""> ViewConditionalReleaseCase </a></li>
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
