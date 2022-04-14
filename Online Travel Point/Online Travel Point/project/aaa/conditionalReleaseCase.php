   <html>
        <head>
		 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <title>PRISONER Conditional Release case</title>
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
				   <li><a href="#">Generate Report</a></li>
					<li><a href="viewCondicip.php">View Conditional release request</a></li>
					<li><a href="changePassword.php">changePassword</a></li>
					</ul>
		    </div>
	   </div>
<!--============================================================================ end leftbar===================================================================== -->
<!-- ===========================================================================start content================================================================== -->
	 <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	  <div class="post">
       <form name="frm" action="viewCondicip.php" method="post" onSubmit="return register()"><br> 
         <caption><h2> Conditional Release case Form </h2></CAPTION>
	   <table>
	    <tr>
			<td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PrisonerId:</td><td><input type="text" name="prisonerId" size="18" pattern="[A-Za-z]+/[0-9]+{2,8}" 
			oninvalid="setCustomValidity('PrisonerId is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				 
		</tr>
		
	    <tr>
		  <td height="27"><a href="manalogin.html">
		    <td>&nbsp;&nbsp;<input type="submit" value="submit" ></a></td>
		  <td><input type="reset" value="reset"></td><br /><BR>
		 </tr>
	</table>
  </form>
</div>
 </div>
<!-- =========================================================================end content===================================================================== -->
<!--========================================================================= start rightbar ===============================================================-->
	
<!--============================================================================ end page=============================================================== -->
        <div id="footer">
          <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=========================================================================End of notice =================================================================-->
       </p>
      </div>
   </div>
  </body>
sss