<?php 

	include 'config.php';
	$records = "";

	if (isset($_POST['download'])) {
		
		
		$sql = "SELECT * FROM records";
      	$result = mysqli_query($conn,$sql);
      	$i = 1;
      		if (mysqli_num_rows($result) > 0) {
      		 
      		$records .= '

      				<table class="tbl-content" cellpadding="3" cellspacing="3" border="1">
					    <tr>
					        <th>No.</th>
					        <th>Applicant ID</th>
					        <th>Last Name</th>
					        <th>First Name</th>
					        <th>Status</th>
					    </tr>

      		';

			while ($row = mysqli_fetch_array($result)) {
				$records .= ' 
			
						<tr>
				          <td>'.$i++.'</td>
				          <td>'.$row["appid"].'</td>
				          <td>'.$row["lastname"].'</td>
				          <td>'.$row["firstname"].'</td>
				          <td>'.$row["status"].'</td>
	      				</tr>
				';
			}
			$records .= '</table>';

			header('Content-Type:application/xls');
			header('Content-Disposition:attachment;filename=report.xls');
			echo $records; 
		}else{
			echo "No record found";
		}

	}
?>




	

