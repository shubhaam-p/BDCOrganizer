<?php 
    include ('connection.php');
    session_start();
    $id= $_SESSION['ID'];
   $q="SELECT * FROM event WHERE ID='$id' ";
   $data=mysqli_query($conn,$q);
   if($data){
        $total=mysqli_num_rows($data);
        $result = mysqli_fetch_assoc($data);        
        }
        else{
            echo "error occured";
            header('Location:index.php');
            die();
        }
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title> My campaign</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="images/favicon.png" />
    <style>
        .rbtn{
            background: #FE3C47;
        border: 2px solid #FE3C47;
        color: #FFFFFF;
        display: inline-block;
        font-weight: 400;
        padding: 5px 10px;
        position: relative;
        text-transform: uppercase;
        transition: all 0.3s ease-out 0s;
        margin-left:4em;
        
    }
    </style>
        <?php include 'headerlinks.php' ?>
    <body>
    <?php include 'header.php' ?>
    <section class="page-header" data-stellar-background-ratio="1.2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Event Details
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / <a href="#">Events</a> /  Event Details
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
                                <h2><?php echo $result["Camp_Name"] ?></h2>
                                <p class="single-post-meta"><i class="fa fa-user"></i>&nbsp; Deborah Beck &nbsp; &nbsp; <i class="fa fa-share"></i>&nbsp; Blood, Save Life</p>
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
                            <span class="event-sub-content-title">Phone:</span>
                            <?php echo $result["Organizer_cn"]; ?> <br />
                            <span class="event-sub-content-title">Email:</span>
                            <a href="#"><?php echo $result["Organizer_em"]; ?> </a>
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
                 <?php echo "<a class='rbtn' href='../Dashboard/og-update-camp.php'> Edit camp Details </a>"; ?>
            </div> 
        </div> 
    </section> 
    <?php include 'footer.php' ?>
    <a id="backTop">Back To Top</a>
    <?php include 'footerlinks.php' ?>
</body>
</html>