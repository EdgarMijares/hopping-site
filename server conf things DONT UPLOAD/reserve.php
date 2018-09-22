<?php
	include 'conection.php';

	echo "fuera del condicional";
	print_r($_POST);

	if (isset($_POST['name']) && isset($_POST['numberOfPeople']) && isset($_POST['PID']) && isset($_POST['fb_user_id'])) {
		$name = $_POST['name'];
		$numberOfPeople = $_POST['numberOfPeople'];
		$placeID = $_POST['PID'];
		$fb_user_id = $_POST['fb_user_id'];

		echo "las variables existen".$name." ".$numberOfPeople." ".$placeID." ".$fb_user_id;

		$query = "INSERT INTO reservas(id_place, name, numberOfPeople, fb_user_id) VALUES ($placeID, '$name', $numberOfPeople, $fb_user_id)";
		$conection->query($query) or die ("error insertando reservacion ".mysqli_error($conection));
		$conection->close();
	} else {
		echo "las variables no existen";
	}
?>
