<?php
$host = "localhost";
$user = "root"; // default XAMPP username
$pass = "";     // default XAMPP password (empty)
$db   = "user_system";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
