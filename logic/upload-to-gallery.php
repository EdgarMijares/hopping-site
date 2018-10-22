<?php
	session_start();

	include('conection.php');

		if (isset($_FILES['new-image']) && isset($_POST['column'])) {
			$target = "../profile-images/".basename($_FILES['new-image']['name']);
			$image = $_FILES['new-image']['name'];
			$column = $_POST['column'];
			$_SESSION['temp-image'] = $image;
			$id_place = $_SESSION['id_place'];
			$queryupdate = "UPDATE gallery SET ".$column."='$image' WHERE id_place='$id_place'";

			$resultselect = mysqli_query($conection, $queryupdate) or die($query." error ".mysqli_error($conection));
			if (move_uploaded_file($_FILES['new-image']['tmp_name'], $target)) {
				header('Location: ../galeria.php');
			}
		}//end if
?>
