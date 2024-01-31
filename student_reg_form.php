<?php  include('studentlogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script 
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="Container">
        <form action="insert.php" method="post">
            <input type="hidden" name="UserId" value="<?php echo $_SESSION['userid'];?>">
            <h2>Registration Form</h2>
            <br>
            <h3>Personal Information</h3>
            <br>
            <!-- <div class="upload">
                <img src="image/noprofil.jpg" width = 100 height = 100 alt="">
                <div class="round">
                  <input type="file">
                  <i class = "fa fa-camera" style = "color: #fff;"></i>
                </div>
            </div> -->
            <div class="content">
                <div class="input-box">
                    <label for="name">First Name</label>
                    <input type="text" placeholder="Enter First Name" name="Fname" required> 
                </div>
                <div class="input-box">
                    <label for="name">Last Name</label>
                    <input type="text" placeholder="Enter Last Name" name="Lname" required> 
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Enter your valid email address" name="email" required> 
                </div>
                <div class="input-box">
                    <label for="Phone">Phone Number</label>
                    <input type="tel" placeholder="Enter phone number" name="Phone" required> 
                </div>
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" value="Male" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="Female" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="Other" id="other">
                    <label for="other">other</label>
                </div>
            </div>
            <h3>Education</h3>
            <br>
            <div class="content">
               
                <div class="input-box">
                    <label for="Reg">Registration Number</label>
                    <input type="number" placeholder="Enter Registration number" name="RegNo" required> 
                </div>
                <br>
                <div class="input-box">
                    <label for="Reg">Smartcard Number</label>
                    <input type="number" placeholder="Enter Smartcard number" name="Smartcard" required> 
                </div>
                <br>
                <div class="input-box">
                    <label for="Reg">Class Number</label>
                    <input type="text" placeholder="Enter Division" name="Class" required> 
                </div>
                <br>
                <div class="input-box">
                    <br>
                    <label for="Reg">Roll Number</label>
                    <input type="number" placeholder="Enter Roll No" name="rollno" required> 
                </div>
                <br>
                <div class="input-box">
                    <label for=""> Past Qualification</label>
                    <!-- <input type="studies" placeholder="Enter Qualification" name="Qualification" required> -->
                    <div id="select" class="input-box">
                        <select name="phoneCode1" id="">
                            <option value="SSC" selected="selected">SSC</option>
                            <option value="10+2" selected="selected">10+2 (HSC)</option>
                            <option value="Diploma" selected="selected">Diploma</option>
                            <option value="BE" selected="selected">BE</option>
                            <option value="Other" selected="selected">Other</option>
                            <option selected hidden value="">--select--</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-box">
                    <label for="">Current Branch</label>
                    <br>
                    <div id="select" class="input-box">
                        <select name="phoneCode2" id="">
                            <option value="ECS" selected="selected">ECS</option>
                            <option value="CS" selected="selected">CS</option>
                            <option value="IT" selected="selected">IT</option>
                            <option value="EXTC" selected="selected">EXTC</option>
                            <option value="CYSE" selected="selected">CYSE</option>
                            <option value="AIDS" selected="selected">AIDS</option>
                            <option selected hidden value="">--select--</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <h3>Address</h3>
                <br>
                <div class="input-box">
                    <label for="text">Address</label>
                    <textarea placeholder="Enter Address" name="address" rows="4" cols="50"></textarea>
                </div>
            </div>
            
            <div class="alert">
                <p>By clicking Registration, you agree to our <a href="#">Terms,</a> <a href="#">Privacy Policy</a> and <a href="#">Cookies Policy.</a> You may receive SMS notifications from us and opt at any time.</p>
            </div>
            <div class="button-container">
                <!-- <button >Register</button> -->
                <input type="submit" value="Register" name="submit" class="changebtn">
            </div>
            
        </form>
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


</body>
</html>
