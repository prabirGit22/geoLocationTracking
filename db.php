<?php
// db.php - Database connection
$host = 'localhost';
$dbname = 'location_tracking';
$username = 'root'; // Change to your DB username
$password = ''; // Change to your DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
} ?>