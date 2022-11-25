<?php 
	session_start();
	include 'config.php';
	$id = $_GET['id'];

	if (isset($_POST['save'])) {
			$appid         =  $_SESSION['appIDS'];
			$form138	   =  $_POST['138_a'];
			$nso 	 	   =  $_POST['nso'];
			$idpicture 	   =  $_POST['idpicture'];
			$gmc		   =  $_POST['gmc'];
			$form137 	   =  $_POST['137_a'];
			$brgycertif	   =  $_POST['brgycertif'];
			$xray		   =  $_POST['xray'];
			$drugtest	   =  $_POST['drugtest'];
			$cbc		   =  $_POST['cbc'];
			$stool		   =  $_POST['stool'];
			$urinalysis	   =  $_POST['urinalysis'];
			$serum		   =  $_POST['serum'];
			$medcertif	   =  $_POST['medcertif'];

			$update = mysqli_query($conn,"UPDATE records SET 138_a='$form138'");
			//to be continued...


			

	}
