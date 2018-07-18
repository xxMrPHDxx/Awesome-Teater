<?php 
	include "loadsession.php"; 

	// Clear stuff!
	if(defined("TITLE") && constant("TITLE") != 'Order'){
		unset($_SESSION['movie_id']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Awesome Teater<?php if(defined("TITLE")) echo " - ".constant("TITLE"); ?></title>
	<link rel="icon" type="image/png" href="icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="content">
			<div id="Header">
				<div class="navigation-bar">
					<a class="link center" href="home.php">Home</a>
					<a class="link center" href="news.php">News</a>
					<a class="link center" href="seat.php">Order</a>
					<?php if($_SESSION['username'] == "admin") echo "<a class=\"link center\" href=\"admin.php\">Admin Panel</a>"; ?>
					<a class="link center" href="logout.php">Log out</a>
				</div>
			</div>