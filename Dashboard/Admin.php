<?php
include 'connection.php';
session_start();

if( !(isset($_SESSION['adname'] ) && isset($_SESSION['adpwd']))){
    header('Location:Admin-login.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title> Admin </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <?php include 'Admin-topheader.php'; ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include 'Ad-sideheader.php'; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3>Pending Camp Requests</h3>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Organizer Name</th>
                                                                    <th>Contact No</th>
                                                                    <th>E-mail</th> 
                                                                    <th>Camp Name</th>
                                                                    <th>Date</th>
                                                                    <th>Time</th>
                                                                    <th>Venue</th>
                                                                    <th colspan="2">Operation</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                include 'connection.php';
                                                                $sql = "SELECT * FROM event WHERE Status ='P' ";
                                                                $exe = mysqli_query($conn, $sql);
                                                                while ($result = mysqli_fetch_assoc($exe)) {

                                                                    echo "
                                                                    <tr>
                                                                        <td>" . $result['Organizer_Name'] . "</td>
                                                                        <td>" . $result['Organizer_cn'] . "</td>
                                                                        <td>" . $result['Organizer_em'] . "</td>

                                                                        <td>" . $result['Camp_Name'] . "</td>
                                                                        <td>" . $result['Camp_Date'] . "</td>
                                                                        <td>" . $result['Camp_Time'] . "</td>
                                                                        <td>" . $result['Venue'] . " </td> 
                                                                        <td>
                                                                            <a href='Ad-status-change.php?on=$result[ID] &s=A ' > <input type='button' value='Approve'> </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href='Ad-status-change.php?on=$result[ID] &s=D '> <input type='button' value='Reject'> </a>
                                                                        </td>
                                                                    </tr>
                                                                    ";
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
        <?php include 'footerlinks.php'; ?>
</body>

</html>
