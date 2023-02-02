<?php
include 'connection.php';
session_start();
$id = $_SESSION['ID'];
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Organizer Export data</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php 
    include 'headerlinks.php';
    $donors = "SELECT * FROM donor_details WHERE Event_Id ='$id' AND Status='A'";
    $ex = mysqli_query($conn, $donors);
    $html = '<table border>
    <tr>
        <th>Donor Name</th>
        <th>Gender</th>
        <th>Blood Group</th>
        <th>Contact No</th>
        <th>Timeslot Booked</th> 
    </tr>';
    while ($s = mysqli_fetch_assoc($ex)) {
        $html .= '            
                <tr>
                    <td>' . $s['Donor_Name'] . '</td>
                    <td>' . $s['Donor_Gender'] . '</td>
                    <td>' . $s['Donor_Blood_Group'] . '</td>
                    <td>' . $s['Donor_ContactNo']  . '</td>
                    <td>' . $s['Timeslot_Booked'] . '</td>
                    <td>' . $s['Donor_Email'] . '</td>
                </tr>';
    }
    $html .= '</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=download.xls');
    echo $html;
?>

<?php
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