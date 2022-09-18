<?php
$servername = $db['host'];
$username = 'root';
$password = $db['pass'];
$database = $db['db'];

// Connection Name
$db = new mysqli($servername, $username, $password, $database);

// Check Connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

;?>

