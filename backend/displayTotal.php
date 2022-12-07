<?php 
	include 'config.php';
	include 'session.php';

	//Display the total number of applicants based on the selected year
	if (isset($_POST['total'])) {
		$yearResult = $_POST['total'];
		$query = mysqli_query($conn,"SELECT id FROM records WHERE created_At LIKE '{$yearResult}%' ORDER BY id");
			$total = mysqli_num_rows($query);
			echo $total;
	}

	