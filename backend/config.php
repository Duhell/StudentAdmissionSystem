<?php 

	$conn = mysqli_connect("localhost","root","","admission");

	if (!$conn) {
		 die("Error connecting in the database!");
	}