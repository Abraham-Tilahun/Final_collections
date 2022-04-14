<?php
include("dbconnet.php");
		$firstName=$_POST["fname"];
		$lastName=$_POST["lname"];
		$birt=$_POST["birthDate"];
		
		$kebele=$_POST["kebele"];
		$region=$_POST["region"];
		$h_phone=$_POST['house_phone_number'];
		$off_Phone=$_POST["Office_Phone_No"];
		$c_phone=$_POST["cell_phone"];
		$city=$_POST["City"];
		$sex=$_POST["sex"];
		$role=$_POST["Role"];
		$aid=mt_rand(1,10000);
		$pid=mt_rand(1,10000);
		$officerId=mt_rand(1,10000);
		$lid=mt_rand(1,10000);
		mysql_select_db('prison');
		echo "connect successfully\n"; 
		$sql = "INSERT INTO  address() VALUES ('$aid','$h_phone','$off_Phone','$c_phone','$region','$kebele','$city')";
		$retval = mysql_query( $sql,$conn);
		if(!$retval) 
		{  
			die('Could not enter data:' . mysql_error());   
		}
		echo "conect successfully\n"; 
		$sql1 = "INSERT INTO  Person(personId,fName,lName,birtDate,sex,adressId) VALUES 
		('$pid','$firstName','$lastName','$birt','$sex','$aid')";
			$pass = $lastName.$firstName;
			$retval = mysql_query( $sql1, $conn );
			if(!$retval) 
			{  
				die('Could not enter data into : Person' . mysql_error());   
			}
			$sql3 = "INSERT INTO LOGIN(loginId,username,password,role)VALUES($lid,'$firstName','$pass','$role')"; 
			$retval = mysql_query( $sql3, $conn );
			if(!$retval) 
			{  
				die('Could not enter data into : LOGIN ' . mysql_error());   
			}
			$sql2 = "INSERT INTO  staff(officerId ,personId,loginId) VALUES($officerId,'$pid',$lid)";
				$retvalp = mysql_query( $sql2, $conn );
				if(!$retvalp) 
				{  
					die('Could not enter data into : prisoner' . mysql_error());   
				}
				
		mysql_close($conn); 
		header('location: staff.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		';
?>

