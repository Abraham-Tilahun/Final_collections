<?php
		session_start();
		include("dbconnet.php");
		$err ='';
		if($_SERVER["REQUEST_METHOD"] == "POST"){
		//$prid=$_POST["prisonerId"];
		$firstName=$_POST["fname"];
		$lastName=$_POST["lname"];
		$birtDate=$_POST["birthDate"];
		$sex=$_POST["sex"];
		$h_phone=$_POST["House_Phone_No"];
		$officephone =$_POST["Office_Phone_No"];
		$housephone=$_POST["House_Phone_No"];
		$c_phone=$_POST["cell_phone"];
		$city=$_POST["City"];
		$block=$_POST["bn"];
		$room=$_POST["rn"];
		$region=$_POST["region"];
		$p_Name=$_POST["pn"];
		$kebele=$_POST["kebele"];
		$dateofentran=$_POST["Dateofentrance"];
		$offenceT=$_POST["offenceType"];
		$aid=mt_rand(1,10000);
		$pid=mt_rand(1,10000);
		$prisonerId=mt_rand(1,10000);
		
		$sql1="SELECT * FROM  Room where Room_No=$room";
			mysql_select_db('PRISON');
			$retval11 = mysql_query($sql1);
			if(!$retval11)
			{
				$_SESSION["error"] = "The Data Is not registerd";
				header('Location: newPrisonerRegistration.php'); 
			}
		$search1=mysql_fetch_array($retval11);
	     $R_Id=$search1['R_Id'];
		 $NO_Bed=$search1['NO_Bed'];
		 
		
		
		mysql_select_db('PRISON'); 
		$sql="SELECT *  from prisoner where R_Id=$R_Id";
		$retval = mysql_query( $sql, $conn );
			if(!$retval) 
			{  
				$_SESSION["error"] = "The Data Is not registerd";
				header('Location: newPrisonerRegistration.php');  
			}
		$r_r=mysql_num_rows($retval);
		if($r_r<$NO_Bed){
			$sql = "INSERT INTO  Address(adressId,House_Phone_No, Office_Phone_No,Cell_Phone,Region,Kebele,city) 
				   VALUES ($aid,'$housephone', '$officephone','$c_phone','$region','$kebele','$city')";
			$retval = mysql_query( $sql, $conn );
			if(!$retval) 
			{  
				$_SESSION["error"] = "The Data Is not registerd"; 
				header('Location: newPrisonerRegistration.php');   
			}
			$sql1 = "INSERT INTO  Person(personId,fName,lName,birtDate,sex,adressId) VALUES 
			('$pid','$firstName','$lastName','$birtDate','$sex',$aid)";
				
				$retval = mysql_query( $sql1, $conn );
				if(!$retval) 
				{  
					$_SESSION["error"] = "The Data Is not registerd"; 
					header('Location: newPrisonerRegistration.php');   
				}	
	
			/* echo ini_get('post_max_size') ;
			echo ini_get('upload_max_filesize') ; */
			$imageDir = "upload/image/";
			if(!file_exists($imageDir))
			{
				mkdir($imageDir);
			}
			
			$imageName = $_FILES['pic']['name'];
			$tmpName = $_FILES['pic']['tmp_name'];
			
			$imagesPath = $imageDir . "" . $imageName;
			/* uploadig file*/
			$result = move_uploaded_file($tmpName, $imagesPath);
			if (!$result)
			{
				echo "Error uploading Picture";
				exit;
			}
			$sql2 = "INSERT INTO prisoner(prisonerId,dateOfEntrance,offenceType,personId,R_Id,prisonName,image_path,status) VALUES 
			('$prisonerId','$dateofentran','$offenceT','$pid',$R_Id,'$p_Name','$imagesPath',0)";
			$retvalp = mysql_query( $sql2, $conn );
			if(!$retvalp) 
			{  
				$_SESSION["error"] = "The Data Is not registerd"; 
				header('Location: newPrisonerRegistration.php');   
			}	
			$_SESSION["sucess"] = "The Data Is successfully registerd";
			header('Location: newPrisonerRegistration.php');
			
			mysql_close($conn); 
		}
		else{
			$_SESSION["error"] = "The Data Is not registerd1"; 
			header('Location: newPrisonerRegistration.php');   
		}
	}
?>

