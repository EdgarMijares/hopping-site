<!DOCTYPE html>
<html>
<head>
	<title>Hopping | Registration</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/register.js"></script>
</head>
<body>
	<div id="big-container">
		<form method="POST" id="form-form">
			<table id="form-table">
				<tr>
					<td>
						<input class="register-input" type="text" name="name" placeholder="Nombre">
					</td>
				</tr>
				<tr>
					<td>
						<input class="register-input" type="text" name="last-name" placeholder="Apellidos">
					</td>
				</tr>
				<tr>
					<td>
						<input class="register-input" type="text" name="telephone" placeholder="Número telefónico">
					</td>
				</tr>
				<tr>
					<td>
						<input class="register-input" type="text" name="email" placeholder="Email">
					</td>
				</tr>
				<tr>
					<td>
						<input class="register-input" type="password" name="password" placeholder="Contraseña">
					</td>
				</tr>
				<tr>
					<td>
						<input class="register-input" type="password" name="repeat-password" placeholder="Confirmar contraseña">
					</td>
				</tr>
				<tr>
					<td>
						<input class="log-button" type="submit" value="Registrarse">
					</td>
				</tr>
			</table>
		</form>
	</div>

	<?php 
		include('_includes/footer.php');
	?>
</body>
</html>