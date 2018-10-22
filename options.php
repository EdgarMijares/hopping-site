<?php
	session_start();
	$sessionIdPlace = $_SESSION['id_place'];
	include('logic/conection.php');

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
		header('Location: login.php');
	}//end if

/*
	if (isset($_GET['status']) && $_GET['status']=='success') {
		echo "<script> console.log('pago recibido');</script>";
		$query = "UPDATE places SET accountType='suscribed' WHERE id_place=$sessionIdPlace";
		mysqli_query($conection, $query);
		$query = "SELECT * FROM billingHistory WHERE id_place=$sessionIdPlace";
		$result = mysqli_query($conection, $query);

		if ($result) {
			if ($result->num_rows == 0) {
				$amount = 0;
			} else {
				$amount = 3000;
			}
			$myDate = date('d-m-Y');
			$insertHistory = "INSERT INTO billingHistory VALUES($sessionIdPlace, '$myDate', $amount)";
			mysqli_query($conection, $insertHistory);
		}
	}//end if
*/
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
			<h1 class="section-title">Plan Actual</h1>
			<?php

				$user_query = "SELECT accountType FROM places WHERE id_place='$sessionIdPlace'";
				$result = mysqli_query($conection, $user_query);

				if ($result -> num_rows > 0) {
					$row = mysqli_fetch_array($result);
					$accountType = $row['accountType'];
					$plan = $accountType;
				}
				if ($plan == "suscribed") {
					echo "<div class='options-text'>Suscrito</div>";
				}

/*
				if ($plan == "unsuscribed") {
					echo "<div class='options-text'>Sin suscripcion</div>";
					echo "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
									<input type='hidden' name='cmd' value='_s-xclick'>
									<input type='hidden' name='hosted_button_id' value='X9QWKSJWWEMDG'>
									<input type='image' src='https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif' border='0' name='submit' alt='PayPal, la forma más segura y rápida de pagar en línea.'>
									<img alt='' border='0' src='https://www.paypalobjects.com/es_XC/i/scr/pixel.gif' width='1' height='1'>
								</form>";
				}
*/
			?>

			<a id="logout-link" href="logic/logout.php"> CERRAR SESSION </a>

		</div>
		<!--end content-->

		<?php include('_includes/footer.php'); ?>
	</div>
	<!--end big container-->
</body>
</html>
