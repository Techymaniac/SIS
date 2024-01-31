<?php  include('teacherprofile.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Teacher_Profile</title>
	<link rel="stylesheet"
		href="admin.css">
	<link rel="stylesheet"
		href="admin0.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Dashboard</div>
			<!-- <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> -->
		</div>
		
		<a href="Home.php"><button class="btn"><i class="fa fa-home"></i></button></a>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<a href="Teacher_profile.php"><div class="nav-option option1">
						<img src=
"image/Profil_icon.png"
						    class="nav-img"
						    alt="profile">
						<h3> Profile</h3>
					</div></a>

					<a href="Teacher_student.php"><div class="nav-option option">
						<img src=
"image/Teacher Student.png"
							class="nav-img"
							alt="articles">
						<h3 class="menutext"> Student</h3>
					</div></a>

					<a href="Teacher_result.php"><div class="nav-option option">
						<img src=
"image/Result_icon.png"
							class="nav-img"
							alt="report">
						<h3 class="menutext">Result</h3>
					</div></a>

					<a href="Teacher_fee.html"><div class="nav-option option">
						<img src=
"image/Fees_icon.png"
							class="nav-img"
							alt="institution">
						<h3 class="menutext"> Fees</h3>
					</div></a>

					<a href="Teacher_routine.html"><div class="nav-option option">
						<img src=
"image/Routine_icon.png"
							class="nav-img"
							alt="blog">
						<h3 class="menutext"> Routine</h3>
					</div></a>

					<a href="Teacher_setting.php"><div class="nav-option option">
						<img src=
"image/Setting_icon.png"
							class="nav-img"
							alt="settings">
						<h3 class="menutext"> Settings</h3>
					</div></a>

					<a href="Teacher_logout.php"><div class="nav-option logout">
						<img src=
"image/Logout_icon.png"
							class="nav-img"
							alt="logout">
						<h3 class="menutext">Logout</h3>
					</div></a>

				</div>
			</nav>
		</div>
		<div class="main">

		<form action="teacherprofilesave.php" method="post">
            <div class="wrapper">
				<div class="left">
				   <img src="image/img0.png" alt="user" width="100">
				   <input class="boox" name="Fname" value="<?php echo $Fname; ?>">
					<input class="boox" name="Lname" value="<?php echo $Lname; ?>">
					<input type="hidden" name="UserId" value="<?php echo $_SESSION['userid'];?>">
				</div>
				<div class="right">
					<div class="info">
						<h3>Information</h3>
						<div class="info_data">
						  <div class="data">
							<h4>Position</h4>
							<input class="boox" name="position" value="<?php echo $position; ?>">
						</div>
						<div class="data">
						<h4>E-mail</h4>
						<input class="boox" name="email" value="<?php echo $email; ?>">
						</div>

						<div class="data">
						<h4>Reg No.</h4>
						<input class="boox"  name="RegNo" value="<?php echo $RegNo; ?>">
						  </div>

						<div class="data">
							<h4>Branch</h4>
							<input class="boox" name="phoneCode2" value="<?php echo $Branch; ?>">		
						</div>

						<div class="data">
							<h4>Gender</h4>
							<input class="boox" name="gender" value="<?php echo $Gender; ?>">
						  </div>

						  <div class="data">
							<h4>Years of Experience</h4>
                            <input class="boox" name="Exp" value="<?php echo $Exp; ?>">
						</div>
						<!-- <a href="Teacher_profile.html"><button class="bttn">Save</button></a> -->
						<input type="submit" class="bttn" value="Save" name="submit">
						</div>
					</div>
				  
				 
					
				</div>
			</div>
		</form>

			</div>
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
