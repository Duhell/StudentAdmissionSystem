<?php

	include 'config.php';
	session_start();

	//login system

	if (isset($_POST['login'])) {
		$userid = $_POST['id'];
		$userpass = $_POST['password'];

		//login query	

		$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$userid}' AND password = '{$userpass}'");
		$sqlCheck = mysqli_query($conn,"SELECT * FROM records WHERE appid = '{$userid}'");
		
		//end of login query
		if ($sql->num_rows > 0) {
			if ($sqlCheck->num_rows == 1) {
				echo "<script>alert('You have already submitted your informations!')</script>";
			}else{
				while($row = $sql->fetch_assoc()){
					$_SESSION['id'] = $row['id'];
					$_SESSION['unqid'] = $row['unique_id'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['code'] = $row['code'];
					$_SESSION['role'] = $row['role'];
				}
				if($userid === $_SESSION['unqid'] && $userpass === $_SESSION['password'] && $_SESSION['role'] === 'student'){
					if (empty($_SESSION['code'])) {
						header('location: student_page.php');
					}	
				}elseif($userid === $_SESSION['unqid'] && $userpass === $_SESSION['password'] && $_SESSION['role'] === 'admin' ){
					$accessCode = $_POST['code'];
					if (empty($accessCode)) {
						echo "<script>alert('Wrong ID/Code or Password! Please try again.')</script>";	
				}else{
					if ($accessCode === $_SESSION['code']) {
						header('location: admin_page.php');
					}
				}
			}
			}
			}
			else{
				echo "<script>alert('Wrong ID/Code or Password! Please try again.')</script>";			
			}
			
		}
