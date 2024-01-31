<?php
    //$message = '';
    session_start();
    if(isset($_POST['submit'])){
        
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $oldpass = $_POST['op'];
        $userId = $_POST['UserId']; 
        if($password !== $cpassword){
            $message = "Confirm password not matched!";
        }else{
            $host = "localhost";    
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "studentlogin";
            
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
            if ($conn->connect_error) {
                $message = "error while db connection!";
                die('Could not connect to the database.');
            }
            else {
                
                $sql = "select * from users where Id = '$userId' and password='$oldpass'";
                $result = mysqli_query($conn,$sql);
                //var_dump(mysqli_num_rows($result));
                if(mysqli_num_rows($result)){
                $update = "update users set password = '$password' where Id = '$userId';";
                $stmt = $conn->prepare($update);
                $stmt->execute();
                $conn->close();
                $message = "Your password changed. Now you can login with your new password.";
                }
                else{
                    $message = "Your old password does not match! you can contact to admin.";
                    $conn->close();
                }
                
                header('Location: student_setting.php');
            }
        }
    }
?>