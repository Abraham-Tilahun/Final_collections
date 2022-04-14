<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
session_start();
include './Connection.php';

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1">
  <title>Hibret Hotel Cinema</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/left_item.css" rel="stylesheet" type="text/css" />
  <link href="css/hover_dropdown.css" rel="stylesheet" type="text/css" />
  <link href="css/Login-style.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.12.1.min.js"></script>
  <script src="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

 <!--For the slide-->
  <link href="css/slide-style.css" rel="stylesheet" type="text/css" media="all" />
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.flexisel.js"></script>

<!--For multiple select combobox-->
    <!-- Ignite UI Required Combined CSS Files -->
<!--    <link href="http://cdn-na.infragistics.com/igniteui/2015.2/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet" />
    <link href="http://cdn-na.infragistics.com/igniteui/2015.2/latest/css/structure/infragistics.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>-->

    <!-- Ignite UI Required Combined JavaScript Files -->
<!--    <script src="http://cdn-na.infragistics.com/igniteui/2015.2/latest/js/infragistics.core.js"></script>
    <script src="http://cdn-na.infragistics.com/igniteui/2015.2/latest/js/infragistics.lob.js"></script>-->
<!------------------------------------>



</head>
<body>
<div class="wrapper">
  <div class="left-gap1"><img src="images/spacer.gif" alt="#" border="0"
 height="1" width="6" /></div>
  <div class="main">
  <!--Logo and login signup nav-area-->
 
    <div class="header">
      <div class="nav-area">
       <?php
        if (isset( $_SESSION['sess_user'])){
           include './afterLogin.php';
        }else{
           include './beforLogin.php';
        }  
       ?>
        <ul class="nav">
          <!--<li style="border: medium none ;"><a href="Admin_report.php">Home</a></li>
          <li><a href="Schedule.php">Schedule</a></li>
          <li><a href="gallary.php">Gallery</a></li>
          <li><a href="comingsoon.php">Coming Soon</a></li>
          <li><a href="News.php">News</a></li>
          <li><a href="about_us.php">About Us</a></li>
          <li><a href="contact_us.php">Contact Us<br />
          </a></li>-->
        </ul>
      </div>
      <div class="banner-area">
        <!----> <div class="more-reviews">
         <ul id="flexiselDemo2">
          <?php
		 
		 $query=mysql_query("select * from upload ") or die( mysql_error());
							while($row=mysql_fetch_array($query)){
								$image1=$row['image1'];
								$image2=$row['image2'];
								$image3=$row['image3'];
								$image4=$row['image4'];
								
								
							}
							?>
          <li><img src="slide-images/<?php echo $image1; ?>"alt=""/></li>
          <li><img src="slide-images/<?php echo $image2; ?>"/></li>
          <li><img src="slide-images/<?php echo $image3; ?>" alt=""/></li>
          <li><img src="slide-images/<?php echo $image4; ?>"alt=""/></li>
         </ul>
      <script type="text/javascript">
    $(window).load(function() {
      
      $("#flexiselDemo2").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,       
        pauseOnHover: false,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
          portrait: { 
            changePoint:480,
            visibleItems: 2
          }, 
          landscape: { 
            changePoint:640,
            visibleItems: 3
          },
          tablet: { 
            changePoint:768,
            visibleItems: 3
          }
        }
      });
      });
     </script>
     
    </div>  
      </div>
    </div>
    <div class="mid">
      <div class="mid-left">
      <div class="left-header" >
        <h3>Category<br />
      
        </h3> </div>
        <div class="widget" >
                        <ul>
                            <!--<li><a href="index.php?latest">Latest</a></li>
                            <li><a href="index.php?action">Action</a></li>
                            <li><a href="index.php?comedy">Comedy</a></li>
                            <li><a href="index.php?horror">Horror</a></li>
                            <li><a href="index.php?family">Family</a></li>
                            <li><a href="index.php?romance">Romance</a></li>
                            <li><a href="index.php?drama">Drama</a></li>
                         </ul>-->
                    </div>
       <div class="left-header">
        <h3>Follow Us</h3>
        </div>
         <div class="widget" >
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ul>
                    </div>
      </div>
      <div class="mid-right">
       <h1>Coming Soon</h1>
        <h1></h1>
        <div class="detail-section" style="height:auto;">
		
		
		
         <?php
            $movRun=  mysql_query("SELECT * FROM `movies` WHERE `MovieType`='Coming soon'");
            ?>
			
			<table>
            <?php
            while ($movidata= mysql_fetch_assoc(($movRun))){
            
			$movtitle=$movidata['MovieTitle'];
			$movactor=$movidata['Actor'];
			$movdisc=$movidata['Description'];
			$poster=$movidata['Image'];
			
            
            ?>
			
			
			<td>
			<br>
			<video src="MoviePosters/<?php echo $poster ?>" width="450" height="225" controls="controls">
            Your browser does not support the video tag.
            </video> <br></td>
		
			
			<td><p>
			<?php echo "Movie Title : ".$movtitle; ?><br>
			<?php echo "Actor/Actors : ".$movactor; ?><br>
			<?php echo "Movie Description : ".$movdisc; ?>
			</p></td>
			</tr>
		

            
			
<?php
            }
            ?> 
				</table>
             <div class="mid_sections" style="height:auto;">
          </div>      
         
     
        <p class="txt-1">&nbsp;</p>
      </div>
    </div>
