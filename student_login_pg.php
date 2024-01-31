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
    <script 
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
    ></script>
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="studentlogin.php" method="post" class="sign-in-form" >
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email" required="required">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="password" name="password" placeholder="Password" required="required">
                </div>
                <input type="submit" value="Login" class="btn solid" name="loginbtn">

                <!-- <p class="social-text">Or Sign in with social platforms</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.twitter.com/" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.google.com/" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="https://www.linkedin.com/" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div> -->
            </form>

            <form action="studentlogin.php" method="post" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="Email" placeholder="Email" required="required">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="password" name="password" placeholder="Password" required="required">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="password" placeholder="Confirm Password" required="required"s>
                </div>
                <input type="submit" value="Sign up" class="btn solid" name="signupbtn">

                <!-- <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="https://www.facebook.com/" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.twitter.com/" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.google.com/" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="https://www.linkedin.com/" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div> -->
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>Please Sign up for your further proceedings</p>
                <button class="btn transparent" id="sign-up-btn">Sign up</button>
            </div>

            <img src="image/teacher.svg" alt="" class="image">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>Signed up ? Login and stay updated to your account !!</p>
                <button class="btn transparent" id="sign-in-btn">Sign in</button>
            </div>

            <img src="image/student.svg" alt="" class="image">
        </div>
    </div>
    </div>
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

    <script src="app.js"></script>
</body>
</html>