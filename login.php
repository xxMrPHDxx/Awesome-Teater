<?php
	if(isset($_POST['submit'])){
		include 'module/opendb.php';

		$user = $conn->real_escape_string($_POST['login']);
		$pass = $conn->real_escape_string($_POST['pass']);

		$result = $conn->query("SELECT * FROM USERS WHERE email=\"".$user."\" OR username=\"".$user."\"");

		if($result->num_rows != 1){
			setcookie("ERROR_LEVEL",1,time()+1);
			setcookie("ERROR_MSG","Username cannot be found! Register <a href='register.php'>HERE</a>",time()+1);
			header('Location: index.php');
		}else{
			$row = $result->fetch_assoc();

			if(hash("sha256",$pass) == $row["PASSWORD"]){
				session_start();
				$_SESSION['userid'] = $row['ID'];
				$_SESSION['username'] = $row['USERNAME'];
				$_SESSION['email'] = $row['EMAIL'];
				include 'module/refreshauth.php';
				header('Location: home.php');
			}else{
				setcookie("ERROR_LEVEL",1,time()+1); // Invalid Password!
				setcookie("ERROR_MSG","Wrong Password!",time()+1);
				header('Location: index.php');
			}

			exit();
		}
	}else{
		die("Error");
	}
?>