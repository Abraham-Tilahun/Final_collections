<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Register Traffic police</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/calendar.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
    <link rel="stylesheet" href="css/zabuto_calendar.min.css">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom1.css">
    <script src="js/Chart.min.js"></script>
</head>
<body>

<div class="row">
    <div class=" col-md-4 logo">
        <img src="image/logo.png" class="img-circle" alt="Logo">
    </div>
    <div class="col-md-6 navbar-text pull-right tagline">
        Hawassa City Traffic control and managment system
    </div>
</div>
<nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
        <!-- For mobile display (for we minimize the size of the browser)-->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
        </button>
        <a class="navbar-brand" href="tpa.php"><i class="fa fa-rocket fa-4"></i>
            <b>TPA-Admin</b> LTE
        </a>
    </div><!-- navbar-header-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <!-- side bar toggle button (show or hide the side bar -->
            <li class="active">
                <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"><span
                        class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button>
            </li>
        </ul>
        <!-- Right menu bar-->
        <ul class="nav navbar-nav navbar-right" id="user-setting">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success label-top">20</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning label-top">10</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger label-top">9</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <img src="image/mela.jpg" class="user-image" alt="Melaku">
                    <span class="hidden-sm">Melaku Alehegn</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="image/mela.jpg" height="100" width="100" class="img-circle" alt="User Image">

                        <p>
                            Melaku -- Computer science student
                            <small>Member since Nov. 2012</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="col-xs-4 text-center">
                            <a href="#">Employees</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Vehicles</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Drivers</a>
                        </div>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div>
                            <button class="btn btn-default pull-left">Profile</button>
                        </div>

                        <div>
                            <button class="btn btn-default pull-right">Logout</button>
                        </div>

                    </li>
                </ul>
            </li>
        </ul>
    </div><!-- bs-example-navbar-collapse-1 -->
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

            <li>
                <div class="user-panel" id="user-pannel">
                    <div class="pull-left">
                        <img src="image/mela.jpg" class="img-circle" width="50" height="50" alt="Uer name">
                    </div>
                    <div class="pull-left info">
                        <p>Melaku Alehegn</p>

                        <p>
                            <i class="fa fa-circle text-success"></i>
                            online
                        </p>
                    </div>
                </div>
            </li>
            <li class="header">Main Navigation</li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>
                    Dashboard</a>
                <ul class="nav-pills nav-stacked">
                    <li><a href="#">Dashbord v1</a></li>
                    <li><a href="#">Dashbord v2</a></li>
                </ul>
            </li>
            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i
                            class="fa fa-user fa-stack-1x "></i></span>Register Traffic police</a>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i
                            class="fa fa-user-secret fa-stack-1x "></i></span>View Profile
                    <span class="fa-stack fa-li pull-right"><i class="label label-success">3</i></span>
                </a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-user fa-stack-1x "></i></span>Traffic police profile</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-automobile fa-stack-1x "></i></span>Vehicle profile</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-user-md fa-stack-1x "></i></span>Driver profile</a></li>
                </ul>
            </li>
            <li>
                <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cogs fa-stack-1x "></i></span>Manage
                    Account
                    <span class="fa-stack fa-li pull-right"><i class="label label-success">2</i></span>
                </a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-user-times fa-stack-1x "></i></span>Enable /Disable Account</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i
                                    class="fa fa-certificate fa-stack-1x "></i></span>Change Password</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i
                            class="fa fa-clone fa-stack-1x "></i></span>Generate Report</a>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i
                            class="fa fa-youtube-play fa-stack-1x "></i></span>About Us</a>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Services</a>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Contact</a>
            </li>
        </ul>
    </div><!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <form action="#" class="form-horizontal animated fadein" id="Vehicle_form">
                    <div class="panel panel-default" style="margin-left: 30px; margin-right: 30px !important;">
                        <div class="panel-body">
                            <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-10">
                                <fieldset>
                                    <legend>New Traffic police Registration</legend>
                                    <div class="form-group">
                                        <label for="traffic_id" class="control-label col-xs-4 hidden-xs">ID number <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="traffic_id"
                                                   placeholder="Identification number" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="control-label col-xs-4 hidden-xs">Rank <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <select name="region" id="role" class="form-control">
                                                <option value="emp">Constable</option>
                                                <option value="admin">Assistant sergeant</option>
                                                <option value="emp">Deputy Sergent</option>
                                                <option value="admin">Sergeant</option>
                                                <option value="emp">Chief Sergeant</option>
                                                <option value="admin">Assistant Inspector</option>
                                                <option value="emp">Deputy Inspector</option>
                                                <option value="admin">Inspector</option>
                                                <option value="emp">Chief Inspector</option>
                                                <option value="admin">Deputy Commander</option>
                                                <option value="emp">Commander</option>
                                                <option value="admin">Assistant Commissioner</option>
                                                <option value="emp">Deputy Commissioner</option>
                                                <option value="admin">Commissioner</option>
                                                <option value="emp">Deputy commissioner General</option>
                                                <option value="admin"> Commissioner General</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name" class="control-label col-xs-4 hidden-xs">First Name <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="first_name"
                                                   placeholder="first name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="middle_name" class="control-label col-xs-4 hidden-xs">Middle
                                            Name <i
                                                class="optional-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="middle_name"
                                                   placeholder="middle name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name" class="control-label col-xs-4 hidden-xs">Last Name <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="last_name"
                                                   placeholder="last name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-4 hidden-xs">Sex <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <label class="radio-inline"><input type="radio" name="optradio"
                                                                               class="active">Male</label>
                                            <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="birth_date" class="control-label col-xs-4 hidden-xs">Birthday <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="birth_date" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="woreda" class="control-label col-xs-4 hidden-xs">woreda <i
                                                class="optional-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="woreda" placeholder="woreda" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kebele" class="control-label col-xs-4 hidden-xs">Kebele <i
                                                class="optional-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="kebele" placeholder="kebele">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="house_num" class="control-label col-xs-4 hidden-xs">House Number <i
                                                class="optional-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="text" class="form-control" id="house_num"
                                                   placeholder="house number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_num" class="control-label col-xs-4 hidden-xs">Phone Number <i
                                                class="required-field">*</i></label>

                                        <div class="col-xs-8">
                                            <input type="tel" class="form-control" id="phone_num"
                                                   placeholder="phone number" pattern=[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                   required="required">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="col-xs-offset-5">
                                <button id="registerEmployee" type="submit" class="btn btn-primary">Register
                                    Traffic Police
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /#page-content-wrapper -->
            </div>
            <!-- /#wrapper -->
            <!-- jQuery -->
            <script src="js/jQuery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/bootstrap-dropdownhover.min.js"></script>
            <script src="js/zabuto_calendar.min.js"></script>
            <script src="js/sidebar_menu.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdownhover.min.js"></script>
    <script src="js/zabuto_calendar.min.js"></script>
    <script src="js/sidebar_menu.js"></script>
</body>
</html>