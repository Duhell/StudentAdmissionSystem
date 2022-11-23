<?php 

	session_start(); 
	session_destroy(); 
	unset($_SESSION['id']); 
	unset($_SESSION['code']);
	unset($_SESSION['password']);
	unset($_SESSION['unqid']);
	unset($_SESSION['role']);
	header('location: ../index.php'); 
	exit(); 