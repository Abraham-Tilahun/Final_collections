
<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<html>
<head>
<script language="javascript">
function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
   alert(window.location='comment.php');
   
   }
   else
   {
     return false;
   }
  }
  </script>



<title>Store Management Sustem</title>
<link style="text/css" href="s.css" rel="stylesheet">
</head>
<body  >
<table  width="880" id="table1" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;">
 <tr><td bgcolor=#c53b1c size=30px><p><b><b></p></td></tr>
<tr>
<td ><img src="images/1.png" height="100" width="895"></td></td>
</tr>

</table>
<table  width="880" id="table1" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;">
 
<tr>
<td   valign="top"   width="1" id="menu-bar" style="background-color:#f6b45f;">
   
	<a href="report.php">Report</a>
	<a href="report1.php">GeneralReport</a>
	<a href="comment.php">ViewComment</a>
	<a href="Changepass.php">Changepassword</a>
	<a href="logout.php" onClick="isConfirmlog();">logout</a>
</td><td>
<table border="0px" bgcolor="white" width='700'>
<tr><td bgcolor=#c53b1c height="30px" width='800' colspan='2' align="center">Comment</td></tr>

<td border=0 valign="top" height="500"  width="100" bgcolor="#666600"style="border-bottom:1px solid #f6b45f;margin-top:0.5%;"> 

<?php
$result = mysql_query("SELECT * FROM feedback");
print( "<table border='1' >");
print("<tr>");
print("<th>Name </th>");
print("<th>E-Mail </th>");
print("<th>Comment</th>");
print("<th>Time</th>");


while($row = mysql_fetch_array($result))
  {
$ctrl = $row['email'];
  print ("<tr>");
  print ("<td>" . $row['name'] . "</td>");
  print ("<td>" . $row['email'] . "</td>");
  print "<td>" . $row['comment'] . "</td>";
    print "<td>" . $row['time'] . "</td>";
  
  print( "</tr>");
  }
print("</table>");

mysql_close($conn);
?>






</table>
</td> 
<tr>
<td border=1 align="center"height="2"  colspan=3 > 
<font color=white ><p>TK&copy; 2006 COPY RIGHT RESERVED.</p>
</td>
</tr>


</body>
</html>


  
  







