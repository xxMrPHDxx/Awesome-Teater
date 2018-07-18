<?php
	include "module/opendb.php";

	session_start();
	if(isset($_POST['movie']) && isset($_POST['submit'])){
		$id = $_POST['movie'];
		echo "SELECT desc FROM MOVIES WHERE ID=".$id;
		$result = $conn->query("SELECT descr FROM MOVIES WHERE ID=".$id);
		$row = $result->fetch_row();
		$_SESSION['movie_id'] = $id;
	}

	include "module/closedb.php";

	header("Location: seat.php");
	die();
?>