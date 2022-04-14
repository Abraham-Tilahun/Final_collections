	<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
	<?php
	if(isset($_SESSION['username'])&& isset($_SESSION['password']))
	{
		?>
<ul>
    <li><a href="../Facilcandidate/Candidate.php"title="home"><i class="fa fa-home"></i>Home</a></li>
		<div id="photologin">	
	<?php
		echo "<li style='margin-left:50%';><a href=../logout.php title='click here to logout the system'><i class='fa fa-unlock'></i>logout(".$_SESSION['username'].")</a></li>";
if($_SESSION['role']=="Candidate")
{
echo "<li style='float:right;margin-top:0%;'><p><b>.</b>Online</p>". "<img src='".$_SESSION['sphoto']."'</li>";

}


	}
	else
	{
	?>
</ul>	
	<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../home.php');
 </script>
 <?php
	}
   ?>
</div> 

<li><a href="#bottom" title="click here to go down" ><i class="fa fa-arrow-down"></i></a></li>


	