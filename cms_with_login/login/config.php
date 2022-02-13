
<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db_name = 'login_register_pure_coding';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
