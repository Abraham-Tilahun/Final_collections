<?php
	include("config.php");  
 session_start();
if(isset($_SESSION['validuser']))
 {
  $mail=$_SESSION['validuser'];
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

$user_id=$_SESSION['validuser'];

$result=mysql_query("select * from accou where username='$user_id'")or die(mysql_error());
$row=mysql_fetch_array($result);
$empid=$row['EmpId'];
$result1=mysql_query("select * from user where EmpId='$empid'")or die(mysql_error());
$row1=mysql_fetch_array($result1);
$empname=$row1['FirstName'];
?>
<?php
$today=date('Y-m-d');
//$confirm=$_REQUEST['confirm'];
$s = mysql_query("SELECT * FROM user  where EmpId='$Cust' ");
$nd= mysql_num_rows($s);
for($i=0;$i<$nd;$i++)
   {
	    $fname= mysql_result($s,$i,'FirstName');
		$lname= mysql_result($s,$i,'MiddleName');
		$email= mysql_result($s,$i,'address');
		$phone= mysql_result($s,$i,'Phone');
		
   }
?>
<?php
$er="dbu";
require("../fpdf.php");
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

$query="SELECT * FROM borrow_item where EmpId='{$Cust}' AND Status='Active'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("there is no item borrowed by you!".mysql_error());
}
if($count>0){
while($row=mysql_fetch_array($result)){
$r0=$row['EmpId'];
$r1=$row['ItemName'];

$query1="SELECT * FROM borrowitem where EmpId='$r0' ";
$result1=mysql_query($query1);
if(!$result1){
die("Food is not registered!".mysql_error());
}
else{
while($row1=mysql_fetch_array($result1)){
$r2=$row1['ItemName'];
$r3=$row1['ItemId'];
$r4=$row1['Quantity'];

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