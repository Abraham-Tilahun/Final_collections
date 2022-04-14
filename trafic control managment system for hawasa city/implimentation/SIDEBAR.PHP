<div id="sidebar-wrapper">
    <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
        <li>
            <div class="user-panel" id="user-pannel">
                <div class="pull-left">
                    <img src="EmpImage/<?= $row['photo']; ?>" class="img-circle" width="50" height="50" alt="Uer name">
                </div>
                <div class="pull-left info">
                    <p><?php
                        echo ucwords($row["fname"]) . " " . ucwords($row["lname"]);
                        //echo $_SESSION['login_user'];
                        ?></p>

                    <p><i class="fa fa-circle text-success"></i>online</p>
                </div>
            </div>
        </li>
        <li class="header">Main Navigation</li>
        <li>
            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>
                Dashboard <span class="fa-stack  fa-li pull-right"><i class="fa fa-caret-down"></i></span></a>
            <ul class="nav-pills nav-stacked">
                <li><a href="adminhome.php">English Version (default)</a></li>
                <li><a href="javascript:void(0);" id="amharicVersion">Amharic Version</a></li>
            </ul>
        </li>
        <li>
        <li><a href="registeremploye.php"><span class="fa-stack fa-lg pull-left"><i
                        class="fa fa-user fa-stack-1x "></i></span>Register Employee</a></li>
        </li>
        <li>
            <a href="#" id="selfProfile"><span class="fa-stack fa-lg pull-left"><i
                        class="fa fa-user-secret fa-stack-1x "></i></span>View Profile
                <span class="fa-stack  fa-li pull-right"><i class="fa fa-caret-down"></i></span></a>
            <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                <li><a href="javascript:void(0);" id="employeeProfile"><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-user fa-stack-1x "></i></span>Employee profile</a></li>
                <li><a href="javascript:void(0);" id="vehicleProfile"><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-automobile fa-stack-1x "></i></span>Vehicle profile</a></li>
                <li><a href="javascript:void(0);" id="driverProfile"><span class="fa-stack fa-lg pull-left"><i
                                class="fa fa-user-md fa-stack-1x "></i></span>Driver profile</a></li>
            </ul>
        </li>
        <!-- <li>
             <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cogs fa-stack-1x "></i></span>Manage
                 Account
                 <span class="fa-stack fa-li pull-right"><i class="fa fa-caret-down"></i></span>
             </a>
             <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                 <li><a href="#"><span class="fa-stack fa-lg pull-left"><i
                                 class="fa fa-user-times fa-stack-1x "></i></span>Enable /Disable Account</a></li>
                 <li><a href="#changePassword" data-toggle="modal"><span class="fa-stack fa-lg pull-left"><i
                                 class="fa fa-certificate fa-stack-1x "></i></span>Change Password</a></li>
             </ul>
         </li>-->
        <li><a href="adminGenereateReport.php"><span class="fa-stack fa-lg pull-left"><i
                        class="fa fa-clone fa-stack-1x "></i></span>Generate Report</a>
        </li>
        <li><a href="javascript:void (0);" id="forum"><span class="fa fa-stack fa-lg pull-left"><i
                        class="fa fa-users fa-stack-1x"></i></span>ForumDiscussion</a>
        </li>
        <li><a href="aboutus.php"><span class="fa-stack fa-lg pull-left"><i
                        class="fa fa-youtube-play fa-stack-1x "></i></span>About Us</a>
        </li>
        <li><a href="#readLogFile" data-toggle="modal"><span class="fa-stack fa-lg pull-left"><i
                        class="fa fa-server fa-stack-1x "></i></span>Read LogFile</a>
        </li>
        <li><a href="#userManual" data-toggle="modal"><span class="fa-stack fa-lg pull-left"><i
                        class="fa fa-heartbeat fa-stack-1x "></i></span>Help</a>
        </li>
    </ul>

