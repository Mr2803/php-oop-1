<?php
header('Content-Type: application/json');
$server = "localhost";
$username = "root";
$password = "root";
$dbname = "hoteldb";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_errno) {

echo json_encode(-1);
return;
}