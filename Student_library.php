<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Student_library</title>
	<link rel="stylesheet"
		href="student.css">
	<link rel="stylesheet"
		href="admin0.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		  }
		  
		  td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		  }
		  
		  tr:nth-child(even) {
			background-color: #dddddd;
		  }
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

					<a href="Student_library.php"><div class="nav-option option2">
						<img src=
"image/Library_icon.png"
							class="nav-img"
							alt="articles">
						<h3 > Library</h3>
					</div></a>

					<a href="Student_result.php"><div class="nav-option option">
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

  <!-- <h2>HTML Table</h2> -->
  <form>
	<div class="fontt">
		<p>E-Library</p>
	</div>
	
	<div>
		<p>The Institute spends more than Rs. 40 lakhs per annum on online subscription to the following databases. These databases consist of e-Journals, e-Books, and Conference Proceedings. The library has 2 dedicated computer laboratories with 32 computers for this purpose. These databases are also accessible all over the campus. Wi-fi facility is available in the library for staff and students.</p>
	</div>
	<br>
	<br>
	<div class="report-container">
		<div class="report-header">
			<h1 class="recent-Articles">ONLINE SUBSCRIPTIONS</h1>
			<!-- <button class="view">View All</button> -->
		</div>
		<br>
		<div class="box-container">
	  <table>
		<tr>
		  
		  <th>Subscription Name</th>
		  <th>Subscription URL</th>
		</tr>
		<tr>
		  <td>IEEE</td>
		  <td><a href="http://ieeexplore.ieee.org">http://ieeexplore.ieee.org</a></td>
		  
		</tr>
		<tr>
		  <td>JGATE</td>
		  <td><a href="http://www.jgateplus.com">http://www.jgateplus.com</a></td>
		</tr>
		<tr>
		  <td>SCIENCEDIRECT</td>
		  <td><a href="http://www.sciencedirect.com">http://www.sciencedirect.com</a></td>
		</tr>
		<tr>
		  <td>MCGRAW-HILL BOOKS</td>
		  <td><a href="http://accessengineeringlibrary.com">http://accessengineeringlibrary.com</a></td>
		</tr>
		<tr>
		  <td>SPRINGER</td>
		  <td><a href="http://link.springer.com">http://link.springer.com</a></td>
		</tr>
		<tr>
		  <td>ASTM</td>
		  <td><a href="https://compass.astm.org">https://compass.astm.org</a></td>
		</tr>
		<tr>
			<td>Videeya Ebooks</td>
			<td><a href="http://www.videeya.com">http://www.videeya.com</a></td>
		  </tr>
		<tr>
			<td>Scopus</td>
			<td><a href="http://www.scopus.com">http://www.scopus.com</a></td>
		</tr>
	  </table>
  </form>
  
			

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
			</div>

			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Recent Articles</h1>
					<button class="view">View All</button>
				</div>

				<div class="report-body">
					<div class="report-topic-heading">
						<h3 class="t-op">Article</h3>
						<h3 class="t-op">Views</h3>
						<h3 class="t-op">Comments</h3>
						<h3 class="t-op">Status</h3>
					</div>

					<div class="items">
						<div class="item1">
							<h3 class="t-op-nextlvl">Article 73</h3>
							<h3 class="t-op-nextlvl">2.9k</h3>
							<h3 class="t-op-nextlvl">210</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 72</h3>
							<h3 class="t-op-nextlvl">1.5k</h3>
							<h3 class="t-op-nextlvl">360</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 71</h3>
							<h3 class="t-op-nextlvl">1.1k</h3>
							<h3 class="t-op-nextlvl">150</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 70</h3>
							<h3 class="t-op-nextlvl">1.2k</h3>
							<h3 class="t-op-nextlvl">420</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 69</h3>
							<h3 class="t-op-nextlvl">2.6k</h3>
							<h3 class="t-op-nextlvl">190</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 68</h3>
							<h3 class="t-op-nextlvl">1.9k</h3>
							<h3 class="t-op-nextlvl">390</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 67</h3>
							<h3 class="t-op-nextlvl">1.2k</h3>
							<h3 class="t-op-nextlvl">580</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 66</h3>
							<h3 class="t-op-nextlvl">3.6k</h3>
							<h3 class="t-op-nextlvl">160</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 65</h3>
							<h3 class="t-op-nextlvl">1.3k</h3>
							<h3 class="t-op-nextlvl">220</h3>
							<h3 class="t-op-nextlvl lavel-tag">Published</h3>
						</div>

					</div>
				</div> -->
			</div>
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
