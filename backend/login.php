<?php

	include 'config.php';
	session_start();

	if (isset($_POST['login'])) {
		$userid = $_POST['id'];
		$userpass = $_POST['password'];
		
		$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$userid}' AND password = '{$userpass}'");
		if ($sql->num_rows > 0) {
			while($row = $sql->fetch_assoc()){
				$_SESSION['id'] = $row['id'];
				$_SESSION['unqid'] = $row['unique_id'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['code'] = $row['code'];
				$_SESSION['role'] = $row['role'];
			}
			if($userid === $_SESSION['unqid'] && $userpass === $_SESSION['password'] && $_SESSION['role'] === 'student'){
				header('location: student_page.php');
				
			}elseif($userid === $_SESSION['unqid'] && $userpass === $_SESSION['password'] && $_SESSION['role'] === 'admin' ){
				$code = $_POST['code'];
				if ($code === $_SESSION['code']) {
					header('location: admin_page.php');
				}
			}	
			}
			else{
				$warning = '<div class="modal"> Wrong ID or Password!</div>';
				echo $warning;			
			}
			
		}
