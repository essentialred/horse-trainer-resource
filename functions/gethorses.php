<?php
	require('../functions/dbconnect.php');

$id = $_SERVER["QUERY_STRING"];

$query = $mysqli->query('SELECT * FROM horses
WHERE `horses`.id ='.$id);

echo $mysqli->error;

$results = array();
while($row = $query->fetch_assoc()) {

echo '<pre>';
print_r($results);
echo '</pre>';

?>