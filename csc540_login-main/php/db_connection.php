<?php
//======================================================================
// DATABASE CONNECTION (USE THIS IN THE APP)
//======================================================================

DEFINE('DB_HOST', "localhost");
DEFINE('DB_USER', "root");
DEFINE('DB_PASSWORD', "csc540data");
DEFINE('DB_NAME', "login_db");

$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
}       


?>
