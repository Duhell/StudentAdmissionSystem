<?php
	
	include 'views/head.php';
	include 'views/nav.php';
	include "backend/config.php";
	include 'backend/session.php';



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

		<form action="" class="forms">

			<div class="fullnames">
				<div class="form_group">
					<label>Last Name</label>
					<input type="text" placeholder="lastname">
				</div>
				<div class="form_group">
					<label>First Name</label>
					<input type="text" placeholder="firstname">
				</div>
				<div class="form_group">
					<label>Middle Name</label>
					<input type="text" placeholder="middlename">
				</div>
				<div class="form_group">
					<label>Extension</label>
					<select name="" id="">
						<option value="none">...</option>
						<option value="Jr.">Jr.</option>
						<option value="Sr.">Sr.</option>
					</select>
				</div>
			</div>
			
			<div class="births">
				<div class="form_group">
					<label>Birth Date</label>
					<input type="date">
				</div>
				<div class="form_group">
					<label>Birth Place</label>
					<input type="text" placeholder="place of birth">
				</div>
				<div class="form_group">
					<label>Gender</label>
					<select name="" id="">
						<option value="none">...</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				<div class="form_group" >
					<label>Age</label>
					<input type="text">
				</div>
				<div class="form_group">
					<label>Citizenship</label>
					<select name="" id="">
						<option value="Filipino">Filipino</option>
						<option value="Other">Other</option>
					</select>
				</div>
				
			</div>
			
			<div class="perma_address">
				<div class="form_group">
					<label id="permanent">Address</label>
					<input type="text" placeholder="Unit no./Street">
				</div>
				<div class="form_group">
					<br>
					<input type="text" placeholder="Barangay">
				</div>
				<div class="form_group">
					<br>
					<input type="text" placeholder="City">
				</div>
				<div class="form_group">
					<br>
					<input type="text" placeholder="Province">
				</div>
				<div class="form_group">
					<br>
					<input type="text" placeholder="Zipcode">
				</div>
			</div>

			<div class="mails">
				<div class="form_group">
					<label>Email Address</label>
					<input type="email" placeholder="example@gmail.com" required>
				</div>
				<div class="form_group">
					<label>Cellphone Number</label>
					<input type="text" placeholder="(+63) 9822 12121">
				</div>
				<div class="form_group">
					<label>Telephone Number</label>
					<input type="text" placeholder="123 456 78901">
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
					<input type="text">
				</div>
				<div class="form_group">
					<label>School Address</label>
					<input type="text">
				</div>
				
			</div>

			<div class="track">
				<div class="form_group">
					<label>Track</label>
					<select name="" id="">
						<option value="STEM">Science, Technology, Engineering, and Mathematics</option>
						<option value="HUMSS">Humanities and Social Sciences</option>
						<option value="ABM">Accountancy, Business, and Management</option>
						<option value="ICT">Information Communication and Technology</option>
					</select>
				</div>
				<div class="form_group">
					<label>Year Graduated</label>
					<input type="text" placeholder="S.Y 2019-2020">
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
					<select name="" id="">
						<option value="TUPV">Technological University of the Philippines</option>
					</select>
				</div>
				<div class="form_group" id="selection">
					<label>Department</label>
					<select name="dep" id="dep" onchange="studentCourse(this.id,'course')">
						<option value="">...</option>
						<option value="COE">College of Engineering</option>
						<option value="COACE">College of Automation and Control Engineering</option>
						<option value="COET">College of Engineering Technology</option>
					</select>
				</div>
			</div>

			<div class="choices">
				<div class="form_group">
					<label>First Choice</label>
					<select name="course" id="course" ></select>
				</div>

			</div>
			<input type="submit" name="submit" value="Submit">
			<br>

		</form>

	</div>

	<script>
		function studentCourse(dep,cor){
			
			let department = document.getElementById(dep)
			let cors = document.getElementById(cor)

			cors.innerHTML = "";
			if (department.value == "COE") {
				var courseArray = [
					"|Choose your course", 
					"BSEcE|Bachelor of Science in ELectronics Engineering ",
					"BSME|Bachelor of Science in Mechanical Engineering",
					"BSEE|Bachelor of Science in Electrical Engineering",
					"BSCpE|Bachelor of Science in Computer Engineering"
					]
			}else if (department.value == "COACE") {
				var courseArray = [
					"|Choose your course", 
					"BSMxE|Bachelor of Science in Mechatronics Engineering",
					"BSICE|Bachelor of Science in Instrumentation and Control Engineering",
					"BETMxT|Bachelor of Technology in Mechatronics Technology",
					]
			}else if (department.value == "COET") {
				var courseArray = [
					"|Choose your course", 
					"BSChem|Bachelor of Science in Chemistry",
					"BET|Bachelor of Science in Engineering Technology",
					]
			}
			for(let option in courseArray){
				let valueName = courseArray[option].split("|"),
					newElement = document.createElement("option");
				newElement.value = valueName[0]
				newElement.innerHTML = valueName[1]
				cors.options.add(newElement)
			}			

		}

	</script>
	
	<?php include 'views/footer.php' ?>

