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
					<li><a href="newPrisonerRegistration.php"> new prisoner registration </a></li>
					<li><a href="search1.php"> search prisoners </a></li>
					<li><a href="tran.php"> Transfer request</a></li> 
					<li><a href="conditionalReleaseCase.php"> conditional release case request</a></li>					
				</ul>
		    </div>
	   </div>
<!--==================================================================== end leftbar========================================================================= -->

	<!-- end leftbar -->
<!--====================================================== start content====================================================================================== -->
	
                  <div id="content">
		          <div class="post">

                 
                  <form  type="multipart/form-data" name="myForm" action="search2.php" method="post" onsubmit="return (Register());" >
					    <h2><b>OFFICER REGISTERATION FORM </h2><br><br><br>
						<table style="color: black;">
           
		            <tr>
                   <td height="20px">ID:</td>
				   <td><input type="text" name="prid" style="width:100px" pattern="[0-9]+"
				   oninvalid="setCustomValidity('id  is Not required')" onchange="try{setCustomValidity('')} catch(e){}" required="required">
				   </td>
                  </tr>	
				  <tr><td>&nbsp;</td></tr>
                  <tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td height="20px"><input type="submit" value="search" name="search"></a></td>
				  <td align="right"><input type="reset" value="Reset"></td><br>
                  </tr>
				   </table>
	         
                </form>
		      			
		      </div>
	          </div>
<!--====================================================== end content====================================================================================== -->
	<!--================================================================= start rightbar====================================================================== -->
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
<!--=============================================================== end leftbar==========================================================-->
<!--======================================================= end rightbar====================================================================================-->
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
