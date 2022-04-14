<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
include("../Database/connection.php");
include("fusioncharts.php");
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
	overflow-x: scroll;
	overflow-y: scroll;
	width:80%;
}
</style>
<script src="jquery-3.3.1.min.js" type="text/javascript"> </script>
    <!-- You need to include the following JS file to render the chart.
    When you make your own charts, make sure that the path to this JS file is correct.
    Else, you will get JavaScript errors. -->
    <script src="jss/fusioncharts.js"></script>
    <script src="fusioncharts.theme.fusion.js "></script>
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
          <div id="print_content">  
        	  
   <section id="admin" style="padding-top: 0px;">
<center>
    <form action="report.php" method="post">
    <div class="row">
      <div class="col-25">
        <h1>Total Voter Report</h1>
      </div>
      <a href="javascript:Clickheretoprint()" ><img src="../IMG/print.jpg" width="60px" ></a>
     <div id="print_content">
        <p align="center">Date: <?php echo date('d/m/Y');?></p>
      </form>
	  
      <div id="chart-1">
  
  
  
    <!-- Fusion Charts will render here-->

</div>
   <?php
   $pri ="SELECT *FROM requesttable WHERE requesttype='Voter' and campus='GC' and sex='Male'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$ngovtrent=mysql_num_rows($resultf);
   
$pri = "SELECT *FROM requesttable WHERE requesttype='Voter' and campus='GC' and sex='Female'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$npri=mysql_num_rows($resultf);

$pri ="SELECT *FROM requesttable WHERE requesttype='Voter' and campus='marki' and sex='Female'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$nprirent=mysql_num_rows($resultf);

$pri ="SELECT *FROM requesttable WHERE requesttype='Voter' and campus='marki' and sex='Male'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$numgvt=mysql_num_rows($resultf);

//////////// total number of user 
$pri ="SELECT *FROM requesttable WHERE requesttype='Voter' and campus='tedy' and sex='Male'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$tedym=mysql_num_rows($resultf);

$pri ="SELECT *FROM requesttable WHERE requesttype='Voter' and campus='tedy' and sex='Female'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$tedyf=mysql_num_rows($resultf);
/////facil
$pri ="SELECT *FROM requesttable WHERE requesttype='Voter' and campus='Facil' and sex='Male'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$Facilm=mysql_num_rows($resultf);
$pri ="SELECT *FROM requesttable WHERE requesttype='Voter' and campus='Facil' and sex='Female'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$facilf=mysql_num_rows($resultf);

///////Tseda


 $pri ="SELECT *FROM requesttable WHERE requesttype='Voter' and campus='Tseda' and sex='Male'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$Tsedam=mysql_num_rows($resultf);
  $pri ="SELECT *FROM requesttable WHERE requesttype='Voter' and campus='Tseda' and sex='Female'";
$resultf=mysql_query($pri) or die("query error".mysql_error());
$Tesdaf=mysql_num_rows($resultf);

$total=$ngovtrent+$npri+$nprirent+$numgvt+$tedym+$tedyf+$Facilm+$facilf+$Tsedam+$Tesdaf;
$arrData = array(
              "chart" => array(
                  "caption" => "Campus with their number of Voter  ",
                  "showValues" => "0",
                  "theme" => "fusion"
                )
            );

          $arrData["data"] = array();

  // Push the data into the array
          
            array_push($arrData["data"], array(
                "label" => "GC Male Voter",
                
				"value" => $ngovtrent

                )
            );

            array_push($arrData["data"], array(
                "label" => "GC Female Voter",
                "value" => $npri
                
                )
            );
             array_push($arrData["data"], array(
                "label" => "Marki male Voter",
                "value" => $numgvt
                
                )
            );
              array_push($arrData["data"], array(
                "label" => "Marki Female Voter",
                "value" => $nprirent
                
                )
            );
           array_push($arrData["data"], array(
                "label" => "Tedy male Voter",
                "value" => $tedym
                
                )
            );
        array_push($arrData["data"], array(
                "label" => "Tedy female Voter",
                "value" => $tedyf
                
                )
            );
			array_push($arrData["data"], array(
                "label" => "Facil Male Voter",
                "value" => $Facilm
                
                )
            );
				array_push($arrData["data"], array(
                "label" => "Facil female Voter",
                "value" => $facilf
                
                )
            );
				array_push($arrData["data"], array(
                "label" => "Tesda Male Voter",
                "value" => $Tsedam
                
                )
            );
				array_push($arrData["data"], array(
                "label" => "Tseda Male Voter",
                "value" => $Tesdaf
                
                )
            );
					array_push($arrData["data"], array(
                "label" => "Total Voter",
                "value" => $total
                
                )
            );
          /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */
    
          $jsonEncodedData = json_encode($arrData);
         $columnChart = new FusionCharts("column2D", "myFirstChart" , 800, 200, "chart-1", "json", $jsonEncodedData);

          // Render the chart
          $columnChart->render();

          // Close the database connection
         

  echo "<table style='width:100% padding-top:40px;margin-left:2%; background-color:#eee;font-size:18px;'>
<tr style='background-color: #ccd;'>

<tr style='background-color: #ccd;'>
<th> Report Type</th>
<th>Total</th>
</tr>";

print ("<tr>");
print ("<td style ='width=''>" . 'Total_GC_Male_Voter'. "</td>");
print ("<td >" . $ngovtrent. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'Total_GC_Female_Voter'. "</td>");
print ("<td >" . $npri. "</td>");
print ("</tr>");
print ("<tr >");
print ("<td style ='width:50%'>" . 'Total_Maraki_Male_Voter'. "</td>");
print ("<td >" . $numgvt. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'Total_Maraki_Female_Voter'. "</td>");
print ("<td >" . $nprirent. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'Total_Tedy_Male_Voter'. "</td>");
print ("<td >" . $tedym. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'Total_Tedy_Female_Voter'. "</td>");
print ("<td >" . $tedyf. "</td>");
print ("</tr>");

print ("<tr>");
print ("<td style ='width=''>" . 'Total_Facil_Male_Voter'. "</td>");
print ("<td >" . $Facilm. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'Total_Facil_Female_Voter'. "</td>");
print ("<td >" . $facilf. "</td>");
print ("</tr>");

print ("<tr>");
print ("<td style ='width=''>" . 'Total_Tseda_Male_Voter'. "</td>");
print ("<td >" . $Tsedam. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'Total_Tesda_Female_Voter'. "</td>");
print ("<td >" . $Tesdaf. "</td>");
print ("</tr>");
print ("<td style ='width=''>" . 'Total Voter'. "</td>");
print ("<td >" . $total. "</td>");
print ("</tr>");
print( "</table>");
      
    ?>
    


        </section>


        </section>
</center>
            </div>
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
	?>	<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../home.php');
 </script>
 <?php
	}
?>
	</div>
</body>
</html>
