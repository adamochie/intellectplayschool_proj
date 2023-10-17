<?php
include("dbconnect.php");
$attdate = $_POST['attdate'];
$attcat = $_POST['attcat'];
$attreason = $_POST['reason'];


// Check if the date already exists in the database
$query = "SELECT * FROM attendance WHERE att_Date = '$attdate'";
$result = mysqli_query($con, $query);
$num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
    // Update the existing record
    $query ="UPDATE attendance 
            SET att_Type = '$attcat',
                att_Reason = '$attreason'
            WHERE att_Date = '$attdate'";
    
    mysqli_query($con, $query);
    } 
    else {
    // Insert a new record
    $query ="INSERT INTO attendance(att_User,att_Date,att_Type,att_Reason,acc_ID) VALUE (1,'$attdate','$attcat','$attreason',123)";
    mysqli_query($con, $query);
    }





//close connection
mysqli_close($con);

header('location: staff_attendance_view.php');
?>