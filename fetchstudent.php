<?php
include "connection.php";
session_start();
$Fname = '';
$Lname = '';
$email = '';
$phone = '';
$Branch = '';
$userId = $_SESSION['userid'];
$studentId = '';
$subjectRow = array();
$resultSubjects = '';
if($userId)
{
$sqlStudentQuery = "select * from student where UserId='$userId' limit 1";
$resultStudent = mysqli_query($con,$sqlStudentQuery);
if(mysqli_num_rows($resultStudent)){
    $user = mysqli_fetch_array($resultStudent);
    $Fname = $user['Fname'];
    $Lname = $user['Lname'];
    $email = $user['email'];
    $phone= $user['Phone'];
    $RegNo= $user['RegNo'];
    $Branch= $user['phoneCode2'];
    $studentId= $user['Id'];
    $subjectQuery = "SELECT  s.Id,s.SubjectName,IFNULL(r.Marks,0) AS Marks FROM `subject` as s LEFT JOIN `studentresult` as r ON s.Id = r.SubjectId  AND r.StudentId = $studentId  WHERE `Branch`= '$Branch'";
    $resultSubjects = mysqli_query($con,$subjectQuery);
}
else{
    $message = "student not found!";
}
}

?>