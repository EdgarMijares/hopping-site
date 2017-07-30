<?php
	include_once("configuration.php");

	$conection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die("couldn't connect to database");
?>