<!DOCTYPE html>
<html>
<head>
	<title>Download</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/landing_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php
		if (isset($_GET['platform'])) {
			$platform = $_GET['platform'];
			$iosStoreURL = "https://itunes.apple.com/us/app/hopping/id1422392712?ls=1&mt=8";
			$androidStoreURL = "https://play.google.com/store/apps/details?id=com.luiseduardovelaruiz.hopping";
			switch ($platform) {
				case 'ios':
					header("Location: $iosStoreURL");
					break;
				case 'android':
					header("Location: $androidStoreURL");
					break;
			}//end switch
		}
	?>
	<?php include('_includes/landing_header.php'); ?>
		<div id="big-container">
		</div>
	<?php include('_includes/footer.php'); ?>
</body>
</html>
