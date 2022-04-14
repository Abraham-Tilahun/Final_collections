<?php
	include("config.php");  
session_start();
 ?>

<body>
        <div id="content_item2">
		
	 <?php
$config=mysql_connect("localhost","root","");
if(!$config){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$config);
$sql="select Feedback_id from feedback";
$res=mysql_query($sql) or die("query error".mysql_error());


?>
	  
      <?php
				  if (isset($_GET['id']))
	{
			$del = $_GET['id'];
			echo '<form action="deletecomentoption.php" method="post">';
			echo '<input name="id" type="hidden" value="'.$del. '" />';
			echo 'Are you sure you want to delete this Comment?';
			echo '<input name="yes" type="submit" value="Yes" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="no" type="submit" value="No" />';
			echo '</form>';
			//include('deletecomment.php');
	}
			?>
	  <?Php
	 //include('srch_item.php');
	 ?>
	</div>
	  </div>
	
</body>
</html>
