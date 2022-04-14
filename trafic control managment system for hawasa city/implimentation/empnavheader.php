<style>
    .navbar-custom {
        background-color: #192f42;
        color: #ffffff;
        border-radius: 0;
    }

    .navbar-custom .navbar-nav > li > a {
        color: #fff;
        padding-left: 20px;
        padding-right: 25px;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
        color: #ffffff;
        background-color: transparent;
    }

    .navbar-custom .navbar-nav > li > a:hover, .nav > li > a:focus {
        text-decoration: none;
        background-color: #2a3f53;
    }

    .navbar-custom .navbar-brand {
        color: #eeeeee;
        padding: 20px;
    }

    .navbar-custom .navbar-toggle,
    .navbar-custom .nav .open > a, .navbar-custom .nav .open > a:hover, .navbar-custom .nav .open > a:focus {
        background-color: transparent;
    }

    .navbar-custom .icon-bar {
        border: 1px solid #fff;
    }

    /*-- change navbar dropdown color --*/
    .navbar-custom .navbar-nav .open .dropdown-menu > li > a, .navbar-custom .navbar-nav .open .dropdown-menu {
        color: #428bca;
    }

</style>
<link rel="stylesheet" href="css/sweetalert2.min.css">
<div class="row">
    <div class=" col-md-4 logo">
        <img src="image/logo.png" class="img-circle pull-right" alt="">
    </div>
    <div id="system" class="col-md-6 navbar-text tagline">
        Hawassa City Traffic control and managment system
    </div>
</div>
<header class="main-header">
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- For mobile display (for we minimize the size of the browser)-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                </button>
                <a class="navbar-brand" href="emphome.php"><i class="fa fa-home fa-4"></i>
                    <b>Emp</b>-Panel
                </a>
            </div><!-- navbar-header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="javascript: void (0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Register<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="registerVehicle.php">Register Vehicle</a></li>
                            <li class="divider"></li>
                            <li><a href="regDriver.php">Register Driver</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">View Profile
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdownmenuhover-bottom" role="menu">
                            <li><a href="javascript:void(0);" id="driverProfile">Driver Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);" id="vehicleProfile">Vehicle Profile</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li><a href="empgeneratereport.php">Generate Report</a></li>
                    <li><a href="#driverPayment" data-toggle="modal">Payment</a></li>
                    <li><a href="javascript: void(0);" id="forum">Forum Discussion</a></li>
                    <li><a href="#userManual" data-toggle="modal">Help</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <?php
                        require_once('include/db.php');
                        $user = $_SESSION["login_user"];
                        $sql = "SELECT * FROM employee WHERE emp_id='$user';";
                        $res = mysqli_query($db, $sql);
                        if (!$res) {
                            echo 'Uknown User';
                        }
                        $row = mysqli_fetch_array($res, MYSQL_BOTH);
                        ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="EmpImage/<?= $row['photo']; ?>" class="user-image" alt="">
                            <span class="hidden-xs">
                                <?= $user; ?>
                                <i class="fa fa-1x"><i class="fa fa-caret-down"></i></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#profile" data-toggle="modal">View Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#changePassword" data-toggle="modal">Change Password</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#sendMessage" data-toggle="modal">Send Message</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                        </ul>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!--  /.container-fluid -->
    </nav>
</header>
<div class="modal fade" id="profile" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    My Profile
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="EmpImage/<?= $row['photo']; ?>" class="img-responsive"
                             alt="">
                        <br/>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <td>Employee ID</td>
                                <td><?php echo $user; ?></td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td><?php echo $row['fname']; ?></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><?php echo $row['lname']; ?></td>
                            </tr>
                            <tr>
                                <td>Sex</td>
                                <td><?php echo $row['sex']; ?></td>
                            </tr>
                            <tr>
                                <td>Role</td>
                                <td><?php echo $row['role']; ?></td>
                            </tr>
                            <tr>
                                <td>BirthDay</td>
                                <td><?php echo $row['bday']; ?></td>
                            </tr>
                            <tr>
                                <td>Woreda</td>
                                <td><?php echo $row['woreda']; ?></td>
                            </tr>
                            <tr>
                                <td>Kebele</td>
                                <td><?php echo $row['kebele']; ?></td>
                            </tr>
                            <tr>
                                <td>House Number</td>
                                <td><?php echo $row['hnum']; ?></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td><?php echo $row['pnum']; ?></td>
                            </tr>
                            <tr>
                                <td>Educational Status</td>
                                <td><?php echo $row['edu_status']; ?></td>
                            </tr>
                            <tr>
                                <td>Hired Date</td>
                                <td><?php echo $row['hdate']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal profile -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" method="post" role="form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Change Your Password
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="form-group">
                                <label for="oldPassword">Old Password</label>
                                <input type="password" class="form-control" id="oldPassword"
                                       placeholder="Enter old password" required/>
                            </div>
                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" class="form-control" id="newPassword"
                                       placeholder="Enter new Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm New Password</label>
                                <input type="password" class="form-control" id="confirmPassword"
                                       placeholder="Confirm new Password" required/>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close
                    </button>
                    <button type="button" class="btn btn-primary" id="changePass">
                        Change Password
                    </button>
                </div>
            </form><!-- /.end form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal change password -->
