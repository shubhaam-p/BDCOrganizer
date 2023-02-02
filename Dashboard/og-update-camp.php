<?php 
    session_start();
    include 'connection.php';
    $id = $_SESSION['ID'];
    $q="SELECT * FROM event WHERE ID='$id' ";
    $data=mysqli_query($conn,$q);
    if(!$data){
            echo "error";
    }
    $total=mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
 ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Update camp details</title>
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
                                                        <h4>Campaign Details</h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <form action="update-event.php" method="get" >
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label"> Campaign Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value ="<?php echo $result['Camp_Name'] ?>"
                                                                    name="camp_name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Date</label>
                                                                <div class="col-sm-10">
                                                                    <input type="date" class="form-control" value="<?php echo $result['Camp_Date'];?>"
                                                                    name="camp_date" required min="<?php echo date("Y-m-d"); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Time</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="10 AM to 3 PM"
                                                                    name="camp_time" value="<?php echo $result['Camp_Time'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Venue</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Andheri"
                                                                    name="camp_venue" value="<?php echo $result['Venue'];?>">
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Timeslots For Donors </h4>
                                                    </div>
                                                    <div class="card-block">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter First TimeSlot</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"  value="<?php echo $result['First_Timeslot']; ?>"
                                                                    name="first_timeslot">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Number</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control"  value="<?php echo $result['First_Timeslot_No']; ?>"
                                                                    data-toggle="tooltip" data-original-title="These Number Of People Only Can Register For This Slot"
                                                                    name="first_timeslot_no">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Second TimeSlot</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"  value="<?php echo $result['Second_Timeslot']; ?>"
                                                                    name="second_timeslot">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Number</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" data-toggle="tooltip" data-original-title="These Number Of People Only Can Register For This Slot"    value="<?php echo $result['Second_Timeslot_No']; ?>"
                                                                    name="second_timeslot_no">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Third TimeSlot</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"  value="<?php echo $result['Third_Timeslot']; ?>"
                                                                    name="third_timeslot">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter Number</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control" 
                                                                    data-toggle="tooltip" data-original-title="These Number Of People Only Register Can For This Slot"
                                                                    value="<?php echo $result['Third_Timeslot_No']; ?>"
                                                                    name="third_timeslot_no">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2"></label>
                                                                <div class="col-sm-10">
                                                                    <button type="submit" class="btn btn-primary m-b-0">Update</button>
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
<?php 
//session og
if( isset($_SESSION['name'] ) && isset($_SESSION['pwd'] ) ){
    $n = $_SESSION['name'];
    $pwd = $_SESSION['pwd'];
    
    $q = "SELECT ID, Organizer_Name, Organizer_password ,Camp_Name FROM event WHERE Organizer_Name='$n' AND Organizer_password ='$pwd' ";
    $exe = mysqli_query($conn,$q);
    $result= mysqli_fetch_assoc($exe);  
    // echo '<br> <a href="logout.php"><input type="button" value="Logout"></a>';
}
else{
    header('Location:index.php');
    die();
}
?>