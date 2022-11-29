<?php   
	include 'views/head.php';
?>
<div class="preload"></div>

<?php
	include 'views/nav.php';
	include "backend/config.php";
	include 'backend/session.php';
	include 'backend/addRecord.php';
?>
	<?php

		if (isset($_SESSION['success_submit'])) {
			$successMsg = $_SESSION['success_submit'];
			echo "<p class='message'>$successMsg</p>";
			unset($_SESSION['success_submit']);
		}

	 ?>
	<div class="container">
		<div class="show-id">
			<span>Set up your Profile</span>
			<span><?= $_SESSION['unqid'] ?></span>
		</div>

		<div class="inputs msg">
			<div id="title_msg">
				<span>Personal Information</span>
			</div>
		</div>

		<form action="student_page.php" method="POST" class="forms">

			<div class="fullnames">
				<div class="form_group">
					<label>Last Name</label>
					<input type="text" placeholder="lastname" name="lname">
				</div>
				<div class="form_group">
					<label>First Name</label>
					<input type="text" placeholder="firstname" name="fname">
				</div>
				<div class="form_group">
					<label>Middle Name</label>
					<input type="text" placeholder="middlename" name="middlename">
				</div>
				<div class="form_group">
					<label>Extension</label>
					<select name="extension" id="">
						<option value="">...</option>
						<option value="Jr.">Jr.</option>
						<option value="Sr.">Sr.</option>
						<option value="I">I</option>
						<option value="II">II</option>
						<option value="III">III</option>
					</select>
				</div>
			</div>
			
			<div class="births">
				<div class="form_group">
					<label>Birth Date</label>
					<input type="date" name="birthdate">
				</div>
				<div class="form_group">
					<label>Birth Place</label>
					<input type="text" placeholder="place of birth" name="birthplace">
				</div>
				<div class="form_group">
					<label>Gender</label>
					<select name="gender" id="">
						<option value="none">...</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select>
				</div>
				<div class="form_group" >
					<label>Age</label>
					<input type="text" name="age">
				</div>
				<div class="form_group">
					<label>Citizenship</label>
					<select name="citizenship" id="">
						<option value="Filipino">Filipino</option>
						<option value="Other">Other</option>
					</select>
				</div>
				
			</div>
			
			<div class="perma_address">
				<div class="form_group">
					<label id="permanent">Address</label>
					<input type="text" placeholder="Unit no./Street" name="unitno">
				</div>
				<div class="form_group">
					<br>
					<input type="text" placeholder="Barangay" name="barangay">
				</div>
				<div class="form_group">
					<br>
					<input type="text" placeholder="City" name="city">
				</div>
				<div class="form_group">
					<br>
					<input type="text" placeholder="Province" name="province">
				</div>
				<div class="form_group">
					<br>
					<input type="text" placeholder="Zipcode" name="zipcode">
				</div>
			</div>

			<div class="mails">
				<div class="form_group">
					<label>Email Address</label>
					<input type="email" placeholder="example@gmail.com" required name="email">
				</div>
				<div class="form_group">
					<label>Cellphone Number</label>
					<input type="text" placeholder="(+63) 9822 12121" name="cellnum">
				</div>
				<div class="form_group">
					<label>Telephone Number</label>
					<input type="text" placeholder="123 456 78901" name="telenum">
				</div>
			</div>

			<div class="inputs">
				<div id="title_msg">
					<span>Educational Attainment</span>
				</div>
			</div>

			<div class="school">
				<div class="form_group">
					<label>School Last Attended</label>
					<input type="text" name="lastAttended">
				</div>
				<div class="form_group">
					<label>School Address</label>
					<input type="text" name="schoolAddress">
				</div>
				
			</div>

			<div class="track">
				<div class="form_group">
					<label>Track</label>
					<select name="track" id="">
						<option value="STEM">Science, Technology, Engineering, and Mathematics</option>
						<option value="HUMSS">Humanities and Social Sciences</option>
						<option value="ABM">Accountancy, Business, and Management</option>
						<option value="ICT">Information Communication and Technology</option>
					</select>
				</div>
				<div class="form_group">
					<label>Year Graduated</label>
					<input type="text" placeholder="ex: S.Y 2019-2020" name="yearGrad">
				</div>
				
			</div>

			<div class="inputs">
				<div id="title_msg">
					<span>Preferred Courses</span>
				</div>
			</div>

			<div class="campus">
				<div class="form_group">
					<label>Campus</label>
					<select name="campus" id="">
						<option value="TUPV">Technological University of the Philippines</option>
					</select>
				</div>
				<div class="form_group" id="selection">
					<label>Department</label>
					<select name="dep" id="dep" onchange="studentCourse(this.id,'course')">
						<option value="">Choose</option>
						<option value="COE">College of Engineering</option>
						<option value="COACE">College of Automation and Control Engineering</option>
						<option value="COET">College of Engineering Technology</option>
					</select>
				</div>
			</div>

			<div class="choices">
				<div class="form_group">
					<label>First Choice</label>
					<select name="course" id="course" >
						<option value=""></option>
					</select>
				</div>

			</div>
			<input type="submit" name="submit" value="Submit">
			<br>

		</form>

	</div>


	
	<?php include 'views/footer.php' ?>

