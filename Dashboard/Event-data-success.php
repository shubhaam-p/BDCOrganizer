<?php 
    session_start();
    include 'connection.php';
    $organizer_name = $_SESSION['organizer_name'];
    $organizer_password = $_SESSION['organizer_password'];
    $organizer_cn = $_SESSION['organizer_cn'];
    $organizer_em = $_SESSION['organizer_em'];

    $camp_name = $_POST['cpname']; 
    $camp_date =  $_POST['camp_date']; 
    $camp_time =  $_POST['camp-time']; 
    $camp_venue =  $_POST['vn'];
    
    $first_timeslot = $_POST['first_timeslot'];
    $second_timeslot =  $_POST['second_timeslot'];
    $third_timeslot =  $_POST['third_timeslot'];
    $first_timeslot_no =  $_POST['first_timeslot_no'];
    $second_timeslot_no =  $_POST['second_timeslot_no'];
    $third_timeslot_no =  $_POST['third_timeslot_no'];
    
    $insert_query = " INSERT INTO EVENT(Organizer_Name, Organizer_cn, Organizer_em, Organizer_password,
        Camp_Name, Camp_Date, Camp_Time, Venue,First_Timeslot, First_Timeslot_No, Second_Timeslot, Second_Timeslot_No, Third_Timeslot, Third_Timeslot_No, Status) 
        VALUES ('$organizer_name','$organizer_cn','$organizer_em','$organizer_password',
        '$camp_name','$camp_date','$camp_time','$camp_venue','$first_timeslot','$first_timeslot_no','$second_timeslot','$second_timeslot_no','$third_timeslot','$third_timeslot_no','P') ";

    $execute = mysqli_query($conn,$insert_query);
   
    if($execute){
        header('Location:Camp-Request-pending.php');
        die();
    }
    else
    echo"<br>failed";


    //show the values entered
    // echo $_SESSION['camp_name']; 
    // echo $_SESSION['camp_date']; 
    // echo $_SESSION['camp_time']; 
    // echo $_SESSION['camp_venue'];
    
    // echo $_GET['first_timeslot'];
    // echo $_GET['second_timeslot'];
    // echo $_GET['third_timeslot'];
    // echo $_GET['first_timeslot_no'];
    // echo $_GET['second_timeslot_no'];
    // echo $_GET['third_timeslot_no'];
?>