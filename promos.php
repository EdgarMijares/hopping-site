<?php 
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Promos</title>
	<link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon">
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
			<?php include('_includes/panel_header.php');; ?>
			<div id="promos-panel">
				<form id="promo-editor" action="logic/update_promos.php" method="POST">
					<?php
						include('logic/promos_days.php');
						for ($i=0; $i < 7; $i++) { 
							echo "<div class='day-promo'>
									<img class='day-icon' src='icons/days-icons/".$i.".png'>
									<textarea class='promo-textarea' name='".$days[$i]."'></textarea>
								  </div>";
						}//end for
					?>
					<input type="submit" id="save-changes" value="GUARDAR">
				</form>
			</div>
		</div>
		<!--end content-->

		<?php include('_includes/footer.php'); ?>
	</div>
	<!--end big container-->
</body>
</html>