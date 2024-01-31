<?php  include('teacherstudent.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Teacher_student</title>
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

					<a href="Teacher_student.php"><div class="nav-option option2">
						<img src=
"image/Teacher Student.png"
							class="nav-img"
							alt="articles">
						<h3> Student</h3>
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

			<!-- <div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div> -->

			<div class="box-container">
				<div class="srushti box1">
					<div class="text">
						<h2 class="topic-heading"><?php echo $IT ?></h2>
						<h2 class="topic">IT</h2>
					</div>
				</div>

				<div class="srushti box2">
					<div class="text">
						<h2 class="topic-heading"><?php echo $CS ?></h2>
						<h2 class="topic">CS</h2>
					</div>
				</div>

				<div class="srushti box3">
					<div class="text">
						<h2 class="topic-heading"><?php echo $ECS ?></h2>
						<h2 class="topic">ECS</h2>
					</div>
				</div>

				<div class="srushti box4">
					<div class="text">
						<h2 class="topic-heading"><?php echo $EXTC ?></h2>
						<h2 class="topic">EXTC</h2>
					</div>
			</div>
			<div class="box-container">
			<div class="srushti box5">
					<div class="text">
						<h2 class="topic-heading"><?php echo $CYSE ?></h2>
						<h2 class="topic">CYSE</h2>
					</div>
			</div>

			<div class="srushti box6">
					<div class="text">
						<h2 class="topic-heading"><?php echo $AIDS ?></h2>
						<h2 class="topic">AIDS</h2>
					</div>
			</div>
			</div>
			<div class="container4">
				<div class="report-header">
					<h1 class="recent-Articles">All Student</h1>
					<!-- <button class="view">View All</button> -->
				</div>
				<br>
				<div class="box-container">
					<!-- <div class="report-topic-heading">
						<h3 class="t-op">Article</h3>
						<h3 class="t-op">Views</h3>
						<h3 class="t-op">Comments</h3>
						<h3 class="t-op">Status</h3>
					</div> -->
					<?php while ($row = mysqli_fetch_array($resultListStudent)) { ?>
					<!-- <div class="items">
						<div class="item1">
							<h3 class="t-op-nextlvl"></h3>
							<h3 class="t-op-nextlvl"><a href = "">View Profile </a></h3>
						</div>
					</div> -->
					<div class="box box1">
							<a style="text-decoration:none;" href="/Sis/TSprofile.php?userid=<?php echo $row['UserId'];?>" ><div class="text">
								<h2 class="topic-heading"><?php echo $row['Fname']; echo ' '; echo $row['Lname']; ?> ( <?php echo $row['RegNo']; ?>)</h2>
								
							</div></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
