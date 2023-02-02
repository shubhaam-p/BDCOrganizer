<?php
include 'connection.php';
session_start();

$id = $_SESSION['ID'];
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Organizer Donors list</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php include 'headerlinks.php'; ?>
</head>
<style>
    tr:nth-child(even) {
        background-color: #dddddd;
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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3>Donors List</h3>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <a href="og-export.php" style="float:left;"><button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Export
                                                                </button></a>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Donor Name</th>
                                                                        <th>Gender</th>
                                                                        <th>Blood Group</th>
                                                                        <th>Contact No</th>
                                                                        <th>Timeslot Booked</th>
                                                                        <th>Email Id</th>
                                                                        <td colspan="2">Operation</td>
                                                                        <!-- <th>Email</th> -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $donors = "SELECT * FROM donor_details WHERE Event_Id ='$id' AND Status='A'";
                                                                    $ex = mysqli_query($conn, $donors);
                                                                    $i = 1;
                                                                    while ($d = mysqli_fetch_assoc($ex)) {?>
                                                                        <tr>
                                                                            <td> <?php echo $i;
                                                                                    $i++ ?></td>
                                                                            <td><?php echo $d['Donor_Name']; ?></td>
                                                                            <td><?php echo $d['Donor_Gender']; ?></td>
                                                                            <td><?php echo $d['Donor_Blood_Group']; ?></td>
                                                                            <td><?php echo $d['Donor_ContactNo']; ?></td>
                                                                            <td><?php echo $d['Timeslot_Booked']; ?></td>
                                                                            <td><?php echo $d['Donor_Email']; ?></td>
                                                                            <td>
                                                                                <?php echo "<a href='og-donors-update.php?did=$d[ID]'><i class='ti-pencil'></i></a>";
                                                                                ?> &nbsp;&nbsp;
                                                                                <?php echo "<a href='og-donors-delete.php?on=$d[ID]'>
                                                                                    <i class='fa fa-trash'></i>
                                                                                </a>" ?>
                                                                            </td>
                                                                        </tr>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tbody>
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
        </div>
        <?php include 'footerlinks.php'; ?>
</body>
</html>
<?php
    //session og
    if (isset($_SESSION['name']) && isset($_SESSION['pwd'])) {
        $n = $_SESSION['name'];
        $pwd = $_SESSION['pwd'];


        // echo '<br> <a href="logout.php"><input type="button" value="Logout"></a>';
    } else {
        header('Location:index.php');
        die();
    }
?>