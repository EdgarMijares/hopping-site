<!DOCTYPE html>
<html>
<head>
	<title>Hopping | Log In</title>
	<link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="icons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
<body>
	<div id="big-container">
		<div id="main-container">
			<!---->
			<div id="logo-container">
				<img src="icons/imagotipo_hopping.png" id="hopping-logo">
			</div>
			<!--User login form-->
			<div id="login-container">
				<form id="login_form" action="logic/login_logic.php" method="POST">
					<input type="text" name="user" class="input" id="user" placeholder="Username">
					<input type="password" name="password" class="input" id="password" placeholder="Password">
					<input type="submit" name="login" id="login" value="Log In">
				</form>
			</div>
		</div>
	</div>
	<?php
		include('_includes/footer.php');
	?>
</body>
</html>
<script type="text/javascript" src="js/login.js"></script>