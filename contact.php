<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/landing_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="contact-body">
	<?php include('_includes/landing_header.php'); ?>
	<div id="big-container">
	<h1 id="contact-title">Contactanos</h1>
	<div id="form-container">
		<form method="post" id="contact-form">
			<input class="inputs" type="email" name="email" placeholder="Email">
			<input class="inputs" type="text" name="name" placeholder="Nombre">
			<textarea class="inputs" id="message-textarea" placeholder="Mensaje"></textarea>
			<input id="send-button" type="submit" value="Enviar">
		</form>
	</div>

	</div>
	<?php include('_includes/footer.php'); ?>
</body>
</html>
