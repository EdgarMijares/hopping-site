<?php
	session_start();
	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
		header('Location: login.php');
	}

	if (isset($_POST['aceptar-reserva'])) {
		$value = $_POST['aceptar-reserva'];
		echo "<script>var acceptReserveId='$value';</script>";
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
	<script src="https://www.gstatic.com/firebasejs/5.5.1/firebase.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/reservations.js"></script>
    <?php
    	$idPlace = $_SESSION['id_place'];
    	echo "<script>var idPlace = $idPlace;</script>";
    ?>
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
			<table id="reservations-table"></table>
		</div><!--end content-->
		<?php include('_includes/footer.php'); ?>
	</div><!--end big container-->
</body>
</html>
