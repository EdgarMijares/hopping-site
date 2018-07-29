<?php
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hopping | Reservaciones</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>	
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/reservations.js"></script>
	<script type="text/javascript" src="js/googlemaps.js" ></script>
	<script async defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk2F-qNHQArEDnH5q0YlvQ5Wt8dqVuQko&callback=initMap"
    async defer></script>
</head>
<body>
	<div id="big-container">
		<?php include('_includes/side_menu.php'); ?>
		<div id="content">
			<img id="mini-logo-hopping" src="webicons/imagotipo_hopping_white_background.png">
			<h1 class="section-title" id="reservations-title">Reservaciones</h1>

			<div id="search-container">
				<input id="search-input" type="text" name=""><img src="webicons/Buscar.png" id="search-input-icon">
			</div>

			<table id="reservations-table">
				<tr>
					<th>HORA</th>
					<th>FECHA</th>
					<th>NOMBRE</th>
					<th>PERSONAS</th>
				</tr>

				<?php 
					for ($i=0; $i < 10; $i++) { 
						if ($i%2 == 0) {
							echo "
									<tr class='pair'>
										<td>asdf</td>
										<td>asdf</td>
										<td>asdf</td>
										<td>asdf</td>
									</tr>
								";
						} else {
							echo "
								<tr class='odd'>
									<td>asdf</td>
									<td>asdf</td>
									<td>asdf</td>
									<td>asdf</td>
								</tr>
							";
						}
					}
				?>

			</table>

		</div><!--end content-->
		<?php include('_includes/footer.php'); ?>
	</div><!--end big container-->
</body>
</html>