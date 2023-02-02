  
<?php
include 'connection.php';

session_start();

if( isset($_POST['login']) )
{
    $un = $_POST['fname'];
    $pwd = $_POST['og-pwd'];
    $q=" SELECT UserId,Password FROM admin WHERE UserId='$un' AND Password='$pwd'";
    $exe = mysqli_query($conn,$q);
    $t = mysqli_num_rows( $exe ); 
     if( $t!= 0){
         $_SESSION['adname']= $un;
         $_SESSION['adpwd']= $pwd;
         header('Location:Admin.php');
         die();
    }
    else{
        echo 'incorrect';
        header('Location:Admin-login.php');
        die();       
    }

}


?>