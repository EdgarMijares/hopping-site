<?php
	session_start();
	
	include($_SERVER['DOCUMENT_ROOT'].'/hopping_local/logic/conection.php');
	include('promos_days.php');


	if (isset($_POST['lunes'],$_POST['martes'],$_POST['miercoles'],$_POST['jueves'],$_POST['viernes'],$_POST['sabado'],$_POST['domingo'])) {
		//print_r($_POST);

		$id_place = $_SESSION['id_place'];
		for ($i=0; $i < 7; $i++) { 
			$dayName = $days[$i];
			$promo = $_POST[$days[$i]];
			$query = "UPDATE promos SET promo='$promo' WHERE id_place='$id_place' AND dayName='$dayName'";
			mysqli_query($conection,$query);
		}
	}
?>