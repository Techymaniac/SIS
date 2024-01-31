<?php
include "connection.php";
session_start();
$Fname = '';
$Lname = '';
$position = '';
$email = '';
$RegNo = '';
$Branch = '';
$Gender = '';
$Exp = '';
$userId = $_SESSION['userid'];
$sqlStudentQuery = "select * from teacherprofil where UserId='$userId'";
$resultStudent = mysqli_query($con,$sqlStudentQuery);
if(mysqli_num_rows($resultStudent)){
    $user = mysqli_fetch_array($resultStudent);
    $Fname = $user['Fname'];
    $Lname = $user['Lname'];
    $position = $user['Position'];
    $email = $user['email'];
    $RegNo= $user['reg'];
    $Branch= $user['Branch'];
    $Gender= $user['Gender'];
    $Exp= $user['Exp'];
}
?>