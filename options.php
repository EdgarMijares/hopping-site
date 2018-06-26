<?php 
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Options</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>	
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/options.js"></script>
</head>
<body>
	<div id="big-container">
		<?php include('_includes/side_menu.php'); ?>
		<div id="content">
			<?php include('_includes/panel_header.php');; ?>
			<div id="overview-panel">
				<a id="logout-link" href="logic/logout.php"> CERRAR SESSION </a>
			</div>
		</div>
		<!--end content-->

		<?php include('_includes/footer.php'); ?>
	</div>
	<!--end big container-->
</body>
</html>