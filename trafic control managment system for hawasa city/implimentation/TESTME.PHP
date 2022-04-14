<form action="#" class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="panel panel-default custom" style="margin-left: 30px; margin-right: 30px !important;">
        <div class="panel-body">
            <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-10">
                <fieldset>
                    <legend style="text-align: center">መንጃ ፈቃድ ምዝገባ</legend>
                    <div class="form-group">
                        <label for="first_name" class="control-label col-xs-4 hidden-xs">Name<i
                                class="required-field">*</i></label>

                        <div class="col-xs-4">
                            <input type="text" class="form-control" id="first_name"
                                   placeholder="first name" required>
                        </div>

                        <div class="col-xs-4">
                            <input type="text" class="form-control" id="last_name"
                                   placeholder="last name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-4 hidden-xs">Sex <i
                                class="required-field">*</i></label>

                        <div class="col-xs-8">
                            <label class="radio-inline"><input id="male" type="radio" name="optradio"
                                                               value="male">Male</label>
                            <label class="radio-inline"><input id="female" type="radio"
                                                               name="optradio"
                                                               value="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="region" class="control-label col-xs-4">Region</label>

                        <div class="col-xs-8">
                            <select name="region" id="region" class="form-control">
                                <option value="AA">Addis Ababa</option>
                                <option value="Afar">Afar Region</option>
                                <option value="Amhara">Amhara Region</option>
                                <option value="Benishangul-Gumuz">Benishangul-Gumuz Region</option>
                                <option value="Diredawa">Dire Dawa</option>
                                <option value="Harari">Harari Region</option>
                                <option value="oromiya">Oromiya Region</option>
                                <option value="Somali">Somali Region</option>
                                <option value="SSNP" selected>Southern Nations, Nationalities, and Peoples
                                    Region
                                </option>
                                <option value="Tigray">Tigray Region</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birth_date" class="control-label col-xs-4 hidden-xs">Birthday <i
                                class="required-field">*</i></label>

                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="birth_date" required="required"
                                   placeholder="Clicke Here"
                                   readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="license_number" class="control-label col-xs-4 hidden-xs">Driver License
                            Number
                            <i class="required-field">*</i></label>

                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="license_number" required="required"
                                   placeholder="Driver License number">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="level" class="control-label col-xs-4 hidden-xs">
                            Level<i class="required-field">*</i>
                        </label>

                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="level" placeholder="Level" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="woreda" class="control-label col-xs-4 hidden-xs">Address <i
                                class="optional-field">*</i></label>

                        <div class="col-xs-4">
                            <input type="text" class="form-control" id="woreda" placeholder="woreda">
                        </div>
                        <div class="col-xs-4">
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
                            <input type="text" class="form-control" id="phone_num"
                                   value="+251">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="place" class="control-label col-xs-4 hidden-xs">የተሰጠበት ቦታ <i
                                class="required-field">*</i></label>

                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="place"
                                   placeholder="የተሰጠበት ቦታ" value="Hawassa">
                        </div>
                    </div>
                </fieldset>
            </div>


        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-xs-offset-5">
                    <button type="submit" id="registerDriver" class="btn btn-primary col-xs-3">Register

                    </button>
                    <button id="canceltDriver" type="reset"
                            class="btn btn-success col-xs-offset-1 col-xs-3">
                        Cancel
                    </button>
                </div>

            </div>
        </div>
    </div>
</form>

