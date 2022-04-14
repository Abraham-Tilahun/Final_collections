<?php
 include("../includes/db.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
  if($_SESSION['role'] != 'Customer'){
  ?>
  <script>
  alert('You Are Not Customer');
  alert(window.location='../login.php');
 </script>
  <?php
  }
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../login.php');
 </script>
 <?php
 }
 ?>

<?php

$user_id=$_SESSION['user_id'];
$result=mysql_query("select * from Customer where UserName='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$Cust=$row['Cust_ID'];
?>
<?php
$today=date('Y-m-d');
$confirm=$_REQUEST['confirm'];
$s = mysql_query("SELECT * FROM Customer  where Cust_ID='$Cust' ");
$nd= mysql_num_rows($s);
for($i=0;$i<$nd;$i++)
   {
	    $fname= mysql_result($s,$i,'FName');
		$lname= mysql_result($s,$i,'LName');
		$email= mysql_result($s,$i,'Email');
		$phone= mysql_result($s,$i,'Phone');
		
   }
?>
<?php
$er="Eva";
require("../fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("times","B",11);
$pdf->Cell(0,10,"",2,1);
$pdf->Cell(0, 10,"             Full Name:     {$fname} {$lname   }   ",2,1);
$pdf->Cell(0, 10,"              Email:      {$email   }     ",2,1);
$pdf->Cell(0, 10,"              Phone:      {$phone   }     ",2,1);
$pdf->Cell(0,10,"",2,1);
$pdf->SetFont("times","B",12);
$pdf->Cell(0,10,"Food Name                Catagory                     Quantity      ",2,1);
$pdf->Cell(0,10,"------------------------------------------------------------------------------------------",2,1);  

$query="SELECT * FROM orderfood where Cust_ID='{$Cust}' AND Status='on'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("there is no order!".mysql_error());
}
if($count>0){
while($row=mysql_fetch_array($result)){
$r0=$row['Food_ID'];
$r1=$row['Quantity'];

$query1="SELECT * FROM fooditem where Food_ID='$r0' ";
$result1=mysql_query($query1);
if(!$result1){
die("Food is not registered!".mysql_error());
}
else{
while($row1=mysql_fetch_array($result1)){
$r2=$row1['Food_Name'];
$r3=$row1['Catagory'];
$r4=$row1['Image'];

$pdf->SetFont("times","B",11);
$pdf->Cell(0,10,"{$r2}                   {$r3}                     {$r1}      ",2,1);
}}
}}
$pdf->Cell(0,10,"",2,1);
$pdf->Cell(0,10," +-----------------------------------------------------------------------------------------+",2,1);
$pdf->Cell(0,10,"                  THANK YOU FOR YOUR ORDERING",2,1);
$pdf->Cell(0,10," +-----------------------------------------------------------------------------------------+",2,1);
$pdf->output();
?>