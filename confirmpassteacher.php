<?php 
    //$message = '';
    include "connection.php";
    session_start();
    
    if($_POST['updateteacherpassword'] == 'Update'){
       
        $password = $_POST['password'];
        $cpassword = $_POST['cnfpass'];
        $oldpass = $_POST['op'];
        $userId = $_POST['UserId']; 
         if($password !== $cpassword){
             $message = "Confirm password not matched!";
            
         }else{
            $sql = "select * from `users` where Id = '$userId' and password='$oldpass';";
            
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)){
                $update = "update `users` set `password` = '$password' where Id = '$userId';";
                $resultupdate = mysqli_query($con,$update);
                $message = "Your password changed. Now you can login with your new password.";
            }
            else{
                $message = "Your old password does not match! you can contact to admin.";
            }
            header('Location: Teacher_setting.php');
            
            
        }
    }

?>