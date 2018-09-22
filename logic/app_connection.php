<?php
	header('Content-Type: application/json');
	
	include("conection.php");

	$query = "SELECT * FROM places";

	$result = $conection->query($query) or die("");
	$resultArray = array();

	if ($result){
		while($row = mysqli_fetch_assoc($result)){
			if ($row["profileimage"]) {
				//$row["profileimage"] = "/Applications/XAMPP/xamppfiles/htdocs/hopping-site/profile-images/".$row["profileimage"];
				$row["profileimage"] = $row["profileimage"];
			}

			$id_place = $row["id_place"];
			$promosQuery = "SELECT promomon, promotue, promowen, promothu, promofri, promosat, promosun FROM promos WHERE id_place='$id_place'";
			$result2 = $conection->query($promosQuery) or die("error");

			if ($result2) {
				while ($row2 = mysqli_fetch_assoc($result2)) {
					$row["promos"] = $row2;
				}
			}
			$resultArray[] = $row;
		}
 		echo json_encode($resultArray);
	} else {
		echo "<p> no result </p>";
	}
	
	mysqli_close($conection);
?>