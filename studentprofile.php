<?php
include "connection.php";
session_start();
$Fname = '';
$Lname = '';
$email = '';
$rollno = '';
$RegNo = '';
$Branch = '';
$Gender = '';
$Year_Div = '';
$userId = $_SESSION['userid'];
$sqlStudentQuery = "select * from student where UserId='$userId'";
$resultStudent = mysqli_query($con,$sqlStudentQuery);
if(mysqli_num_rows($resultStudent)){
    $user = mysqli_fetch_array($resultStudent);
    $Fname = $user['Fname'];
    $Lname = $user['Lname'];
    $email = $user['email'];
    $rollno= $user['rollno'];
    $RegNo= $user['RegNo'];
    $Branch= $user['phoneCode2'];
    $Gender= $user['gender'];
    $Year_Div= $user['Class'];
}
?>