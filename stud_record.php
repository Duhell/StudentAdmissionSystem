<?php   
	include 'views/head.php';
?>
<div class="preload"></div>
	<!-- ==========================QUERIES==========================> -->

<?php 
	
	include 'views/nav.php';
	include "backend/config.php";
	include 'backend/session.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM records WHERE id = '{$id}'";
	$res = $conn->query($query);
	if ($res->num_rows > 0) {
		while ($field = $res->fetch_array()) {
		    $firstname = $field['firstname'];
		    $lastname = $field['lastname'];
		    $middlename = $field['middlename'];
		    $extension = $field['extension'];
		    $birthdate = $field['birthdate'];
		    $birthplace = $field['birthplace'];
		    $gender = $field['gender'];
		    $age = $field['age'];
		    $citizenship = $field['citizenship'];
		    $unitno = $field['unitno'];
		    $barangay = $field['barangay'];
		    $province = $field['province'];
		    $zipcode = $field['zipcode'];
		    $email = $field['email'];
		    $cellnum = $field['cellnumber'];
		    $telenum = $field['telenumber'];
		    $city = $field['city'];
		    $yearGrad = $field['yearGrad'];
		    $lastAttended = $field['lastAttended'];
			$schoolAddress = $field['schoolAddress'];
			$track = $field['track'];
			$campus = $field['campus'];
			$dep = $field['department'];
			$course = $field['firstchoice'];
		    $appid = $field['appid'];
		}
	}
	$requirements = "SELECT * from requirements WHERE appid = '{$appid}'" ;
	$req = $conn->query($requirements);

	if ($req->num_rows > 0) {
		while ($value = $req->fetch_array()) {
			$form138	   =  $value['138_a'];
			$nso 	 	   =  $value['nso'];
			$idpicture 	   =  $value['idpicture'];
			$gmc		   =  $value['gmc'];
			$form137 	   =  $value['137_a'];
			$brgycertif	   =  $value['brgycertif'];
			$xray		   =  $value['xray'];
			$drugtest	   =  $value['drugtest'];
			$cbc		   =  $value['cbc'];
			$stool		   =  $value['stool'];
			$urinalysis	   =  $value['urinalysis'];
			$serum		   =  $value['serum'];
			$medcertif	   =  $value['medcertif'];
		}
	}else{
		echo "Error";
	}
	$_SESSION['appIDS'] = $appid;
	 
	
?>
	<!-- ==========================END QUERIES==========================> -->

	<!-- ==========================DISPLAY FULLNAME AND APPLICANT ID==========================> -->

<div class="stud_header_edit">
	<div class="studName">
		<span><?= $lastname." ".$firstname." ".$extension ?></span>
		<span><?= $appid ?></span>
	</div>
	<br>
	<a href="admin_page.php">&#171; Back</a>
