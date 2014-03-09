<?php
 
require('../functions/dbconnect.php');

$name = isset($_GET['name']) ? $_GET['name'] : false;

if ($name) :
	$query = $mysqli->query('SELECT * FROM horses
	WHERE `horses`.name LIKE "%'.$name.'%"');

	/* 
	Selects specific column (h is an alias)
	$query = $mysqli->query('SELECT h.name FROM horses h
	WHERE `h`.name LIKE "%'.$name.'%"');*/

	echo $mysqli->error;

	$results = array();
	while($row = $query->fetch_assoc()):

		$results[] = $row;
		
	endwhile;

	echo json_encode($results);

else :

	echo json_encode("success": false);
	
endif; 

$mysqli->close();

?>