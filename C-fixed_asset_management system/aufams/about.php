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
        <script src="js/moment/news.js" type="text/javascript"></script>

        <!-- Custom Theme Style -->
        <link href="build/css/custom.css" rel="stylesheet">
    </head>
    <body class="nav-justified fixed_height_200">
        <img src="images/Top.gif" width="1400" class="img-thumbnail"/>

        <div class="container body">
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

                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                
                                    <div class="x_content">
                                        <br><br><br><br><br><br><br>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">
                                            <p><b> Assosa University is one of the recently established universities in Ethiopia. It is found 664 KM northwest of Addis Ababa at Assosa town, which is the capital of Benshangule Gomez regional state (180 KMs away from Great Ethiopian Renaissance Dam). It was established in 2012 with 1043 students. From this number of students 444 male and 599 are females. The primary objective and purpose of Assosa University is to provide a well -organized information resource, services & facilities for academic, research & other purposes to users in support of the program of the university. In Assosa University there are different types of systems or organizations that give their service to fulfil the users need. The university follows a community and academic based education philosophy.</b></p>
                                        </div>
                                        <div class="col-sm-4"><p><b>The university is builds knowledge based students and to increase the literacy rate and to perform the capacity of educational development in the country and ensuring the country ongoing development at the maximum speed. Since its establishment, great deals of efforts have been made by staff members as well as students to realize peaceful conducting of teaching-learning activity. The harmonized curriculum was put in place and the staff is properly implementing the curriculum to produce competent graduates. Moreover, participation of our young and dedicated academic staff in research and community service activities is encouraging one.</b> </p></div>
                                        <div class="col-sm-2"></div>
                                     

                                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    </div>
                                    
                                    <div class="ln_solid"></div>
                                    
                                
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                   
                        <table align="center"><tr><td><b> &copy; Copy Right Reserved 2017 ASU GC Student</b></td></tr>
                            <tr><td><b>Prepared By Group Three</b></td></tr></table>
                  
                </div>

            </div>
        </div>

        </div>
        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
       
        <script src="build/js/custom.min.js"></script>

    </body>
</html>