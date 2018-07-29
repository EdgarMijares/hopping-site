<?php
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
				header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hopping | Console</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>	
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/overview.js"></script>
	<script type="text/javascript" src="js/googlemaps.js" ></script>
	<script async defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk2F-qNHQArEDnH5q0YlvQ5Wt8dqVuQko&callback=initMap"
    async defer></script>
</head>
<body>
	<div id="big-container">
		<?php include('_includes/side_menu.php'); ?>
		<div id="content">
			<!--
			<?php include('_includes/panel_header.php'); ?>
			-->
			<img id="mini-logo-hopping" src="webicons/imagotipo_hopping_white_background.png">
			<div id="overview-panel">
				<form id="profile-image-form" action="logic/change_image.php" method="POST" enctype="multipart/form-data">
					<div id="account-edite-profile-image-container">
						<label for="edit-profile-image-button" id="file-label"><img src="webicons/edit-icon.png" id="change-image-icon"></label>
						<input type="file" id="edit-profile-image-button" name="image" accept="image/*">
						<?php 
						if ($_SESSION['image-changed']) {
							echo "<img id='account-edite-profile-image' src='profile-images/".$_SESSION['temp-image']."'>";
							$_SESSION['image-changed'] = false;
						} else {
							echo "<img id='account-edite-profile-image' src='profile-images/".$_SESSION['profileimage']."'>";
						}?>
					</div>
				</form>
				<form id="account-editor" action="logic/edit_account.php" method="POST">
					<?php 
						$labels = array('Nombre del Lugar','Descripcion del Lugar', 'Numero de Contacto', 'Direccion');
						$names = array('placename','description','contactnumber','address');
						include('logic/conection.php');
						$id_place = $_SESSION['id_place'];
						$query = "SELECT placename, description, contactnumber, address FROM places WHERE id_place='$id_place'";
						$row = mysqli_fetch_array(mysqli_query($conection, $query));
						for ($i=0; $i < 4; $i++) {
							$label = $labels[$i];
							echo "<label for='place-name'>".$label."</label>
									<div class='input-container'>
										<input type='text' name='".$names[$i]."'' id='input-".$i."' disabled value='".$row[$names[$i]]."'>
										<img src='webicons/edit-icon.png' id='edit-input-".$i."'>						
									</div>";
						}
					?>
					<div id="googleMap-container">
						<div id="googleMap"></div>
					</div>
					<input type="submit" value="Guardar" id="save-button">
				</form>
			</div>
		</div>
		<!--end content-->
		<?php include('_includes/footer.php'); ?>
	</div>
	<!--end big container-->
</body>
</html>