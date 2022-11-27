<?php 
	include 'config.php';
	include "session.php";
	

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

			$update = mysqli_query($conn,"UPDATE requirements SET 138_a='$form138',nso ='$nso',idpicture = '$idpicture',gmc = '$gmc',137_a = '$form137',brgycertif = '$brgycertif', xray = '$xray',drugtest = '$drugtest', cbc = '$cbc',stool = '$stool', urinalysis = '$urinalysis', serum = '$serum',medcertif = '$medcertif' WHERE appid = '$appid'");

			if ($form138&&$nso&&$idpicture&&$gmc&&$form137&&$brgycertif&&$xray&&$drugtest&&$cbc&&$stool&&$urinalysis&&$serum&&$medcertif){
				if ($update){
					$isComplete = mysqli_query($conn,"UPDATE records SET status = 'Complete' WHERE appid = '$appid'");
				}
				header('location: ../admin_page.php');

			}else{
				if ($update){
					$isComplete = mysqli_query($conn,"UPDATE records SET status = 'Incomplete' WHERE appid = '$appid'");
				}
				header('location: ../admin_page.php');
			}
	}

