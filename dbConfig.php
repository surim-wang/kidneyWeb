<?php
// Database configuration
$dbHost     = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "123456";
$dbName     = "opentutorials";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
