<?php  include('studentprofile.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Student_Profile</title>
	<link rel="stylesheet" href="student.css">
	<link rel="stylesheet" href="admin0.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Student Dashboard</div>
			<!-- <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> -->
		</div>
<!-- <div class="btn">
	<a href="Home.html"><img src="image/Home button.png" alt="" class="home"></a>
</div> -->
		
<a href="Home.php"><button class="btn"><i class="fa fa-home"></i></i></button></a>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<a href="student_profile.php"><div class="nav-option option1">
						<img src=
"image/Profil_icon.png"
						    class="nav-img"
						    alt="profile">
						<h3> Profile</h3>
					</div></a>

					<a href="Student_Library.php"><div class="nav-option option">
						<img src=
"image/Library_icon.png"
							class="nav-img"
							alt="articles">
						<h3 class="menutext">Library</h3>
					</div></a>

					<a href="Student_Result.php"><div class="nav-option option">
						<img src=
"image/Result_icon.png"
							class="nav-img"
							alt="report">
						<h3 class="menutext">Result</h3>
					</div></a>

					<a href="Student_fee.php"><div class="nav-option option">
						<img src=
"image/Fees_icon.png"
							class="nav-img"
							alt="institution">
						<h3 class="menutext"> Fees</h3>
					</div></a>

					<a href="Student_Routine.php"><div class="nav-option option">
						<img src=
"image/Routine_icon.png"
							class="nav-img"
							alt="blog">
						<h3 class="menutext"> Routine</h3>
					</div></a>

					<a href="Student_setting.php"><div class="nav-option option">
						<img src=
"image/Setting_icon.png"
							class="nav-img"
							alt="settings">
						<h3 class="menutext"> Settings</h3>
					</div></a>

					<a href="Student_logout.php"><div class="nav-option logout">
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


			<div class="wrapper">
				<div class="left">
				   <img src="image/profile.jpeg" alt="user" width="100">
					<!-- <h4>Student Name</h4> -->
					<p><?php echo $Fname; ?></p>
					<p><?php echo $Lname; ?></p>
					 
				</div>
				<div class="right">
					<div class="info">
						<h3>Information</h3>
						<div class="info_data">
						  <div class="data">
							<h4>E-mail</h4>
							 <p><?php echo $email; ?></p>
						</div>
							 <div class="data">
								<h4>Roll No</h4>
								<p><?php echo $rollno; ?></p>
							 </div>
							 <div class="data">
							   <h4>Reg No.</h4>
							   <p><?php echo $RegNo; ?></p>
						  </div>
							<div class="data">
							  <h4>Branch</h4>
							  <p><?php echo $Branch; ?></p>
			
							</div>
							<div class="data">
							  <h4>Gender</h4>
							  <p><?php echo $Gender; ?></p>
						  </div>
						  <div class="data">
							<h4>Year/Div</h4>
							<p><?php echo $Year_Div; ?></p>
						</div>
						<a href="student_profile_edit.php"><button class="bttn">Edit</button></a>
							
						</div>
					</div>
				  
				 
					
				</div>
			</div>

			</div>
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
