<?php

require('dbconnect.php');

$return = '';

$required = ($_POST['name'] && $_POST['gender'] && $_POST['birth_date']);

if($mysqli->query('
        INSERT INTO `horses` (
            name,
            registry,
            registration_number,
            birth_date,
            microchip,
            gender
        ) VALUES(
            "'.mysql_real_escape_string($_POST['name']).'",
            "'.mysql_real_escape_string($_POST['registry']).'",
            "'.mysql_real_escape_string($_POST['registration_number']).'",
            "'.mysql_real_escape_string($_POST['birth_date']).'",
            "'.mysql_real_escape_string($_POST['microchip']).'",
            "'.mysql_real_escape_string($_POST['gender']).'"
        )') && $required){

        $return = array(
            'success' => true,
            'horsedata' => $_POST
        );

} else {
    $return = array(
        'success' => false,
        'horsedata' => $_POST
    );
}

header('Content-Type: application/json');
echo json_encode($return);