</div>

        <div class="modal fade" id="reserve" role="dialog">
    <div class="modal-dialog" style="width: 800px;">
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reserve Ticket</h4>
        </div>
        <div class="modal-body">
          <div class="form-box">
          <div class="box-header with-border">
            <h4 class="box-title">Fill The Required Fields</h4>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <div class="schedule-form">
              <form action="Reserve_modal.php" method="post">
                
                <input type="hidden" name="hidTitle" value="<?php echo $movtitle ?>"/>
                <input type="hidden" name="hidprice" id="hidPrice" value="<?php echo $price ?>"/>
                <input type="hidden" name="hiddate" value="<?php echo $date ?>" />
                
                <input type="hidden" name="hidtime" value="<?php echo $time ?>" />
                <label>Seat:</label><br/>
            <?php    
            $seats=  mysql_query("SELECT * FROM `booked_ticket` WHERE `Date`='$date' AND `Time`='$time'");
            while ($seatsData= mysql_fetch_array($seats)){
                 $reseats .=$seatsData['Seats'];
            }
            ?>
            
               
            <?php
           // $reseats;
            $array = explode(",", $reseats);
//            for($i=1;$i<=10;$i++){
             ?><div class="chkbx-list">   <?php
              for($checkbox=1;$checkbox<=60;$checkbox++){  
            ?>
                    
             <?php
                  if(!in_array($checkbox, $array)){
            echo '<ul>';
                  ?>         
                 <li><input type="checkbox" name="check_list[]" value="<?php echo $checkbox?>"/><?php echo $checkbox?></li> 
                          
                 <?php
                        echo '</ul>';  
                  }  
                  }?>    
              
                  </div> 
                </br></br></br></br></br></br></br></br></br></br></br></br></br>
                <label>Price:</label><br/>
                <input type="text" name="price" id="showPrice" readonly required="required"/><br/>
              </div>
          </div> 
        </div>
        </div>
        <div class="modal-footer">
         <input type="submit" name="save" value="Reserve" class="btn btn-primary" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </form>
        </div>
      </div>
    </div>
  </div>
    
<!----------------Login Modal---------------->
 <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog" style="width: 390px;">
     <div class="modal-content">
        <div class="modal-header"> 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="login">
            <form action="Login_modal.php" method="post">
<input type="hidden" name="urllogin" value="<?php echo $_SERVER['PHP_SELF'];?>"/>
                <label>Username:</label><br/>
                <input type="text" name="username" required="required"/><br/>
                <label>Password:</label><br/>
                <input type="password" name="password" required="required"/><br/>
               
                <label><a href="#" data-toggle="modal" data-target="#ForgetPassword">Forgot Password</a></label>
             
            </div>
        <div class="modal-footer">
         <input type="submit" name="login" value="Login" class="btn btn-primary" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
             </form>
        </div>
      </div>
    </div>
  </div>
<!---------------------------------------------->
<!----------------------------------------------------->
<div class="modal fade" id="ForgetPassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reset Password</h4>
        </div>
        <div class="modal-body">
          <div class="form-box">
          <div class="box-header with-border">
            <h4 class="box-title">Enter Your Username</h4>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <div class="schedule-form">
              <form action="resetPassword.php" method="post">
                  <input type="hidden" name="urlc" value="<?php echo $_SERVER['PHP_SELF'];?>"/>
                 <input type="text" name="username" required="required"/><br/>           
           </div>
          </div> 
        </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="save" value="Reset" class="btn btn-primary" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </form>
        </div>
      </div>
    </div>
  </div>
<!----------------------------------------------------------->

    <div class="footer">
      <p class="copyright"><center><h4>copy right&nbsp;&nbsp;<?php echo date("Y");?> by IS 4th year students</h4>  </center> </p>
    </div>

     


  </div><!--mid end-->
  <div class="right-gap1"><img src="images/spacer.gif" alt="#" border="0"
 height="1" width="6" /></div>
</div>
    
    
    
    <script>
var countChecked = function() {
  var n = $( "input:checked" ).length;
  var birrr=$("#hidPrice");
  var price=$("#showPrice");
  var b=birrr.val();
  //$( "div" ).text( n * b);
  //$("input:text").val(n."");
  price.val(n * b);
};
countChecked();
 
$( "input[type=checkbox]" ).on( "click", countChecked );
</script>
    
    
    
</body>
</html>
