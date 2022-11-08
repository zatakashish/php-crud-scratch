<?php

/* Database credentials. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'hbcw_local');
define('DB_PASSWORD', 'hbcw');
define('DB_NAME', 'hbcw_local');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}