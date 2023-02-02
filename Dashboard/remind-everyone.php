<?php
    include 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Organizer Remind Everyone</title>
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
                                                        <h5>Send Mail </h5>
                                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                    </div>
                                                    <div class="card-block">
                                                        <form method="GET">
                                                            <div class="form-group row" id="pass">
                                                                <label class="col-sm-2 col-form-label">Enter Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control fill" name='name' required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" id="pass">
                                                                <label class="col-sm-2 col-form-label">Email ID</label>
                                                                <div class="col-sm-10">
                                                                    <input type="email" class="form-control fill" name='em' required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Email Body</label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="5" cols="5" class="form-control fill" name='bdy'>"Dear,We sending this email to remind you about blood campaign held at Dahanukar college."
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                            <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Send E-mail</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="col-md" style="padding-top:3em;">
                                                    <div class="card text-white card-primary" style="background-color:#2ed8b6;">
                                                        <div class="card-body">
                                                            <h5 id="car" style="color:black"></h5>
                                                            <p class="card-text"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="col-md" style="padding-top:3em;">
                                                    <div class="card text-white card-primary" style="background-color:#ff5370">
                                                        <div class="card-body">
                                                            <h5 class="card-title" id="no" style="color:black"></h5>
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
    <?php include 'footerlinks.php'; ?>
</body>

</html>
<?php

    use PHPMailer\PHPMailer\PHPMailer ;
    use PHPMailer\PHPMailer\Exception;

    require 'C:/wamp64/www/BDCOrganizer/Dashboard/mail/vendor/phpmailer/phpmailer/src/Exception.php';
    require 'C:/wamp64/www/BDCOrganizer/Dashboard/mail/vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'C:/wamp64/www/BDCOrganizer/Dashboard/mail/vendor/phpmailer/phpmailer/src/SMTP.php';
    require 'C:/wamp64/www/BDCOrganizer/Dashboard/mail/vendor/autoload.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = '';  //email id               
    $mail->Password   = '';  //pwd                                        
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    if (isset($_GET['submit'])) {
        $n = $_GET['name'];
        $em = $_GET['em'];
        $b = $_GET['bdy'];

        $mail->setFrom('');      //From
        $mail->addAddress($em);     //To Mail              
        $mail->addReplyTo('');


        //Attachments
        //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name



        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'This is demo email';
        $mail->Body    = $b;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if ($mail->send()) {
            echo "<script>document.getElementById('car').innerHTML = 'Email send to everyone successfully :)';</script>";
        } else {
            echo "<script>document.getElementById('no').innerHTML = 'Failed to send Email.. ';</script>";
        }
    }
    //session og
    if (isset($_SESSION['name']) && isset($_SESSION['pwd'])) {
        $n = $_SESSION['name'];
        $pwd = $_SESSION['pwd'];

        $q = "SELECT ID, Organizer_Name, Organizer_password ,Camp_Name FROM event WHERE Organizer_Name='$n' AND Organizer_password ='$pwd' ";
        $exe = mysqli_query($conn, $q);
        $result = mysqli_fetch_assoc($exe);

        // echo '<br> <a href="logout.php"><input type="button" value="Logout"></a>';
    } else {
        header('Location:index.php');
        die();
    }
?>