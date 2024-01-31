<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'studentlogin';
    $con = mysqli_connect($server,$username,$password,$db);
    if(!$con){
        die("connection nahi hua");
    }
?>
