<?php  include('teacherlogin.php'); 
$password = '';
$cpassword = '';
$oldpass = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Teacher_setting</title>
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
					<a href="Teacher_profile.php"><div class="nav-option option">
						<img src=
"image/Profil_icon.png"
						    class="nav-img"
						    alt="profile">
						<h3 class="menutext"> Profile</h3>
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

					<a href="Teacher_fee.php"><div class="nav-option option">
						<img src=
"image/Fees_icon.png"
							class="nav-img"
							alt="institution">
						<h3 class="menutext">Fees</h3>
					</div></a>

					<a href="Teacher_routine.php"><div class="nav-option option">
						<img src=
"image/Routine_icon.png"
							class="nav-img"
							alt="blog">
						<h3 class="menutext">Routine</h3>
					</div></a>

					<a href="Teacher_setting.php"><div class="nav-option option6">
						<img src=
"image/Setting_icon.png"
							class="nav-img"
							alt="settings">
						<h3> Settings</h3>
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

			
		<form action="confirmpassteacher.php" method="post" >
		<input type="hidden" name="UserId" value="<?php echo $_SESSION['userid'];?>">
			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Change Password</h1>
					<!-- <button class="view">View All</button> -->
				</div>
				<br>
				<label>Old Password</label>
				<input type="password" required
					   name="op"
					   placeholder="Old Password" value = "<?php echo $oldpass; ?>">
					   <br>

				<label>New Password</label>
				<input type="password" required
						name="password"
						placeholder="New Password" value = "<?php echo $password; ?>">
						<br>
						
				<label>Confirm Password</label>
				<input type="text" required
						name="cnfpass"
						placeholder="Confirm New Password" value = "<?php echo $cpassword; ?>">
						<br>
					
				<input type="submit" name="updateteacherpassword" value="Update" class="changebtn">
						<div class="input-box">
            		       <label></label>
            			</div>
				<!-- <button name="change-password" type="submit" class="changebtn">Change</button>
				<a href="Home.html" class="ca">Home</a> -->
		</form>
		
			</div>
		</div>
	</div>



	<script src="./index.js"></script>
</body>
</html>
