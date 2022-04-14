<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Aksum University property Administration system</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 12px 14px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 14px;    
    border: none;
    outline: none;
    color: Black;
    padding: 12px 14px;
 
}

.container a:hover, .dropdown:hover .dropbtn {
    background-color: ACA8A7;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 14px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #green;
}

.dropdown:hover .dropdown-content {
    display: block;
}
  </style>
</head>
<body>
  <div id="menubar">
      <ul id="menu">
        <li><a href="storemanpage.php">Home</a></li>
		<div class="dropdown">
		 <div class="dropdown-content">	
		  </div>
        </div>
        <li><a href="storemanregisterproperty.php"> Register property</a></li> 
        <li><a href="Search property.php">Search property</a></li>
		<li><a href="Generat_report.php">Generate report </a></li>
		<li><a href="Transfer property.php">Transfer property</a></li>
		<div style="float:right">
		<div class="dropdown"><button class="dropbtn" color=""><b></b><img width="15" height="15" src="images/default.png"/></button>
		 <div  style="float:right" class="dropdown-content">
          <a href="passward.php">Change Password</a>		 
		  <a href="login.php"/>Logout</a>
		  </div>
        </div>		
		</div>
		</div>
    </div><!--close menubar-->	
    
<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
                  <body bgcolor=#9494B8>
<h3>Calender</h3>
	  <script src="css/calander.js" language="javascript" type="text/javascript"></script> 
           <br><br><br><br><br><br><br>
	 <h3
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
</table> </body>
			<div id="menubar1">
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <table width="220" height="36">
        <tr>
          <th width="204" bgcolor="#none" scope="row"><span class="style10">Store_man Page </span></th>
        </tr>
      </table>
	  <div class="sidebar">
          <div class="sidebar_item">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            <ul id="menu">
        
        <li></li>
	  </ul>
			
          </div>
        </div>
	  
            	 
            </div>
			
        </div>
        </div>
      </div>
	 
	  <div id="content">
        <div class="content_item">

<?php
if(isset($_POST['Submit'])){
	$prop_name=$_POST['sct'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);
$sql="select * from new_item where prop_name='$prop_name'";
$res=mysql_query($sql) or die("query error".mysql_error());
if(!$res){
echo "not find";
}
else

echo '<div style="background-color:#cccccc;width:900px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">';
echo '<table cellpadding="13" cellspacing="15" id="resultTable">
<tr>List of stored items in our store</tr>
<tr bgcolor="#33FF00" style="margin-bottom:5px;">
<th>Property ID</th>
<th>Property Name</th>
<th>property Quantity</th>
<th>Property Type</th>
<th>Property Model</th>
<th>Property Number</th>
<th>action</th>
</tr>';
while($row=mysql_fetch_array($res)){
$ID=$row['ID'];
$prop_name=$row['prop_name'];
$prop_quantity=$row['prop_quantity'];
$prop_type=$row['prop_type'];
$prop_model=$row['prop_model'];
$prop_number=$row['prop_number'];
echo "<tr>";
  echo "<td>" . $ID . "</td>";
  echo "<td>" . $prop_name . "</td>";
  echo "<td>" . $prop_quantity . "</td>";
  echo "<td>" . $prop_type . "</td>";
  echo "<td>" . $prop_model . "</td>";
  echo "<td>" . $prop_number . "</td>";
  echo "<td>";
  echo "</td>";
 echo'<a href=deleteusers.php?sid=' . $row["ID"] . '>' . 'delete' . '</a>'.'<br>';
  echo "</tr>";
  }
echo "</table>";
}
?>

</div>
	  </div>
	  
</div>
<ul id="menu">
       
        <li class="style9  style18">
          <h2 class="style19" align="center">Copyright©2017 Aksum University property administrator System </h2>
        </li>
</ul>
	<!--close sidebar-->
</body>
</html>