<?php

require('dbconnect.php');

//$query = $mysqli->query('SELECT name FROM `horses`');

$query = $mysqli->query('SELECT * FROM horses
LEFT JOIN `horses~trainers` ON horses.id = `horses~trainers`.horses_id
WHERE `horses~trainers`.trainers_id = "6"');

echo $mysqli->error;

$results = array();
while($row = $query->fetch_assoc()) {
    $results[] = $row;
}

echo '<pre>';
print_r($results);
echo '</pre>';