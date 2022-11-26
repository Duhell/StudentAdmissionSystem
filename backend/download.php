<?php 

	include 'config.php';
	$records = "";
	include "session.php";
	

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
					        <th>Middle Name</th>
					        <th>Birth Date</th>
					        <th>Birth Place</th>
					        <th>Age</th>
					        <th>Gender</th>
					        <th>Citizenship</th>
					        <th>Address</th>
					        <th>Email Address</th>
					        <th>Cellphone Number</th>
					        <th>Telephone Number</th>
					        <th>School Last Attended</th>
					        <th>School Address</th>
					        <th>Track</th>
					        <th>Year Graduated</th>
					        <th>Campus</th>
					        <th>Department</th>
					        <th>First Choice Course</th>
					    </tr>

      		';

			while ($row = mysqli_fetch_array($result)) {
				$records .= ' 
			
						<tr>
				          <td>'.$i++.'</td>
				          <td>'.$row["appid"].'</td>
				          <td>'.$row["lastname"].'</td>
				          <td>'.$row["firstname"].'</td>
				          <td>'.$row["middlename"].'</td>
				          <td>'.$row["birthdate"].'</td>
				          <td>'.$row["birthplace"].'</td>
				          <td>'.$row["age"].'</td>
				          <td>'.$row["gender"].'</td>
				          <td>'.$row["citizenship"].'</td>
				          <td>'.$row["unitno"]."/".$row["barangay"]."/".$row["city"]."/".$row["province"]."/".$row["zipcode"].'</td>
				          <td>'.$row["email"].'</td>
				          <td>'.$row["cellnumber"].'</td>
				          <td>'.$row["telenumber"].'</td>
				          <td>'.$row["lastAttended"].'</td>
				          <td>'.$row["schoolAddress"].'</td>
				          <td>'.$row["track"].'</td>
				          <td>'.$row["yearGrad"].'</td>
				          <td>'.$row["campus"].'</td>
				          <td>'.$row["department"].'</td>
				          <td>'.$row["firstchoice"].'</td>
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




	

