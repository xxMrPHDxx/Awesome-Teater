<?php session_start(); if(isset($_SESSION['username'])) { header("Location: home.php"); exit(); } ?>
<!DOCTYPE html>
<html>
<head>
	<title>Seat Order</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="icon.png">
</head>
<body>
	<div class="wrapper">
		<form id="Login" class="center" action="login.php" method="POST">
			<?php 
				if(isset($_COOKIE['ERROR_LEVEL'])) echo "<span class=\"error-message\">".$_COOKIE['ERROR_MSG']."</span>";
			?>
			<span>
				<input class="pretty-input center" type="text" name="login" placeholder="Username / E-mail">
				<span class="icon"><img class="icon" src="user.png"></img></span>
			</span>
			<span>
				<input class="pretty-input center" type="password" name="pass" placeholder="Password">
				<span class="icon"><img class="icon" src="pass.png"></img></span>
			</span>
			<span>
				<input class="pretty-button center" type="submit" name="submit" value="Login">
			</span>
		</form>
	</div>
	<?php
		echo "<script id='temp'>(function(){a=document.querySelector('#temp');setInterval(()=>{window.onclick = (e) => {if(e.which === 3) e.preventDefault();};window.oncontextmenu = (e) => {e.preventDefault();};try{a.outerHTML = '';}catch(e){}},33)})()</script>";
	?>
</body>
</html>