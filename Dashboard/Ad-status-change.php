<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Admin changing status</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
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
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                            <?php
                                                include 'connection.php';
                                                $id = $_GET['on'];
                                                $s = $_GET['s'];
                                                if ($s == 'A') {
                                                    $sql = "UPDATE event SET Status = 'A' WHERE ID='$id'";
                                                    $exe = mysqli_query($conn, $sql);
                                                    if ($exe){
                                                        echo ' <div class="col-xl-4 col-md-12">
                                                                    <div class="card" style="background-color:#2ed8b6;color:#fff;">
                                                                        <div class="card-body">
                                                                            <h3>Approved</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                            }
                                                    else{
                                                        echo ' <div class="col-xl-4 col-md-12">
                                                                    <div class="card " style="background-color:#2ed8b6;color:#ff5370;">
                                                                        <div class="card-body">
                                                                            <h3>Failed to approve</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                        }
                                                } else {
                                                    $sql = "UPDATE event SET Status = 'D' WHERE ID='$id'";
                                                    $exe = mysqli_query($conn, $sql);

                                                    if ($exe)
                                                        echo ' <div class="col-xl-4 col-md-12">
                                                                    <div class="card" style="background-color:#2ed8b6;color:#fff;">
                                                                        <div class="card-body">
                                                                            <h3>Rejected</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                    else
                                                        echo ' <div class="col-xl-4 col-md-12">
                                                                    <div class="card " style="background-color:#ff5370;color:#ff5370;">
                                                                        <div class="card-body">
                                                                            <h3>Failed to reject</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                }
                                            ?>
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