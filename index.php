<?php
	include 'views/head.php';
	include 'backend/login.php';
	
?>

	<div class="wrapper">
		<div class="welcome">
			<div class="welcome-msg">
				<span>STUDENT</span>
				<span>ADMISSION</span>
				<span>SYSTEM</span>
				<p>Technological University of the Philippines Visayas</p>
			</div>
		</div>

		<!-- student login form -->
		<div class="login-form" >
			<div class="login-header">
				<img src="images/Logo.png" alt="">
				<span>Login</span>
			</div>
			<div class="login-roles">
				<button type="submit" id="stud-btn" class="stud-btn">Student</button>
				<button type="submit" id="admin-btn" class="admin-btn">Admin</button>
			</div>

			<?php $warning; ?>

			<form action="index.php" method="POST" class="student-login">
				<div class="app-id">
					<label>Applicant ID</label>
					<input type="text" placeholder="ID" name="id" autofocus required autocomplete="off">
				</div>
				<div class="app-pass">
					<label>Password</label>
					<input type="password" placeholder="Password" name="password">
				</div>
				<div class="remember">
					<input type="checkbox">
					<label>Remember me</label>
				</div>
				<input type="submit" name="login" value="LOGIN" class="btn">
				<a href="#" name="forgot">Forgot Password?</a>
			</form>

			<!-- admin login page -->
			<form action="index.php" method="POST" class="admin-login">
				<div class="app-id">
					<label>Admin ID</label>
					<input type="text" placeholder="ID" name="id" autofocus required autocomplete="off">
				</div>
				<div class="app-pass">
					<label>Password</label>
					<input type="password" placeholder="Password" name="password">
				</div>
				<div class="app-pass">
					<label>Access Code</label>
					<input type="text" placeholder="Code" name="code">
				</div>
				
				<input type="submit" name="login" value="LOGIN" class="btn">
			</form>
			<?php include 'views/footer.php' ?>
		</div>
		</div>
</body>
</html>