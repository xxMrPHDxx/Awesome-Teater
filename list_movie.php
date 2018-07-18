<div class="movie list center" action="select_movie.php" method="POST">
	<?php 
		include "module/opendb.php";

		function createMovie($id,$name,$desc){
			echo "<form action=\"select_movie.php\" method=\"POST\">";
			echo "<input type=\"hidden\" name=\"movie\" value=\"".$id."\">"; 
			echo "<input type=\"submit\" name=\"submit\" class=\"movie\" value=\"".$name."\">";
			echo "</form>";
		}

		$result = $conn->query("SELECT * FROM MOVIES");
		if($result) while($row = $result->fetch_assoc()){
			$id = $row['ID'];
			$name = $row['NAME'];
			$desc = $row['DESCR'];
			createMovie($id,$name,$desc);
		}

		include "module/closedb.php";
	?>
</div>