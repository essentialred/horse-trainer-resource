<?php
	require('../partials/header.php');
	require('../functions/dbconnect.php');

$id = $_SERVER["QUERY_STRING"];

//$query = $mysqli->query('SELECT name FROM `horses`');

$query = $mysqli->query('SELECT * FROM horses
LEFT JOIN `horses~trainers` ON horses.id = `horses~trainers`.horses_id
WHERE `horses~trainers`.trainers_id = '.$id);

echo $mysqli->error;

$results = array();
while($row = $query->fetch_assoc()) {
    $results[] = $row;
}

echo '<pre>';
print_r($results);
echo '</pre>';