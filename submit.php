<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $date = date("Y-m-d");
    $time = date("H:i:s");

    $sql = "INSERT INTO attendance (name, date, time) VALUES ('$name', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Attendance marked successfully.";
    } else {
        echo "❌ Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


