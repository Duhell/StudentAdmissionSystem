<?php 
	
	include "config.php";
	include "session.php";

	if (isset($_POST['inputSearch'])) {
		$searchResult = $_POST['inputSearch'];

		$Searh_query = mysqli_query($conn,"SELECT * FROM records WHERE appid LIKE '{$searchResult}%' OR lastname LIKE '{$searchResult}%' OR firstname LIKE '{$searchResult}%' OR status LIKE '{$searchResult}%' OR middlename LIKE '{$searchResult}%' OR yearGrad LIKE '{$searchResult}%' OR firstchoice LIKE '{$searchResult}%' OR department LIKE '{$searchResult}%' OR track LIKE '{$searchResult}%'");


		if (mysqli_num_rows($Searh_query) > 0) {

		?>

		<div class="tbl-header">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <thead>
		        <tr>
		          <th>No.</th>
		          <th>Applicant ID</th>
		          <th>Student Name</th>
		          <th>Requirements</th>
		          <th>Year</th>
		          <th>Edit</th>
		          <th>Delete</th>
		        </tr>
		      </thead>
		    </table>
 		 </div>

 		 <div class="tbl-content">
   		 	<table cellpadding="0" cellspacing="0" border="0">
     		 <tbody>
      		<?php 
      		
      		$i = 1;
			while ($row = $Searh_query->fetch_assoc()) {
      		?>
        	<tr>
	          <td><?= $i++ ?></td>
	          <td><?= $row['appid']; ?></td>
	          <td><?= $row['lastname']." ".$row['firstname']." ".$row['extension'] ?></td>
	          <td><?= $row['status'] ?></td>
	          <td><?= date('Y',strtotime($row['created_At'])) ?></td>
	          <td><a href="stud_record.php?id=<?= $row['id'] ?>"> Edit </a></td>
	          <td><a href="backend/delete.php?id=<?= $row['id'] ?>"> Delete </a></td>
        	</tr> 
 		 <?php
 		}
 		?>
 			</tbody>
    		</table>
  		</div>
  		<?php
		}else{
			echo '<h3 style="margin: 7em 0; text-align:center">No record found.</h3>';
		}
	}
?>