<?php 
include 'connection.php';
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Requests pending window</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php include'headerlinks.php'; ?>
</head>
<style>
    a{
        size: 36em;
    }
</style>
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
                                                    <h2>Request Pending...</h2>
                                                </div>
                                                <div class="card-block">    
                                                    <h4>Wait For Admin's Approval !</h4>
                                                    <h5>You can check the status of camp <em ><a href="Status-Window.php" style="color:red;font-size:18px;">here</a></em> </h5>
                                                    <!-- <p>We may call you regarding Campaign</p>                                                 -->
                                                    <div class="form-group row" style="margin-top: 5em;">
                                                     <label class="col-sm-2"></label>
                                                        <div class="col-sm-10">
                                                            <a href="..\BloodDonation\index.php">
                                                        <button type="submit" class="btn btn-primary m-b-0">Go back to Home page</button> </a>
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