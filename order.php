<?php
	session_start();
	if(isset($_POST['submit']) && isset($_POST['id']) && isset($_SESSION['movie_id'])){
		include "module/opendb.php";

		$submit = $_POST['submit'];
		$seatid = $_POST['id'];

		$result = $conn->query("INSERT INTO ORDERS (seatid,userid,movieid,orderdate) VALUES (".$seatid.",".$_SESSION['userid'].",".$_SESSION['movie_id'].",'".date('Y/m/d')."')");

		include "module/closedb.php";
	}
	header("Location: seat.php");
	exit();
?>