<?php

define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'project1_user' );
define( 'DB_PASS', 'hJt*43x$te1@UM#JiZ5355h%7Kcw%O*6GFy9JIp0223' );
define( 'DB_NAME', 'project1' );

// Create DB connection
$conn = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );

// Check Conn
if ( $conn->connect_error) {
    die ( 'Connection Failed ' . $conn->connect_error );
}



