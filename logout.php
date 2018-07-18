<?php
	session_start();
	unset($_COOKIE['AUTH']);
	session_destroy();
	header("Location: index.php");
	exit();
?>