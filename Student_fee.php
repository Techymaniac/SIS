<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Student_fee</title>
	<link rel="stylesheet"
		href="Student.css">
	<link rel="stylesheet"
		href="admin0.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}
		
		th, td {
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {background-color: #f2f2f2;}
		</style>
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
					<a href="student_profile.php"><div class="nav-option option">
						<img src=
"image/Profil_icon.png"
						    class="nav-img"
						    alt="profile">
						<h3 class="menutext"> Profile</h3>
					</div></a>

					<a href="Student_library.php"><div class="nav-option option">
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

					<a href="Student_fee.php"><div class="nav-option option4">
						<img src=
"image/Fees_icon.png"
							class="nav-img"
							alt="institution">
						<h3> Fees</h3>
					</div></a>

					<a href="Student_routine.php"><div class="nav-option option">
						<img src=
"image/Routine_icon.png"
							class="nav-img"
							alt="blog">
						<h3 class="menutext"> Routine</h3>
					</div></a>

					<a href="student_setting.php"><div class="nav-option option">
						<img src=
"image/Setting_icon.png"
							class="nav-img"
							alt="settings">
						<h3 class="menutext"> Settings</h3>
					</div></a>

					<a href="student_logout.php"><div class="nav-option logout">
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

			<!-- <div class="box-container">

				<div class="box box1">
					<div class="text">
						<h2 class="topic-heading">60.5k</h2>
						<h2 class="topic">Article Views</h2>
					</div>

					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
						alt="Views">
				</div>

				<div class="box box2">
					<div class="text">
						<h2 class="topic-heading">150</h2>
						<h2 class="topic">Likes</h2>
					</div>

					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
						alt="likes">
				</div>

				<div class="box box3">
					<div class="text">
						<h2 class="topic-heading">320</h2>
						<h2 class="topic">Comments</h2>
					</div>

					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
						alt="comments">
				</div>

				<div class="box box4">
					<div class="text">
						<h2 class="topic-heading">70</h2>
						<h2 class="topic">Published</h2>
					</div>

					<img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
				</div>
			</div> -->

			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Payment of Fees for the Academic Year 2022-23</h1>
					<!-- <button class="view">View All</button> -->
				</div>

				<div style="overflow-x: auto;">
  <table>
    <tr>
      <th>Student Admited</th>
      <th>Open</th>
      <th>OBC</th>
      <th>TFWS</th>
      <th>SC/ST</th>
      <th>DTNT</th>
      <th>SBC</th>
      <th>J&K</th>
    </tr>
    <tr>
      <td>Tuition Fees</td>
      <td>1,03,090</td>
      <td>51,545</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>20,000</td>
    </tr>
    <tr>
      <td>Development Fees</td>
      <td>10,310</td>
      <td>10,310</td>
      <td>10,310</td>
      <td>-</td>
      <td>10,310</td>
      <td>10,310</td>
      <td>4000</td>
      
    </tr>
    <tr>
      <td>Gymkhana</td>
      <td>200</td>
      <td>200</td>
      <td>200</td>
      <td>200</td>
      <td>200</td>
      <td>200</td>
      <td>200</td>
    </tr>
    
    <tr>
      <td>E-charges</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
      <td>50</td>
    </tr>
    
    <tr>
      <td>Ashwamedh</td>
      <td>30</td>
      <td>30</td>
      <td>30</td>
      <td>30</td>
      <td>30</td>
      <td>30</td>
      <td>30</td>
    </tr>
    
    <tr>
      <td>Disaster Relief Fund</td>
      <td>10</td>
      <td>10</td>
      <td>10</td>
      <td>10</td>
      <td>10</td>
      <td>10</td>
      <td>10</td>
    </tr>
    
     <tr>
      <td>Cultural Activies</td>
      <td>6</td>
      <td>6</td>
      <td>6</td>
      <td>6</td>
      <td>6</td>
      <td>6</td>
      <td>6</td>
    </tr>
    
     <tr>
      <td>Total ***</td>
      <td> 1,13,696</td>
      <td>62,151</td>
      <td> 10,606</td>
      <td>296</td>
      <td> 10,606</td>
      <td> 10,606</td>
      <td> 24,296</td>
    </tr>
  </table>
</div>
			</div>
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
