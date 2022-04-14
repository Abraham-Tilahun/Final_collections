<link rel="stylesheet" href="css/navheader.css">
<nav class="navbar navbar-custom no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
        <!-- For mobile display (for we minimize the size of the browser)-->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
        </button>
        <a class="navbar-brand" href="adminhome.php"><i class="fa fa-rocket fa-4"></i>
            <b>Admin</b> Panel
        </a>
    </div><!-- navbar-header-->
    <?php
    require_once('include/db.php');
    $user = $_SESSION["login_user"];
    $notification = "SELECT * FROM notification ORDER BY date DESC ;";
    $unseenNotification = "SELECT * FROM notification WHERE status='unseen';";
    $notifyResult = mysqli_query($db, $notification);
    $unseenNotiResult = mysqli_query($db, $unseenNotification);
    $hdate = date("Y-m-d");
    if (!$notifyResult || !$unseenNotiResult) {
        echo "notification problem";
    }
    $notifyCount = mysqli_num_rows($unseenNotiResult);
    ?>
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
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" id="notification">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-danger label-top" id="totalNotification"><?= $notifyCount; ?></span>
                </a>
                <ul class="dropdown-menu"
                    style="max-height: 300px; position: absolute; min-width: 500px; overflow-y: auto;overflow-x: inherit; ">
                    <li>You Have <?= $notifyCount ?> Message</li>
                    <li class="divider"></li>
                    <?php

                    while ($notifiyRow = mysqli_fetch_array($notifyResult)) {
                        ?>
                        <li>
                            <a href="javascript: void(0);">
                                <h4> <?= $notifiyRow['name'] ?>
                                    <small
                                        class="pull-right"> <?php if ($notifiyRow['date'] == $hdate) echo "Today"; else echo $notifiyRow['date']; ?></small>
                                </h4>
                            </a>

                            <div
                                style="color: #000;overflow-y: inherit; padding-left: 15px"> <?= ucwords($notifiyRow['notification']); ?>
                            </div>
                            <p style="float: right;"><a
                                    href="deleteNotification.php<?= '?id=' . $notifiyRow['name'] . "&type=admin"; ?>">Delete
                                    This message</a></p><br>
                        </li>
                        <li class="divider"></li>
                    <?php }

                    ?>

                </ul>
            </li>
            <li class="dropdown">
                <?php
                //require_once('include/db.php');
                $user = $_SESSION["login_user"];
                $sql = "SELECT * FROM employee WHERE emp_id='$user';";
                $res = mysqli_query($db, $sql);
                if (!$res) {
                    echo 'Uknown User';
                }
                $row = mysqli_fetch_array($res, MYSQL_BOTH);
                ?>
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="EmpImage/<?= $row['photo']; ?>" class="user-image" alt="">
                    <span class="hidden-sm">
                        <?php
                        echo $_SESSION["login_user"];
                        ?>
                        <i class="fa fa-caret-down"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="EmpImage/<?php echo $row['photo']; ?>" height="100" width="100" class="img-circle"
                             alt="User Image">

                        <p>
                            <?php
                            echo $row["fname"] . " " . $row["lname"] . '<br/>';
                            echo "Date of join this organizaation" . '<br/><small>' . $row["hdate"] . '</small>'
                            ?>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer" style="margin-top: 10px; margin-bottom: 10px;padding: 2px;">
                        <div style="color: #00A65A;">
                            <a class="btn btn-block  btn-defualt pull-left" data-toggle="modal"
                               data-target="#profile">Profile
                            </a>
                            <a class="btn btn-block btn-defualt pull-left" data-toggle="modal"
                               data-target="#changePassword">Change Password
                            </a>
                            <a href="logout.php" class="btn btn-block btn-defualt pull-left">Logout</a>
                        </div>
                        <!--  <div class="pull-left">
                              <button class="btn btn-default btn-flat pull-left" data-toggle="modal"
                                      data-target="#profile">Profile
                              </button>
                          </div>
                          <div style="text-align: center;">
                              <button class="btn btn-default pull-left" data-toggle="modal"
                                      data-target="#profile">Change Password
                              </button>
                          </div>
                          <div class="pull-right">
                              <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                          </div>-->
                    </li>
                </ul>
            </li>
        </ul>
    </div><!-- bs-example-navbar-collapse-1 -->
</nav>
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
</div><!-- /.modal for change password -->
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
</div><!-- /.modal for view profile -->
<script src="js/jQuery.js"></script>
<script>
    $(document).ready(function () {
        $('#notification').click(function () {
            $('#totalNotification').text("0");
            $.ajax({
                type: "POST",
                url: "seeNotification.php",
                data: {},
                cache: false,
                success: function (data) {
                    //alert(data);
                }
            });
        })
    })
</script>