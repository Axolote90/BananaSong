<?php
$servername = "localhost";
$username = "u866075757_Luis";
$password = "Mayoneza-1";
$dbname = "u866075757_Users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