</div>
<form class="grid-view" action="backend/save.php" method="post">
	<div class="box">
		<div class="heading_title">Student Information</div>
		<div class="box1">
			<div class="box3">
				<label>Last Name</label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="lname" value="<?= $lastname ?>">
				</div>
			</div>

	<!-- ==========================END DISPLAY FULLNAME AND APPLICANT ID==========================> -->



	<!-- ==========================PERSONAL INFO ==========================> -->


			<div class="box3">
				<label>First Name: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="fname" value="<?= $firstname ?>">
				</div>
			</div>
			<div class="box3">
				<label>Middle Name: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="mname" value="<?= $middlename ?>">
				</div>
			</div>
			<div class="box3">
				<label>Extension: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="extension" value="<?= $extension ?>">
				</div>
			</div>
			<div class="box3">
				<label>Birth Date: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="birthdate" value="<?= date('M-d-Y',strtotime($birthdate)) ?>">
				</div>
			</div>
			<div class="box3">
				<label>Birth Place: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="birthplace" value="<?= $birthplace ?>">
				</div>
			</div>
			<div class="box3">
				<label>Age: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="age" value="<?= $age ?>">
				</div>
			</div>
			<div class="box3">
				<label>Gender: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="gender" value="<?= $gender ?>">
				</div>
			</div>
			<div class="box3">
				<label>Citizenship: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="citizenship" value="<?= $citizenship ?>">
				</div>
			</div>
			<div class="box3">
				<label>Address: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="unitno" value="<?= $unitno."/".$barangay."/".$city."/".$province."/".$zipcode ?>">
				</div>
			</div>
			<div class="box3">
				<label>Email Address: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="email" value="<?= $email ?>">
				</div>
			</div>
			<div class="box3">
				<label>Cellphone Number: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="cellnum" value="<?= $cellnum ?>">
				</div>
			</div>
			<div class="box3">
				<label>Telephone Number: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="telenum" value="<?= $telenum ?>">
				</div>
			</div>
		</div>

	<!-- ==========================PREVIOUS SCHOOL==========================> -->

		<div class="heading_title">School Last Attended</div>
		<div class="box1">
			<div class="box3">
				<label>School Name: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="schoolName" value="<?= $lastAttended ?>">
				</div>
			</div>
			<div class="box3">
				<label>School Address: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="schoolAddress" value="<?= $schoolAddress ?>">
				</div>
			</div>
			<div class="box3">
				<label>Track: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="track" value="<?= $track ?>">
				</div>
			</div>
			<div class="box3">
				<label>Year Graduated: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="yearGrad" value="<?= $yearGrad ?>">
				</div>
			</div>
		</div>
	<!-- ==========================END PREVIOUS SCHOOL==========================> -->

	<!-- ==========================TUPV AND COURSES==========================> -->


		<div class="heading_title">Campus</div>
		<div class="box1">
			<div class="box3">
				<label>Campus: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="campus" value="<?= $campus ?>">
				</div>
			</div>
				
			<div class="box3">
				<label>Department: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="dep" value="<?= $dep ?>">
				</div>
			</div>
			<div class="box3">
				<label>First Choice: </label>
				<div class="box4">
					<span>:</span>
					<input type="text" name="choice" value="<?= $course ?>">
				</div>
			</div>
		</div>
	</div>
	<!-- ==========================END TUPV AND COURSES==========================> -->

	<!-- ==========================REQUIREMENTS==========================> -->


	<div class="box">
		<div class="heading_title">Requirements</div>
			<div class="box2">
				<div>
					<label>1. Original Form 138-A/Report Card (for SHS) Transcript of Records Certificate of Transfer Credential(for transferees)</label>
					
					<input type="checkbox" name="138_a" value="1" <?php if($form138) {echo "checked";} ?> >
				</div>
				<div>
					<label>2. Photocopy of Birth Certificate from NSO or PSA</label>
					<input type="checkbox" name="nso" value="1" <?php if ($nso) {echo "checked";} ?> >
				</div>
				<div>
					<label>3. 3x3 I.D. Picture (2pcs)</label>
					<input type="checkbox" name="idpicture" value="1" <?php if ($idpicture) {echo "checked";} ?> >
				</div>
				<div>
					<label>4. Original Cerificate of Good Moral Character  </label>
					<input type="checkbox" name="gmc" value="1"  <?php if ($gmc) {echo "checked";} ?>>
				</div>
				<div>
					<label>5. SHS Student's Permanent Record or Form 137-A(if available only) </label>
					<input type="checkbox" name="137_a" value="1" <?php if ($form137) {echo "checked";} ?>>
				</div>
				<div>
					<label>6. Brgy/City Health Certification that you are not PUM or PUI or LSI</label>
					<input type="checkbox" name="brgycertif" value="1" <?php if ($brgycertif) {echo "checked";} ?>>
				</div>
		</div>

	<!-- ==========================MEDICAL REQUIREMENTS==========================> -->

		<div class="heading_title">Medical Requirements</div>
		<div class="box2">
				
				<div>
					<label>1. Results of the following laboratory tests</label>
				</div>
				<div>
					<label>a. Chest X-Ray Result</label>
					<input type="checkbox" name="xray" value="1" <?php if ($xray) {echo "checked";} ?>>
				</div>
				<div>
					<label>b. Drug Test Result</label>
					<input type="checkbox" name="drugtest" value="1" <?php if ($drugtest) {echo "checked";} ?> >
				</div>
				<div>
					<label>c. CBC Test Result</label>
					<input type="checkbox" name="cbc" value="1" <?php if ($cbc) {echo "checked";} ?>>
				</div>
				<div>
					<label>d. Stool Exam Result</label>
					<input type="checkbox" name="stool" value="1" <?php if ($stool) {echo "checked";} ?> >
				</div>
				<div>
					<label>e. Urinalysis</label>
					<input type="checkbox" name="urinalysis" value="1" <?php if ($urinalysis) {echo "checked";} ?>>
				</div>
				<div>
					<label>f. Serum HBS Ag(Hepatitis B Antigen)</label>
					<input type="checkbox" name="serum" value="1" <?php if ($serum) {echo "checked";} ?>>
				</div>
				<div>
					<label>2. Medical Certificate (from a Medical Doctor)</label>
					<input type="checkbox" name="medcertif" value="1" <?php if ($medcertif) {echo "checked";} ?>>
				</div>
			</div>
		</div>
	</div>
	<input id="save" type="submit" name="save" value="Save">
</form>
<br>
<br>

<?php include 'views/footer.php' ?>
