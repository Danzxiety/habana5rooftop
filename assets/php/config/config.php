<?php
// Database configuration
$ini = parse_ini_file('config.ini');

// Create database connection
$db = new mysqli($ini['DB_HOST'], $ini['DB_USERNAME'], $ini['DB_PASSWORD'], $ini['DB_NAME']);

// Check connection
if ($db->connect_error) {
    error_log("Failed to connect to MySQL: " . $db->connect_error);
    exit();
}
?>