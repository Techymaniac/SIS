<?php
if (isset($_POST['submit'])) {
   
        
        $Firstname = $_POST['Fname'];
        $Lastname = $_POST['Lname'];
        $email = $_POST['email'];
        $phone = $_POST['Phone'];
        $gender = $_POST['gender'];
        $regNo = $_POST['RegNo'];
        $Smartcard = $_POST['Smartcard'];
        $class = $_POST['Class'];
        $rollNo = $_POST['rollno'];
        $phoneCode = $_POST['phoneCode1'];
        $phoneCode2 = $_POST['phoneCode2'];
        $address = $_POST['address'];
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
            $Select = "SELECT email FROM student WHERE email = '$email' LIMIT 1";
            $Insert = "INSERT INTO `student` (`UserId`,`Fname`, `Lname`, `email`, `Phone`, `gender`, `RegNo`, `Smartcard`, `Class`, `rollno`, `phoneCode1`, `phoneCode2`, `address`) VALUES ('$userId','$Firstname', '$Lastname', '$email', '$phone', '$gender', '$regNo', '$Smartcard', '$class', '$rollNo', '$phoneCode', '$phoneCode2', '$address');";

            $stmt = $conn->prepare($Select);
            //$stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                mysqli_query($conn,$Insert);
                header("location: student_profile.php");
                // $stmt = $conn->prepare($Insert);
                // $stmt->bind_param("ssssii",$username, $password, $gender, $email, $phoneCode, $phone);
                // if ($stmt->execute()) {
                //     echo "New record inserted sucessfully.";
                // }
                // else {
                //     echo $stmt->error;
                // }
            }
            else {
                header("location: student_reg_form.php");
                echo "Someone already registers using this email.";
            }
            
            $conn->close();
        }
   
}
else {
    echo "Submit button is not set";
}
?>