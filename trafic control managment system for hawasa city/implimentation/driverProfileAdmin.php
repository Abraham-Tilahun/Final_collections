<link rel="stylesheet" href="css/jquery-ui-datepicker.min.css">
<link rel="stylesheet" href="css/jquery.dataTables.css">
<link rel="stylesheet" href="css/sweetalert.css">
<style>
    #drTable th {
        font-size: 12px;
    }
    .navbar-edit {
        height: 20px !important;
        margin-top: -20px;
        margin-left: -15px;
        margin-right: -14px;
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
        var status=$('#'+id).text();
        var message="";
        var stat="";
        if(status.trim()=="deactive"){
            message="Do you want to Deactivate this user account ?";
            stat="Deactivate"
        }else if (status.trim()=="active"){
            message="Do you want to activate this user account ? ";
            stat="Activate";
        }
        swal({
                title:  message,
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, "+stat +" it !",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    var datastring="id="+id+"&status="+status.trim()+"&driver="+"driver";
                    $.ajax({
                        type: "POST",
                        url: 'userAccount.php',
                        data: datastring,
                        cache: false,
                        success: function (result) {
                            swal(stat+"d!", result,"success");
                            $('#'+id).text()
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
    $('#search').keyup(function () {
        var searchValue = $('#search').val();
        if (searchValue.trim().length > 0) {
            $.ajax({
                type: "POST",
                url: "searchDriverMysql.php",
                data: "search=" + searchValue,
                cache: false,
                success: function (data) {
                    if (data.trim() == "1") {
                        $('#empTable').hide();
                        $('#notFound').html("No Such Driver Found");
                    }
                    else {
                        $('#notFound').html("");
                        $('#empTable').show();
                        $('#tablBody').html(data);
                    }
                }
            });
        }
        else {
            //if the search field is empty something goes here;
            $('#notFound').html("");
            $('#empTable').show();

        }
    });
</script>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-bordered" id="drTable" style="text-align: center;">
                <thead>
                <tr>
                    <th>License Number</th>
                    <th>Full Name</th>
                    <th>Region</th>
                    <th>Level</th>
                    <th>phone Number</th>
                    <th>Detail Information</th>
                    <th>User Account</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once('include/db.php');
                // tBody($db);//sending the object that connect to the database
                $sql = "SELECT * FROM driver ORDER BY lnumber;";
                $result = mysqli_query($db, $sql);
                if (!$result) {
                    die("Wrong query");
                }
                $count = mysqli_num_rows($result);
                if ($count > 0) {
                    while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
                        $driver_id = $row['lnumber'];
                        $queryStatus = "SELECT status FROM driver_user_list where user_name='$driver_id';";
                        $statusResult = mysqli_query($db, $queryStatus);
                        $rowResult = mysqli_fetch_array($statusResult, MYSQL_BOTH);
                        ?>
                        <tr>
                            <td><?= $row['lnumber'] ?></td>
                            <td><?= ucwords($row['fname']) . " " . ucwords($row['lname']) ?></td>
                            <td><?= $row['region'] ?></td>
                            <td><?= $row['level'] ?></td>
                            <td><?= $row['pnum'] ?></td>
                            <td>
                                <a href="#driverinfo<?= $row['lnumber']; ?>" data-toggle="modal"
                                   class="btn btn-info "><i class="fa fa-folder"></i> Info </a>
                            </td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-danger" onclick="manageAccount('<?= $row['lnumber'];?>');"
                                   id="<?= $row['lnumber']; ?>"><i class="fa fa-toggle-on"></i>
                                    <?php
                                    if ($rowResult['status'] == "active") {
                                        echo "deactive";
                                    } elseif ($rowResult['status'] == "deactive") {
                                        echo '&nbsp;' . "active" . '&nbsp;';
                                    }
                                    ?>
                                </a>
                            </td>
                        </tr>
                        <div id="driverinfo<?= $row['lnumber']; ?>" class="modal  fade modalInfo" tabindex="-1"
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
                                                        Driver Detail Information</a>
                                                </div><!-- /.navbar-collapse -->
                                            </div><!-- /.container-fluid -->
                                        </nav>
                                        <!--Edit Employee Record-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="DrImage/<?=$row['photo'];?>" class="img-rounded " height="450"
                                                     width="400" alt="">

                                            </div>
                                            <div class="col-md-6" id="customInfo">
                                                <div class="col-md-7">
                                                    <h4>License Number</h4>
                                                    <h4>First Name</h4>
                                                    <h4>Last Name</h4>
                                                    <h4>Sex</h4>
                                                    <h4>Region</h4>
                                                    <h4>BirthDay</h4>
                                                    <h4>Level</h4>
                                                    <h4>woreda</h4>
                                                    <h4>Kebele</h4>
                                                    <h4>House Number</h4>
                                                    <h4>Phone Number</h4>
                                                    <h4>Place</h4>
                                                    <h4>Hired Date</h4>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>:&nbsp;<?= $row['lnumber']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['fname']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['lname']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['sex']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['region']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['bday']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['level']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['woreda']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['kebele']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['hnum']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['pnum']; ?></h4>
                                                    <h4>:&nbsp;<?= $row['place']; ?></h4>
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
        $('#drTable').dataTable({
            "bJQueryUI": true
        });
    });
</script>

