<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="nav nav-tabs nav-tabs-justified">
                <li class="active"><a href="#accident-report" data-toggle="tab">Accident Report</a></li>
                <li><a href="#punishment-report" data-toggle="tab">Punishment Report</a></li>
                <li><a href="#driver-report" data-toggle="tab">Driver Report</a></li>
                <li><a href="#vehicle-report" data-toggle="tab">Vehicle Report</a></li>

            </ul>
            <div class="container-fluid" style="padding-top: 20px;">
                <section class="tab-content">
                    <div class="tab-pane fade active in" id="accident-report">
                        <div class="col-md-offset-2">
                            <h4>Choose You Report Type</h4>
                        </div>
                        <div class="panel-group" id="accident">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accident"
                                           href="#daily-report">
                                            Daily Report <span class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="daily-report" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-offset-1 col-md-8">
                                                <form role="form" method="post">
                                                    <div class="form-group">
                                                        <label for="from-date"><h5>Pick a date you want to
                                                                Generate Report</h5></label>

                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control"
                                                                       id="from-date" name="reportDate"
                                                                       placeholder="Choose date"
                                                                       readonly required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <button type="submit" name="submit"
                                                                        value="submit" class="btn btn-success">Generate
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <?php
                                                $data = "";
                                                if (isset($_REQUEST['submit'])) {
                                                    $reportDate = $_POST['reportDate'];
                                                    $sqlAccident = "SELECT * FROM accident WHERE Date='$reportDate';";
                                                    $resAccident = mysqli_query($db, $sqlAccident);
                                                    if (!$resAccident) {
                                                        die("something wrong");
                                                    }
                                                    $countAccident = mysqli_num_rows($resAccident);
                                                    if ($countAccident <= 0) {
                                                        echo '<div class="jumbtron">There is No Accident Registered on this Day ' . $reportDate . '</div>';
                                                    } else { //
                                                        $data = '<table class="table table-bordered table-responsive">
                                                           <tr style="background-color: #2a2a2a; color:#FFF;">
                                                                <th>License Number</th>
                                                                <th>Plate Number</th>
                                                                <th>Date</th>
                                                                <th>Place</th>
                                                                <th>Accident Type</th>
                                                                <th>Dead Person</th>
                                                                <th>Cause</th>
                                                                <th>Traffic Police ID</th>
                                                            </tr>';
                                                        while ($rowAccident = mysqli_fetch_array($resAccident, MYSQLI_BOTH)) {
                                                            $data .= ' <tr>
                                                                 <td>' . $rowAccident['License_NO'] . '</td>' .
                                                                '<td>' . $rowAccident['Plate_NO'] . '</td>' .
                                                                '<td>' . $rowAccident['Date'] . '</td>' .
                                                                '<td>' . $rowAccident['Place'] . '</td>' .
                                                                '<td>' . $rowAccident['acc_type'] . '</td>' .
                                                                '<td>' . $rowAccident['Dead_Person'] . '</td>' .
                                                                '<td>' . $rowAccident['Cause'] . '</td>' .
                                                                '<td>' . $rowAccident['TP_ID'] . '</td>' .
                                                                '</tr>';
                                                        }
                                                        $data .= '</table>';
                                                        echo $data;
                                                        ?>
                                                    <?php }
                                                } else {
                                                    $date = date("Y-m-d");
                                                    $date = "";
                                                    $sqlAccident = "SELECT * FROM accident WHERE Date='$date';";
                                                    $resAccident = mysqli_query($db, $sqlAccident);
                                                    if (!$resAccident) {
                                                        die("something wrong");
                                                    }
                                                    $countAccident = mysqli_num_rows($resAccident);
                                                    if ($countAccident <= 0) {
                                                        echo '<div class="jumbtron">There is No Accident Happen on this Day' . $date . '</div>';
                                                    } else {
                                                        $data = '<table class="table table-bordered table-responsive">
                                                           <tr style="background-color: #2a2a2a; color:#FFF;">
                                                                <th>License Number</th>
                                                                <th>Plate Number</th>
                                                                <th>Date</th>
                                                                <th>Place</th>
                                                                <th>Accident Type</th>
                                                                <th>Dead Person</th>
                                                                <th>Cause</th>
                                                                <th>Traffic Police ID</th>
                                                            </tr>';
                                                        while ($rowAccident = mysqli_fetch_array($resAccident, MYSQLI_BOTH)) {
                                                            $data .= ' <tr>
                                                                    <td>' . $rowAccident['License_NO'] . '</td>' .
                                                                '<td>' . $rowAccident['Plate_NO'] . '</td>' .
                                                                '<td>' . $rowAccident['Date'] . '</td>' .
                                                                '<td>' . $rowAccident['Place'] . '</td>' .
                                                                '<td>' . $rowAccident['acc_type'] . '</td>' .
                                                                '<td>' . $rowAccident['Dead_Person'] . '</td>' .
                                                                '<td>' . $rowAccident['Cause'] . '</td>' .
                                                                '<td>' . $rowAccident['TP_ID'] . '</td>' .
                                                                '</tr>';
                                                        }
                                                        $data .= '</table>';
                                                        echo $data;

                                                    }
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accident"
                                           href="#weekly-report">
                                            Weekly Report <span class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="weekly-report" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php
                                            $date = date('Y-m-j');
                                            $newdate = strtotime('-7 day', strtotime($date));
                                            $newdate = date('Y-m-j', $newdate);
                                            $sqlAccident = "SELECT * FROM accident WHERE Date >='$newdate';";
                                            $resAccident = mysqli_query($db, $sqlAccident);
                                            if (!$resAccident)
                                                die("something wrong");
                                            $countAccident = mysqli_num_rows($resAccident);
                                            if ($countAccident < 1) {
                                                echo '<div>There is No Registered Accident This month</div>';
                                            } else { ?>
                                                <table class="table table-bordered table-responsive"
                                                       style="text-align: center">
                                                    <tr style="background-color: #2a2a2a; color:#FFF;">
                                                        <th>Driver License Number</th>
                                                        <th>Vehicle Plate Number</th>
                                                        <th>Date</th>
                                                        <th>Place</th>
                                                        <th>Accident Type</th>
                                                        <th>Dead Person</th>
                                                        <th>Cause</th>
                                                        <th>Accident Registered By</th>
                                                    </tr>
                                                    <?php while ($rowAccident = mysqli_fetch_array($resAccident, MYSQLI_BOTH)) { ?>
                                                        <tr>
                                                            <td><?= $rowAccident['License_NO']; ?></td>
                                                            <td><?= $rowAccident['Plate_NO']; ?></td>
                                                            <td><?= $rowAccident['Date']; ?></td>
                                                            <td><?= $rowAccident['Place']; ?></td>
                                                            <td><?= $rowAccident['acc_type']; ?></td>
                                                            <td><?= $rowAccident['Dead_Person']; ?></td>
                                                            <td><?= $rowAccident['Cause']; ?></td>
                                                            <td><?= $rowAccident['TP_ID']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accident"
                                           href="#monthly-report"> Monthly Report <span
                                                class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="monthly-report" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php
                                            $date = date('Y-m-j');
                                            $newdate = strtotime('-1 month', strtotime($date));
                                            $newdate = date('Y-m-j', $newdate);
                                            $sqlAccident = "SELECT * FROM accident WHERE Date >='$newdate';";
                                            $resAccident = mysqli_query($db, $sqlAccident);
                                            if (!$resAccident)
                                                die("something wrong");
                                            $countAccident = mysqli_num_rows($resAccident);
                                            if ($countAccident < 1) {
                                                echo '<div>There is No Registered Accident This month</div>';
                                            } else { ?>
                                                <table class="table table-bordered table-responsive"
                                                       style="text-align: center">
                                                    <tr style="background-color: #2a2a2a; color:#FFF;">
                                                        <th>Driver License Number</th>
                                                        <th>Vehicle Plate Number</th>
                                                        <th>Date</th>
                                                        <th>Place</th>
                                                        <th>Accident Type</th>
                                                        <th>Dead Person</th>
                                                        <th>Cause</th>
                                                        <th>Accident Registered By</th>
                                                    </tr>
                                                    <?php while ($rowAccident = mysqli_fetch_array($resAccident, MYSQLI_BOTH)) { ?>
                                                        <tr>
                                                            <td><?= $rowAccident['License_NO']; ?></td>
                                                            <td><?= $rowAccident['Plate_NO']; ?></td>
                                                            <td><?= $rowAccident['Date']; ?></td>
                                                            <td><?= $rowAccident['Place']; ?></td>
                                                            <td><?= $rowAccident['acc_type']; ?></td>
                                                            <td><?= $rowAccident['Dead_Person']; ?></td>
                                                            <td><?= $rowAccident['Cause']; ?></td>
                                                            <td><?= $rowAccident['TP_ID']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accident"
                                           href="#anual-report"> Annual Report <span
                                                class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="anual-report" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php
                                            $date = date('Y-m-j');
                                            $newdate = strtotime('-1 year', strtotime($date));
                                            $newdate = date('Y-m-j', $newdate);
                                            $sqlAccident = "SELECT * FROM accident WHERE Date >='$newdate';";
                                            $resAccident = mysqli_query($db, $sqlAccident);
                                            if (!$resAccident)
                                                die("something wrong");
                                            $countAccident = mysqli_num_rows($resAccident);
                                            if ($countAccident < 1) {
                                                echo '<div>There is No Registered Accident This month</div>';
                                            } else { ?>
                                                <table class="table table-bordered table-responsive"
                                                       style="text-align: center">
                                                    <tr style="background-color: #2a2a2a; color:#FFF;">
                                                        <th>Driver License Number</th>
                                                        <th>Vehicle Plate Number</th>
                                                        <th>Date</th>
                                                        <th>Place</th>
                                                        <th>Accident Type</th>
                                                        <th>Dead Person</th>
                                                        <th>Cause</th>
                                                        <th>Accident Registered By</th>
                                                    </tr>
                                                    <?php while ($rowAccident = mysqli_fetch_array($resAccident, MYSQLI_BOTH)) { ?>
                                                        <tr>
                                                            <td><?= $rowAccident['License_NO']; ?></td>
                                                            <td><?= $rowAccident['Plate_NO']; ?></td>
                                                            <td><?= $rowAccident['Date']; ?></td>
                                                            <td><?= $rowAccident['Place']; ?></td>
                                                            <td><?= $rowAccident['acc_type']; ?></td>
                                                            <td><?= $rowAccident['Dead_Person']; ?></td>
                                                            <td><?= $rowAccident['Cause']; ?></td>
                                                            <td><?= $rowAccident['TP_ID']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!--accident report-->
                    <div class="tab-pane fade" id="punishment-report">
                        <h2>Punishment report goes here</h2>

                        <div class="panel-group" id="punishment">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#punishment"
                                           href="#weekly-punishment"> Weekly Punishment Report <span
                                                class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="weekly-punishment" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php
                                            $date = date('Y-m-j');
                                            $newdate = strtotime('-7 month', strtotime($date));
                                            $newdate = date('Y-m-j', $newdate);
                                            $sqlPunishment = "SELECT * FROM punishment WHERE Date >='$newdate';";
                                            $resPunishment = mysqli_query($db, $sqlPunishment);
                                            if (!$resPunishment)
                                                die("something wrong");
                                            $countPunishment = mysqli_num_rows($resPunishment);
                                            if ($countPunishment < 1) {
                                                echo '<div>There is No Registered Punishment This Month</div>';
                                            } else { ?>
                                                <table class="table table-bordered table-responsive"
                                                       style="text-align: center">
                                                    <tr style="background-color: #2a2a2a;color: white;font-size: 13px;">
                                                        <th> License Number</th>
                                                        <th> Plate Number</th>
                                                        <th>Date-To</th>
                                                        <th>Place</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Reason</th>
                                                        <th>Receipt Number</th>
                                                        <th>Amount</th>
                                                        <th>Payment Status</th>
                                                        <th>Punish By</th>
                                                    </tr>
                                                    <?php while ($rowPunishment = mysqli_fetch_array($resPunishment, MYSQLI_BOTH)) { ?>
                                                        <tr>
                                                            <td><?= $rowPunishment['License_NO']; ?></td>
                                                            <td><?= $rowPunishment['V_Plate_NO']; ?></td>
                                                            <td><?= $rowPunishment['Fromp'] . "-" . $rowPunishment['Top']; ?></td>
                                                            <td><?= $rowPunishment['Place']; ?></td>
                                                            <td><?= $rowPunishment['Date']; ?></td>
                                                            <td><?= $rowPunishment['Time']; ?></td>
                                                            <td><?= $rowPunishment['Reason']; ?></td>
                                                            <td><?= $rowPunishment['Receipt_NO']; ?></td>
                                                            <td><?= $rowPunishment['Amount']; ?></td>
                                                            <td><?= $rowPunishment['paymentStatus']; ?></td>
                                                            <td><?= $rowPunishment['Tp_ID']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            <?php } ?>
                                        </div>
                                        <div class="row"><a href="#"
                                                            class="btn btn-primary pull-right">Print</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#punishment"
                                           href="#monthly-punishment"> Monthly Punishment Report <span
                                                class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="monthly-punishment" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php
                                            $date = date('Y-m-j');
                                            $newdate = strtotime('-1 month', strtotime($date));
                                            $newdate = date('Y-m-j', $newdate);
                                            $sqlPunishment = "SELECT * FROM punishment WHERE Date >='$newdate';";
                                            $resPunishment = mysqli_query($db, $sqlPunishment);
                                            if (!$resPunishment)
                                                die("something wrong");
                                            $countPunishment = mysqli_num_rows($resPunishment);
                                            if ($countPunishment < 1) {
                                                echo '<div>There is No Registered Punishment This Month</div>';
                                            } else { ?>
                                                <table class="table table-bordered table-responsive"
                                                       style="text-align: center">
                                                    <tr style="background-color: #2a2a2a;color: #FFF;">
                                                        <th> License Number</th>
                                                        <th> Plate Number</th>
                                                        <th>Date-To</th>
                                                        <th>Place</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Reason</th>
                                                        <th>Receipt Number</th>
                                                        <th>Amount</th>
                                                        <th>Payment Status</th>
                                                        <th>Punish By</th>
                                                    </tr>
                                                    <?php while ($rowPunishment = mysqli_fetch_array($resPunishment, MYSQLI_BOTH)) { ?>
                                                        <tr>
                                                            <td><?= $rowPunishment['License_NO']; ?></td>
                                                            <td><?= $rowPunishment['V_Plate_NO']; ?></td>
                                                            <td><?= $rowPunishment['Fromp'] . "-" . $rowPunishment['Top']; ?></td>
                                                            <td><?= $rowPunishment['Place']; ?></td>
                                                            <td><?= $rowPunishment['Date']; ?></td>
                                                            <td><?= $rowPunishment['Time']; ?></td>
                                                            <td><?= $rowPunishment['Reason']; ?></td>
                                                            <td><?= $rowPunishment['Receipt_NO']; ?></td>
                                                            <td><?= $rowPunishment['Amount']; ?></td>
                                                            <td><?= $rowPunishment['paymentStatus']; ?></td>
                                                            <td><?= $rowPunishment['Tp_ID']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--Punishment Report -->
                    <div class="tab-pane fade" id="driver-report">
                        <h4>Generate your Report about Driver </h4>
                        <hr>
                        <div class="panel-group" id="driver">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#driver"
                                           href="#monthly-registered"> Driver Registered in This Month <span
                                                class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="monthly-registered" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php
                                            $date = date('Y-m-j');
                                            $newdate = strtotime('-1 month', strtotime($date));
                                            $newdate = date('Y-m-j', $newdate);
                                            $sqlDriver = "SELECT * FROM driver WHERE hdate >='$newdate';";
                                            $resDriver = mysqli_query($db, $sqlDriver);
                                            if (!$resDriver)
                                                die("something wrong");
                                            $countDriver = mysqli_num_rows($resDriver);
                                            if ($countDriver < 1) {
                                                echo '<div class="jumbotron">There is No Driver Registered  This Month</div>';
                                            } else { ?>
                                                <table class="table table-bordered table-responsive"
                                                       style="text-align: center">
                                                    <tr style="background-color: #2a2a2a; color:#FFF;">
                                                        <th>Full Name</th>
                                                        <th>Sex</th>
                                                        <th>Region</th>
                                                        <th>Registered date</th>
                                                        <th>License Number</th>
                                                        <th>Level</th>
                                                        <th>Contact</th>
                                                        <th>Punishment Record</th>
                                                    </tr>
                                                    <?php while ($rowDriver = mysqli_fetch_array($resDriver, MYSQLI_BOTH)) { ?>
                                                        <tr>
                                                            <td><?= $rowDriver['fname'] . " " . ucwords($rowDriver['lname']); ?></td>
                                                            <td><?= $rowDriver['sex']; ?></td>
                                                            <td><?= $rowDriver['region']; ?></td>
                                                            <td><?= $rowDriver['hdate']; ?></td>
                                                            <td><?= $rowDriver['lnumber']; ?></td>
                                                            <td><?= $rowDriver['level']; ?></td>
                                                            <td><?= $rowDriver['pnum']; ?></td>
                                                            <td><?= $rowDriver['record']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#driver"
                                           href="#annual-registered"> Driver Registered in This Year <span
                                                class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="annual-registered" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php
                                            $date = date('Y-m-j');
                                            $newdate = strtotime('-1 year', strtotime($date));
                                            $newdate = date('Y-m-j', $newdate);
                                            $sqlDriver = "SELECT * FROM driver WHERE hdate >='$newdate';";
                                            $resDriver = mysqli_query($db, $sqlDriver);
                                            if (!$resDriver)
                                                die("something wrong");
                                            $countDriver = mysqli_num_rows($resDriver);
                                            if ($countDriver < 1) {
                                                echo '<div class="jumbotron">There is No DriverRegistered  This Year</div>';
                                            } else { ?>
                                                <table class="table table-bordered table-responsive"
                                                       style="text-align: center">
                                                    <tr style="background-color: #2a2a2a; color:#FFF;">
                                                        <th>Full Name</th>
                                                        <th>Sex</th>
                                                        <th>Region</th>
                                                        <th>Registered date</th>
                                                        <th>License Number</th>
                                                        <th>Level</th>
                                                        <th>Contact</th>
                                                        <th>Punishment Record</th>
                                                    </tr>
                                                    <?php while ($rowDriver = mysqli_fetch_array($resDriver, MYSQLI_BOTH)) { ?>
                                                        <tr>
                                                            <td><?= $rowDriver['fname'] . " " . ucwords($rowDriver['lname']); ?></td>
                                                            <td><?= $rowDriver['sex']; ?></td>
                                                            <td><?= $rowDriver['region']; ?></td>
                                                            <td><?= $rowDriver['hdate']; ?></td>
                                                            <td><?= $rowDriver['lnumber']; ?></td>
                                                            <td><?= $rowDriver['level']; ?></td>
                                                            <td><?= $rowDriver['pnum']; ?></td>
                                                            <td><?= $rowDriver['record']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--Vehicle Report -->
                    <div class="tab-pane fade in" id="vehicle-report">
                        <h4>Generate your Report about Vehicle </h4>
                        <hr>
                        <div class="panel-group" id="vehicle">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#vehicle"
                                           href="#vehicle-monthly-registered"> Vehicle Registered in This Month <span
                                                class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="vehicle-monthly-registered" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php
                                            $date = date('Y-m-j');
                                            $newdate = strtotime('-1 month', strtotime($date));
                                            $newdate = date('Y-m-j', $newdate);
                                            $sqlVehicle = "SELECT * FROM vehicle WHERE hdate >='$newdate';";
                                            $resVehicle = mysqli_query($db, $sqlVehicle);
                                            if (!$resVehicle)
                                                die("Something wrong");
                                            $countVehicle = mysqli_num_rows($resVehicle);
                                            if ($countVehicle < 1) {
                                                echo '<div>There is No Registered Driver This Month</div>';
                                            } else { ?>
                                                <table class="table table-bordered table-responsive"
                                                       style="text-align: center">
                                                    <tr style="background-color: #2a2a2a; color:#FFF;">
                                                        <th>Owner Name</th>
                                                        <th>Sex</th>
                                                        <th>Region</th>
                                                        <th>Contact</th>
                                                        <th>Plate Number</th>
                                                        <th>Vehicle Type</th>
                                                        <th>Made-IN</th>
                                                        <th>Color</th>
                                                        <th>Fuel Type</th>
                                                        <th>Date</th>
                                                    </tr>
                                                    <?php while ($rowVehicle = mysqli_fetch_array($resVehicle, MYSQLI_BOTH)) { ?>
                                                        <tr>
                                                            <td><?= ucwords($rowVehicle['oname']); ?></td>
                                                            <td><?= $rowVehicle['sex']; ?></td>
                                                            <td><?= $rowVehicle['region']; ?></td>
                                                            <td><?= $rowVehicle['phone']; ?></td>
                                                            <td><?= $rowVehicle['plateNumber']; ?></td>
                                                            <td><?= $rowVehicle['vehicleType']; ?></td>
                                                            <td><?= $rowVehicle['madeIn']; ?></td>
                                                            <td><?= $rowVehicle['color']; ?></td>
                                                            <td><?= $rowVehicle['fuelType']; ?></td>
                                                            <td><?= $rowVehicle['hdate']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#vehicle"
                                           href="#annualy-registered-vehicle"> Vehicle Registered in This
                                            Year <span
                                                class="fa fa-caret-down pull-right"></span></a>
                                    </h4>
                                </div>
                                <div id="annualy-registered-vehicle" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php
                                            $date = date('Y-m-j');
                                            $newdate = strtotime('-1 year', strtotime($date));
                                            $newdate = date('Y-m-j', $newdate);
                                            $sqlVehicle = "SELECT * FROM vehicle WHERE hdate >='$newdate';";
                                            $resVehicle = mysqli_query($db, $sqlVehicle);
                                            if (!$resVehicle)
                                                die("Something wrong");
                                            $countVehicle = mysqli_num_rows($resVehicle);
                                            if ($countVehicle < 1) {
                                                echo '<div>There is No Registered Driver This Year</div>';
                                            } else { ?>
                                                <table class="table table-bordered table-responsive"
                                                       style="text-align: center">
                                                    <tr style="background-color: #2a2a2a; color:#FFF;">
                                                        <th>Owner Name</th>
                                                        <th>Sex</th>
                                                        <th>Region</th>
                                                        <th>Contact</th>
                                                        <th>Plate Number</th>
                                                        <th>Vehicle Type</th>
                                                        <th>Made-IN</th>
                                                        <th>Color</th>
                                                        <th>Fuel Type</th>
                                                        <th>Date</th>
                                                    </tr>
                                                    <?php while ($rowVehicle = mysqli_fetch_array($resVehicle, MYSQLI_BOTH)) { ?>
                                                        <tr>
                                                            <td><?= ucwords($rowVehicle['oname']); ?></td>
                                                            <td><?= $rowVehicle['sex']; ?></td>
                                                            <td><?= $rowVehicle['region']; ?></td>
                                                            <td><?= $rowVehicle['phone']; ?></td>
                                                            <td><?= $rowVehicle['plateNumber']; ?></td>
                                                            <td><?= $rowVehicle['vehicleType']; ?></td>
                                                            <td><?= $rowVehicle['madeIn']; ?></td>
                                                            <td><?= $rowVehicle['color']; ?></td>
                                                            <td><?= $rowVehicle['fuelType']; ?></td>
                                                            <td><?= $rowVehicle['hdate']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!--Vehicle Report -->
                </section>
            </div>
        </div>
    </div>
</div>