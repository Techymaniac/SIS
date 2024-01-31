<?php  include('fetchstudent.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Student_result</title>
	<link rel="stylesheet"
		href="student.css">
	<link rel="stylesheet"
		href="admin0.css">
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
					<a href="Student_profile.php"><div class="nav-option option">
						<img src=
"image/Profil_icon.png"
						    class="nav-img"
						    alt="profile">
						<h3 class="menutext"> Profile</h3>
					</div></a>

					<a href="Student_Library.php"><div class="nav-option option">
						<img src=
"image/Library_icon.png"
							class="nav-img"
							alt="articles">
						<h3 class="menutext">Library</h3>
					</div></a>

					<a href="Student_result.php"><div class="nav-option option3">
						<img src=
"image/Result_icon.png"
							class="nav-img"
							alt="report">
						<h3>Result</h3>
					</div></a>

					<a href="Student_fee.php"><div class="nav-option option">
						<img src=
"image/Fees_icon.png"
							class="nav-img"
							alt="institution">
						<h3 class="menutext"> Fees</h3>
					</div></a>

					<a href="Student_routine.php"><div class="nav-option option">
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
			 
				
				<div class="report-container">
					<div class="report-header">
						<h1 class="recent-Articles">Student Result</h1>
						<!-- <button class="view">View All</button> -->
					</div>
					<br>
					<div class="content">
            		   <div class="input-box">
            		       <label for="name">First Name: <?php echo $Fname; ?></label>
            		   </div>
            		   <div class="input-box">
            		       <label for="name">Last Name: <?php echo $Lname; ?> </label>
            		   </div>
            		   <div class="input-box">
            		       <label for="email">Email: <?php echo $email; ?></label>
            		   </div>
            		   <div class="input-box">
            		       <label for="Phone">Phone Number: <?php echo $phone; ?></label>
            		   </div>
					   <div class="input-box">
            		       <label for="Branch">Branch: <?php echo $Branch; ?></label>
            		   </div>
						<br/><hr/>
						<?php
						if($resultSubjects)
						{
						if(mysqli_num_rows($resultSubjects)){
						$num = 0;
						while($row = mysqli_fetch_array($resultSubjects))
						{$num++?>
						<div class="input-box">
            	 	       <label for="<?php echo $row['SubjectName'];?>"><?php echo $row['SubjectName'];?>: <?php echo $row['Marks'];?></label>
            	 	   </div>
						<?php
						}}}
						?>
						
            		</div>
			

				</div>
			
			</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
