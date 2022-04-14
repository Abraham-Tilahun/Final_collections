<?php   
 session_start();
include("config.php");
 //echo "User".$_SESSION['user'];
?>
        <div class="content_item2">
		
	 <?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("dbu",$con);
$sql="select Req_ID from request ";
$res=mysql_query($sql) or die("query error".mysql_error());


?>
	  
      <?php
				  if (isset($_GET['id']))
	{
			$approve = $_GET['id'];
			echo '<form action="reqoption.php" method="post">';
			echo '<input name="id" type="hidden" value="'. $approve . '" />';
			echo '<font size="+2" style="font-family:Times New Roman, Times, serif; font-size:16px; border-radius:30px; font-style:italic ">Are you sure you want to Approve this Request? </font>';
			echo '<div>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="yes" type="submit" value="Yes" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="no" type="submit" value="No" />'.'</div>';
			echo '</form>';
			//include('view_req.php');
	}
			?>
	  <?Php
	 //include('srch_item.php');
	 ?>
	</div>
