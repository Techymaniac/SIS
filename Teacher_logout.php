<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Teacher_logout</title>
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
		


		<!-- <div class="searchbar"> -->
			<!-- <input type="text" -->
				<!-- placeholder="Search"> -->
			<!-- <div class="searchbtn"> -->
			<!-- <img src=
"image/Home button.png"
					class="icn srchicn"
					alt="search-icon">
			</div>
		</div> -->

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
						<h3 class="menutext"> Fees</h3>
					</div></a>

					<a href="Teacher_routine.php"><div class="nav-option option">
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

					<a href="Teacher_logout.php"><div class="nav-option option7">
						<img src=
"image/Logout_icon.png"
							class="nav-img"
							alt="logout">
						<h3>Logout</h3>
					</div></a>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="container2">
				<div class="report-header">
					<h1 class="om">Logout</h1>
					<!-- <button class="view">View All</button> -->
				</div>

				<br>
				<label class="sure">Are you sure?</label>
				<br>
				<label class="om2">You want to Logout</label>
				<br>
				<br>
				<div>
				<a href="Home.php"><button type="submit" class="change">Logout</button></a>
				</div>
				<br>
				<br>
				<div>
				<a href="Teacher_profile.php"><button type="cancel" class="cancel">Cancel</button></a>
				</div>
			</div>
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
