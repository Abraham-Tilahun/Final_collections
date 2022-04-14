<?php
	include("config.php");  
 session_start();
?>	
        <div id="content_item">
<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select EmpId from request";
$res=mysql_query($sql) or die("query error".mysql_error());


?>
          </p>
	      <p>&nbsp;</p>
	      <p>&nbsp;    </p>
	      
      <?php
				  if (isset($_GET['id']))
	{
			$messages_id = $_GET['id'];
			echo '<form action="deleteoption_req.php" method="post">';
			echo '<input name="id" type="hidden" value="'. $messages_id . '" />';
			echo 'Are you sure you want to delete this Request?';
			echo '<div>'.'<input name="yes" type="submit" value="Yes" /><input name="no" type="submit" value="No" />'.'</div>';
			echo '</form>';
			
	}
			?>	      
	  <?Php
	//include('cancel_req.php');
	 ?>
