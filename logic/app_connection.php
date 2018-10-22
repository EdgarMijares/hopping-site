<?php
	header('Content-Type: application/json');

	include("conection.php");

	$query = "SELECT profileimage, placename, id_place, latitude, longitude, description, backgroundimage, accountType FROM places ORDER BY id_place DESC";

	$result = $conection->query($query) or die("");
	$resultArray = array();

	if ($result){
		while($row = mysqli_fetch_assoc($result)){

			if($row["accountType"]=="suscribed"){

			if ($row["profileimage"]) {
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

			$galleryImagesQuery = "SELECT img_0, img_1, img_2, img_3, img_4, img_5, img_6, img_7, img_8, img_9 FROM gallery WHERE id_place='$id_place'";
			$result3 = $conection->query($galleryImagesQuery) or die("error");

			if ($result3) {
				while ($row3 = mysqli_fetch_assoc($result3)) {
					$row["gallery"] = $row3;
				}
			}
			$resultArray[] = $row;
		}

		}//end while
 		echo json_encode($resultArray);
	} else {
		echo "<p> no result </p>";
	}

	mysqli_close($conection);
?>
