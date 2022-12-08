<?php 

	include "config.php";
	include "session.php";

	//Display the records based on the current year or the previous year
	
	if(isset($_POST['years'])){
		$yearResult = $_POST['years'];
		$_SESSION['yearResult']= $yearResult;
		$query = mysqli_query($conn,"SELECT * FROM records WHERE created_At LIKE '{$yearResult}%' ORDER BY lastname ASC");
		if (mysqli_num_rows($query) > 0) {
		?>
		<div class="tbl-header">
		    <table cellpadding="0" cellspacing="0" border="0">
		      <thead>
		        <tr>
		          <th style="width:10%;">No.</th>
		          <th style="width:20%">Applicant ID</th>
		          <th style="width:30%">Student Name</th>
		          <th>Requirements</th>
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
			while ($row = $query->fetch_array()) {
      		?>
        	<tr>
	          <td style="width:10%;"><?= $i++ ?></td>
	          <td style="width:20%;"><?= $row['appid']; ?></td>
	          <td style="width:30%"><?= strtoupper($row['lastname'])." ".strtoupper($row['firstname'])." ".strtoupper($row['extension']) ?></td>
          	  <td class="statusColor"><?= strtoupper($row['status']) ?></td>
	          <td style="width:10%;"><a href="stud_record.php?id=<?= $row['id'] ?>"> Edit </a></td>
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