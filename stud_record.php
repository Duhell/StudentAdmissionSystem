<?php 
	
	include 'views/head.php';
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
		    $email = $field['extension'];
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
?>
<div class="stud_header_edit">
	<div class="studName">
		<span><?= $lastname." ".$firstname ?></span>
		<span><?= $appid ?></span>
	</div>
	<br>
	<a href="admin_page.php">&#171; Back</a>
</div>

<form class="grid-view">
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
					<input type="text" name="unitno" value="<?= $unitno ?>">
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
	<div class="box">
		<div class="heading_title">Requirements</div>
			<div class="box2">
				<div>
					<label>1. Original Form 138-A/Report Card (for SHS) Transcript of Records Certificate of Transfer Credential(for transferees)</label>
					<input type="checkbox">
				</div>
				<div>
					<label>2. Photocopy of Birth Certificate from NSO or PSA</label>
					<input type="checkbox">
				</div>
				<div>
					<label>3. 3x3 I.D. Picture (2pcs)</label>
					<input type="checkbox">
				</div>
				<div>
					<label>4. Original Cerificate of Good Moral Character  </label>
					<input type="checkbox">
				</div>
				<div>
					<label>5. SHS Student's Permanent Record or Form 137-A(if available only) </label>
					<input type="checkbox">
				</div>
				<div>
					<label>6. Brgy/City Health Certification that you are not PUM or PUI or LSI</label>
					<input type="checkbox">
				</div>
		</div>
		<div class="heading_title">Medical Requirements</div>
		<div class="box2">
				
				<div>
					<label>1. Results of the following laboratory tests</label>
					<input type="checkbox">
				</div>
				<div>
					<label>a. Chest X-Ray Result</label>
					<input type="checkbox">
				</div>
				<div>
					<label>b. Drug Test Result</label>
					<input type="checkbox">
				</div>
				<div>
					<label>c. CBC Test Result</label>
					<input type="checkbox">
				</div>
				<div>
					<label>d. Stool Exam Result</label>
					<input type="checkbox">
				</div>
				<div>
					<label>e. Urinalysis</label>
					<input type="checkbox">
				</div>
				<div>
					<label>f. Serum HBS Ag(Hepatitis B Antigen)</label>
					<input type="checkbox">
				</div>
				<div>
					<label>2. Medical Certificate (from a Medical Doctor)</label>
					<input type="checkbox">
				</div>
			</div>
		</div>
	</div>
	<input id="save" type="submit" name="save" value="Save">
</form>
<br>
<br>

<?php include 'views/footer.php' ?>
