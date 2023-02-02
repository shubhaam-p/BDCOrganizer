<?php
include('connection.php');

$i = $_GET['id'];
$q = "SELECT * FROM event WHERE ID='$i' ";
$data = mysqli_query($conn, $q);
if ($data) {
    //echo "Fetch the data";
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
} else {
    echo "error";
    header('Location:../BloodDonation/index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Donor Form</title>
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
                    <!-- <?php include 'og-sideheader.php'; ?> -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 style="padding-left: 25vw;">Registration Form <h3>
                                                    </div>
                                                    <?php include 'modal.php'; ?>
                                                    <div class="card-block">
                                                        <form action="#" method="get" name="dform" onsubmit="return validateForm()">
                                                            <div class="form-group row" id="dname">
                                                                <label class="col-sm-2 col-form-label">Enter Your Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Enter Name Here.." name="donor_name" required>
                                                                    <b><span class="formerror"></span></b>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Gender </label>
                                                                <div class="radio radiofill radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="donor_gender" value="Male" required>Male
                                                                    </label>
                                                                </div>
                                                                <div class="radio radiofill radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="donor_gender" value="Female" required>Female
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Blood Group </label>
                                                                <div class="col-sm-10">
                                                                    <select name="blood_group" class="form-control form-control-primary fill" required>
                                                                        <option value="">Select blood group</option>
                                                                        <option value="A+">A+</option>
                                                                        <option value="O+">O+</option>
                                                                        <option value="B+">B+</option>
                                                                        <option value="AB+">AB+</option>
                                                                        <option value="A-">A-</option>
                                                                        <option value="O-">O-</option>
                                                                        <option value="B-">B-</option>
                                                                        <option value="AB-">AB-</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Email</label>
                                                                <div class="col-sm-10">
                                                                    <input type="email" class="form-control" placeholder="Enter Email Here.." name="donor_em" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" id="cn">
                                                                <label class="col-sm-2 col-form-label">Enter Contact No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" placeholder="Contact No" name="donor_cn" required>
                                                                    <b><span class="formerror"></span></b>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Choose Timeslot </h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">First Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="radio" name="time" id="FRB" value="<?php echo 'F' . '_' . $result['First_Timeslot'] . '_' . $result['First_Timeslot_No']; ?>" required>
                                                                <?php echo $result['First_Timeslot']; ?>
                                                                <sup>
                                                                    *<?php echo $result['First_Timeslot_No']; ?>
                                                                </sup>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Second Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="radio" name="time" id="SRB" value="<?php echo 'S' . '_' . $result['Second_Timeslot'] . '_' . $result['Second_Timeslot_No']; ?>" required >
                                                                <?php echo $result['Second_Timeslot']; ?>
                                                                <sup>
                                                                    *<?php echo $result['Second_Timeslot_No']; ?>
                                                                </sup>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Third Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="radio" name="time" id="TRB" value="<?php echo 'T' . '_' . $result['Third_Timeslot'] . '_' . $result['Third_Timeslot_No']; ?>" required >
                                                                <?php echo $result['Third_Timeslot']; ?>
                                                                <sup>
                                                                    *<?php echo $result['Third_Timeslot_No']; ?>
                                                                </sup>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="event_id" value="<?php echo $result['ID']; ?>"><!-- Event ID -->

                                                    <div class="form-group row">
                                                        <label class="col-sm-2"></label>
                                                        <div class="col-sm-10">
                                                            <button type="submit" name="sub" class="btn btn-primary m-b-0">Submit</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    
                                                    <div class="card"></div>
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
    </div>
    <?php include 'footerlinks.php'; ?>
</body>

</html>
<?php
//Disabling Radio button when time slot is full 
if ($result['First_Timeslot_No'] == 0) {
    echo "<script>document.getElementById('FRB').disabled = true;</script>";
    echo '<script>
    document.getElementsByTagName("sup")[0].style.color = "red" ;
    document.getElementsByClassName("tooltip")[0].innerHTML = "Timeslot Is Full";
</script>';
}
if ($result['Second_Timeslot_No'] == 0) {
    echo "<script>document.getElementById('SRB').disabled = true;</script>";
    echo '<script>
    document.getElementsByTagName("sup")[1].style.color = "red";
    document.getElementsByClassName("tooltip")[1].innerHTML = "Timeslot Is Full";
</script>';
}
if ($result['Third_Timeslot_No'] == 0) {
    echo "<script>document.getElementById('TRB').disabled = true;</script>";
    echo '<script>
    document.getElementsByTagName("sup")[2].style.color = "red";
    var x =document.getElementsByClassName("tooltip")[2];
    x.innerHTML = "Timeslot Is Full";
</script>';
}

if (isset($_GET['sub'])) {
    $event =  $_GET['event_id'];
    $donor_name = $_GET['donor_name'];
    $donor_gender = $_GET['donor_gender'];
    $donor_blood_group = $_GET['blood_group'];
    $donor_em = $_GET['donor_em'];
    $donor_cn = $_GET['donor_cn'];
    $timeslot_booked = explode("_", $_GET['time']);
    $T = $timeslot_booked[0];
    $Ts = $timeslot_booked[1];
    $Tn = $timeslot_booked[2];

    echo "<h1>" . $T . "<br>rts " . $Ts . gettype(intval($Tn)) . "</h1>";
    //  decreasing value by 1 here mean no of beds available
    
    if ($T == 'F') {
        $Tn = intval($Tn - 1);
        $update_query = "UPDATE event SET First_Timeslot_No ='$Tn' WHERE ID='$event'";
        $execute = mysqli_query($conn, $update_query);
        if ($update_query)
            echo "decreased by 1";
        else
            echo "Error to decrease";
    } else if ($T == 'S') {
        $Tn = intval($Tn - 1);
        $update_query = "UPDATE event SET Second_Timeslot_No ='$Tn' WHERE ID='$event'";
        $execute = mysqli_query($conn, $update_query);
        if ($update_query)
            echo "decreased by 1";
        else
            echo "Error to decrease";
    } else if ($T == 'T') {
        $Tn = intval($Tn - 1);
        $update_query = "UPDATE event SET Third_Timeslot_No ='$Tn' WHERE ID='$event'";
        $execute = mysqli_query($conn, $update_query);
        if ($update_query)
            echo "decreased by 1";
        else
            echo "Error to decrease";
    }

    $sql = "INSERT INTO donor_details VALUES ('ID','$event','$donor_name','$donor_gender',
            '$donor_blood_group','$donor_em','$donor_cn','$timeslot_booked[1]','A')";
    $exe = mysqli_query($conn, $sql);
    if ($exe) {
        echo "<script>location.replace('Data-Inserted_Success.php?key=<?php date(this)?>')</script>";
    } else
        echo "<h1>Error while inserting </h1>";
}
?>
<script>
    function clearErrors() {
        errors = document.getElementsByClassName('formerror');
        for (let item of errors) {
            item.innerHTML = "";
        }
    }

    function seterror(id, error) {
        //sets error inside tag of id 
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;
    }

    function validateForm() {
        var returnval = true;
        clearErrors();
        var phone = document.forms['dform']["donor_cn"].value;
        if (!(/^[0-9]+$/.test(phone))) {
            seterror("cn", "*must input numbers");
            returnval = false;
        } else if (phone.length != 10) {
            seterror("cn", "*Number must contain 10 digis");
            returnval = false;
        }
      return returnval;
    }
</script>