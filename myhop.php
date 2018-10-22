<?php
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
				header('Location: login.php');
	}

	if (isset($_SESSION['id_place'])) {
    $idPlace = $_SESSION['id_place'];
    echo "<script>var idPlace = $idPlace;</script>";
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hopping | Mi Hop</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
  <script src="https://www.gstatic.com/firebasejs/5.5.1/firebase.js"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/myhop.js"></script>
</head>
<body>
	<div id="big-container">
		<?php include('_includes/side_menu.php'); ?>
		<div id="content">
			<img id="mini-logo-hopping" src="webicons/imagotipo_hopping_white_background.png">
			<div id="myhop-panel">
				<h1 class="section-title">Mi Hop</h1>
				<h2 class="section-subtitle">DÍAS DE OPERACIÓN</h2>

				<!--DELETE LATER PHP-->
				<div id="days-list-container">
					<ul id="days-list">
						<li class="horizontal-list-i">
							<div class="day-stack-view">
								<div class="day-checker" id="lun-day"></div>
								<h1 class="day-checker-text">LUN</h1>
							</div>
						</li>
						<li class="horizontal-list-i">
							<div class="day-stack-view">
								<div class="day-checker" id="mar-day"></div>
								<h1 class="day-checker-text">MAR</h1>
							</div>
						</li>
						<li class="horizontal-list-i">
							<div class="day-stack-view">
								<div class="day-checker" id="mie-day"></div>
								<h1 class="day-checker-text">MIE</h1>
							</div>
						</li>
						<li class="horizontal-list-i">
							<div class="day-stack-view">
								<div class="day-checker" id="jue-day"></div>
								<h1 class="day-checker-text">JUE</h1>
							</div>
						</li>
						<li class="horizontal-list-i">
							<div class="day-stack-view">
								<div class="day-checker" id="vie-day"></div>
								<h1 class="day-checker-text">VIE</h1>
							</div>
						</li>
						<li class="horizontal-list-i">
							<div class="day-stack-view">
								<div class="day-checker" id="sab-day"></div>
								<h1 class="day-checker-text">SAB</h1>
							</div>
						</li>
						<li class="horizontal-list-i">
							<div class="day-stack-view">
								<div class="day-checker" id="dom-day"></div>
								<h1 class="day-checker-text">DOM</h1>
							</div>
						</li>
					</ul>
				</div>
				<!--DELETE LATER PHP-->

				<h2 class="section-subtitle">HORARIOS DE RESERVACIÓN</h2>

				<div id="h-container">
						<label class="h-label">INICIA</label>
						<select id="start-hour" class="h-input">
							<?php
								for ($i=7; $i < 24; $i++) {
									echo "<option class='h-input-option' value='$i'>$i:00</option>";
								}
							?>
						</select>
						<label class="h-label">TERMINA</label>
						<select id="end-hour" class="h-input">
							<?php
								for ($i=7; $i < 24; $i++) {
									echo "<option class='h-input-option' value='$i'>$i:00</option>";
								}
							?>
						</select>
						<button type="button" id="psave-button" name="button">Guardar</button>
				</div>

			</div>
		</div>
		<!--end content-->
		<?php include('_includes/footer.php'); ?>
	</div>
	<!--end big container-->
</body>
