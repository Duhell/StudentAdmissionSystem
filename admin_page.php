<?php
	
	include 'views/head.php';
	include 'views/nav.php';
	include 'backend/config.php';
	include 'backend/session.php';

	$query = mysqli_query($conn,"SELECT id FROM records ORDER BY id");
	$total = mysqli_num_rows($query);
?>	
<div class="admin">
	<div class="list-header">
		<span>List of Students Applied</span>
		<form>
			<i class="fa-solid fa-magnifying-glass"></i>
			<input type="search" placeholder="search">
		</form>
	</div>
	<div class="noStud">
		<p>Total No. of Applicants: <span><?= $total ?></span></p>
	</div>

	<section>
    <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>No.</th>
          <th>Applicant ID</th>
          <th>Student Name</th>
          <th>Status</th>
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
      		include 'backend/config.php';
      		$i = 1;
      		$sql = "SELECT * FROM records";
      		$result = $conn->query($sql);
      		if ($result->num_rows > 0) {
			while ($row = $result->fetch_array()) {
      	?>
        <tr>
          <td><?php echo $i++ ?></td>
          <td><?php echo $row['appid']; ?></td>
          <td><?php echo $row['lastname']." ".$row['firstname'] ?></td>
          <td><?php echo $row['status'] ?></td>
          <td><a href="stud_record.php?id=<?= $row['id'] ?>"> Edit </a></td>
          <td><a href="#id=<?= $row['id'] ?>"> Delete </a></td>
         <!--  <td><i class="fa-solid fa-pen-to-square"></i></td>
          <td><i class="fa-solid fa-trash"></td> -->
        </tr>
        <?php	}
		}else{
			echo "<script>alert('No Records have found!')</script>";
		}
		$conn->close();
		?> 
      </tbody>
    </table>
  </div>

  
 <form action="backend/download.php" method="post" id="formDownload">
  	 <button type="submit" name="download" id="download" style="padding: .5rem 1rem; background-color:#7D0216; float: right; border: none; color: #fff; font-weight: 500; cursor:pointer;">Download File</button>	
  </form>
</section>


</div>
<br>
<br>

<?php include 'views/footer.php' ?>

 	


		