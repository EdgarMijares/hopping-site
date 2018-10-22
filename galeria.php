<?php
	session_start();
	include("logic/conection.php");

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Promos</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/galeria.js"></script>
</head>
<body>
	<div id="big-container">
		<?php include('_includes/side_menu.php'); ?>

		<div id="content">
			<img id="mini-logo-hopping" src="webicons/imagotipo_hopping_white_background.png">
			<div id="galeria-panel">

				<h1 class="section-title">Galeria</h1>
				<h2 class="section-subtitle-2">Vista previa</h2>

				<div class="images-container">
						<?php
							$id_place = $_SESSION['id_place'];

							$i = 0;
							$key = "img_".$i;

							$query = "SELECT * FROM gallery WHERE id_place='$id_place'";
							$resultselect = mysqli_query($conection, $query);

							if ($resultselect->num_rows > 0) {
								while ($fila = $resultselect->fetch_assoc()) {
									while ($i < 10) {
										$key = "img_".$i;
										$img = $fila["img_".$i];
										echo "<form action='logic/upload-to-gallery.php' method='post' enctype='multipart/form-data' class='images-container'>";
										echo "<img src='profile-images/".$img."'class='gallery_img'>";
										echo '<input name="new-image" accept="image/*"" type="file">';
										echo "<input type='hidden' name='column' value='".$key."'>";
										echo "<input type='submit' value='Subir Imagen a Galeria'>";
										echo "</form>";
										$i++;
									}//end while $i < 10
								}//end while fetch assoc
							}//end if
						?>
				</div>
			</div>
		</div><!--end content-->

		<?php include('_includes/footer.php'); ?>
	</div><!--end big container-->
</body>
</html>
