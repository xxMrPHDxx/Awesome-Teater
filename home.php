<?php define("TITLE", "Home"); include "module/header.php" ?>
	<div id="Sidebar">
		<?php 
			include "sidebar.php";
			echo "<span>Hello, ".$_SESSION['username']."</span>"; 
		?>		
	</div>
	<div id="Body">
		Body
	</div>
<?php include "module/footer.php" ?>