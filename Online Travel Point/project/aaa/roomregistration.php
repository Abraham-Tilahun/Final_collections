<?php
include("dbconnet.php");
		$b_name=$_POST["bn"];
		$R_No=$_POST["rn"];
		$nb=$_POST["nb"];
		$fn=$_POST["fn"];
		$r_id=mt_rand(1000,9999);
		mysql_select_db('PRISON'); 
		echo "conect successfully\n";
		
		
		$sql="SELECT * FROM  block where blockName='$b_name'";
		mysql_select_db('PRISON');
		$retval = mysql_query($sql);
		if(!$retval)
		{
			die('can not'.mysql_error());
		}
		$search=mysql_fetch_array($retval);
		$nor=$search['No_Room'];
		
		$sql="SELECT * FROM  room where blockName='$b_name'";
		mysql_select_db('PRISON');
		$retval = mysql_query($sql);
		if(!$retval)
		{
			die('can not'.mysql_error());
		}
		$added_room=mysql_num_rows($retval);
		
		if($added_room<$nor){
		$sql = "INSERT INTO  Room(R_Id,Room_No,NO_Bed,Floar_No,blockName) VALUES ($r_id,$R_No,$nb,$fn,'$b_name')";
		$retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not enter data:' . mysql_error());   
		}
		mysql_close($conn); 
		header('location: roomReg.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		';
		}
		else{echo "room is full";}
?>

