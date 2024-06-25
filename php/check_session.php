<?php
session_start();

$response = array('loggedIn' => false);

if (isset($_SESSION['nombre'])) {
    $response['loggedIn'] = true;
    $response['nombre'] = $_SESSION['nombre'];
}

echo json_encode($response);
?>
