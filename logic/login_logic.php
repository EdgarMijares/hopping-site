<?php 
	session_start();

	include_once("conection.php");

	$user = $_POST['user'];
	$password = $_POST['password'];

	$user_query = "SELECT username, password, id_user FROM users WHERE username='$user'";
	$result = mysqli_query($conection,$user_query);

	if ($result -> num_rows > 0) {
		$row = mysqli_fetch_array($result);
		if ($password == $row['password']) {
			$_SESSION['username'] = $user;
			$_SESSION['id_user'] = $row['id_user'];
			$_SESSION['image-changed'] = false;
			$_SESSION['save-pending'] = false;
			$_SESSION['loggedin'] = true;
			header('Location: ../overview.php');	
		}  else {
			header('Location: ../login.php');
		}
	} else {
		header('Location: ../login.php');
	}
?>