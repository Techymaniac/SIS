<?php
    session_start();
    include "connection.php";
    $message="";
    if (isset($_POST['loginbtn'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        if($email != 'teacher@gmail.com')
        {
            header("location: teacher_login.php");
            exit();
        }
        $_SESSION['userid'] = '6'; 
        $sql = "select * from users where email='$email' and password='$pass' limit 1;";
        $result = mysqli_query($con,$sql);
        var_dump(mysqli_num_rows($result));
        if(mysqli_num_rows($result)){
            $user = mysqli_fetch_array($result);
            $userId = $user['Id'];
            //$_SESSION['userid'] = $userId; 

            if($email == 'teacher@gmail.com')
            {
                header("location: teacher_profile.php");
            }
            else
            {
                
                $sqlStudentQuery = "select * from student where UserId='$userId'";
                $resultStudent = mysqli_query($con,$sqlStudentQuery);
                var_dump(mysqli_num_rows($resultStudent));
                if(mysqli_num_rows($resultStudent))
                {
                    header("location: student_profile.php");
                }
                else{
                     header("location: student_reg_form.php");
                } 
            }
            
            exit();
        }else{
            $err = 'UserName Or Password dose not matched.';
            if($email == 'teacher@gmail.com')
            {
                header("location: teacher_login.php");
            }
            else
            {
                header("location: student_login_pg.php");
            }
            exit();
        }
    }
    if (isset($_POST['signupbtn'])){
        $email = $_POST['Email'];
        $pass = $_POST['password'];
        
        $userId = "select Id from users where email='$email'";
        $result = mysqli_query($con,$userId);
        var_dump(mysqli_num_rows($result));
        if(mysqli_num_rows($result)){
            header("location: student_login_pg.php");
            exit();
           
        }
        else{
            $sql1 = "insert into users (Email,password) values ('$email','$pass')";
            mysqli_query($con,$sql1);
            $sql = "select * from users where email='$email' and password='$pass'";
            $result1 = mysqli_query($con,$sql);
            var_dump(mysqli_num_rows($result1));
            if(mysqli_num_rows($result1)){
                $user = mysqli_fetch_array($result1);
                $userId = $user['Id'];
                $_SESSION['userid'] = $userId; 
            }    
            header("location: student_reg_form.php");
            exit();
        }
       
       
    }
?>