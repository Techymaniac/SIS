<?php
include "connection.php";
if (isset($_POST['submit'])) {
   
        
        $Firstname = $_POST['Fname'];
        $Lastname = $_POST['Lname'];
        $position = $_POST['position'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $regNo = $_POST['RegNo'];
        $Exp = $_POST['Exp'];
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
           $update = "update `teacherprofil` set `Fname` = '$Firstname', `Lname` = '$Lastname', `email` ='$email',`Gender` = '$gender',`reg` = '$regNo', `Position` = '$position',`Exp` = '$Exp', `Branch`= '$phoneCode2' where UserId = '$userId';";
           
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
            header("location: Teacher_profile.php");
           
        }
   
}
else {
    echo "Submit button is not set";
}
?>