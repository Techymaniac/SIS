
<?php
include "connection.php";
//session_start();
$Fname = '';
$Lname = '';
$email = '';
$phone = '';
$Branch = '';
$subjectRow = array();
$resultSubjects = '';
$RegNo = '';
$studentId ='';
if (isset($_POST['search-student']))
{
	$RegNo = $_POST['reg'];
	$sqlStudentQuery = "select * from student where RegNo='$RegNo' limit 1";
	$resultStudent = mysqli_query($con,$sqlStudentQuery);
	if(mysqli_num_rows($resultStudent))
	{
    	$user = mysqli_fetch_array($resultStudent);
    	$Fname = $user['Fname'];
    	$Lname = $user['Lname'];
    	$email = $user['email'];
    	$phone= $user['Phone'];
    	$RegNo= $user['RegNo'];
    	$Branch= $user['phoneCode2'];
		$studentId = $user['Id'];
	}
	else{
		$message = "student not found!";
	}
	 $subjectQuery = "SELECT  s.Id,s.SubjectName,IFNULL(r.Marks,0) AS Marks FROM `subject` as s LEFT JOIN `studentresult` as r ON s.Id = r.SubjectId  AND r.StudentId = $studentId  WHERE `Branch`= '$Branch'";
	 $resultSubjects = mysqli_query($con,$subjectQuery);
	// if(mysqli_num_rows($resultSubjects)){
	// 	//echo mysqli_num_rows($resultSubjects);
	// 	$subjectRow =  mysqli_fetch_array($resultSubjects);
	// }
}

if (isset($_POST['Submit-marks']))
{
	$Sub1 = $_POST['Sub_1'];
    $SubId1 = $_POST['SubId_1'];
    $Sub2 = $_POST['Sub_2'];
    $SubId2 = $_POST['SubId_2'];
    $Sub3 = $_POST['Sub_3'];
    $SubId3 = $_POST['SubId_3'];
    $Sub4 = $_POST['Sub_4'];
    $SubId4 = $_POST['SubId_4'];
	$Sub5 = $_POST['Sub_5'];
    $SubId5 = $_POST['SubId_5'];
    $Branch = $_POST['Branch'];
    $StudentId = $_POST['StudentId'];

	$host = "localhost";
    $dbUsername = "root";
	$dbPassword = "";
    $dbName = "studentlogin";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
			$Select = "SELECT StudentId FROM studentresult WHERE StudentId = '$StudentId' LIMIT 1";
            $Insert = "INSERT INTO `studentresult`(`StudentId`, `SubjectId`, `Marks`) VALUES ('$StudentId','$SubId1', '$Sub1'),('$StudentId','$SubId2', '$Sub2'),('$StudentId','$SubId3', '$Sub3'),('$StudentId','$SubId4', '$Sub4'),('$StudentId','$SubId5', '$Sub5');";
			

            $stmt = $conn->prepare($Select);
            //$stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();
                mysqli_query($conn,$Insert);
            }
			else{
				try{
					$updateQuery = "UPDATE `studentresult` SET `Marks`='$Sub1' WHERE `StudentId`='$StudentId' AND `SubjectId`='$SubId1';";
					$updateQuery1 = "UPDATE `studentresult` SET `Marks`='$Sub2' WHERE `StudentId`='$StudentId' AND `SubjectId`='$SubId2';";
					$updateQuery2 = "UPDATE `studentresult` SET `Marks`='$Sub3' WHERE `StudentId`='$StudentId' AND `SubjectId`='$SubId3';";
					$updateQuery3 = "UPDATE `studentresult` SET `Marks`='$Sub4' WHERE `StudentId`='$StudentId' AND `SubjectId`='$SubId4';";
					$updateQuery4 = "UPDATE `studentresult` SET `Marks`='$Sub5' WHERE `StudentId`='$StudentId' AND `SubjectId`='$SubId5';";
				mysqli_query($conn,$updateQuery);
				mysqli_query($conn,$updateQuery1);
				mysqli_query($conn,$updateQuery2);
				mysqli_query($conn,$updateQuery3);
				mysqli_query($conn,$updateQuery4);
				}catch (mysqli_sql_exception $e) { 
					var_dump($e);
					exit; 
				 } 
			}
            $conn->close();
		}
}
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
	<title>Teacher_result</title>
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

					<a href="Teacher_result.php"><div class="nav-option option3">
						<img src=
"image/Result_icon.png"
							class="nav-img"
							alt="report">
						<h3>Result</h3>
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
			 
				
				<div class="report-container">
					<div class="report-header">
						<h1 class="recent-Articles">Student Result</h1>
						<!-- <button class="view">View All</button> -->
					</div>
					<br>
					<form action="Teacher_result.php" method="post">
					<label>Reg Number</label>
					<input type="text" required name="reg" placeholder="Reg Number">
					<input type="submit" name="search-student" value="Find" class="changebtn">
					</form>
					
					<!-- <p style="color:red;"><?php echo $message; ?></p> -->
						<br/><br/><br/><hr/>
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
            		       <label for="Phone">Branch: <?php echo $Branch; ?></label>
            		   </div>
						<br/><hr/>
						<form action="Teacher_result.php" method="post">
						<input type="hidden"  name="StudentId" value=" <?php echo $studentId; ?>">
						<input type="hidden"  name="Branch" value=" <?php echo $Branch; ?>">
						<?php
						if($resultSubjects)
						{
						if(mysqli_num_rows($resultSubjects)){
						$num = 0;
						while($row = mysqli_fetch_array($resultSubjects))
						{$num++?>
						<div class="input-box">
            	 	       <label for="Phone"><?php echo $row['SubjectName'];?>:</label>
				 			<input type="number" placeholder="<?php echo $row['SubjectName'];?>" name="Sub_<?php echo $num ;?>" value="<?php echo $row['Marks'];?>" > 
							 <input type="hidden" name="SubId_<?php echo $num ;?>" value="<?php echo $row['Id'];?>"/>
            	 	   </div>
						<?php
						}}}
						?>
					
						<input type="submit" name="Submit-marks" value="Submit" class="changebtn">
						<div class="input-box">
            		       <label></label>
            			</div>
					</form>
            		</div>
			

				</div>
			
			</div>
</div>

	<script src="./index.js"></script>
</body>
</html>