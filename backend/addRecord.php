<?php 
	include "config.php";
	if (isset($_POST['submit'])) {
		$appid = $_SESSION['unqid'];
		$checkRecord = mysqli_query($conn,"SELECT * FROM records WHERE appid = '$appid'");
		if ($checkRecord->num_rows == 1) {
			$_SESSION['success_submit'] = "You have already submitted your form!";
		}else{
			$lname = $_POST['lname'];
			$fname = $_POST['fname'];
			$age = $_POST['age'];
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
			$cell = $_POST['phoneNumber'];
			$telenum = $_POST['telenum'];
			$yearGrad = $_POST['yearGrad'];
			$lastAttended = $_POST['lastAttended'];
			$schoolAddress = $_POST['schoolAddress'];
			$track = $_POST['track'];
			$campus = $_POST['campus'];
			$dep = $_POST['dep'];
			$course = $_POST['course'];
			$status = "Incomplete";

		// for requirements

			$form138	   =  "0";
			$nso 	 	   =   "0";
			$idpicture 	   =   "0";
			$gmc		   =  "0";
			$form137 	   =   "0";
			$brgycertif	   =   "0";
			$xray		   =   "0";
			$drugtest	   =   "0";
			$cbc		   =   "0";
			$stool		   =   "0";
			$urinalysis	   =   "0";
			$serum		   =   "0";
			$medcertif	   =   "0";



			//add record

			$insert = mysqli_query($conn, "INSERT INTO records (appid,lastname,firstname,age,middlename,extension,birthdate,birthplace,gender,citizenship,unitno,barangay,city,province,zipcode,email,cellnumber,telenumber,lastAttended,schoolAddress,track,campus,department,firstchoice,status,yearGrad)
				values ('$appid','$lname','$fname','$age','$middlename','$extension','$birthdate','$birthplace','$gender','$citizenship','$unitno','$barangay','$city','$province','$zipcode','$email','$cell','$telenum','$lastAttended','$schoolAddress','$track','$campus','$dep','$course','$status','$yearGrad') ");
			if ($insert) {
				$_SESSION['success_submit']	= "Successfully added your information.";
			}
			else{
				die("error". $conn -> connect_error);
			}

			$query = "INSERT INTO `requirements` (appid,138_a,nso,idpicture,gmc,137_a,brgycertif,xray,drugtest,cbc,stool,urinalysis,serum,medcertif) values('$appid','$form138','$nso','$idpicture','$gmc','$form137','$brgycertif','$xray','$drugtest','$cbc','$stool','$urinalysis','$serum','$medcertif')";

				$result = mysqli_query($conn,$query);
		}	
	}

