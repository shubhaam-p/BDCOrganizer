<?php
    include('connection.php');
    $id = $_GET['id'];
    if(!(isset($id) && $id)){
        header('Location:index.php');
        die();
    }
    $q = "SELECT * FROM messages WHERE Event_Id= $id ";
    $ex = mysqli_query($conn, $q);
    $T = mysqli_num_rows($ex);
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Announcements</title>
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

        .ms {
            background-color: #fe3c47;
            padding: 10px;
            border-radius: 0.5rem;
            color: black;
            width: 40%;
            color: white;
            font-size: medium;
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
                        Announcements Page
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / <a href="#">Events</a> / Announcements
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-content-block">
        <div class="container">
            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Announcements</h2>
                    <p class="section-subheading">Here you will see any updates related to campaign</p>
                </div>
            </div> <!-- end .row  -->
        </div>
        <div class="card">
            <?php            
            if ($T == 0) {
                echo "<p>No announcements yet</p>";
            }else{
                while ($r = mysqli_fetch_assoc($ex)) {
                    echo '<p class="ms">' . $r['message'] . ' </p>';
                }
            }
            ?>           
        </div>
    </section>

    <?php include 'footer.php' ?>
    <a id="backTop">Back To Top</a>
    <?php include 'footerlinks.php'; ?>
</body>
</html>