<div class="modal fade" id="sendMessage" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="javascript: void(0);" method="post" role="form" id="sendmessage">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Send Message
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="form-group">
                                <label for="oldPassword">Message</label>
                                <textarea class="form-control" id="sndmessage" rows="5"
                                          placeholder="Enter old password" required>
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Send Message
                    </button>
                </div>
            </form><!-- /.end form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal send message -->
<div class="modal fade" id="driverPayment" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php
            $sqlPunishmnetFee = "SELECT License_NO FROM punishment WHERE paymentStatus='not payed';";
            $resultPhnihsmentFee = mysqli_query($db, $sqlPunishmnetFee);
            if (!$resultPhnihsmentFee) {
                die("something Wrong !");
            }
            /*$count=mysqli_num_rows($resultPhnihsmentFee);
            if($count <0){
                die("No Punished Driver Is Found");
            }*/ ?>
            <form class="form-horizontal" method="post" role="form" id="payment">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Driver Punishment Fee Form
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="form-group">
                                <label for="licenseNumber" class="col-md-4 control-label">License Number</label>

                                <div class="col-md-8">
                                    <select name="LicenseNumber" id="licenseNumber" class="form-control">
                                        <option value="-1">Select Driver License Number</option>
                                        <?php
                                        while ($rowPunishmnet = mysqli_fetch_array($resultPhnihsmentFee, MYSQL_BOTH)) {
                                            ?>
                                            <option
                                                value="<?= $rowPunishmnet['License_NO']; ?>"><?= $rowPunishmnet['License_NO']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="amount" class="col-md-4 control-label">Amount</label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="amount" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="receiptNumber" class="col-md-4 control-label">Receipt Number </label>

                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="receiptNumber"
                                           placeholder="Enter Reciept Number">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Apply
                    </button>
                </div>
            </form><!-- /.end form -->

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal Driver Payment-->
<div class="modal fade" id="userManual" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">Help and User Manual</h4>
            </div>
            <div class="modal-body">
                <div class="panel-group" id="help">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#help" href="#administrator">
                                    Employee User Manual</a>
                            </h4>
                        </div>
                        <div id="administrator" class="panel-collapse collapse in">
                            <ul style="list-style: disc;">
                                <li><b>Employee</b> should <b>login</b> to the system before accessing the system,
                                    ofcourse your login now
                                </li>
                                <li>To Register <b>Vehicle</b> or <b>Driver</b> Click on the Register link from
                                    nav bar menu and Register Vehicle and Register Driver link will be drop out and
                                    click on one of the them.
                                    <ul>
                                        <li><b>Register Vehicle</b>:-Fill <b>Register Vehicle</b> Form fields and click
                                            register button to register Vehicle. if the action is successful, The system
                                            display <b>successful message</b> unless it display error message.you can
                                            click <b>Cancel</b> button to clear the form fields.
                                        </li>
                                        <li><b>Register Driver</b>:-Fill <b>Register Driver</b> form field and click
                                            register button to register Driver. if the action is successful, the system
                                            display <b>successful message</b> unless it display error message.you can
                                            click <b>Cancel</b> button to clear the form fields.
                                        </li>
                                    </ul>

                                </li>
                                <li>Click on View profile of the <b>Driver</b> and <b>Vehicle</b> detail information
                                    <ul>
                                        <li><b>Vehicle profile</b> List of Vehicle's Will be displayed on the table any
                                            vehicle registered to the system. There is Three different button on each
                                            Vehicle row,<b>Edit, Info and Delete</b>. Click on
                                            those button if you want
                                            <ul>
                                                <li><b><i>Edit</i></b>:-
                                                    Edit Vehicle information and click on <b>save changes</b> button
                                                    tosave the changes and click on <b>Back button to go back</b>
                                                </li>
                                                <li><b><i>Info</i></b>:-
                                                    Detail Information of the Vehicle is displayed on the Modal.
                                                </li>
                                                <li><b>Delete</b>:-Delete Vehicle if neccessary.
                                                </li>
                                            </ul>
                                        </li>
                                        <li><b>Driver profile</b> List of Driver's Will be displayed on the table if
                                            any Driver Registered to the system. There is Three different button on each
                                            Driver row,<b>Edit, Info and User Account </b>. Click on
                                            those button if you want
                                            <ul>
                                                <li><b><i>Edit</i></b>:-
                                                    Edit Vehicle Profile form filed and click on <b>save changes</b>
                                                    button
                                                    to save the changes and click on <b>Back button to go back</b>
                                                </li>
                                                <li><b><i>Info</i></b>:-
                                                    Detail Information of the Driver is displayed on the Modal
                                                    including his profile Picture.
                                                </li>
                                                <li><b>User Account</b>:-
                                                    Two types of Button are toggled each other
                                                    <ol>
                                                        <li><b>Activate</b>:-click on it if you want to Activate user
                                                            Account.
                                                        </li>
                                                        <li><b>Deactivate</b>:- click on it if you want to Deactivate
                                                            user account
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>To Generate Report, Click on the <b>Generate Report</b> link from the nav bar. Then
                                    you can Generate your report that you want to generate about.Example Generate report
                                    about accident occured daily ,weekly, monthly and annually, Generate report about
                                    punishment.
                                </li>
                                <li>to Post or Read Forums discussion , you can click on <b>Forum discussion</b> from
                                    the nav bar and read or Write your ideas from or on the forum.
                                </li>
                                <li>Click on <b>Payment</b> Link from the nav bar menu to recive the <b>Driver</b>
                                    punishment punished by the Traffic Police.select the driver license mumber from the
                                    drop down list and insert the receipt number and then click apply button.
                                </li>

                                <li>By clicking on <b>your profile or user name</b> from the header menu, you can see
                                    your profile,change password, send message and logout from the system.
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="js/jQuery.js"></script>
<script src="js/sweetalert2.min.js"></script>
<script type="application/javascript">
    function displaySuccessMessage(message) {
        swal(
            message,
            '',
            'success'
        )
    }
    function displayErrorMessage(message) {
        swal(message, '', 'error');
    }
    function validateSendMessage() {
        var handler = true;
        var message = $('#sndmessage').val().trim();
        if (message.length == 0) {
            handler = false;
            $('#sndmessage').focus();
            displayErrorMessage("please Write your Message");
            return handler;
        }
        return handler
    }
    $(document).ready(function () {
        $('#licenseNumber').change(function () {
            var licenseNumber = $('#licenseNumber').val();
            if (licenseNumber != "-1") {
                var i = 1;
                var dataString = "licenseNumber=" + licenseNumber + "&type=" + "getAmount";
                $.ajax({
                    type: 'post',
                    url: 'punishedAmount.php',
                    data: dataString,
                    cache: false,
                    success: function (data) {
                        $('#amount').val(data);
                    }
                });
            }
        });
        $('#payment').on('submit', (function (e) {
            e.preventDefault();
            var licenseNumber = $('#licenseNumber').val();
            var receiptNumber = $('#receiptNumber').val().trim();
            var regReceipt = /^[a-zA-Z]+[0-9]+$/;
            if (receiptNumber.length == 0 || !(regReceipt.test(receiptNumber))) {
                $('#receiptNumber').focus();
                alert("error");
                return false;
            }
            var dataString = "licenseNumber=" + licenseNumber + "&receiptNumber=" + receiptNumber + "&pay=pay";
            var x = 1;
            $.ajax({
                type: 'post',
                url: "punishedAmount.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    alert(data);
                }
            });
        }));
        $('#changePass').click(function () {
            var handle = validateForm();
            if (handle == true) {
                var oldPassword = $('#oldPassword').val();
                var newPassword = $('#newPassword').val();
                var datastring = "oldpassword=" + oldPassword + "&newpassword=" + newPassword;
                $.ajax({
                    type: "POST",
                    url: "changePasswordMysql.php",
                    data: datastring + "&emp=" + "emp",
                    success: function (data) {
                        alert(data)
                    }
                });
            }
            else if (handle == false) {
                alert("Validation Failed !");
            }
        });
        $('#sendmessage').on('submit', (function (e) {
            e.preventDefault();
            var handler = validateSendMessage();
            if (handler == true) {
                var message = $('#sndmessage').val().trim();
                var formdata = "message=" + message + "&sendmessage=" + "sendmessage";
                $.ajax({
                    type: "POST",
                    url: 'sendmessage.php',
                    data: formdata,
                    cache: false,
                    success: function (data) {
                         displaySuccessMessage(data);
                    }
                });
            }
        }));

    });
</script>