<?php
include('connection.php');
$q = " SELECT * FROM event WHERE Status='A' ";
$data = mysqli_query($conn, $q);
$total = mysqli_num_rows($data);
//echo $total;
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blood Donation - Activism & Campaign HTML5 BDCOrganizer">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="images/favicon.png" />
    <?php include 'headerlinks.php' ?>
<body>
    <div id="preloader">
        <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
    </div>
    <?php include 'header.php' ?>

    <section class="section-banner">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="banner-content">
                        <h2>
                            Donate blood and get real blessings.
                        </h2>
                        <h3>Blood is the most precious gift that anyone can give to another person.<br>
                            Donating blood not only saves the life also save donor's lives.
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content-block" id="campAdd">
        <div class="container">
            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Donation Campaigns</h2>
                    <p class="section-subheading">BE A HERO... IT'S IN YOUR BLODD!</p>
                </div>
            </div>
        </div>
        <!-- List Active Campaigns start -->
        <?php
            if ($total != 0) {
                $i = 1;
                while ($result = mysqli_fetch_assoc($data)) {
                echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="event-latest">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                        <div class="event-latest-thumbnail">
                                            <a href="#">
                                                <img src="images/event-' . $i . '.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                        <div class="event-details">
                                            <a class="latest-date" href="#">' . $result["Camp_Date"] . '</a>
                                            <h4 class="event-latest-title">' . $result["Camp_Name"] . '</h4>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, natus!</p>
                                            <div class="event-latest-details">
                                                <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;&nbsp;' . $result["Camp_Time"] . '</a>
                                                <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;' . $result["Venue"] . '</a>
                                            </div>
                                            <a href="click-to-see-details.php?id='.$result["ID"].'">Click to see Details</a>
                                        </div>                         
                                    </div>
                                </div>
                            </div> 
                        </div>';
                    $i++;
                }
            }
        ?>
        <!-- List Active Campaigns End -->
    </section>

    <section class="cta-section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <h2>Are you Organizer?</h2>
                    <p>
                        Looking for conducting campaign in your locality, We ease the process of organizing campaign.
                    </p>
                    <a class="btn btn-cta-2" href="/BDCOrganizer/Dashboard/Organizer-Details.php">CREATE CAMPAIGN</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>
    <a id="backTop">Back To Top</a>
    <?php include 'footerlinks.php' ?>
</body>
</html>