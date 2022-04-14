	<?php
	require'connection.php';
	$bus_name=$_POST['bus_name'];
	$bid=$_POST['Bus_id'];
	$from=$_POST['from'];
	$to=$_POST['to'];
	$date=$_POST['date'];
	$fare=$_POST['fare'];
	$meter=$_POST['meter'];
	$nseat=$_POST['nseat'];
	$Avaliable_seat=$_POST['Avaliable_seat'];
    mysqli_select_db($con,'bus_ticket');
	$add="INSERT INTO oneway VALUES ('$from','$to','$bid','$nseat','$bus_name','$fare','$meter','$date','$Avaliable_seat')";
	$resu=mysqli_query($con,$add);
	if($resu)
	{
	echo"successfully added";
	header("location:checkin.html");
	}
	else{
	echo"error in adding the bus".mysqli_error($con);
	}
	mysqli_close($con);
	?>