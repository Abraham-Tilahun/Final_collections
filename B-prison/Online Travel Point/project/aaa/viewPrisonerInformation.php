  <?php
  include("dbconnet.php");
  mysql_select_db('PRISON');
  $sql="SELECT * FROM  conditional_release_case_request";
		mysql_select_db('PRISON');
		$retval = mysql_query($sql);
		if(!$retval)
		{
			die('can not'.mysql_error());
		}
		
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
	             </diva>
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
				   <li><a href="prisonRegreg.php"> prison registration </a></li>
					<li><a href="newPrisonerRegistration.php"> new prisoner registration </a></li>
					<li><a href="search1.php"> search prisoners </a></li>
					<li><a href="tran.php"> Add Transfer request</a></li> 
					<li><a href="conditionalReleaseCase.php">Add conditional release case request</a></li>
					</ul>
		    </div>
	   </div>
<!--============================================================================ end leftbar===================================================================== -->
<!-- ===========================================================================start content================================================================== -->
	 <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	  <div class="post"></BR></BR>
       <form name="frm" action="approveRequest.php" method="post" onSubmit="return register()"> 
            <caption><h2 style="padding-left:80px"> View prisoner Information </h2></CAPTION></BR>
			<table border="1" style="padding-left:0px">
			<tr>
			<th style="width:100px">Prisoner Id</th>
			<th style="width:100px">First Name</th>
			<th style="width:100px">Date Of Request</th>
			<th style="width:100px">Year Of Punishment</th>
			<th style="width:100px">Crime Committed</th>
			</tr>
			<?php
			   while($search=mysql_fetch_array($retval)){
				$yop=$search['year_of_punishment'];
				$cc=$search['crime_committed'];
				$dor=$search['date_of_request'];
				$pid=$search['prisonerId'];

		  $sql="SELECT * FROM   prisoner where prisonerId='$pid'";
				mysql_select_db('PRISON');
				$retval1 = mysql_query($sql);
				if(!$retval1)
				{
					die('can not'.mysql_error());
				}
				$search=mysql_fetch_array($retval1);
				$pid1=$search['personId'];
				$ot=$search['offenceType'];
				
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
					echo '<td>';echo $dor;
					echo '</td>';
					echo '<td>';echo $yop;
					echo '</td>';
					echo '<td>';echo $cc;
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
		    <td ><input type="submit" value="Approve" ></a></td>
		    <td><input type="button"  value="Back"  onclick="window.history.back();"></td>
			 <!--<td><input type="hidden"  name="pid" value="<?php //echo $pid;?>"></td>
			 <td><input type="hidden"  name="yop" value="<?php //echo $yop;?>"></td>
			  <td><input type="hidden"  name="cc" value="<?php //echo $ot;?>"></td>
			   <td><input type="hidden"  name="dor" value="<?php //echo $dor;?>"></td> -->
		 </tr>
	  </table>
     </form>
   </div>
 </div>
<!-- =========================================================================end content===================================================================== -->
<!--========================================================================= start rightbar ===============================================================-->
          <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li> <a href="viewPrisonerInformation.php"> View prisoner information </a></li>
					<li><a href="viewTransReg.php">View Transfer Request</a></li>
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
