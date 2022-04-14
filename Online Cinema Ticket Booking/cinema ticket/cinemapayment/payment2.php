<?php
$x=1;
if(isset($_POST['submitMain'])){

$status='Pending';
$product=$_POST['productr'];
$ffname=$_POST['fnamer'];
$card=$_POST['secu'];
 $query = "SELECT * FROM bank where accountnumber= '{$a}'  AND security='{$card}';";
$result_set=mysql_query($query,$conn1);
$count=mysql_num_rows($result_set);
      if(!$result_set){
   die("query is failed".mysql_error());
}
if($count==0)
{
echo '<div align="center"><strong><font color="#FF0000">Please Try Again</font></Strong></div>';
echo'<meta content="5;payment.php" http-equiv="refresh" />';
}
else{

if(mysql_num_rows($result_set))
{

$result ="SELECT * FROM bank where accountnumber= '{$a}' AND security='{$card}';";
$re=mysql_query($result,$conn1);

while($row = mysql_fetch_array($re))
  {
  if($row['amountbirr']<=$amount){
 $de = mysql_query("DELETE from orders WHERE confirmation='$transnum'",$conn2) or die(mysql_error());

   echo'<strong><center><font color="#FF0000">Your account balance is low</font></center></Strong>';
   echo'<meta content="10;order.php" http-equiv="refresh" />';

  }
  else{
  $value = mysql_query("UPDATE  bank set amountbirr='{$row['amountbirr']}'-'{$amount}' where accountnumber= '{$a}';",$conn1);

  
  
  $sql=mysql_query("INSERT INTO reservation (product_id,firstname, lastname, kifleketema, kebele,email, mobileno,payable,status, confirmation,homephoneno , street, houseno,delivery_date, date,time, payment, delivery_type) 
VALUES ('$product','$ffname','$lname','$ketema','$kebele','$email','$mobile','$total','$status','$transnum','$home','$street','$house','$ddate','$ddddddd','$time','$pmethod','$dmethod')");
 
 if(!$sql){
  die(mysql_error());
  
  
  }
  
  else{
  echo"yes";
  
  }
  
 echo "<script>window.location='print.php?id=$transnum';</script>";
if($x==1)  {
$query1 = "SELECT * FROM bank where fname= '{$tra}';";
 $result_set=mysql_query($query1,$conn1);
      if(!$result_set){
   die("query is failed".mysql_error());
}
if(mysql_num_rows($result_set)>0)
{
$result1 = mysql_query("SELECT * FROM bank where fname= '{$tra}';",$conn1);
while($row1 = mysql_fetch_array($result1))
  {
   $value = mysql_query("UPDATE  bank set amountbirr='{$row1['amountbirr']}'+'{$amount}' where fname= '{$tra}';",$conn1);
}  	
}
}


}
}
}	   
else
   {
     
	  echo'<strong><center><font color="#FF0000">Please Try Aging!!</font></center></Strong>';
   }
   }
mysql_close($conn1);
mysql_close($conn2);
}
?>