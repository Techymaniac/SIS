<?php
include "connection.php";
if (isset($_POST['submit'])) {
   
        
        $Firstname = $_POST['Fname'];
        $Lastname = $_POST['Lname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $regNo = $_POST['RegNo'];
        $class = $_POST['Class'];
        $rollNo = $_POST['rollno'];
        $phoneCode2 = $_POST['phoneCode2'];
        $userId = $_POST['UserId'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "studentlogin";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
           $update = "update `student` set `Fname` = '$Firstname', `Lname` = '$Lastname', `email` ='$email',`gender` = '$gender',`RegNo` = '$regNo', `Class` = '$class',`rollno` = '$rollNo' where UserId = '$userId';";
           
            $stmt = $conn->prepare($update);
            //$stmt->bind_param("s", $email);
            $stmt->execute();
            // $stmt->bind_result($resultEmail);
            // $stmt->store_result();
            // $stmt->fetch();
            // $rnum = $stmt->num_rows;

            // if ($rnum == 0) {
            //     $stmt->close();
            //     mysqli_query($conn,$Insert);
            //     header("location: student_profile.php");
                
            // }
            // else {
            //     header("location: student_reg_form.php");
            //     echo "Someone already registers using this email.";
            // }
            $conn->close();
            header("location: student_profile.php");
            
        }
   
}
else {
    echo "Submit button is not set";
}
?>