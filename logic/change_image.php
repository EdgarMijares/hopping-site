<?php
	session_start();

	include($_SERVER['DOCUMENT_ROOT'].'/hopping-site/logic/conection.php');

		if (isset($_FILES['image'])) {
			$target = "../profile-images/".basename($_FILES['image']['name']);
			$image = $_FILES['image']['name'];

			$_SESSION['temp-image'] = $image;
			$id_place = $_SESSION['id_place'];

			$queryselect = "SELECT profileimage FROM temp_images_profiles WHERE id_place='$id_place'";
			$queryinsert = "INSERT INTO temp_images_profiles (id_place, profileimage) VALUES ('$id_place', '$image')";
			$queryupdate = "UPDATE temp_images_profiles SET profileimage='$image' WHERE id_place='$id_place'";

			$resultselect = mysqli_query($conection,$queryselect);
			if ($resultselect -> num_rows == 0) {
				echo "no entry... inserting";
				mysqli_query($conection,$queryinsert);
			} else if ($resultselect -> num_rows == 1) {
				echo "updating";
				mysqli_query($conection,$queryupdate);
			}

			if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
				$_SESSION['image-changed'] = true;
				header('Location: ../overview.php');
			} else {
			}
		}
?>