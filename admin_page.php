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
				<input class="yearSelect" value="<?=date("Y",time())?>">
		</div>
	</div>
	
	<section  id="searchResult"></section>

	<section id="main_section">
    <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th style="width:10%;">No.</th>
          <th style="width:20%">Applicant ID</th>
          <th style="width:30%">Student Name</th>
          <th>Requirements</th>
          <th style="width:10%">Edit</th>
          <th style="width:10%">Delete</th>
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
          <td style="width:10%"><?= $i++ ?></td>
          <td style="width:20%"><?= $row['appid']; ?></td>
          <td style="width:30%"><?= strtoupper($row['lastname'])." ".strtoupper($row['firstname'])." ".strtoupper($row['extension']) ?></td>
          <td class="statusColor"><?= strtoupper($row['status']) ?></td>
          <td style="width:10%"><a href="stud_record.php?id=<?= $row['id'] ?>"> Edit </a></td>
          <td style="width:10%"><button class="delete_btn" id='delte_<?= $row["id"]?>' data-id='<?= $row['id']?>,<?=$row['appid']?>' >Delete</button></td>
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
</section>
<form action="backend/download.php" method="post" id="formDownload">
  	 <button type="submit" name="download" id="download" style="padding: .5rem 1rem; background-color:#7D0216; float: right; border: none; color: #fff; font-weight: 500; cursor:pointer;">Download File</button>	
  </form>
</div>
<br>
<br>

<?php include 'views/footer.php' ?>

 	


		