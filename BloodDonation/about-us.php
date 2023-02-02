<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="images/favicon.png" />
    <?php include 'headerlinks.php' ?>
    <style>
        * {
            box-sizing: border-box;
        }

        .card {
            background-color: transparent;
            border-bottom: none;
            padding: 20px;
            position: relative;
            box-shadow: 0 1px 2px 0 rgb(60 64 67 / 30%), 0 2px 6px 2px rgb(60 64 67 / 15%);
            border-radius: 0.5rem;
            margin: 2em 1em 1em 4em;
            font-family: inherit;
        }

        div {
            display: block;

        }
    </style>
<body>
    <div id="preloader">
        <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
    </div>
    <!--  HEADER -->
    <?php include 'header.php' ?>
    <!-- end main-header  -->
    <section class="page-header" data-stellar-background-ratio="1.2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                       About Us
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / About Us
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-content-block">
        <div class="container">
            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">About Us </h2>
                    <p class="section-subheading">Why BDC Organizer?</p>
                </div> 
            </div> <!-- end .row  -->
        </div>
        <div class="card">
            <p class="section-subheading"> </p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“Blood Donation Campaign Organizer” (BDC Organizer) is the name of our website which helps organizer to setup the camps easily. We believe that conventional way of organizing is not that efficient though we are taking help of technology. </p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For conducting these campaigns, organizer have to register himself/herself first then enter their all necessary details camp. Donors can visit the website and register in the campaign. Organizer can see registered donors and keep them posted. He/She can remind them of campaign via E-mail, download data of donors.</p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BDC Organizer is developed for organizers convenience. Rather than using Google form, WhatsApp, Excel sheets, we provide organizers one single platform.</p>
        </div>
    </section>
    
    <!-- START FOOTER  -->
    <?php include 'footer.php' ?>
    <!-- END FOOTER  -->
    <a id="backTop">Back To Top</a>
    <?php include 'footerlinks.php' ?>
</body>
</html>