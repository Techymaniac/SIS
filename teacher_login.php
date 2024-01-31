<?php
session_start();
session_unset();
session_destroy();
//header('location: login-user.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <link rel="stylesheet" href="om.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg">
    <section class="d-flex flex-colum min-vh-100 justify-content-center align-items-center">
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto rounded shadow bg-white">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="m-5 text-center">
                                <h1>Welcome!</h1>
                            </div>
                            <form action="teacherlogin.php" method="POST" class="m-5">
                                <div class="mb-3">
                                    <label class="form-label" for="username">E-mail</label>
                                    <input class="form-control" name="email" type="text" id="username">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-control" name="password" type="password" id="password">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-me">
                                            <label class="form-check-label" for="remember-me">Remember-me</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-end">
                                            <!-- <a href="#">Forgot Password?</a> -->
                                        </div>
                                    </div>
                                    <div>
                                        <input type="Submit" name="loginbtn" value="Login" class="btn-grad">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <img src="image/login-3.svg" alt="Login" class="img-fluid p-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
   
</body>
</html>