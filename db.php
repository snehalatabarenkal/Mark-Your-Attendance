<?php
$host = "localhost";
$user = "attendance_user";       // Or 'root' if you're using root access
$password = "attend@123";       // Must match the MySQL password
$dbname = "attendance";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
