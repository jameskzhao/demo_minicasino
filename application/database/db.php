<?php

require_once 'config.php';

$mysqli = new mysqli("localhost", DB_USER, DB_PWD, DB_NAME);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}
