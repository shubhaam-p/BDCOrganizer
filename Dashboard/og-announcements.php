<?php
include 'connection.php';
session_start();

$id = $_SESSION['ID'];
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Organizer Announcements</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php include 'headerlinks.php'; ?>
</head>
<style>
    button:hover,
    button:focus {
        outline: none;
    }

    button .input-group-text {
        padding: 10px;
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
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php include 'topheader.php'; ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include 'og-sideheader.php'; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Announcements</h5>
                                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                    </div>
                                                    <?php
                                                    //echo $id;
                                                    $q = "SELECT * FROM messages WHERE Event_Id= '$id' ";
                                                    $ex = mysqli_query($conn, $q);
                                                    $T = mysqli_num_rows($ex);

                                                    if ($T == 0) {
                                                        echo "<script>document.getElementById('sassa').innerHTML ='No announcements yet'; </script>";
                                                    } else {
                                                        while ($r = mysqli_fetch_assoc($ex)) {
                                                            echo '<p class="ms">' . $r['message'] . ' </p>';
                                                        }
                                                    }
                                                    ?>
                                                    <div id="sassa"></div>
                                                </div>

                                                <div class="card">
                                                    <form action="" method="GET">
                                                        <div class="row">
                                                            <div class="col-sm-8 col-lg-10">
                                                                <div class="input-group">
                                                                    <input type="text" name="msg" class="form-control" placeholder="Announce something..">
                                                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                                                    <button name="submit" style="border:none;" onclick="fun()">
                                                                        <span class="input-group-append">
                                                                            <label class="input-group-text">
                                                                                <i class="fa fa-send"></i>
                                                                            </label>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </form>
                                                </div>
                                                <div class="card" id="c">
                                                    <div class="col-md" style="padding-top:3em;">
                                                        <div class="card-body">
                                                            <h5 class="card-title"></h5>
                                                            <p class="card-text"></p>
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
    </div>

    <?php include 'footerlinks.php'; ?>
</body>


</html>
<?php
    //session of og
    if( isset($_SESSION['name'] ) && isset($_SESSION['pwd'] ) ){
        $n = $_SESSION['name'];
        $pwd = $_SESSION['pwd'];
        
        $q = "SELECT ID, Organizer_Name, Organizer_password ,Camp_Name FROM event WHERE Organizer_Name='$n' AND Organizer_password ='$pwd' ";
        $exe = mysqli_query($conn,$q);
        $result= mysqli_fetch_assoc($exe);
        
        // echo '<br> <a href="logout.php"><input type="button" value="Logout"></a>';
    }
    else{
        header('Location:index.php');
        die();
    }

    if (isset($_GET['submit'])) {
        $q = $_GET['msg'];
        $id = $_GET['id'];
        $insert = "INSERT INTO messages VALUES ('id','$id','$q')";
        $e = mysqli_query($conn, $insert);
        if ($e) {
            echo "<script>document.getElementsByClassName('card-title')[0].innerHTML = 'Message sent successfully';</script>";
        } else
            echo "failed";
    }
?>