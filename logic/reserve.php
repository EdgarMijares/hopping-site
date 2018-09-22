<?php
	include 'conection.php';

	if (isset($_POST['name']) && isset($_POST['numberOfPeople']) && isset($_POST['PID'])) {
		$name = $_POST['name'];
		$numberOfPeople = $_POST['numberOfPeople'];
		$placeID = $_POST['PID'];

		$query = "INSERT INTO reservas(id_place, name, numberOfPeople) VALUES ($placeID, '$name', $numberOfPeople)"
		$conection->query($query) or die ("error insertando reservacion ".mysqli_error($conection));
		$conection->close();
	}
?>