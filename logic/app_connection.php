<?php
	header('Content-Type: application/json');
	
	include("conection.php");

	$query = "SELECT * FROM places";

	if ($result = mysqli_query($conection, $query)){

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
 
	mysqli_close($conection);
?>