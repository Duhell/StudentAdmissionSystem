<?php 
	session_start();
	include 'config.php';

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

			$query = "INSERT INTO `requirements` (appid,138_a,nso,idpicture,gmc,137_a,brgycertif,xray,drugtest,cbc,stool,urinalysis,serum,medcertif) values('$appid','$form138','$nso','$idpicture','$gmc','$form137','$brgycertif','$xray','$drugtest','$cbc','$stool','$urinalysis','$serum','$medcertif')";

				$result = mysqli_query($conn,$query);

				if ($result) {
					header('location: ../admin_page.php');
				}else{
					header('location: ../admin_page.php');
				}

	}
