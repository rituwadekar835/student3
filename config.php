<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "student4";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed");
}

session_start();
?>