
<?php   
 session_start();
 include("connection.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['username']))
 {
  $username=$_SESSION['username'];
  $id=$_SESSION['id'];
 } else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='home.php');
 </script>
 <?php
 }
 ?>
<!doctype html>
<html>
<head>

 <!-- <link  rel="stylesheet" type="text/css" href="css/style.css"/> -->
  <script src="jquery-3.3.1.min.js" type="text/javascript"> </script>
    <!-- You need to include the following JS file to render the chart.
    When you make your own charts, make sure that the path to this JS file is correct.
    Else, you will get JavaScript errors. -->
    <script src="js/fusioncharts.js"></script>
    <script src="fusioncharts.theme.fusion.js "></script>
    <style>
        #chart-1{



            width:100%;
            position:relative;
            margin-left:30%;
            margin-top:20%;
        }
        </style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="css/icons.css" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
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
<div id="container" class="width">
  
    
    <nav>

        <h1>  <a href="#" style=""> <img src="new..jpg" style="width: 100%; height:120px;"></a></h1>
<div class="inner-nav" >
                        <ul>
                  <li><a href="admin.php">Home </a></li>
                  <li><a href="manageuser.php">ManageUser </a></li>
           <li><a href="adminuploadhouse.php">UploadHouse </a></li>
                <li><a href="managehousegovt.php">ManageHouse</a></li>
              <li><a href="accountresponse.php">ReturnRequest</a></li>
                 
                 <div  style="float: right; font-size: 20px;padding-top:10px">
                                 <?php 
                      $un=$_SESSION['username'];
                      echo "You are logged in as:  ";
                          echo $un;
                          echo "(";
                             ?>
                             <a href="logout.php" >Logout</a>  
                             <?php echo ")"; ?>
                      </div> 


            </ul>

    </div>
    </nav>

    <div id="body">

     <aside class="sidebar" style="font-size: 20px; height:550px" >
    
                <ul>  
               <li>
                    <h4><span>Menu</span></h4>
                    <ul>

              <li><a href="accountrequestadminview.php"><i class="" ></i>ViewAccountRequest</a></li>
          <li><a href="adminviewhouserequest.php"><i class="" ></i>ViewHouseRequest</a></li>
          <li><a href="housefeedbackadminview.php"><i class="" ></i> ViewFeedback</a></li>
          <li><a href="generatenews.php"><i class="" ></i> Generate News</a></li>
          <li><a href="totalhouseadmin.php"><i class="" ></i> Generate Report</a></li>
          </ul>
            </li>
            </ul>

