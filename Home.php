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
    <link rel="stylesheet" href="Home.css">
    <!-- <link rel="stylesheet" href="mumalindex.css">  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Home_page</title>
</head>
<body class="site-header">
    <header class="clearfix">
        <nav>
        <div class="logo">
        <h1>QuickTech</h1>
        </div>
        <div class="menu"> 
        <ul>
            <a href="Home.php"><li>Home</li></a>
            <a href="https://drive.google.com/file/d/18oDXg9JYLKpaLBpXuXcNsa4v-R4sUMTb/view?usp=share_link"><li>Notification</li></a>
            <a href="https://drive.google.com/file/d/1xHS30K-3ZD46r6azxvopkpqzC9csTL3M/view?usp=share_link"><li>Scholarship</li></a>
            <li>AboutUs</li>
            <li>ContactUs</li>
        </ul>
        </div>
        </nav>
        <section>
            <div class="leftside"> 
            <img src="image/intro4.png">
            </div>
            <div class="rightside"> 
            <h1>Student</h1>
            <h1>Information</h1>
            <h1> System</h1>
           <p> A student information system is a software solution that has all the information of a student under a single dashboard. This makes it easy to track the progress of the student over time when it comes to academic performance. In addition, it also helps admins track the fees the student has pending and details about the facilities used by the student in one place.</p>
            <a href="index.php"><button>Welcome</button></a>
            </div>
        
        </section>
    </header>
    <br>
    <br>
    <br>
 <div class="card">
    <div class="report-container">
        <div class="report-header">
            <!-- <h1 class="recent-Articles">om ayya jo ...keu che mane ke..khali colour change karvu padse and pachi bija kaam pan che add karvanu </h1> -->
            
        </div>
        <br>
 <div class="report-body">
    <div class="report-topic-heading">
        <h3 class="t-op">Notifications</h3>
        <a href="https://drive.google.com/file/d/18oDXg9JYLKpaLBpXuXcNsa4v-R4sUMTb/view?usp=share_link"><button class="view">View</button></a>
        
    </div>
    <br>
    <div class="report-topic-heading">
        <h3 class="t-op">Schedule</h3>
        <a href="https://drive.google.com/file/d/1KhQbcNyelfp65CpPuffjNLrTH9_maTMf/view?usp=share_link"><button class="view">View</button></a>
        
    </div>
    <br>
    <div class="report-topic-heading">
        <h3 class="t-op">Candidate/Admin Login</h3>
        <a href="index.php"><button class="view">Login</button></a>
        
    </div>
    <br>
    <div class="report-topic-heading">
        <h3 class="t-op">User Manual</h3>
        <a href="USER_MANUAL.pdf"></a>
        <a href="https://drive.google.com/file/d/1fPGh_htW_v8ezhejPfCzCSvi8taNJqMY/view?usp=share_link"><button class="view">View </button></a>
        
    </div>
    <br>
    <div class="report-topic-heading">
        <h3 class="t-op">Subjects/Syllabus</h3>
        <a href="https://drive.google.com/file/d/1llb5vGqqM9Lm6iIIJBOO6MVgo2O3ChGz/view?usp=share_link"><button class="view">View</button></a>
        
    </div>
    <br>
    <div class="report-topic-heading">
        <h3 class="t-op">Question Papers</h3>
        <a href="https://drive.google.com/file/d/1dZahdSL6CTBrf6MFjAMsZ8z5AqGRvY0d/view?usp=share_link"><button class="view">View All</button></a>
        
    </div>
    </div>
    </div>
   
 <!-- Contact Section -->
    <!-- <section id="contact">
        <div class="contact container">
            <div>
            <h1 class="section-title"><span>C</span>ontact <span>I</span>nfo</h1>
            </div>
            <div class="contact-items">
            <div class="contact-item">
                <div class="icon">
                <a href="8010034811"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></a>
                </div>
                <div class="contact-info">
                <h1>Phone</h1>
                <h2>8010034811</h2>

                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><a class="#" href="contact.html"><img src="img/icons8-gmail-logo-50.png" /></a></div>
                <div class="contact-info">
                <h1><a class="#" href="contact.html">Email</a></h1>
                <h2>mumalsolanki163@gmail.com</h2>


                </div>
            </div>
            <div class="contact-item">
                <div class="icon">
                <a href="https://goo.gl/maps/723wWU7u2wxcSiby9"><img
                    src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></a>
                </div>
                <div class="contact-info">
                <h1><a href=" https://goo.gl/maps/723wWU7u2wxcSiby9">Address</a></h1>
                <h2>Ambernath ,Mumbai, Maharashtra</h2>

                </div>
            </div>
            </div>
        </div>
    </section> -->
  <!-- End Contact Section -->

</body>
</html>