<?php
	session_start();

	include('conection.php');
	include('promos_days.php');

	if (isset($_POST['lunes'],$_POST['martes'],$_POST['miercoles'],$_POST['jueves'],$_POST['viernes'],$_POST['sabado'],$_POST['domingo'])) {
		print_r($_POST);
		$id_place = $_SESSION['id_place'];
		for ($i=0; $i < 7; $i++) {
			$dayName = $days[$i];
			$promoDay = $promodays[$i];
			$promo = $_POST[$days[$i]];
			$query = "UPDATE promos SET $promoDay='$promo' WHERE id_place='$id_place'";
			echo $query."<br>";
			mysqli_query($conection,$query);
		}
	}
?>