<!-- <button class="collapsible"> <i class="icon-reorder" ></i> View Report</button>
<div class="content" style="color: red;" >
<a href="accountrequestadminview.php"><i class="icon-home" ></i> User Report</a> <br>
<button class="coll"> <i class="icon-reorder" ></i> House Report</button>
<div class="content"  >
<a href="totalhouseadmin.php"><i class="icon-home" ></i> Total House</a> <br>
<a href="freehouseadmin.php"><i class="icon-home" ></i> Free House</a> <br>
<a href="reservedhouseadmin.php"><i class="icon-home" ></i> Reserved House</a> <br>
</div>
</div> -->
        
        </aside>
		<section id="admin" style="padding-top: 0px;">
     
    <form action="report.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="country">Report  Type</label>
      </div>
      <div class="col-75">
        <select id='usertype' name="type" required="">
                      <option> </option> 
                      <option>Weekly</option>
                      <option>Monthly</option>
                      <option>Yearly</option> 
        </select>

        <br><br>
          <div class="col-25" style="width: 40%;">
         <input type="submit" name="report" value="Report">
         </div>
        
      </div>
       
         
      <a href="javascript:Clickheretoprint()" ><img src="image/print.jpg" width="60px" ></a>
     <div id="print_content">

        <p align="center"><?php echo date('d/m/Y');?></p>
      </form>
        <?php
  if(isset($_POST['report']))
        {
          $select=$_POST['type'];
          if($select=='Weekly'){
            $var=7;
          }
          else if($select=='Monthly'){
            $var=30;
          }
          else  $var=365;

         

 //////////////////////////////private report date calculate
  $a="SELECT* from housedata,reservehouse where housedata.no=reservehouse.houseno and housedata.type='private house'";
  $b=mysqli_query($con,$a);
  while($c=mysqli_fetch_assoc($b)){
    $id=$c['reserveid'];
    $ddate=$c['reservationdate'];
    $first=strtotime($ddate);
    $second=strtotime(date('y-m-d'));
    $diff= $second-$first;
    $tot=floor( $diff/(60*60*24));
    $up="UPDATE reservehouse set reportdate=$tot where reserveid=$id";
    $d=mysqli_query($con,$up);
     }
  ///////////////////////////government report date calculate
  $ge="SELECT * from housedata where  type='government house'";
  $g=mysqli_query($con,$ge);
   while($gee=mysqli_fetch_assoc($g)){
    $idd=$gee['no'];
    $ddatee=$gee['cusrentdate'];
    $firstt=strtotime($ddatee);
    $secondd=strtotime(date('y-m-d'));
    $diffe= $secondd-$firstt;
    $tott=floor( $diffe/(60*60*24));
    $upda="UPDATE housedata set redate=$tott where no=$idd";
    $go=mysqli_query($con,$upda);
     }
     ////////////// total number of private house
$pri = "SELECT  count(*) as total  FROM housedata where type='private house'";
$totalpri = mysqli_query($con,$pri);
$numpri=mysqli_fetch_assoc($totalpri);
$npri=$numpri['total'];

    /////// count number of private rented house
$prirent = "SELECT  count(*) as total  FROM housedata ,reservehouse where housedata.no=reservehouse.houseno and housedata.status=1 and type='private house' and reportdate<=$var";
$totalprirent = mysqli_query($con,$prirent);
$numprirent=mysqli_fetch_assoc($totalprirent );
$nprirent=$numprirent['total'];
///// count number of government rented house
$govtrent = "SELECT  count(*) as total  FROM housedata  where status=1 and type='government house' and redate<=$var";
$totalgovtrent = mysqli_query($con,$govtrent);
$numgovtrent=mysqli_fetch_assoc($totalgovtrent );
$ngovtrent=$numgovtrent['total'];
//////////Display total number of government house
$gvt = "SELECT  count(*) as total FROM housedata where type='government house'";
$totalgvt = mysqli_query($con,$gvt);
$numgvet=mysqli_fetch_assoc($totalgvt);
$numgvt=$numgvet['total'];
//////////// total number of user 
$totaluser = "SELECT  count(*) as total FROM user where statuss=1 ";
$user = mysqli_query($con,$totaluser);
$numuseree=mysqli_fetch_assoc($user);
$numuser=$numuseree['total'];
/*$maleuser = "SELECT  count(*)  FROM user where statuss=1 and gender='male'";
$male = mysqli_query($con,$maleuser);
$nummale=mysqli_num_rows($male);
$notapprove = "SELECT  count(*)  FROM user where statuss=0 and gender='male'";
$notappmale = mysqli_query($con,$notapprove);
$nummalenotapp=mysqli_num_rows($notappmale);
$notapprovefe = "SELECT  count(*)  FROM user where statuss=0 and gender='female'";
$notappfe = mysqli_query($con,$notapprovefe);
$numfenotapp=mysqli_num_rows($notappfe);
*//*echo "<table style='width:100% padding-top:40px; background-color:#eee;font-size:18px;'>
<tr style='background-color: #ccd;'>
<th>Type</th>
<th>Total</th>
</tr>";
print ("<tr >");
print ("<td style ='width:100%'>" . 'Total_Government_house'. "</td>");
print ("<td >" . $numgvt. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'Rented_government_house'. "</td>");
print ("<td >" . $ngovtrent. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'Total_private_house'. "</td>");
print ("<td >" . $npri. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'Rented_private_house'. "</td>");
print ("<td >" . $nprirent. "</td>");
print ("</tr>");
print ("<tr>");
print ("<td style ='width=''>" . 'total_user'. "</td>");
print ("<td >" . $numuser. "</td>");
print ("</tr>");


 /*while($row = mysqli_fetch_array($result))
  {
    
  $no = $row['no'];
  print ("<tr>");
   print ("<td >" . $row['username'] . "</td>");
    
   //print ("<td >" . $row['id'] . "</td>");  
   print ("<td >" . $row['date'] . "</td>");     
        print("<td  style='  align = 'center' width = '1'><a href = 'adminhouserequestdetail.php?no=".$no." '><i class='icon-search' > viewdetail</i></a></td>
        <td align = 'center' width = '1'><a href = 'adminsendapproveresponcehouserequest.php?no=".$no."&adminname=".$admin."'><i class='icon-check'>approve</i></a></td>
        <td  align = 'center' width = '1'><a href = 'deleteadminrequest.php?no=".$no." 'onclick='return confirm('are you sure you want to delete? ');'><i class=' icon-remove-sign' > </i>delete</a></td>
        ");
  print ("</tr>");
 
  
print( "</table>");
*/
$arrData = array(
              "chart" => array(
                  "caption" => "Products with their price range",
                  "showValues" => "0",
                  "theme" => "fusion"
                )
            );
$arrData["data"] = array();

  // Push the data into the array
         
            array_push($arrData["data"], array(
                "label" => $numgvt,
                "value" =>  $ngovtrent
                )
            );
          

          /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */
    
          $jsonEncodedData = json_encode($arrData);
        $columnChart = new FusionCharts("column2D", "myFirstChart" , 400, 200, "chart-1", "json", $jsonEncodedData);

          // Render the chart
          $columnChart->render();

          // Close the database connection
          $dbhandle->close();

 }
mysqli_close($con);

?>

        </section>


        </section>
        
       
        <div class="clear"></div>
    </div>
    <footer>
        <div class="footer-content">
            <ul>
                <li><h4> Account</h4></li>
                             <li><a href="home.php">Log in</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
            </ul>
            
            <ul>
                <li><h4>Links</h4></li>
                <li><a href="home.php">Home Page</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
                </ul>
           <ul>
              <li><h4>Links</h4></li>
               Like us on facebook: <li><a href="www.youtube.com">Pasa-CHRS</a></li>
               Folow us on youtube: <li><a href="WWW.youtube.com">Pasa-CHRS</a></li>
                </ul>
            
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Developed by Student</p>
         </div>
    </footer>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
var coll = document.getElementsByClassName("coll");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</body>
</html>