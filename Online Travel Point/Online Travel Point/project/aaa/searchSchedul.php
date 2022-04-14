
       <html>
          <head>
          <meta http-equiv="content-type" content="text/html; charset=utf-8" />
          <title> Prisoner Information</title>
          <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
          <script type="text/javascript" src="register.js"</script>
        </head>
    <body>
  <div id="main">

<!--------------------------------------------------------------------- start header =======================================================================-->
  <div id="header">
  <div id="logo">
  <img src="images/header.png" style="width: 89%; height: 100%;"></img>
  </div>
<!--======================================================================Header end ==============================================================-->
</div>
<!--===================================================================== end header============================================================== -->
      <div id="menu">
          <ul>
            <li><a href="Home.html"title="">Home</a></li> 
            <li><a href="Aboutas.html" title="">About as</a></li>
			<li><a href="contactas.html" title="">contact as</a></li>
			<li><a href="#" title="">News</a></li>
		</ul>
   </div>
<!-- ======================================================================start page ================================================================-->
  <div id="page">
<!-- =====================================================================start leftbar============================================================== -->
	<div id="leftbar" class="sidebar">
		<h2>Registrar</h2>
			<div class="back">
                  <ul>
					<li> <a href="pi.html"> View prisoner information</a></li>
 				    <li><a href="prisonregistor.html">Register New prisoner</a></li>
					<li><a href="Regvisitor.html">Registor Visitor</a></li>
					<li><a href="transferreq.html">Transfer request</a></li>
					<li><a href="#">Notran request</a></li>
					<li><a href="search1.html">Search Prisoner</a></li>
				</ul>
				</div><div class="bottom"></div>
				 <h2>View</h2>
				 <div class="back">
				<ul>
					<li><a href="viewSchedule.html">View Schduling time</a></li>
					<li> <a href="pi.html"> View prisoner information</a></li>
				  </ul>
				</div>
		<div class="bottom"></div>
	</div>
<!--========================================================================= end leftbar=========================================================== -->
<!--======================================================================= start content =================================================================-->
	<div id="content">
	  <div class="post">
         <form name="frm" action="viewschd.php" method="post"> 
          <h3>SCHEDULE VISITING TIME</h3>
       <form>
        <ul type="none">
          <li>DATE</li>
           <SELECT name="Date">
            <OPTION value="Monday">Monday
            <OPTION value="Thusday">Thusday
            <OPTION value="Thrsday"> Thrsday
            <OPTION value="Friday">Friday
            <OPTION value="Saturday">Saturday
            <OPTION value="Sunday">Sunday
          </select>
       <li>YEAR:</li>
          <SELECT name="Year">
             <OPTION value="2007">2007
             <OPTION value="2008">2008
             <OPTION value="2009">2009
             <OPTION value"2010">2010
            <OPTION value"2011">2011
         </select>
        <li>MONTH:</li>
          <SELECT name="month">
           <OPTION value="january">january
           <OPTION value"Februrary">Februrary
           <OPTION value"March"> March
           <OPTION value"April"> April
           <OPTION value"May">May
          <OPTION value"Junes">Junes
          <OPTION value"july">july
         <OPTION value"Augest"> Augest
         <OPTION value"October"> October
         <OPTION value"November">November
        <OPTION value"Sectember">Sectember
        <OPTION value"December">December
        <OPTION value"March"> March
        <OPTION value "March">May
     </SELECT>

      <li>Time:&nbsp;&nbsp;&
          <SELECT name="time">
            <OPTION value="3am-6am">3am-6am
             <OPTION value="9am-11am">9am-11am
          </select>
            <td><input type="submit" value="Search" ></a></td>
             <td align="center"><input type="reset" value="reset"></td><br>
            </li>
           </ul>
     </form>
	</div>
</div>
<!-- ===================================================================================================end content============================================ -->
<!-- ==============================================================================================start rightbar ==============================================-->
	  <div id="rightbar" class="sidebar">
				<h2>Officers</h2>
				 <div class="back">
				<ul>
					<li><a href="#">Registrar officer</a></li>
					<li><a href="#">Decipline officer</a></li>
					<li><a href="#">Release office</a></li>
				</ul>
	              </div><div class="bottom"></div>
				 <h2>SERVICE</h2>
				  <div class="back">
				<ul>
					<li><a href="#">JobOpportunate</a></li>
					<li><a href="#">Update</a></li>
					<li><a href="#">search personers</a></li>
				</ul>
				</div>
<!-- ======================================================================================end rightbar======================================================= -->
	   <div style="clear: both;">&nbsp;</div>
      </div>
<!-- =======================================================================================end page==================================================== -->
    <div id="footer">
   <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--==============================================================================End of notice =============================================================-->
   </p>
  </div>
 s</div>
</body>