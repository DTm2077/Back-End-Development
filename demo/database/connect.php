<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "crud";
$dbPort = 3307;
$conn = new mysqli ($dbHost, $dbUser, $dbPass, $dbName, $dbPort);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>