<?php 
    include 'connection.php';

    $sql = "SELECT * FROM event ";
    $exe = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($exe);
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Status of your camp</title>
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
                    <!-- <?php include 'sideheader.php'; ?> -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">

                                                    <div class="card-header">
                                                        <h5>Status of Campaigns</h5>
                                                        <span>use class <code>table-hover, table-striped table-*</code> inside table element</span>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table table-styling table-hover table-striped table-primary">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Name Of Organizer</th>
                                                                        <th> Name Of Campaign</th>
                                                                        <th>Status</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    
                                                                    <?php
                                                                    $i=1;
                                                                    while ($result = mysqli_fetch_assoc($exe)) {
                                                                    ?>
                                                                        <tr>
                                                                            
                                                                            <td>
                                                                                <?php echo $i; $i++;?>
                                                                            <td>
                                                                            <?php echo $result['Organizer_Name']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $result['Camp_Name']; ?>
                                                                            </td>

                                                                            <td>
                                                                                <?php if ($result['Status'] == 'P')
                                                                                    echo "<button style='background-color:#ffb64d'>Pending</button>";
                                                                                else if($result['Status'] == 'D')
                                                                                    echo "<button style='background-color:#ff5370'>Rejected</button>"; 
                                                                                else
                                                                                echo "<button style='background-color:#2ed8b6'>Approved</button>";

                                                                                    ?>
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
    </div>
    <?php include 'footerlinks.php'; ?>
</body>

</html>