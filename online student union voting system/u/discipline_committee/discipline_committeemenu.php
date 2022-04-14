<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<?php
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
?>
		<ul>
    <li><a href="../discipline_committee/discipline_committe.php"title="home"><i class="fa fa-home"></i>Home</a></li>
		<li><a href="../discipline_committee/Deciplne.php"title="add displine student">&nbsp;&nbsp;<i class="fa fa-plus-circle"></i>Add Discipline Student</a></li>
		  <li style="margin-left:4%"><a href="../discipline_committee/ChangePassword.php"title="change your password"><i class="fa fa-edit"></i>Change Password</a></li>
		<li><a href="../discipline_committee/changeprofile.php"title="change your profile"><i class="fa fa-edit"></i>Change profile</a></li>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<li style="margin-left:5%;"><a href="#bottom"  title="go down"><i class="fa fa-arrow-down"></i></a></li>
		<div id="photologin">	
<?php
	
		echo "<li style='margin-left:8%; margin-top:-4%;'>
		<a href=../logout.php title='click here to logout the system committee:".$_SESSION['username']." '><i class='fa fa-unlock'></i>logout(".$_SESSION['username'].")</a></li>";
if($_SESSION['role']=="discipline_committee")
{
echo "<li style='float:right;margin-top:-4%;'><p><b>.</b>Online</p>". "<img src='".$_SESSION['sphoto']."'</li>";

}
else
echo "";
	?>
	<?php
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


	