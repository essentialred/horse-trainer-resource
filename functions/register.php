<?php

require('dbconnect.php');

$return = '';

$required = ($_POST['name'] && $_POST['email']);

if($mysqli->query('
        INSERT INTO `users` (
            name,
            is_owner,
            is_trainer,
            other_title,
            tel,
            email,
            location,
            allow_inquiry_past,
            allow_inquiry_present,
            allow_inquiry_training,
            allow_inquiry_sales
        ) VALUES(
            "'.mysql_real_escape_string($_POST['name']).'",
            "'.mysql_real_escape_string($_POST['is_owner']).'",
            "'.mysql_real_escape_string($_POST['is_trainer']).'",
            "'.mysql_real_escape_string($_POST['other_title']).'",
            "'.mysql_real_escape_string($_POST['tel']).'",
            "'.mysql_real_escape_string($_POST['email']).'",
            "'.mysql_real_escape_string($_POST['location']).'",
            "'.mysql_real_escape_string($_POST['allow_inquiry_past']).'",
            "'.mysql_real_escape_string($_POST['allow_inquiry_present']).'",
            "'.mysql_real_escape_string($_POST['allow_inquiry_training']).'",
            "'.mysql_real_escape_string($_POST['allow_inquiry_sales']).'"
        )') && $required){

        $return = array(
            'success' => true,
            'userdata' => $_POST
        );

} else {
    $return = array(
        'success' => false,
        'userdata' => $_POST
    );
}

header('Content-Type: application/json');
echo json_encode($return);