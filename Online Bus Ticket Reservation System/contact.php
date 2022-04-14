  <?php
  include('connection.php');
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $message=$_POST['Message'];
    mysqli_select_db($con,'bus_ticket');
	$sql="INSERT INTO comment VALUES('$name','$email','$message')";
	if(mysqli_query($con,$sql)){
		echo "You commented sucessfully";
	}
	else{
	echo "not commented";
	}
	header("location:index.php");
  ?>