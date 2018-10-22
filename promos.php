<?php
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Promociones</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/promos.js"></script>
</head>
<body>
	<div id="big-container">
		<?php include('_includes/side_menu.php'); ?>

		<div id="content">
			<img id="mini-logo-hopping" src="webicons/imagotipo_hopping_white_background.png">
			<div id="promos-panel">
				<h1 class="section-title">Promociones</h1>
				<form id="promo-editor" action="logic/update_promos.php" method="POST">
					<?php
						include('logic/promos_days.php');
						include('logic/conection.php');
						$idPlace = $_SESSION['id_place'];
						$query = "SELECT promomon, promotue, promowen, promothu, promofri, promosat, promosun FROM promos WHERE id_place='$idPlace'";
						$row = mysqli_fetch_array(mysqli_query($conection, $query));

						for ($i=0; $i < 7; $i++) {
							echo "<div class='day-promo'>
									<img class='day-icon' src='webicons/days-webicons/".$i.".png'>
									<textarea class='promo-textarea' name='".$days[$i]."'>".$row[$i]."</textarea>
								  </div>";
						}//end for
					?>
					<input type="submit" id="save-changes" value="Guardar">
				</form>
			</div>
		</div>
		<!--end content-->

		<?php include('_includes/footer.php'); ?>
	</div>
	<!--end big container-->
</body>
</html>
