<?php
include 'connection.php';
session_start();
$id = $_SESSION['ID'];
$q = "SELECT * FROM event WHERE ID='$id' "; //Just to display time slot
$data = mysqli_query($conn, $q);
if (! $data) { 
    echo "error fecthing timeslot";
}
$result = mysqli_fetch_assoc($data);
$cn = $_GET['did'];
$find = "SELECT * FROM donor_details WHERE ID ='$cn' ";
$exe = mysqli_query($conn, $find);
$d = mysqli_fetch_assoc($exe);
$d['ID'];
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Organizer update donor details</title>
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
            <?php include 'topheader.php'; ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include 'og-sideheader.php'; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 style="padding-left: 25vw;">Update donor's form
                                                        </h3>          
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="" method="GET" name="uform" onsubmit="return validateForm()">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Your Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" required class="form-control" value="<?php echo $d['Donor_Name']; ?>" name="donor_name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Chosen Gender</label>
                                                                <P style="padding-left:2em;">
                                                                    <?php echo $d['Donor_Gender']; ?>
                                                                </P>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Gender </label>
                                                                <div class="radio radiofill radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="donor_gender" value="Male" required >
                                                                        Male
                                                                    </label>
                                                                </div>
                                                                <div class="radio radiofill radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="donor_gender" value="Female" required>
                                                                        Female
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Chosen Blood Group</label>
                                                                <P style="padding-left:2em;">
                                                                    <?php echo $d['Donor_Blood_Group']; ?>
                                                                </P>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Select Blood Group </label>
                                                                <div class="col-sm-10">
                                                                    <select name="blood_group" class="form-control form-control-primary fill" required>
                                                                        <option value="0">Select blood group</option>
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
                                                                    <input type="email" required class="form-control" value="<?php echo $d['Donor_Email']; ?>" name="donor_em">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" id="cn">
                                                                <label class="col-sm-2 col-form-label">Enter Contact No</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" required class="form-control" value="<?php echo $d['Donor_ContactNo']; ?>" name="donor_cn">
                                                                </div>
                                                                <b><span class="formerror"></span></b>
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-block">
                                                        <label class="col-sm-2 col-form-label"> <b> Chosen Time slot</b> </label>
                                                        <?php echo $d['Timeslot_Booked']; ?>
                                                    </div>
                                                    <div class="card-header">
                                                        <h4>Choose Timeslot </h4>
                                                    </div>

                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">First Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="radio" required name="time" id="FRB" value="<?php echo 'F' . '_' . $result['First_Timeslot'] . '_' . $result['First_Timeslot_No']; ?>">
                                                                <?php echo $result['First_Timeslot']; ?>
                                                                <sup>
                                                                    *<?php echo $result['First_Timeslot_No']; ?>
                                                                </sup>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Second Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="radio" required name="time" id="SRB" value="<?php echo 'S' . '_' . $result['Second_Timeslot'] . '_' . $result['Second_Timeslot_No']; ?>">
                                                                <?php echo $result['Second_Timeslot']; ?>
                                                                <sup>
                                                                    *<?php echo $result['Second_Timeslot_No']; ?>
                                                                </sup>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Third Slot</label>
                                                            <div class="col-sm-10">
                                                                <input type="radio" required name="time" id="TRB" value="<?php echo 'T' . '_' . $result['Third_Timeslot'] . '_' . $result['Third_Timeslot_No']; ?>">
                                                                <?php echo $result['Third_Timeslot']; ?>
                                                                <sup>
                                                                    *<?php echo $result['Third_Timeslot_No']; ?>
                                                                </sup>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="did" value="<?php echo $d['ID']; ?>"> <!-- donor id -->
                                                    <div class="form-group row">
                                                        <label class="col-sm-2"></label>
                                                        <div class="col-sm-10">
                                                            <button type="submit" name="sub" class="btn btn-primary m-b-0">Update</button>
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
    </div>
    <?php include 'footerlinks.php'; ?>
</body>
<?php
//Disabling Radio button when timeslot is full
if ($result['First_Timeslot_No'] == 0) {
    // echo "<script>document.getElementById('FRB').disabled = true;</script>";
    echo '<script>
    document.getElementsByTagName("sup")[0].style.color = "red" ;
    document.getElementsByClassName("tooltip")[0].innerHTML = "Timeslot Is Full";
</script>';
}
if ($result['Second_Timeslot_No'] == 0) {
    // echo "<script>document.getElementById('SRB').disabled = true;</script>";
    echo '<script>
    document.getElementsByTagName("sup")[1].style.color = "red";
    document.getElementsByClassName("tooltip")[1].innerHTML = "Timeslot Is Full";
</script>';
}
if ($result['Third_Timeslot_No'] == 0) {
    // echo "<script>document.getElementById('TRB').disabled = true;</script>";
    echo '<script>
    document.getElementsByTagName("sup")[2].style.color = "red";
    var x =document.getElementsByClassName("tooltip")[2];
    x.innerHTML = "Timeslot Is Full";
</script>';
}

//session og
if (isset($_SESSION['name']) && isset($_SESSION['pwd'])) {
    $n = $_SESSION['name'];
    $pwd = $_SESSION['pwd'];
    $q = "SELECT ID, Organizer_Name, Organizer_password ,Camp_Name FROM event WHERE Organizer_Name='$n' AND Organizer_password ='$pwd' ";
    $exe = mysqli_query($conn, $q);
    $result = mysqli_fetch_assoc($exe);
    // echo '<br> <a href="logout.php"><input type="button" value="Logout"></a>';
} else {
    header('Location:index.php');
    die();
}

if (isset($_GET['sub'])) {
    $donor_name = $_GET['donor_name'];
    $donor_gender = $_GET['donor_gender'];
    $donor_blood_group = $_GET['blood_group'];
    $donor_em = $_GET['donor_em'];
    $donor_cn = $_GET['donor_cn'];
    $did = $_GET['did'];
    $timeslot_booked = explode("_", $_GET['time']);
    $T = $timeslot_booked[0];
    $Ts = $timeslot_booked[1];
    $Tn = $timeslot_booked[2];

    $sql = " UPDATE donor_details SET Donor_Name = '$donor_name', Donor_Gender='$donor_gender',Donor_Blood_Group='$donor_blood_group', Donor_Email='$donor_em', Donor_ContactNo='$donor_cn',Timeslot_Booked='$Ts' WHERE ID =$did ";
    $exe = mysqli_query($conn, $sql);
     echo "Affected rows are ".mysqli_affected_rows($conn);
     mysqli_error( $conn);
     if($exe){
        header('Location:success.php');
        die();
     }
    else{
        echo "<br><h3>Failed to update donors details</h3>";
    }
   
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

        var phone = document.forms['uform']["donor_cn"].value;
      
        if (phone.length != 10) {
            seterror("cn", "*Number must contain 10 digis");
            returnval = false;
        }
        return returnval;
    }
</script>