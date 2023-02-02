<?php
include 'connection.php';
session_start();
$id = $_SESSION['ID'];

if (isset($_GET['sub'])) {

    $donor_name = $_GET['donor_name'];
    $donor_gender = $_GET['donor_gender'];
    $donor_blood_group = $_GET['blood_group'];
    $donor_em = $_GET['donor_em'];
    $donor_cn = $_GET['donor_cn'];
    $did=$_GET['d-id'];
    $timeslot_booked = explode("_", $_GET['time']);
    $T = $timeslot_booked[0];
    $Ts = $timeslot_booked[1];
    $Tn = $timeslot_booked[2];

    echo $donor_name;
    // echo $timeslot_booked[1];
    $sql = " UPDATE donor_details SET Donor_Name = '$donor_name' WHERE ID='$did' ";
    $exe= mysqli_query($conn,$sql);


    if ($exe) {
        echo "Inserted";
    } else
        echo "<h1>Error while inserting </h1>";
}



?>