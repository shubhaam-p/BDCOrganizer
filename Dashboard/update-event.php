<?php 
    session_start();
    include 'connection.php';
    $id = $_SESSION['ID'];
    $name = $_SESSION['name'];
    $pwd = $_SESSION['pwd'];

    $camp_name = $_GET['camp_name']; 
    $camp_date =  $_GET['camp_date']; 
    $camp_time =  $_GET['camp_time']; 
    $camp_venue =  $_GET['camp_venue'];
    
    $first_timeslot = $_GET['first_timeslot'];
    $second_timeslot =  $_GET['second_timeslot'];
    $third_timeslot =  $_GET['third_timeslot'];
    $first_timeslot_no =  $_GET['first_timeslot_no'];
    $second_timeslot_no =  $_GET['second_timeslot_no'];
    $third_timeslot_no =  $_GET['third_timeslot_no'];
    
    $insert_query = " UPDATE event SET Camp_Name='$camp_name' ,Camp_Date='$camp_date' ,Camp_Time='$camp_time' ,Venue='$camp_venue' ,
    First_Timeslot='$first_timeslot' ,First_Timeslot_No='$first_timeslot_no' ,Second_Timeslot='$second_timeslot' ,Second_Timeslot_No='$second_timeslot_no',
    Third_Timeslot='$third_timeslot' ,Third_Timeslot_No='$third_timeslot_no'
    WHERE ID='$id' ";

    $execute = mysqli_query($conn,$insert_query);
    if($execute){
        header('Location:success.php');
        die();
    }
    else
    echo"<br>failed";
?>