</div><!-- /#sidebar-wrapper -->
<!-- Modal -->
<div class="modal fade" id="readLogFile" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    LogFile
                </h4>
            </div>
            <div class="modal-body">
                <?php
                $fileName = "logFile/logfile.txt";
                $fileText = "Log File Empty !";
                if (file_exists($fileName)) {
                    $file = fopen($fileName, "r");
                    if ($file == false) {

                    } else {
                        $fileSize = filesize($fileName);
                        if ($fileSize <= 0) {
                            // die ("No Record of Log File");
                        } else {
                            $fileText = fread($file, $fileSize);
                        }

                    }
                    echo '<pre style="color: #000">' . $fileText . '</pre>';
                }
                fclose($file);
                ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">Close
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal Read Log File-->
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
                                    Administrator User Manual</a>
                            </h4>
                        </div>
                        <div id="administrator" class="panel-collapse collapse in">
                            <ul style="list-style: disc;">
                                <li><b>Administrator</b> should <b>login</b> to the system before accessing the system,
                                    ofcourse your login now
                                </li>
                                <li>To Register Employee Click on the Register Employee link from the side bar
                                    <ul>
                                        <li>Fill The <b>Register Employee</b> Form and click Register Button. If the
                                            action is successful the system display successful message, unless it
                                            display Error message.
                                        </li>
                                        <li>If the <b>Register Employee</b> Form field has value, you can click on
                                            <b>Cancel</b> Button to clear the form
                                        </li>
                                    </ul>
                                </li>
                                <li>To View Profile of the system actors, Click on the <b>View Profile</b> link from the
                                    sidebar,Then The following <b>Three</b> links will drop-down and then click on the
                                    link tha you want to View.
                                    <ul>
                                        <li><b>Employee profile</b> List of Employee's Will be displayed on the table if
                                            the company has an Employee. There is Three different button on each
                                            Employee row,<b>Edit, Info and User Account Management</b>. Click on
                                            those button if you want
                                            <ul>
                                                <li><b><i>Edit</i></b>:-
                                                    Edit Employee Profile filed and click on <b>save changes</b> button
                                                    to
                                                    save the changes and click on <b>Back button to go back</b>
                                                </li>
                                                <li><b><i>Info</i></b>:-
                                                    Detail Information of the Employee is displayed on the Modal
                                                    including his profile Picture.
                                                </li>
                                                <li><b>User Account</b>:-
                                                    Two types of Button are toggled each other
                                                    <ol>
                                                        <li><b>Activate</b>:-click on it if you want to Activate user
                                                            Account.
                                                        </li>
                                                        <li><b>Deactivate</b>:- clcik on it if you want to Deactivate
                                                            user account
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><b>Vehicle Profile</b>:-List of Vehicle Will be displayed if there is
                                            vehicle registered to the system. Here alo different button will be
                                            displayed in each row of the vehicle .
                                            <b>Info</b>:- you can see the detail information of the vehicle and then
                                            click close button to close the modal.
                                        </li>
                                        <li><b>Driver Profile</b>:-
                                            List of Driver Will be displayed if there is
                                            Driver registered to the system. Here alo different button will be
                                            displayed in each row of the Driver.
                                            <b>Info</b>:- you can see the detail information of the Driver and then
                                            click close button to close the modal.
                                            <b>User Account </b>:- Activate or Deactivate Driver account.
                                        </li>
                                    </ul>
                                </li>
                                <li>To Generate Report, Click on the <b>Generate Report</b> link from the side bar. Then
                                    you can Generate your report that you want to generate about.Example Generate report
                                    about accident occured daily ,weekly, monthly and annually, Generate report about
                                    punishment.
                                </li>
                                <li>to Post or Read Forums discussion , you can click on <b>Forum discussion</b> from
                                    the side bar and read or Write your ideas from or on the forum.
                                </li>
                                <li>Click on the <b>Read Log File</b> link from the
                                    side bar to view what has been done by whom.
                                </li>
                                <li>Click on the <b>Notification</b> icon from the Nav bar menu to view the request send
                                    from the employee, you can delete thos notification by click on the delete link.
                                </li>
                                <li>By clicking on <b>your profile or user name</b> from the Nav bar menu, you can see
                                    your profile,change password and logout from the system.
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
<script type="application/javascript">
    $(document).ready(function (e) {
        e.preventDefault();
        $('#amharicVersion').click(function () {
            $('#page-content-wrapper').load("amharicVersion.php");
        });
        $('#generateReport').click(function (e) {
            e.preventDefault();
            $('#page-content-wrapper').load('generateReport.php');
        });
    });
</script>