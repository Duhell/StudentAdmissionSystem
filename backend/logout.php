<?php 

	session_start(); 
	session_destroy(); 
	unset($_SESSION['id']); 
	unset($_SESSION['code']);
	header('location: ../index.php'); 
	exit(); 