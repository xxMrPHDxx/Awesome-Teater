<?php
	if(empty($_SESSION['movie_id'])){
		die("Please select a movie on the left menu!");
	}
?>
<div class="seat-template">
	<?php 
		include "module/opendb.php";

		function createOption($seatid,$damaged,$ordered,$username,$can_order){
			$class = "";
			if($ordered == 1){
				$class = $class."ordered"; 
			}
			if($damaged == 1){
				$class = $class." damaged";
			}
			if($can_order){
				echo "<form action=\"order.php\" method=\"POST\" ";
			}else{
				echo "<div ";
			}
			if($seatid == "127") {
				echo "style=\"grid-column-start: 7;\" ";
			}
			if($ordered == 1){
				echo "onmousedown=info(\"".$username."\") ";
			}
			echo ">";
			if($ordered < 1 && $damaged == 0) {
				echo "<input name=\"id\" type=\"hidden\" value=\"".$seatid."\">";
			}
			echo "<input name=\"submit\" type=\"submit\" class=\"".$class."\" value=\"\">";
			if($can_order) echo "</form>"; else echo "</div>";
		}

		$result = $conn->query("SELECT * FROM SEATS");

		while($row = $result->fetch_assoc()){
			$order = $conn->query("SELECT * FROM ORDERS WHERE seatid='".$row['ID']."' AND movieid=".$_SESSION['movie_id']);
			$detail = $order->fetch_assoc();
			$user = $conn->query("SELECT * FROM USERS WHERE id='".$detail['userid']."'")->fetch_assoc();
			$can = $conn->query("SELECT * FROM ORDERS WHERE userid=".$_SESSION['userid']." AND movieid=".$_SESSION['movie_id'])->num_rows;
			createOption($row['ID'],$row['DAMAGED'],$order->num_rows,$user['EMAIL'],$can < 1);
		}

		include "module/closedb.php";
	?>
</div>