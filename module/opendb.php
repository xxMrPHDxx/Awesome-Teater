<?php
	$conn = mysqli_connect("localhost","root","minecraft12345","mysql","3306");
	if (!$conn) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>