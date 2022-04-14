<?php
include("dbconnet.php");
		$b_name=$_POST["bn"];
		$P_Name=$_POST["pn"];
		$nr=$_POST["nr"];
		mysql_select_db('PRISON'); 
		echo "conect successfully\n";
		
		
		$sql="SELECT * FROM  prison where prisonName='$P_Name'";
		mysql_select_db('PRISON');
		$retval = mysql_query($sql);
		if(!$retval)
		{
			die('can not'.mysql_error());
		}
		$search=mysql_fetch_array($retval);
		$nob=$search['No_block'];
		
		$sql="SELECT * FROM  block where prisonName='$P_Name'";
		mysql_select_db('PRISON');
		$retval = mysql_query($sql);
		if(!$retval)
		{
			die('can not'.mysql_error());
		}
		$added_block=mysql_num_rows($retval);
		
		if($added_block<$nob){
		$sql = "INSERT INTO  block(blockName,prisonName,No_Room) VALUES ('$b_name','$P_Name',$nr)";
		$retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not enter data:' . mysql_error());   
		}
		mysql_close($conn); 
		header('location: blockReg.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		';
		}
		else{echo "block is full";}
?>

