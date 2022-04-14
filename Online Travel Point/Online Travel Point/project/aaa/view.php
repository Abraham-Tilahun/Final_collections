
       <html>
       <head>
         <meta http-equiv="content-type" content="text/html; charset=utf-8" />
         <title>Home</title>
          <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
         <script type="text/javascript" src="register.js"></script>
      </head>
       <body>
          <div id="main">

                           <!-- start header -->
          <div id="header">
          <br/><br/><br/><br/><br/><br/><br/>
          <div id="logo">
         </div>
         </div>
                          <!-- end header -->
         <div id="menu">

              <ul>
                  <li><a href="Home.html"title="" style="margin-left:155px;">Home</a></li> 
		          <li><a href="Aboutas.php" title="">About us</a></li>
		          <li><a href="contactas.html" title="">contact as</a></li>
			      <li><a href="login.php" title="">LogIn</a></li>
              </ul>
         </div><br/>
                       <!-- start page -->
       <div id="page">
	                    <!-- start leftbar -->
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
	           </div>
	            <!-- end leftbar -->
	            <!-- start content -->
	
	    <div id="content">
		<div class="post">

	   <form  method="POST" action="logidb.php"><br>
          <legend>
          <table callpadding="10" cellspacing="10"><br>
            <tr>
               <th> User name:</th><br>
                <td><input type="text" size="15" name="username"pattern="[A-Za-z]+"oninvalid="setCustomValidity('name is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input>*</td>
          </tr>
         <tr><br>
              <th>Password:</th><br>
               <td><input type="password" size="15" name="password" pattern="[A-Za-z]+[0-9]*|[0-9]+[a-zA-Z]*"
               oninvalid="setCustomValidity('password is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input>*</td></td><br><br>
         </tr>
         <tr><br>
             <th><input type="submit" name="login"  value="Login"/></th><br>
             <td> <input type="reset" name="reset"  value="reset"/></td>
        </table>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
   
      </form>
		</div>
	    </div>
	<!-- end content -->
	<!-- start rightbar -->
	<div id="rightbar" class="sidebar">
				
				<h2>Officers</h2>
				 <div class="back">
				<ul>
					<li><a href="Registrar .html">Registrar officer</a></li>
					<li><a href="Desci.html">Decipline officer</a></li>
					<li><a href="Release.html">Release office</a></li>
					
				</ul>
				</div><div class="bottom"></div>
				
				
				
	<!-- end rightbar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
 <div id="footer">
   <p>Copyright ; 2015.Cs 4th  <a href="#">cs 4th </a> </p> 
	

<!--End of notice --></p>

</div>
</div>
</body>