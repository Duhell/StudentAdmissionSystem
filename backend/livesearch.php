<?php 
	
	include "config.php";
	include "session.php";

	//displaying the search results 

	if (isset($_POST['inputSearch'])) {
		$searchResult = $_POST['inputSearch'];

		$Searh_query = mysqli_query($conn,"SELECT * FROM records WHERE appid LIKE '{$searchResult}%' OR lastname LIKE '{$searchResult}%' OR firstname LIKE '{$searchResult}%' OR status LIKE '{$searchResult}%' OR middlename LIKE '{$searchResult}%' OR yearGrad LIKE '{$searchResult}%' OR firstchoice LIKE '{$searchResult}%' OR department LIKE '{$searchResult}%' OR track LIKE '{$searchResult}%' OR created_At LIKE '{$searchResult}%'");


		if (mysqli_num_rows($Searh_query) > 0) {

		?>

		<div class="tbl-header">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <thead>
		        <tr>
		          <th style="width:10%;">No.</th>
		          <th style="width:20%">Applicant ID</th>
		          <th style="width:30%">Student Name</th>
		          <th style="width:20%">Requirements</th>
		          <th>Year</th>
		          <th style="width:10%">Edit</th>
		        </tr>
		      </thead>
		    </table>
 		 </div>

 		 <div class="tbl-content">
   		 	<table cellpadding="0" cellspacing="0" border="0">
     		 <tbody>
      		<?php 
      		
      		$i = 1;
			while ($row = $Searh_query->fetch_array()) {
      		?>
        	<tr>
	          <td style="width:10%"><?= $i++ ?></td>
	          <td style="width:20%"><?= $row['appid']; ?></td>
	          <td style="width:30%"><?= strtoupper($row['lastname'])." ".strtoupper($row['firstname'])." ".strtoupper($row['extension']) ?></td>
              <td style="width:20%" class="statusColor"><?= strtoupper($row['status']) ?></td>
	          <td ><?= date('Y',strtotime($row['created_At'])) ?></td>
	          <td style="width:10%"><a href="stud_record.php?id=<?= $row['id'] ?>"> Edit </a></td>
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