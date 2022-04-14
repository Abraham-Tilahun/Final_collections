  <?php
  include("dbconnet.php");
  mysql_select_db('PRISON');
		
        ?>  
        <html>
        <head>
		 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <title>prisoner information</title>
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
					 <li><a href="diciplineOf.php"title="" style="margin-left:155px;">Home</a></li> 
					 <li><a href="Aboutas.php" title="">About us</a></li>
					 <li><a href="contactus.html" title="">contact us</a>
					 <li><a href="logout.php" title="">Logout</a></li>
				  </ul>
		    </div><br/>
<!--===================================================================== start page============================================================================ -->
<!--===================================================================== start leftbar======================================================================== -->
   <div id="page">
	<!--================================================================= start leftbar====================================================================== -->
	      <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			  <div class="back">
			      <ul>
					
					 <li><a href="viewTransferPrisonerdicip.php"> View Schedule </a></li>
					 <li> <a href="viewPrisonerInformationdicip.php"> View prisoner information</a></li>
					<li><a href="viewCondicip.php" title="">View Conditional Release Case request</a></li>
					<li><a href="viewTransferPrisonerInformatidicip.php" title="">View  Transferred prisoner</a></li>
									 
				</ul>
		    </div>
	   </div>
<!--============================================================================ end leftbar===================================================================== -->
<!-- ===========================================================================start content================================================================== -->
	 <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	  <div class="post"></BR></BR>
       <form name="frm" action="approveRequest.php" method="post" onSubmit="return register()"> 
            <caption><h2 style="padding-left:80px"> View Transfered prisoner Information </h2></CAPTION></BR>
			<table border="1" style="padding-left:0px">
			<tr>
			<th style="width:100px">Prisoner Id</th>
			<th style="width:100px">First Name</th>
			<th style="width:100px">Date Of Request</th>
			<th style="width:100px">Year Of Punishment</th>
			<th style="width:100px">Crime Committed</th>
			</tr>
			<?php
			 $sql="SELECT * FROM  transfered_prisoner";
				mysql_select_db('PRISON');
				$retval = mysql_query($sql);
				if(!$retval)
				{
					die('can not'.mysql_error());
				}
			
			   while($search=mysql_fetch_array($retval)){
				$pn=$search['prisonName'];
				$ot=$search['offenceType'];
				$doe=$search['dateOfEntrance'];
				$pid=$search['prisonerId'];
				$pid1=$search['personId']; 
				
			$sql="SELECT * FROM  person where personId='$pid1'";
				mysql_select_db('PRISON');
				$retval2 = mysql_query($sql);
				if(!$retval2)
				{
					die('can not'.mysql_error());
				}
				$search=mysql_fetch_array($retval2);
				$fName=$search['fName'];
				$lName=$search['lName'];
				$sex=$search['sex'];
				
					echo '<tr>';
					echo '<td>';echo $pid;
					echo '</td>';
					echo '<td>';echo $fName;
					echo '</td>';
					echo '<td>';echo $lName;
					echo '</td>';
					echo '<td>';echo $sex;
					echo '</td>';
					echo '<td>';echo $doe;
					echo '</td>';
					echo '</tr>';
			   }
			?>
			</table>
			<table>
			<tr><td>&nbsp;</td></tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		    <td><input type="button"  value="Back"  onclick="window.history.back();"></td>
		 </tr>
	  </table>
     </form>
   </div>
 </div>
<!-- =========================================================================end content===================================================================== -->
	  

<!--============================================================================ end page=============================================================== -->
        <div id="footer">
          <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--======================================================================End of notice================================================================== -->
    </p>
   </div>
  </div>
 </body>