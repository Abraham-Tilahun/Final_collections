
<?php
 session_start();
include("includes/db.php");
           // $_SESSION['id']=$id;
			$id=$_POST['id'];
			$transnum=$_POST['transnum'];
			$qty=$_POST['select2'];
			$name=$_POST['brand'];
		$price=$_POST['price'];
		$total=$_POST['txtDisplay'];
			$m=$_POST['mail'];
$result = mysql_query("SELECT freeseatleft FROM products where movie_id='$id' ");
while($row = mysql_fetch_array($result))
		{
$total_seat=$row['freeseatleft'];	
	
	if($total_seat >= $qty){	
	
mysql_query("INSERT INTO orders (email,movie_id,movie, qty, confirmation,price,total) 
VALUES('$m','$id','$name', '$qty', '$transnum','$price', '$total')");

$sum=$total_seat-$qty;
mysql_query("update  products set qanleft='$sum' where product_id='$id'");
$sol=$row['total_seat'];
$sold=$total_seat-$sol;
mysql_query("update  products set sold='$sold' where movie_id='$id'");			
header("location:order.php");
}
else{

header("location:new1.php");
}
}
?>
<html>
