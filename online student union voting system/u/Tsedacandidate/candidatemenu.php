<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
	<?php
	if(isset($_SESSION['username'])&& isset($_SESSION['password']))
	{
		?>
<ul>
    <li><a href="../Tsedacandidate/Candidate.php" title="home"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="../Tsedacandidate/votepresidantforallcampus.php" title="vote presidant for all campus"><i class='fa fa-hand-o-up'></i>vote presidant</a></li>
	

		<div id="photologin">	
	<?php
		echo "<li style='margin-left:33%;'><a href=../logout.php title='click here to logout the system Candidate:".$_SESSION['username']."'><i class='fa fa-unlock'></i>logout(".$_SESSION['username'].")</a></li>";
if($_SESSION['role']=="Candidate")
{
echo "<li style='float:right;margin-top:5px;'><p><b>.</b>Online</p>". "<img src='".$_SESSION['sphoto']."'</li>";

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
<li ><a href="#bottom"  ><i class="fa fa-arrow-down"></i></a></li>
</ul>



	