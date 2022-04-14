
         <html>
            <head>
             <meta http-equiv="content-type" content="text/html; charset=utf-8" />
             <title>Home</title>
             <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
             <script type="text/javascript" src="register.js"> </script>
         </head>
      <body>
  <div id="main">
<!-- ===================================================================================start header =====================================================-->
    <div id="header">
       <div id="logo">
		  <img src="images/header.png" style="width: 89%; height: 100%;"></img>
        </div>
   </div>
 <!-- ====================================================================================end header======================================================= -->
    <div id="menu">
       <ul>
          <li><a href="Home.html"title="" style="margin-left:155px;">Home</a></li> 
		   <li><a href="Aboutas.php" title="">About us</a></li>
		   <li><a href="contactas.html" title="">contact as</a></li>
		   <li><a href="signUp.php" title="">Sign Up</a></li>
		   <li><a href="login.php" title="">LogIn</a></li>
        </ul>
   </div>
 <!-- ==============================================================================start page=============================================================== -->
   <div id="page">
  <!--=========================================================================== start leftbar=========================================================== -->
	 <div id="leftbar" class="sidebar">
	
			     <h2>SERVICE</h2>
			        <div class="back">
				  <ul>
		           <li><a href="Job.html">job opportunity</a></li>
                   <li><a href="Desci.html"> Descion house</a></li>
                   <li><a href="schedule.html">visiting Schedule</a></li>
			     </ul>
				  </div><div class="bottom"></div>
				     <h2>NEWS</h2>
				  <div class="back">
				    <ul>
					 <li><a href="news.html">Daily news</a></li>
                     <li><a href="news.html">preveious news</a></li>
		             <li><a href="news.html">BBC</a></li>
		           </ul>
				  </div>
				   <div class="bottom"></div>
	               </div
<!--============================================== end leftbar ============================================================================================================-->
 <!-- ===============================================start content==================================================================================================== -->
	
	               <div id="content">
		           <div class="post">

                               <form  method="post" action="validate.php"> 
								User name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
										  <input type="text" name="user_name" size="30"  
														   oninvalid="setCustomValidity('User Name is required')" 
									                       onchange="try{setCustomValidity('')}catch(e){}" required=""><br/><br/>
								Email address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
										<input type="Email" name="email" size="30" 
													oninvalid="setCustomValidity('Email is required')" 
													onchange="try{setCustomValidity('')}catch(e){}" required=""><br/><br/>
								Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
																
								<input type="password" size=30 placeholder="password..."name="password"/><br><br></p>
								Re type password:&nbsp;&nbsp;&nbsp; <input type="password" size=30 name="repassward"/><br><br></p>
								<p>
								<input type="submit" name="Signup" value="signup"/></p>
							</form>
						</div>
	              </div>
	<!--============================================================================ end content ==============================================-->
	<!-- ====================================================================start rightbar=================================================== -->
	<div id="rightbar" class="sidebar">
				<h2>Officers</h2>
				 <div class="back">
				   <ul>
					<li><a href="Registrar .html">Registrar officer</a></li>
					<li><a href="Desci.html">Decipline officer</a></li>
					<li><a href="Release.html">Release office</a></li>
         		</ul>
	</div><div class="bottom"></div>
<!--============================================================================= end rightbar =======================================================-->
  <div style="clear: both;">&nbsp;</div>
  </div>
<!--============================================================================= end page =============================================================  -->
    <div id="footer">
   <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>
 
	

<!--==============================================================End of notice======================================================================================= -->  
   </p>
  </div>
 </div>
</body>