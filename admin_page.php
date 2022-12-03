<?php   
	include 'views/head.php';
?>
<div class="preload"></div>
<?php
  $thisYear = date('Y',time());

	include 'views/nav.php';
	include 'backend/config.php';
	include 'backend/session.php';
	
	$query = mysqli_query($conn,"SELECT id FROM records WHERE created_At LIKE '{$thisYear}%'  ORDER BY id");
	$total = mysqli_num_rows($query);
?>
<div class="admin">
	<div class="list-header">
		<span>List of Students Applied</span>
		<div class="livesearch">
			<i class="fa-solid fa-magnifying-glass"></i>
			<input type="text" placeholder="search" id="livesearch" autosave="off" autocomplete="off" autofocus>
			
		</div>

	</div>
	<div class="noStud">
		<p id="total">Total No. of Applicants this year: <span id="totalNum"><?=$total?></span></p>
		<div class="yearSelection" style="float: right;">
				<input class="yearSelect" value="<?=date('Y',time())?>">
		</div>
	</div>
	
	<section  id="searchResult"></section>

	<section id="main_section">
    <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>No.</th>
          <th>Applicant ID</th>
          <th>Student Name</th>
          <th>Requirements</th>
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
      		$sql = "SELECT * FROM records WHERE created_At LIKE '{$thisYear}%' ORDER BY lastname ASC ";
      		$result = $conn->query($sql);
      		if ($result->num_rows > 0) {
						while ($row = $result->fetch_array()) {

      	?>
        <tr>
          <td><?= $i++ ?></td>
          <td><?= $row['appid']; ?></td>
          <td><?= strtoupper($row['lastname'])." ".strtoupper($row['firstname'])." ".strtoupper($row['extension']) ?></td>
          <td><?= strtoupper($row['status']) ?></td>
          <td><a href="stud_record.php?id=<?= $row['id'] ?>"> Edit </a></td>
          <td><button class="delete_btn" id='delte_<?= $row["id"]?>' data-id='<?= $row['id']?>,<?=$row['appid']?>' >Delete</button></td>
        </tr>
        <?php	}
		}else{
			echo '<h3 style="margin: 7em 0; text-align:center">There\'s nothing here.</h3>';
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

 	


		