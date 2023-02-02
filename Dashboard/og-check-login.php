  
<?php
include 'connection.php';
session_start();
if( isset($_POST['login']) )
{
    $un = $_POST['fname'];
    $pwd = $_POST['og-pwd'];
    $q = "SELECT ID, Organizer_Name, Organizer_password ,Camp_Name FROM event WHERE Organizer_Name ='$un' AND Organizer_password ='$pwd' AND Status='A' limit 1";
    $exe = mysqli_query($conn,$q);
    $t = mysqli_num_rows( $exe ); 
    $result= mysqli_fetch_assoc($exe);
     if( $t!= 0){
         $_SESSION['name']= $un;
         $_SESSION['pwd']= $pwd;
         $_SESSION['ID'] = $result['ID'];
         header('Location:og-donors.php');
         die();
    }
    else{
        echo 'incorrect';
        header('Location:index.php');
        die();
    }
}
?>