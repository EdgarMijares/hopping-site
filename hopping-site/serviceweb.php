<?php

	$connection = new mysqli("mysql.hostinger.mx","u717923162_admin","#hoppingdb","u717923162_hopdb");

	if ($connection->connect_errno) {
		echo "<p> Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error."<p>";
	}

	$query = "SELECT * FROM promos";

	if ($result = mysqli_query($connection, $query)){

		$resultArray = array();
		$tempArray = array();
 
		while($row = $result->fetch_object()){
			$tempArray = $row;
	    	array_push($resultArray, $tempArray);
		}
 		echo json_encode($resultArray);
	} else {
		echo "<p> no result </p>";
	}
 
	mysqli_close($connection);

?>