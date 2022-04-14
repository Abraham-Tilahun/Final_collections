<?php
session_start();
include("../Database/connection.php");
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
	?>
<html>
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>
<head>
<title>Online Stuidenet Union Voting System</title>
<style>

#content
{
	background-color: white;
	height: 600px;
	margin-left: 18%;
	margin-top: 7px;
    overflow-x: hidden;
	overflow-y: hidden;
	width:80%;
}

</style>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Lists</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

</head>
<body>
<div id="container">
		<div id="header">
		<?php
		include("../header.php");
	   ?>
		</div>
		<div id="menu">
		<?php
      include("../Admin/Adminmenu.php");
		?>
	    </div>
				<div id="leftside">
					<div id="applyside">
						<?php
            include("../Admin/Adminsidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
				
				<a name="bottom"></a>
          <div id="print_content" > <font color="black">
		  
        	  
            <center><h3>Total register student :</h3></center> 
			<?php
           $sql = "SELECT *from student";
$sqlf = "SELECT *from student WHERE gender='female' ";
$sqlm = "SELECT *from student WHERE gender='male'";
$resultf=mysql_query($sqlf) or die("query error".mysql_error());
	$rf=mysql_num_rows($resultf);
$resultm=mysql_query($sqlm) or die("query error".mysql_error());
	$rm=mysql_num_rows($resultm);
$result=mysql_query($sql) or die("query error".mysql_error());
if(!$result)
 	print("<b><i><p>There is no any reporets about registered students.</p></i></b>");
	 
	$r=mysql_num_rows($result);
	$b=count($result);
	print("<font size=6>Student Report that register for voting process</font><br>");
  print("<font size=4>The registerar of the university registered<font color=pink> $r</font> studentes <br>");

	 
	   print( "<font color=black>Female:</font> <font color=pink>$rf</font>");
	   print( "<br>");
	   print( "male: <font color=pink>$rm</font>");
	   print("<br>");
	   $total=$rf+$rm;
	  print( "total number of student: <font color=pink>$total</font> ");
	 print("</font>");
	 
	//echo "$i studentes in the database are registered."; 
?>
				<a name="bottom"></a>
<font>
            </div>
           
    <a href="javascript:Clickheretoprint()"><img src="../IMG/print.jpg" width="45px" /></a>
    </div>
		 
		<div id="footer">
			<?php
			include("../Admin/footer.php");
			?>
	</div>
	<?php
	}
	else
	{
	?>	
	<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../home.php');
 </script>
 <?php
	}
   ?>
	</div>
</body>
</html>