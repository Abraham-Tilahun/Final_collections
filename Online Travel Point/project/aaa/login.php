<?php
	session_start();
	if (isset($_SESSION['userName'])) {
	if($_SESSION['role']=='Admin'){
		header('Location: adminstrator.php');
		exit; 
	                   }
	else if($_SESSION['role']=='RegistralOf'){
		header('Location: registral.php');
		exit; 
	                   }
	 else if($_SESSION['role']=='policeOf'){
		header('Location: police.php');
		exit; 
	                   }
      else if($_SESSION['role']=='diciplineOf'){
		header('Location: diciplineOf.php');
		exit;  
	                   }
	else if($_SESSION['role']=='releaseCase'){
		header('Location: releaseCase.php');
		exit; 
	                   }	
     else if($_SESSION['role']=='CourtDecision'){
		header('Location: CourtDecision.php');
		exit; 
	                   } 
	}
?>
       <html>
       <head>
         <meta http-equiv="content-type" content="text/html; charset=utf-8" />
         <title>LogIn</title>
          <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
         <script type="text/javascript" src="register.js"></script>
      </head>
       <body>
          <div id="main">

  <!-- ========================================================================start header========================================================================= -->
          <div id="header">
          <div id="logo">
		  <img src="images/header.png" style="width: 100%; height: 100%;"></img>
         </div>
         </div>
   <!--============================================================================== end header=================================================================== -->
         <div id="menu">

              <ul>
                  <li><a href="Home.php"title="" style="margin-left:155px;">Home</a></li> 
		          <li><a href="Aboutas.php" title="">About us</a></li>
		          <li><a href="contactas.php" title="">contact as</a></li>
			      <li><a class="current" href="login.php" title=""style="align right">LogIn</a></li>
              </ul>
         </div><br/>
 <!--============================================================================== start page================================================================== -->
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
 <!-- =====================================================end leftbar =========================================================================================-->
<!-- =========================================================start content==================================================================================== -->
	<div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	    <div class="post">

	   <form  method="POST" action="logidb.php"><br>
          <table callpadding="10" cellspacing="10"><br>
		 
            <tr>
               <th> User name:</th><br><td><input type="text" size="15" name="username"pattern="[A-Za-z]+[0-9]*|[0-9]+[a-zA-Z]*" 
			   oninvalid="setCustomValidity('name is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input></td>
          </tr>
         <tr><br>
              <th>Password:</th><br><td><input type="password" size="15" name="password" pattern="[A-Za-z]+[0-9]*|[0-9]+[a-zA-Z]*"
               oninvalid="setCustomValidity('password is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input></td></td>
         </tr>
	
         <tr><br>
             <th><input type="submit" name="login"  value="Login"/></th>
             <td> <input type="reset" name="reset"  value="reset"/></td>
        </table>
      </form>
		</div>
	    </div>
<!--=========================================================== end content=================================================================================== -->
<!-- =============================================================start rightbar================================================================================= -->
	  <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li><a href="view schudele1.php" title="">view Schedule</a></li>
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
