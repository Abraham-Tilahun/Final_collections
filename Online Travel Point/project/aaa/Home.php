
          <html>
          <head>
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <title>	News</title>
                <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
                <script type="text/javascript" src="register.js"></script>
               </head>
          <body>
              <div id="main">
<!-- ================================================================start header ==========================================================================-->
              <div id="header">
               <div id="logo">
                <img src="images/header.png" style="width: 100%; height: 100%;"></img>
               </div>
            </div>
<!--================================================================= end header============================================================================= -->
           <div id="menu">
             <ul>
                  <li><a class="current" href="Home.php"title="" style="margin-left:155px;">Home</a></li> 
		          <li><a href="Aboutas.php" title="">About us</a></li>
		          <li><a href="contactas.php" title="">contact as</a></li>
			      <li><a href="login.php" title=""style="align right">LogIn</a></li>
            </ul>
          </div><br/>
<!-- =========================================================================start page =======================================================================-->
              <div id="page">
	<!--================================================================= start leftbar====================================================================== -->
	          <div id="page">
	                    <!-- start leftbar -->
	   <div id="leftbar" class="sidebar">
	
			<h2>SERVICE</h2>
            <div class="back">

		<ul>
		        <li><a href="Job.php">job opportunity</a></li>
				<li><a href="Desci.php"> Descion house</a></li>
	  </ul>
			</div><div class="bottom"></div>
				<div class="bottom"></div>
	           </div>
	<!--=============================================================================== end leftb ar ===========================================================-->
	<!-- ===============================================================================start content ===========================================================-->
	
	           <div id="content">
	           <div class="post">
               <div class="SLIDE">
	            <script language="JavaScript" align="center">    
	              var i = 0;
                  var path = new Array(); 
    //================================================================ LIST OF IMAGES==================================================================
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
<!--===========================================================================<h1> Bahir Dar prisoner Information  <h1>=========================================	-->	  
                  <img  name="slide" SRC="images/v3.JPG" WIDTH=527 HEIGHT=450 ALIGN="CENTER">
		             </div>
		           </div>
	            </div>
<!------------------------------------------------------------------------ end content =----------------------------------------------------------------->
<!-- =======================================================================start rightbar ============================================================-->
	       <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li><a href="viewScheduleadmin.php" title="">view Schedule</a></li>
				   </ul>
	</div>
				
	<!-- end====================================================================================== rightbar====================================================== -->
	 <div style="clear: both;">&nbsp;</div>
   </div>

 <!--======================================================== end page========================================================================================== -->
                       <div id="footer">
                     <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=================================================================End of notice ==============================================================-->
         </p>
    </div>
  </div>
 </body>
