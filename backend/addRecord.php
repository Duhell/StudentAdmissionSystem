<?php 

	include "config.php";
	if (isset($_POST['submit'])) {
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$middlename = $_POST['middlename'];
		$extension = $_POST['extension'];
		$birthdate = $_POST['birthdate'];
		$birthplace = $_POST['birthplace'];
		$gender = $_POST['gender'];
		$citizenship = $_POST['citizenship'];
		$unitno = $_POST['unitno'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		$province = $_POST['province'];
		$zipcode = $_POST['zipcode'];
		$email = $_POST['email'];
		$cellnum = $_POST['cellnum'];
		$telenum = $_POST['telenum'];
		$lastAttended = $_POST['lastAttended'];
		$schoolAddress = $_POST['schoolAddress'];
		$track = $_POST['track'];
		$campus = $_POST['campus'];
		$dep = $_POST['dep'];
		$course = $_POST['course'];


		$insert = mysqli_query($conn, "INSERT INTO records (lastname,firstname,middlename,extension,birthdate,birthplace,gender,citizenship,unitno,barangay,city,province,zipcode,email,cellnumber,telenumber,lastAttended,schoolAddress,track,campus,department,firstchoice)
			values ('$lname','$fname','$middlename','$extension','$birthdate','$birthplace','$gender','$citizenship','$unitno','$barangay','$city','$province','$zipcode','$email','$cellnum','$telenum','$lastAttended','$schoolAddress','$track','$campus','$dep','$course') ");
		if ($insert) {
			echo '<script>alert("You have submitted your information")</script>';
			
		}
		else{
			die("error". $conn -> connect_error);
		}
	}

