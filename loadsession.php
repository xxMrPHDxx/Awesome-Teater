<?php
	session_start();
	if(!isset($_COOKIE['AUTH'])){
		header("Location: logout.php");
		exit();
	}

	if(!isset($_SESSION['username'])){
		header("Location: index.php");
		exit();
	}
?>