<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<?php
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
?>
		<ul>
    <li><a href="../Registrar/Registrar.php"title="Home"><i class="fa fa-home"></i>Home</a></li>
    	<li><a href="../Registrar/ChangePassword.php"title="change your password"><i class="fa fa-edit"></i>Change Password</a></li>
		    <?php
	     $sql = mysql_query("SELECT * from notification where (notification.status='unread' and notification.to='Registrar')");
		$coun = mysql_num_rows($sql);
		if($coun!=0)
		{
		?>
    <li><a href="../Registrar/viewnotification.php"title="view notification send from SSD"><i class="fa fa-inbox"></i>Notification<font color="yellow">[<?php echo $coun;?>]</font></a></li>
    <?php
    }
    else
    {
				?>
    <li><a href="../Registrar/viewnotification.php"title="view notification send from SSD"><i class="fa fa-inbox"></i>Notification<font color="yellow">[0]</font></a></li>
    <?php
	}
    
    ?>
	
	<li><a href="../Registrar/editstudentdatad.php"title="view delete send from SSD">update student</a></li>
	<li><a href="#bottom" title="click here to go down" ><i class="fa fa-arrow-down"></i></a></li>
  
		<div id="photologin">	
<?php
	
		echo "<li style='margin-left:1%;'><a href=../logout.php title='click to logout the system Registerar:".$_SESSION['username']."'><i class='fa fa-unlock'></i>logout(".$_SESSION['username'].")</a></li>";
if($_SESSION['role']=="Registrar")
{
echo "<li style='float:right;margin-top:0%;'><p><b>.</b>Online</p>". "<img src='".$_SESSION['sphoto']."'</li>";

}
	}
	else
	{
	?>
	
	<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../home.php');
 </script>
 <?php
	}
   ?>
	</div> 
</ul>


	