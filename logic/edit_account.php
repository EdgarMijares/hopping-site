<?php 
	session_start();

	include('conection.php');
	$id_place = $_SESSION['id_place'];
	
	if (isset($_SESSION['temp-image'])) {
		$temp_image = $_SESSION['temp-image'];
		// image save confirmation
		$imagequery = "UPDATE places SET profileimage='$temp_image' WHERE id_place='$id_place'";
		mysqli_query($conection, $imagequery);
		$_SESSION['save-pending'] = true;
	}
	

	// data save
	$placename = $_POST['placename'];
	$description = $_POST['description'];
	$contactnumber = $_POST['contactnumber'];
	$address = $_POST['address'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	$dataquery = "UPDATE places SET placename='$placename', description='$description', contactnumber='$contactnumber', address='$address', latitude='$latitude', longitude='$longitude' WHERE id_place='$id_place'";
	$_SESSION['save-pending'] = true;
	mysqli_query($conection, $dataquery);
	print_r($_POST);

?>