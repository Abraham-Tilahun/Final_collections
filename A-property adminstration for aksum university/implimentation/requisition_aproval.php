
   <?php
	mysql_select_db('storem');
   mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
 session_start();
if(isset($_SESSION['IdNo']))
 {
  $mail=$_SESSION['IdNo'];
 } else {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='http://localhost/Group8/index/index.php');
 </script>
 <?php
 }
 ?>

<?php

$IdNo=$_SESSION['IdNo'];

$result=mysql_query("select * from account where IdNo='$IdNo'")or die(mysql_error);
$row=mysql_fetch_array($result);
$firstname=$row['fname'];
$lastname=$row['lname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 5.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='requisition_aproval.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
</head>
<body style="background-image:url(images/background.jpg) ">
<table  border="0" align="center" width="750px">
<!--Header-->

<!--End Of Header-->
<!--Main menus-->
<!--End of main menus-->
<!--Slide shows-->
<!--End of Slide shows-->
<table align="center" id="insides" width="850px">
<tr>
<!--Sub menus-->
<tr>
<td>&nbsp;<a href="requisition_aproval.php">Departmenthead  page</a></td>
</tr>
</table>

   

   
<table align='center' border='1' >
<tr>
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>User_id </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Item_name</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Req_ID</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Item_id</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Qauntity</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Req_Date </th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Status</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>Confiorm_Request</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:gray;'><font color='white' size='3'>delete_request</th>
</tr> 
</tr>  
<?php

include('ps_pagination.php');
$sql = mysql_query("SELECT * FROM request where status='0' ");
	//Create a PS_Pagination object
							//$pager = new PS_Pagination($conn, $sql, 5, 10);

							//The paginate() function returns a mysql result set for the current page
							//$rs = $pager->paginate();
while($row = mysql_fetch_array($sql))
  {
$ctrll = $row['Requistion_no'];
$date=$row['date'];
//$p_name=$row['p_name'];
$req=$row['req'];
$cname=$row['cname'];
$name=$row['name'];
$role=$row['role'];
$deliver_date=$row['deliver_date'];
//$quantity=$row['quantity'];
$description=$row['description'];
//$unit_cost=$row['unit_cost'];

//$estimated_cost=$row['estimated_cost'];
$budget=$row['budget'];
$status=$row['status'];
?>
<tr>
<td><?php echo $date;?></td>

<td><?php echo $req;?></td>
<td><?php echo $cname;?></td>
<td><?php echo $name;?></td>
<td><?php echo $row['Requistion_no'];?></td>
<td><?php echo $role;?></td>
<td><?php echo $deliver_date;?></td>



<td><?php echo $description;?></td>	


<td><?php echo $budget;?></td>
	
<td><?php
						if(($status)=='0')
						{
						?>
                       			 <a href="approval_req.php?status=<?php echo $row['Req_ID'];?>" onclick="return confirm('Really you want approve <?php echo $description?>');">
                        		<img src='img/korganizer_todo.png' id="view" width="" height="16" alt="" />NOT <br>APPROVED </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
                       			 <a href="approval_req.php?status=<?php echo $row['Req_ID'];?>" onclick="return confirm('Really you want disapproved (<?php echo $description?>)');"> 
                       			 <img src="IMG/tick.png" width="16" id="view" height="16" alt=""  />approved</a>
                        <?php
						}
                        ?>
						</td>
						<?php
						print("<td style='height:30px;' align = 'center' width = '1'><a href = 'delete.php?key=".$ctrll."'><img src='images/icon/delete.gif' title='Delete' onclick='isdelete();'></img></a></td>");?>
		</tr>
<?php
  }
print( "</table>");

?>
</td>
</tr>
</table>
<!--End Body of section-->
</table>

</html>
