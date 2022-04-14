<?php
session_start();
if ((!isset($_SESSION['language']))) {

    include'language/English.php';
} else if ($_SESSION['language'] == 'English') {

    include'language/English.php';
} else if ($_SESSION['language'] == 'Amharic') {

    include'language/Amharic.php';
}

include('include/connect_db.php');
$msg = '';
if (isset($_POST["login"])) {
    $email = strtolower($_POST['email']);
    $password = md5($_POST['password']);

    $user = mysql_query("SELECT * FROM user_account WHERE EMAIL='$email'");
    echo mysql_error();
    $rst = mysql_fetch_assoc($user);
    if (mysql_num_rows($user) > 0) {
        $query1 = mysql_query("SELECT * FROM user_account WHERE EMAIL='$email' AND PASSWORD='$password'");
        echo mysql_error();
        if (mysql_num_rows($query1) > 0) {

            $row = mysql_fetch_assoc($query1);
            $user_type = $row["USER_TYPE"];


            $query5 = mysql_query("SELECT * FROM $user_type WHERE EMAIL='$email'");
            echo mysql_error();
            while ($rslt = mysql_fetch_assoc($query5)) {
                $status = $rslt["STATUS"];
                // echo $status;
                if ($status == 0) {
                    $red = mysql_query("UPDATE user_account SET LOGIN=1 WHERE EMAIL='$email'");


                    $_SESSION["userId"] = $rslt['ID'];
                    $_SESSION["email"] = $email;
                    $_SESSION["fname"] = $rslt['F_NAME'];
                    $_SESSION["mname"] = $rslt['M_NAME'];
                    $_SESSION["work"] = $rslt['WORK_TYPE'];
                    $_SESSION["user_type"] = $user_type;
                    if ($rslt['PROFILE'] == '' || $rslt['PROFILE'] == null) {
                        $_SESSION["image"] = '../images/user.png';
                    } else {
                        $_SESSION["image"] = $rslt['PROFILE'];
                    }
                    if ($user_type == "property_manager") {
                        header("Location: property_manager/index.php");
                    } else if ($user_type == "asset_user") {
                        header("Location: asset_user/index.php");
                    } else if ($user_type == "fixed_asset_manager") {
                        header("Location: fixed_asset_manager/index.php");
                    }
                } else {
                    $msg = 'deactivate';
                }
            }
        } else {
            $msg = 'incorrect_pswrd';
        }
    } else {
        $msg = 'not_exist';
    }
}
?>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fixed Asset Management System </title>

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <script src="js/login.js" type="text/javascript"></script>
        <link href="build/css/custom.css" rel="stylesheet">
    </head>
    <body class="nav-justified ">

        <div class="container body">
            <img src="images/Top.gif" width="1400" height="150" class="img-thumbnail"/>
            <div class="row">
                <div class="col-lg-12">
                </div>
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <ul class="nav navbar-nav navbar-right">

                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <b>  <?php echo $ln_language; ?></b>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="language/setLanguage.php?lan=english"> English</a></li>
                                        <li>

                                        </li>
                                        <li><a href="language/setLanguage.php?lan=amharic">Amharic</a></li>

                                    </ul>
                                </li>
                                <li class="">
                                    <a href="login.php"><b><?php echo $ln_login; ?></b></a>
                                </li>
                              
                                <li class="">
                                    <a href=""><b><?php echo $ln_contact; ?></b></a>
                                </li>
                                  <li class="">
                                      <a href="about.php"><b><?php echo $ln_about; ?></b></a>
                                </li>
                                <li class="">
                                    <a href="index.php"><b><?php echo $ln_home; ?></b></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="main_container">


                    <!-- top navigation -->

                    <!-- /top navigation -->

                    <!-- page content -->
                    <div class="right_col" role="main">
                        <div class="">



                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">


                                    <div class="col-lg-12">
                                        <div class="col-sm-3"></div> <img src="images/login.jpg" alt="" class="img-responsive"/><br>
                                    </div>

                                    <form class="form-horizontal form-label-left" action="login.php" method="POST" name="login" onsubmit="return loginform();">
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><?php echo $ln_email; ?>:
                                            </label>
                                            <div class="col-md-3 col-sm-3 col-xs-7">
                                                <input type="email" placeholder="Email" name="email" class="form-control col-md-7 col-xs-12" onblur="loginform()"><span id="email"></span>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label for="password" class="control-label col-md-3"><?php echo $ln_password; ?>:</label>
                                            <div class="col-md-3 col-sm-3 col-xs-7">
                                                <input type="password" name="password" placeholder="password" class="form-control col-md-7 col-xs-12" onblur="loginform()"/><span id="password"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-3 col-md-offset-3">
                                                <button type="reset" class="btn btn-primary"><?php echo $ln_cancel; ?></button>
                                                <input  type="submit" name="login" class="btn btn-success" value="<?php echo $ln_login; ?>"/>
                                                <a href="recover_account/fpass.php"><?php echo $ln_lostpassword; ?></a>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                    if ($msg != '') {
                                        if ($msg == 'deactivate') {
                                            echo "<div class='col-sm-2'></div><div class='col-sm-6'><div class='alert alert-danger'>" .
                                            "<button class='close' data-dismiss='alert'>&times;</button>" .
                                            "<strong><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>" . $ln_loginIncorectTitle . "! " . "</strong>" . $ln_loginDeactive .
                                            "</div></div>";
                                        } elseif ($msg == 'incorrect_pswrd') {
                                            echo "<div class='col-sm-2'></div><div class='col-sm-6'><div class='alert alert-danger'>" .
                                            "<button class='close' data-dismiss='alert'>&times;</button>" .
                                            "<strong><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>" . $ln_loginIncorectTitle . "! </strong>" . $ln_loginIncorectPasswordMessage .
                                            "</div></div>";
                                        } elseif ($msg == 'not_exist') {
                                            echo "<div class='col-sm-2'></div><div class='col-sm-6'><div class='alert alert-danger'>" .
                                            "<button class='close' data-dismiss='alert'>&times;</button>" .
                                            " <strong><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>" . $ln_loginIncorectTitle . "! </strong>" . $ln_loginIncorectEmailMessage .
                                            "</div></div>";
                                        }
                                    }
                                    ?>

                                    <br><br>

                                  

                                </div>
                            </div>
                        </div>


                    </div>
                    

                </div>
            </div>
           
        </div>
         <div class="well">
             <div class="col-sm-4"></div>
             <div class="text-primary">
                            <b> &copy; Copy Right Reserved 2017 ASU 
                                Fixed Asset Management System</b>
             </div>
                       
                   
 </div>
        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="build/js/custom.min.js"></script>

    </body>
</html>