<script>
    function validateForm() {
        alert("hello")
        var handler = true;
        var fname = $('#first_name').val();
        var lname = $('#last_name').val();
        var bday = $('#birth_date').val();
        var lnumber = $('#license_number').val();
        var level = $('#level').val();
        var woreda = $('#woreda').val();
        var kebele = $('#kebele').val();
        var hnum = $('#house_num').val();
        var pnum = $('#phone_num').val();
        var place = $('#place').val();
        /*Regular expression to validate forms*/
        var reglnum = /^[a-zA-Z]+[0-9]+$/;
        var reglevel = /^[a-zA-Z]+[0-9]+$/;
        var regname = /^[a-zA-Z]+$/;
        var reghnum = /^[a-zA-Z0-9]+$/;
        var regpnum = /^[+][2][5][1][9][1-9][0-9]{7}$/;
        var regplace = /^[a-zA-Z]+$/;
        if (fname.trim().length == 0 || fname.trim().length > 32 || !(regname.test(fname))) {
            handler = false;
            $('#first_name').focus();
            alert("first name error");
            return handler;
        }
        if (lname.trim().length == 0 || lname.trim().length > 32 || !(regname.test(lname))) {
            handler = false;
            $('#last_name').focus();
            alert("last name error");
            return handler;
        }
        /*for Driver  sex*/
        if (!$("input[name='optradio']").is(":checked")) {
            handler = false;
            alert("sex error");
            return handler;
        }
        /*for Driver  Region*/
        if ($("#region option:selected").length == 0) {
            handler = false;
            $('#region').focus();
            alert("region error");
            return handler;
        }
        if (bday.trim().length == 0) {
            handler = false;
            $('#birth_date').val("please click here and pick birth date");
            $('#birth_date').css("color", "#F00");
            return handler;
        }
        if (lnumber.trim().length == 0 || !reglnum.test(lnumber) || lnumber.trim().length > 32) {
            handler = false;
            $('#license_number').focus();
            alert("license number error");
            return handler;
        }
        if (level.trim().length == 0 || !(reglevel.test(level)) || level.trim().length > 16) {
            handler = false;
            $('#level').focus();
            alert("level error");
            return handler;
        }
        if (woreda.trim().length > 0) {
            if (woreda.trim().length > 32) {
                handler = false;
                $('#woreda').focus();
                alert("woreda error");
                return handler;
            }
        }
        if (kebele.trim().length > 0) {
            if (kebele.trim().length > 32) {
                handler = false;
                $('#kebele').focus();
                alert("kebele error")
                return handler;
            }
        }
        if (hnum.trim().length > 0) {
            if (!reghnum.test(hnum) || hnum.trim().length > 32) {
                handler = false;
                $('#house_num').focus();
                alert("house number error")
                return handler;
            }
        }
        if (pnum.trim().length == 0 || pnum.trim().length !== 13 || !(regpnum.test(pnum))) {
            handler = false;
            $('#phone_num').focus();
            alert("error phone number");
            return handler;
        }
        if ($("#place").length == 0) {
            handler = false;
            $('#place').focus();
            return handler;
        }
        return handler;
    }

    function registerDriver() {
        $('#registerDriver').click(function (event) {
            event.preventDefault();
            alert("me");
            if (validateForm()) {
                var fname = $('#first_name').val();
                var lname = $('#last_name').val();
                var bday = $('#birth_date').val();
                var lnumber = $('#license_number').val();
                var level = $('#level').val();
                var woreda = $('#woreda').val();
                var kebele = $('#kebele').val();
                var hnum = $('#house_num').val();
                var pnum = $('#phone_num').val();
                var place = $('#place').val();
                if ($("#region option:selected").length > 0) {
                    var region = $('#region').val();

                }
                if ($("input[name='optradio']").is(":checked")) {
                    var sex = $("input[name='optradio']:checked").val();
                }
                var datastring = '&fname=' + fname +
                    '&lname=' + lname +
                    '&bday=' + bday +
                    '&woreda=' + woreda +
                    '&kebele=' + kebele +
                    '&hnum=' + hnum +
                    '&pnum=' + pnum +
                    '&sex=' + sex +
                    '&region=' + region +
                    '&level=' + level +
                    '&lnumber=' + lnumber +
                    '&place=' + place;
                alert(datastring);
                var hell = JSON.stringify(datastring);
                $.ajax({
                    type: "POST",
                    url: 'regDrivMysql.php',
                    data: "data=" + datastring,
                    cache: false,
                    success: function (data) {
                        alert(data);
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        alert(textStatus + " " + errorThrown);
                    }
                });
            }
        });
    }
    $(document).ready(function () {
        //registerDriver();

    });

</script>