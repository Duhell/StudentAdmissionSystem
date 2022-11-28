<?php 

	include "config.php";
	include "session.php";

	$id = $_POST['id'];
	$appID = $_POST['appID'];
	
	$sql = "DELETE FROM records WHERE id = '$id'";
	$sql1 = "DELETE FROM requirements WHERE appid = '$appID'";

	if ($conn->query($sql)) {
		if ($conn->query($sql1)) {
			echo 1;
			exit();
		}	
	};
	echo 0;
 ?>
