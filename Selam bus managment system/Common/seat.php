<html>
<head><title>seat</title>
<link href="seate.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	#menu button {
		width: 30px;
		height: 30px;
	}
</style>
</head>
<body>
<div  style="margin-left: 250px; margin-top: 20px; margin-bottom: 20px;">
<form action="seat.php" method="POST">
Select a Journy : 
<select style="width: 200px" onchange="this-form.submit();" name="journy" required="">
	<option value="" selected >Select a Journy </option>
	<?php 
	include("../Common/connection.php");
	$sql="select *from journy";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		echo "<option value='".$row['JOURNY_ID']."' "; 
		if(isset($_POST['journy']) && $_POST['journy'] == $row['JOURNY_ID'])
			echo "selected";
		echo " >".$row['FROM'].' - '.$row['TO']."</option>";
	}
	?>
</select>
</form>
</div>
<div align="center"  style="border: 1px solid black">
<?php 
if(isset($_POST['journy']) && $_POST['journy'] != "") {
	$result = mysql_query("select *from bus where JOURNY_ID=".$_POST['journy']);
	if(mysql_num_rows($result) == 0) {
		echo "No Bus Is still assigned for this journy!!";
	} else {

		$row = "";
		$i = 1;
		$IsAllBusFull = false;
		while($row3 = mysql_fetch_array($result,MYSQL_ASSOC)) {
			$TakenSeats = 0;
			$result2 = mysql_query("select *from seat where bus_id=".$row3['BUS_ID']);
			while($row2 = mysql_fetch_array($result2,MYSQL_ASSOC)) {
				$TakenSeats++;
			}

			if($TakenSeats == $row3['HOLDING_CAPACITY']) {
				echo "Bus No ".$i." Is Full. <br><br>";
				if(mysql_num_rows($result) == $i) {
					echo "All Bus Are Full.";
					$IsAllBusFull = true;
					break;
				}
				$i++;
			} else {
				$row=$row3;
				echo "This Is Bus No ".$i.". <br>";
				break;
			}
		}

		if(!$IsAllBusFull) {
			echo "The Bus PLATE_NUMBER is : ".$row['PLATE_NUMBER'].'<br>';
			echo "The Bus HOLDING_CAPACITY is : ".$row['HOLDING_CAPACITY'].'<br>';

			$seats[$row['HOLDING_CAPACITY']] = 0;
			$Available_seats = $row['HOLDING_CAPACITY'];
			for ($i=0; $i < $row['HOLDING_CAPACITY']; $i++) { 
				$seats[$i] = false;
			}

			$result2 = mysql_query("select *from seat where bus_id=".$row['BUS_ID']);
			while($row2 = mysql_fetch_array($result2,MYSQL_ASSOC)) {
				$seats[$row2['SEAT_NO']] = true;
				$Available_seats--;
			}

			echo "The Bus AVAILABLE_SEATS is : ".$Available_seats.'<br><br>';
			echo "THE CURRENT AVAILABLE SEATS ARE LISTED BELOW ...";

			echo '</div>
				<div id="menu" style="margin-left: 250px; border: 1px solid black; width: 230px; margin-top: 20px;">
				   <ul>';

			if($row['HOLDING_CAPACITY'] % 4 != 0) 
				$cols = (int)($row['HOLDING_CAPACITY']/4)+1;
			else
				$cols = $row['HOLDING_CAPACITY']/4;
			
			for($i = 1; $i <= $cols*2; $i+=2) {
				
				echo "<button href='.php' "; 
				if($seats[$i] == true) 
					echo 'disabled="" style="background: rgb(50,50,50);"'; 
				echo ">".$i."</button>";

				if(($i+1) <= $row['HOLDING_CAPACITY']) {
					echo "&nbsp<button "; 
					if($seats[($i+1)] == true) 
						echo 'disabled="" style="background: rgb(50,50,50);"'; 
					echo ">".($i+1)."</button>";
				}

				if(($i+($cols*2)) <= $row['HOLDING_CAPACITY']) {
					echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button "; 
					if($seats[($i+($cols*2))] == true) 
						echo 'disabled="" style="background: rgb(50,50,50);"'; 
					echo ">".($i+($cols*2))."</button>";
				}

				if(($i+($cols*2)+1) <= $row['HOLDING_CAPACITY']) {
					echo "&nbsp<button "; 
					if($seats[($i+($cols*2)+1)] == true) 
						echo 'disabled="" style="background: rgb(50,50,50);"'; 
					echo ">".($i+($cols*2)+1)."</button>";
				}

				echo "<br>";
			}	   
		}
	?>
	   </ul>
	   </div>
	   </body>
      </html>'
<?php      
  }
}      
?>