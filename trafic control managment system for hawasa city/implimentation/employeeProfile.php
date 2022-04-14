<link rel="stylesheet" href="css/jquery-ui-datepicker.min.css">
<link rel="stylesheet" href="css/jquery.dataTables.css">
<link rel="stylesheet" href="css/sweetalert.css">
<style>
    .navbar-edit {
        height: 20px !important;
        margin-top: -20px;
        margin-left: -15px;
        margin-right: -14px;
    }

    #empTable th {
        font-size: 12px;
    }

    #customInfo h4 {
        color: #000;
        font-size: 16px;
        font-weight: normal;
        font-family: Serif;
    }
</style>
<script>
    function manageAccount(id) {
        var status = $('#' + id).text();
        var message = "";
        var result="";
        var stat = "";
        if (status.trim() == "deactivate") {
            message = "Do you want to Deactivate this user account ?";
            stat = "Deactivate";
            result="deactive";
        } else if (status.trim() == "activate") {
            message = "Do you want to activate this user account ? ";
            stat = "Activate";
            result="active";
        }
        swal({
                title: message,
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, " + stat + " it !",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    var datastring = "id=" + id + "&status=" + result+ "&employee=" + "employee";
                    $.ajax({
                        type: "POST",
                        url: 'userAccount.php',
                        data: datastring,
                        cache: false,
                        success: function (result) {
                            swal(stat + "d!", result, "success");
                            $('#' + id).text()
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            alert(textStatus + " " + errorThrown);
                        }
                    });
                } else {
                    swal("Cancelled", "Sure Nothing is done to this user Account !", "error");
                }
            });
    }
</script>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-bordered" style="text-align: center;" id="empTable">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Full Name</th>
                        <th>Educational Status</th>
                        <th>Role</th>
                        <th>phone Number</th>
                        <th style="width: 140px">Detail Information</th>
                        <th>User Account</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include_once('include/db.php');
                // tBody($db);//sending the object that connect to the database
                $sql = "SELECT * FROM employee ORDER BY emp_id;";
                $result = mysqli_query($db, $sql);
                if (!$result) {
                    die("something happen to the database");
                }
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
                        $user_id = $row['emp_id'];
                        $queryStatus = "SELECT status FROM emp_user_list where emp_id='$user_id';";
                        $statusResult = mysqli_query($db, $queryStatus);
                        $rowResult = mysqli_fetch_array($statusResult, MYSQL_BOTH);
                        ?>
                        <tr>
                            <td><?= $row['emp_id'] ?></td>
                            <td><?= ucwords($row['fname']) . " " . ucwords($row['lname']); ?></td>
                            <td><?= $row['edu_status'] ?></td>
                            <td><?= $row['role'] ?></td>
                            <td><?= $row['pnum'] ?></td>
                            <td>
                                <a href="editEmployeeprofile.php<?php echo "?id=" . $row['emp_id']; ?>"
                                   class="btn btn-default edit"><i class="fa fa-edit"></i> Edit</a>
                                <a href="#empinfo<?= $row['emp_id']; ?>" data-toggle="modal"
                                   class="btn btn-info "><i class="fa fa-folder"></i> Info </a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-danger"
                                   onclick="manageAccount('<?= $row['emp_id']; ?>');"
                                   id="<?= $row['emp_id']; ?>"><i class="fa fa-toggle-on"></i>
                                    <?php
                                    if ($rowResult['status'] == "active") {
                                        echo "deactivate";
                                    } elseif ($rowResult['status'] == "deactive") {
                                        echo '&nbsp;' . "activate" . '&nbsp;';
                                    }
                                    ?>
                                </a>
                            </td>
                        </tr>
                        <div id="empinfo<?= $row['emp_id']; ?>" class="modal  fade modalInfo" tabindex="-1"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content" style="background-color: #eee">
                                    <div class="modal-body">
                                        <nav class="navbar navbar-default navbar-edit">
                                            <div class="container-fluid">
                                                <!-- Brand and toggle get grouped for better mobile display -->
                                                <div class="navbar-header">
                                                    <a class="navbar-brand" href="#"><i class="fa fa-home"
                                                                                        style="color: GREEN"></i>
                                                        Employee Detail Information</a>
                                                </div><!-- /.navbar-collapse -->
                                            </div><!-- /.container-fluid -->
                                        </nav>
                                        <!--Edit Employee Record-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="EmpImage/<?=$row['photo'];?>" class="img-rounded " height="450"
                                                     width="400" alt="">
                                            </div>
                                            <div class="col-md-6" id="customInfo">
                                                <div class="col-md-7">
                                                    <h4>Employee ID</h4>
                                                    <h4>First Name</h4>
                                                    <h4>Last Name</h4>
                                                    <h4>Sex</h4>
                                                    <h4>Role</h4>
                                                    <h4>BirthDay</h4>
                                                    <h4>woreda</h4>
                                                    <h4>Kebele</h4>
                                                    <h4>House Number</h4>
                                                    <h4>Phone Number</h4>
                                                    <h4>Educational Status</h4>
                                                    <h4>Hired Date</h4>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>:&nbsp;<?= $row['emp_id']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['fname']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['lname']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['sex']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['role']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['bday']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['woreda']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['kebele']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['hnum']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['pnum']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['edu_status']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['hdate']; ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-right"
                                                data-dismiss="modal">Close
                                        </button>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal -->
                        </div>
                    <?php } //end of while loop
                } else { ?>
                    <tr>
                        <td colspan="7">No Records Found</td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="js/sweetalert.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#empTable').dataTable({
            "bJQueryUI": true
        });
    })
</script>

