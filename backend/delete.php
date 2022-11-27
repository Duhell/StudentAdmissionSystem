<?php 

	include "config.php";
	include "session.php";

	$id = $_GET['id'];
	$sql = "DELETE FROM records WHERE id = '$id'";

	if ($conn->query($sql)) {
		header("location: ../admin_page.php");
	};
 ?>
