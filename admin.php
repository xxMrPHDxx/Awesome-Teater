<?php define("TITLE", "Admin Panel"); include "module/header.php" ?>
	<div id="Sidebar"><?php 
		echo "Hello, ".$_SESSION['username']; 
		if(isset($_POST['submit']) && isset($_POST['command'])){
			include 'module/opendb.php';

			$command = isset($_POST['command']);
			if($command == 'clear-all'){
				$conn->query('DELETE FROM ORDERS');
			}

			include 'module/closedb.php';
		}
	?></div>
	<div id="Body">
		<span>Admin Panel</span>
		<form action='' method="POST">
			<input type="hidden" name="command" value="clear-all">
			<input type="submit" name="submit" value="Clear All Seats">
		</form>
	</div>
<?php include "module/footer.php" ?>