<?php 
include "connection.php";
session_start();
$phoneCode2 = '';
$IT = "0";
$CS = "0";
$ECS = "0";
$EXTC = "0";
$CYSE = "0";
$AIDS = "0";
$userId = $_SESSION['userid'];

$sqlStudentListQuery = "SELECT UserId,Fname,Lname,RegNo FROM `student` Order by Id desc;";
$resultListStudent = mysqli_query($con,$sqlStudentListQuery);
// $studentList = mysqli_fetch_array($resultListStudent);

$sqlStudentQuery = "SELECT phoneCode2,COUNT(*) AS student FROM `student` Group BY phoneCode2;";
$resultStudent = mysqli_query($con,$sqlStudentQuery);
if(mysqli_num_rows($resultStudent)){
    while ($code = mysqli_fetch_array($resultStudent)){
         if($code['phoneCode2'] == 'IT')
         {
            $IT = $code['student'];
         }
         else if($code['phoneCode2'] == 'CS')
         {
            $CS = $code['student'];
         }
         else if($code['phoneCode2'] == 'ECS')
         {
            $ECS = $code['student'];
         }
         else if($code['phoneCode2'] == 'EXTC')
         {
            $EXTC = $code['student'];
         }
         else if($code['phoneCode2'] == 'CYSE')
         {
            $CYSE = $code['student'];
         }
         else if($code['phoneCode2'] == 'AIDS')
         {
            $AIDS = $code['student'];
         }
      }
    
}
?>