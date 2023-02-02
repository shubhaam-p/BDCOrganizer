
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Contact page</title>
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
    <?php include 'header.php' ?>
    <section class="page-header" data-stellar-background-ratio="1.2" style="background-position: 0% -32.2222px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3>
                            Contact Us
                        </h3>
                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / Contact
                        </p>
                    </div>
                </div> <!-- end .row  -->
            </div> <!-- end .container  -->
        </section>
        <section class="section-content-block section-contact-block bottom-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="contact-title">Contact us</h2>                           
                    </div>               
                    <div class="col-md-3">
                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-home"></i></span>
                                <address>Vileparle</address>
                            </li>
                        </ul>                        
                    </div>
                    <div class="col-md-3">
                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-phone"></i></span>
                                <address><a href="#">+91-120-525-9162</a></address>
                            </li>
                        </ul>                        
                    </div>
                    <div class="col-md-3">
                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-envelope"></i></span>
                                <address><a href="mailto:">shubhamgpatil@gmail.com</a></address>
                            </li>
                        </ul>                        
                    </div>

                    <div class="col-md-3">
                        <ul class="contact-info">
                            <li>
                                <span class="icon-container"><i class="fa fa-envelope"></i></span>
                                <address><a href="mailto:">
                                    jaysawant4@gmail.com
                                </a></address>
                            </li>
                        </ul>                        

                    </div>               
                </div> 
            </div>
        </section>

    <?php include 'footer.php' ?>
    <a id="backTop">Back To Top</a>
    <?php include 'footerlinks.php' ?>
</body>
</html>