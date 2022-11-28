<?php 

	include "config.php";
	include "session.php";

	$id = $_POST['id'];
	$sql = "DELETE FROM records WHERE id = '$id'";

	if ($conn->query($sql)) {
		echo 1;
		exit();
	};
	echo 0;
 ?>
