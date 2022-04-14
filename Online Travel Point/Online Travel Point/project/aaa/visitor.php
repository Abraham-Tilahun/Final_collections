<?php
include("dbconnet.php");
		$firstName=$_POST["fname"];
		$lastName=$_POST["lName"];
		$birt=$_POST["birthDate"];
		$sex=$_POST["sex"];
		$visitorid=$_POST["visitorId"];
		$h_phone=$_POST["House_Phone_No"];
		$off_Phone=$_POST["Office_Phone_No"];
		$c_phone=$_POST["cell_phone"];
		$region=$_POST["region"];
		$kebele=$_POST["kebele"];
		$city=$_POST["city"];
		$aid=mt_rand(1,10000);
		$pid=mt_rand(1,10000);
		$prisonerId=mt_rand(1,10000);
		mysql_select_db('PRISON');
		echo "conect successfully\n"; 
		$sql = "INSERT INTO  Address(adressId,House_Phone_No, Office_Phone_No,Cell_Phone,Region,Kebele,city) 
		       VALUES ($aid,'$h_phone', '$off_Phone','$c_phone','$region','$kebele','$city')";
		$retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not enter data: ' . mysql_error());   
		}
		$sql1 = "INSERT INTO  Person(personId,fName,lName,birtDate,sex,adressId) VALUES 
		('$pid','$firstName','$lastName','$birt','$sex',$aid)";
			
			$retval = mysql_query( $sql1, $conn );
			if(!$retval) 
			{  
				die('Could not enter data into : Person' . mysql_error());   
			}
		$sql2 = "INSERT INTO  VISITOR(visitorId,personId) VALUES 
		('$visitorid','$pid')";
				$retvalp = mysql_query( $sql2, $conn );
				if(!$retvalp) 
				{  
					die('Could not enter data into : visitor' . mysql_error());   
				}
				
		mysql_close($conn);
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		';		
	     header('location: visitorregistration.php');
?>

