<?php
//======================================================================
// DATABASE CONNECTION (Corrected for XAMPP on Mac)
//======================================================================
define('SALT', 'authentication');  // or any secure string

error_reporting(E_ALL);
ini_set('display_errors', 1);

DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', ''); // Empty for XAMPP
DEFINE('DB_NAME', 'timecaptrial'); // Use your real imported DB

$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
}
?>
