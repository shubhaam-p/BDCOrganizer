<?php
    include('connection.php');
    session_start();

    $id = $_GET['id'];
    error_log("ID".$id);
    if ((isset($id) && $id)) {
        $q = "SELECT * FROM event WHERE ID = $id AND status='A'";
        $data = mysqli_query($conn, $q);
        if ($data) {
            //echo "Fetch the data";
        } else {
            echo "error";
        }
        $total = mysqli_num_rows($data);
        $result = mysqli_fetch_assoc($data);
    } else {
        header('Location:index.php');
        die();
    }
    if(!(isset($result) || $result)){
        header('Location:index.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Details of camp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="images/favicon.png" />
    <?php include 'headerlinks.php' ?>
<body>
    <!--  HEADER -->
    <?php include 'header.php' ?>
    <!-- end main-header  -->
    <section class="page-header" data-stellar-background-ratio="1.2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Event Detail
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / <a href="#">Events</a> / Event Details
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content-block">
        <div class="container">
            <div class="row">
                <div class="article-event clearfix">
                    <div class="col-sm-12">
                        <article class="post single-post-inner">
                            <div class="single-post-inner-title">
                                <a href="../Dashboard/index.php">
                                    <button type="submit" class="btn btn-custom" style="float:right;background-color:black">Login &nbsp;<i class="fa fa-long-arrow-right"></i></button>
                                </a>
                                <a  href='Announcements.php?id=<?php echo $result["ID"] ?>'>
                                    <div class='form-group' style='float:right;'>
                                        <button type='submit' class='btn btn-custom'>Announcements</button>
                                    </div> 
                                </a>
                                <h2><?php echo $result["Camp_Name"]; ?></h2>
                                <p class="single-post-meta"><i class="fa fa-user"></i>&nbsp;<?php echo $result["Organizer_Name"]; ?> &nbsp; &nbsp; <i class="fa fa-share"></i>&nbsp; Blood, Save Life</p>
                            </div>
                            <div class="single-post-inner-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis necessitatibus magni optio nobis dicta esse quas molestias deserunt et, sint fuga debitis asperiores dolorum illum soluta quae eos itaque nemo.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tenetur nulla consequatur. Facere eaque quod assumenda dolorem beatae, nulla et rem quisquam possimus vitae, commodi optio sunt fugit? Illo, itaque debitis. Amet, ex pariatur dolores cupiditate provident recusandae veritatis voluptatibus velit eius quos impedit nulla saepe iste dolor assumenda reprehenderit laborum itaque id. Voluptatum sit ipsam provident officiis, aspernatur aliquid.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa doloremque incidunt ad nobis quod natus, repudiandae suscipit iste error laudantium aperiam, quae, eum aspernatur hic facere officiis architecto totam quis ea nostrum consequuntur? Veniam qui ad tempore, dicta obcaecati veritatis eaque voluptatem saepe animi. Magnam nemo dolor excepturi eligendi, repellendus.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="event-content-title">Details</h4>
                        <p class="event-content-info">
                            <span class="event-sub-content-title">Date: <em class="date"></span>
                            <?php echo $result["Camp_Date"]; ?>
                            <span class="event-sub-content-title">Time: <em class="date"></span>
                            <?php echo $result["Camp_Time"]; ?>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="event-content-title">Organizer</h4>
                        <p class="event-content-info">
                        <span class="event-sub-content-title">Name:</span>
                            <?php echo $result["Organizer_Name"]; ?> <br />
                            <span class="event-sub-content-title">Phone:</span> <?php echo $result["Organizer_cn"]?> <br />
                            <span class="event-sub-content-title">Email:</span>
                            <a href="#" ><?php echo $result["Organizer_em"]?> </a>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="event-content-title">Venue</h4>
                        <p class="event-content-info">
                            <span class="event-sub-content-title">Place:</span>
                            <?php echo $result["Venue"]; ?>
                            <span class="event-sub-content-title">Location on G-maps : <em class="date"></span>
                            <a href="#">See location on G-maps </a> 
                        </p>
                    </div>
                </div>
                <?php echo "<a class='rbtn' href='../Dashboard/donors-form.php?id=$result[ID]'>Register Now<i class='fa fa-long-arrow-right'></i> </a>"; ?>
            </div>
        </div> <!--  end container -->
    </section> <!-- end  -->

    <!-- START FOOTER  -->
    <?php include 'footer.php' ?>
    <!-- END FOOTER  -->
    <a id="backTop">Back To Top</a>
    <?php include 'footerlinks.php' ?>
</body>
</html>
