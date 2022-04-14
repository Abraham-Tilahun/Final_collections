

<html >
<head>


<!--sa nivo slider-->
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	
<!--sa calendar-->	
	<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">


function makeTwoChars(inp) {
        return String(inp).length < 2 ? "0" + inp : inp;
}

function initialiseInputs() {
        // Clear any old values from the inputs (that might be cached by the browser after a page reload)
        document.getElementById("sd").value = "";
        document.getElementById("ed").value = "";

        // Add the onchange event handler to the start date input
        datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
}

var initAttempts = 0;

function setReservationDates(e) {
        // Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
        // until they become available (a maximum of ten times in case something has gone horribly wrong)

        try {
                var sd = datePickerController.getDatePicker("sd");
                var ed = datePickerController.getDatePicker("ed");
        } catch (err) {
                if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
                return;
        }

        // Check the value of the input is a date of the correct format
        var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

        // If the input's value cannot be parsed as a valid date then return
        if(dt == 0) return;

        // At this stage we have a valid YYYYMMDD date

        // Grab the value set within the endDate input and parse it using the dateFormat method
        // N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
        var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

        // Set the low range of the second datePicker to be the date parsed from the first
        ed.setRangeLow( dt );
        
        // If theres a value already present within the end date input and it's smaller than the start date
        // then clear the end date value
        if(edv < dt) {
                document.getElementById("ed").value = "";
        }
}

function removeInputEvents() {
        // Remove the onchange event handler set within the function initialiseInputs
        datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
}

datePickerController.addEvent(window, 'load', initialiseInputs);
datePickerController.addEvent(window, 'unload', removeInputEvents);

//]]>
</script>

			
			
			<?php
			if (isset($_GET['id']))
	
	
			$msg = $_GET['id'];
			
			
			echo '<form action="approved.php" method="post">';
			
			$con = mysql_connect("localhost","root","");
			if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());
  			}

			mysql_select_db("storem", $con);
		echo '<input name="id" type="hidden" value="'.$msg .'" />';
			echo '<br>';
			echo '<br>';
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM request WHERE Req_ID = '$msg'");

			while($row = mysql_fetch_array($result))
  			{
			echo '<input type="hidden" name="empid" value="'. $row['EmpId'] .'">'; 
			  echo '<br>';
			  echo '<input type="hidden" name="iid" value="'. $row['ItemId'] .'">'; 
			  echo '<br>';
			  echo'<input type="hidden" name="qut" value="'. $row['quantity'] .'">'; 
			echo '<br>';
			echo 'user name:';
			echo '<input name="uname"  type="text"  />';
			echo '<br>';
		
			echo '<br>';
			echo 'password:';
			echo '<input name="pass" type="password"  />';
			echo '<br>';
		
			echo '<br>';
			echo 'Borrowed Date:';
            echo '<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" readonly="readonly" />';
			echo '<br>';
			echo '<br>';
			
			echo 'Are you sure you want to delete this request?';
			echo '<br>';
			echo '<br>';
			echo '<input name="ok" type="submit" value="Approved" />';
			echo '</form>';
		}	
	//header("location: approve_req.php");
	//include("checked_2.php");
			?>
	</>
</html>	