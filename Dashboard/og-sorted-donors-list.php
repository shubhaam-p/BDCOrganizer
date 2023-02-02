<?php
include 'connection.php';
session_start();

$id = $_SESSION['ID'];
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title> Organizer Sorted Donors</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php include 'headerlinks.php'; ?>
</head>
<style>
    * {
        box-sizing: border-box;
        font-family: inherit;
    }
    .row{
        margin-bottom: 4em;
    }
    .tablink {
        background-color: #b8b8b8;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 50%;
    }

    .tablink:hover {
        background-color: #777;
    }

    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {
        color: white;
        display: none;
        padding: 100px 20px;
        height: 100%;
    }

    #Home {
        background-color: #f1f1;
    }

    #News {
        background-color: #f1f1;
    }
    table{
        margin-bottom:2em;
    }
</style>

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
                                                <h3 style="text-align:center">Search Donors</h3>
                                                <button class="tablink" onclick="openPage('Home', this,'#555')" id="defaultOpen">By Blood Group</button>
                                                <button class="tablink" onclick="openPage('News', this, '#555')">By Time Slot</button>
                                                <div id="Home" class="tabcontent">
                                                    <select id="bgroup" class="form-control form-control-primary fill" style="width:40%;">
                                                        <option value="0">
                                                            Blood Group
                                                        </option>
                                                        <?php
                                                        $bgroups = "SELECT DISTINCT Donor_Blood_Group as bgroups FROM donor_details WHERE Event_Id ='$id'AND Status='A'";
                                                        $exe = mysqli_query($conn, $bgroups);
                                                        while ($Bg = mysqli_fetch_assoc($exe)) {
                                                            $str = str_replace('+', '_', $Bg['bgroups']);
                                                        ?>
                                                            <option value="<?php echo $str; ?>">
                                                                <?php echo $Bg['bgroups']; ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Donor Name</th>
                                                                        <th>Gender</th>
                                                                        <th>Blood Group</th>
                                                                        <th>Contact No</th>
                                                                        <th>Timeslot Booked</th>
                                                                        <!-- <th>Email</th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $donors = "SELECT * FROM donor_details WHERE Event_Id ='$id' AND Status='A' ";
                                                                    $ex = mysqli_query($conn, $donors);
                                                                    $i = 1;
                                                                    while ($d = mysqli_fetch_assoc($ex)) {
                                                                        $str = str_replace('+', '_', $d['Donor_Blood_Group']);?>
                                                                        <tr class="fall <?php echo $str; ?>">
                                                                            <td> <?php echo $i;
                                                                                    $i++ ?></td>
                                                                            <td><?php echo $d['Donor_Name']; ?></td>
                                                                            <td><?php echo $d['Donor_Gender']; ?></td>
                                                                            <td><?php echo $d['Donor_Blood_Group']; ?></td>
                                                                            <td><?php echo $d['Donor_ContactNo']; ?></td>
                                                                            <td><?php echo $d['Timeslot_Booked']; ?></td>
                                                                            <!-- <td><?php echo $d['Donor_Email']; ?></td> -->
                                                                        </tr>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Timeslot tab -->
                                                <div id="News" class="tabcontent">
                                                    <select id="T" class="form-control form-control-primary fill" style="width:40%;">
                                                        <option value="0">
                                                            Time Slot
                                                        </option>
                                                        <?php
                                                        $slots = "SELECT DISTINCT Timeslot_Booked as slot FROM donor_details WHERE Event_Id = '$id'AND Status='A'";
                                                        $exe = mysqli_query($conn, $slots);

                                                        while ($Ts = mysqli_fetch_assoc($exe)) {
                                                            $str = str_replace(' ', '_', $Ts['slot']);
                                                            $str2 = str_replace(':', '-', $str);
                                                        ?>
                                                            <option value="<?php echo $str2; ?>">
                                                                <?php echo $Ts['slot']; ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>

                                                    <table>
                                                        <div class="card-block table-border-style">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                        <th>#</th>
                                                                        <th>Donor Name</th>
                                                                        <th>Gender</th>
                                                                        <th>Blood Group</th>
                                                                        <th>Contact No</th>
                                                                        <th>Timeslot Booked</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $donors = "SELECT * FROM donor_details WHERE Event_Id ='$id' AND Status='A'";
                                                                        $ex = mysqli_query($conn, $donors);
                                                                        $i=1;
                                                                        while ($d = mysqli_fetch_assoc($ex)) {
                                                                            $str = str_replace(' ', '_', $d['Timeslot_Booked']);
                                                                            $str2 = str_replace(':', '-', $str);
                                                                        ?>

                                                                            <tr class="all <?php echo $str2; ?>">
                                                                                <td> 
                                                                                    <?php echo $i;
                                                                                        $i++ ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $d['Donor_Name']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $d['Donor_Gender']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $d['Donor_Blood_Group']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $d['Donor_ContactNo']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $d['Timeslot_Booked']; ?>
                                                                                </td>
                                                                            </tr>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </table>
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
    function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    $(document).ready(function() {

        $("#bgroup").change(function() {

            var xy = $("#bgroup").val();
            // alert(xy);
            $(".fall").hide();
            $("." + xy).show();

            if (xy == 0) {

                $(".fall").show();
            }

        });

        $("#T").change(function() {
            var xy = $("#T").val();
            // alert(xy);
            $(".all").hide();
            $("." + xy).show();

            if (xy == 0) {
                $(".all").show();
            }
        });
    });
</script>
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