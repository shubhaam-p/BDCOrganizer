<?php
session_start();
include 'connection.php';

$_SESSION['organizer_name'] = $_POST['fname'];
$_SESSION['organizer_password'] = $_POST['fpass'];
$_SESSION['organizer_cn'] = $_POST['fphone'];
$_SESSION['organizer_em'] = $_POST['fem'];
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Form of camp details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php include 'headerlinks.php'; ?>
</head>
<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php include 'index-topheader.php'; ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- <?php include 'sideheader.php'; ?> -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card" style="padding:1em;width:80%">
                                                    <div class="card-header">
                                                        <h4>Campaign Details
                                                        </h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="Event-data-success.php" method="post" onsubmit="return validateForm()" name="oform">
                                                            <div class="form-group row" id="cname">
                                                                <label class="col-sm-2 col-form-label">Enter Campaign Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Campaign Name" name="cpname" required >
                                                                    <b><span class="formerror"> </span></b>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control" placeholder="Campaign Date" name="camp_date" required min="<?php echo date("Y-m-d"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" id="camp-time-id">
                                                                <label class="col-sm-2 col-form-label">Enter Time</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="10 AM to 3 PM" name="camp-time" required>
                                                                    <b><span class="formerror"> </span></b>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row" id="vname">
                                                                <label class="col-sm-2 col-form-label">Enter Venue</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Andheri" name="vn" required>
                                                                    <b><span class="formerror" > </span></b>
                                                                </div>
                                                            </div> 
                                                    </div>
                                                </div>
                                                <div class="card" style="padding:1em;width:80%">
                                                    <div class="card-header">
                                                        <h4>Timeslots For Donors </h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row" id="FT">
                                                            <label class="col-sm-2 col-form-label">Enter First Time Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="7:30 AM to 10:30 AM" name="first_timeslot" required>
                                                                <b><span class="formerror"> </span></b>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" id="FTN">
                                                            <label class="col-sm-2 col-form-label">Enter Number For First Time Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" placeholder="Enter Max No. Of Donors Can Donate For First Slot" data-toggle="tooltip" data-original-title="These Number Of People Only Can Register For This Slot" name="first_timeslot_no" required>
                                                                <b><span class="formerror"> </span></b>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row" id="ST">
                                                            <label class="col-sm-2 col-form-label">Enter Second Time Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="10:30 AM to 12:30 AM" name="second_timeslot" required>
                                                                <b><span class="formerror"> </span></b>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" id="STN">
                                                            <label class="col-sm-2 col-form-label">Enter Number For Second Time Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" data-toggle="tooltip" data-original-title="These Number Of People Only Can Register For This Slot" placeholder="Enter Max No. Of Donors Can Donate For Second Slot" name="second_timeslot_no" required>
                                                               <b><span class="formerror"> </span></b>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row" id="TT">
                                                            <label class="col-sm-2 col-form-label">Enter Third TimeSlot</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="12:30 AM to 3:30 AM" name="third_timeslot" required>
                                                                <b><span class="formerror"> </span></b>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" id="TTN">
                                                            <label class="col-sm-2 col-form-label">Enter Number For Third Time Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" data-toggle="tooltip" data-original-title="These Number Of People Only Register Can For This Slot" placeholder="Enter Max No. Of Donors Can Donate For First Slot" name="third_timeslot_no" required>
                                                                <b><span class="formerror"> </span></b>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2"></label>
                                                            <div class="col-sm-10">
                                                                <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footerlinks.php'; ?>
</body>

</html>
<script>
    function clearErrors() {
        errors = document.getElementsByClassName("formerror");
        for (let item of errors) {
            item.innerHTML = "";
        }
    }

    function seterror(id, error) {
        //sets error inside tag of id
        element = document.getElementById(id);
        element.getElementsByClassName("formerror")[0].innerHTML = error;
    }

    function validateForm() {
        var returnval = true;
        clearErrors();

        //Name
        var name = document.forms["oform"]["cpname"].value;
        if (!/^[a-zA-Z ]+$/.test(name)) {
            seterror("cname", "*Only alphabets are allowed");
            returnval = false;
        }

        //time
        var time = document.forms['oform']["camp-time"].value;


        if (!(/^[a-zA-Z0-9 ]+$/.test(time))) // ^\d[1-12] 
        {
            seterror("camp-time-id", "*Enter values in 12 hour format");
            returnval = false;
        }
        //venue
        var v = document.forms["oform"]["vn"].value;
        if (!/^[a-zA-Z ]+$/.test(v)) {
            seterror("vname", "*Only alphabets are allowed");
            returnval = false;
        }

        //timeslot
        var ft = document.forms['oform']["first_timeslot"].value;
        if (!(/^[a-zA-Z0-9 ]+$/.test(ft))) // ^\d[1-12] 
        {
            seterror("FT", "*Enter values in 12 hour format");
            returnval = false;
        }
        var st = document.forms['oform']["second_timeslot"].value;
        if (!(/^[a-zA-Z0-9 ]+$/.test(st))) 
        {
            seterror("ST", "*Enter values in 12 hour format");
            returnval = false;
        }
        var tt = document.forms['oform']["third_timeslot"].value;
        if (!(/^[a-zA-Z0-9 ]+$/.test(tt))) // ^\d[1-12] 
        {
            seterror("TT", "*Enter values in 12 hour format");
            returnval = false;
        }

        //TS number
        var ftno = document.forms['oform']["first_timeslot_no"].value;
        
        if (!/^[0-9]+$/.test(ftno)) {
            seterror("FTN", "*Enter numbers only");
            returnval = false;
        } 
        var stno = document.forms['oform']["second_timeslot_no"].value;
        
        if (!/^[0-9]+$/.test(stno)) {
            seterror("STN", "*must input numbers");
            returnval = false;
        } 
        var ttno = document.forms['oform']["third_timeslot_no"].value;
        
        if (!/^[0-9]+$/.test(ttno)) {
            seterror("TTN", "*must input numbers");
            returnval = false;
        } 
    return returnval;
    }
</script>