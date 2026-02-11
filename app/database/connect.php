<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db_name = 'blog';

// This is the code that connects a given website to a given database
// db_name is how you  assign and  connect to different databases between
// different sights and projects.
$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
	die('Database connection error: ' . $conn->connect_error);
} else {
	echo "Db connection succesful";
}
