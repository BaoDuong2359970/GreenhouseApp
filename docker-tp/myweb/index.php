<?php
$conn = new mysqli("db", "user", "pass", "db_objet");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to DB successfully!";
?>
