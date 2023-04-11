<?php

$host = "localhost";
$db = "camping_scrum";
$user = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, '');

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}