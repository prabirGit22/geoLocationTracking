<?php
require 'db.php'; // Database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the latitude and longitude from the POST request
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Insert the location data into the database
    $sql = "INSERT INTO locations (latitude, longitude) VALUES (:latitude, :longitude)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':latitude', $latitude);
    $stmt->bindParam(':longitude', $longitude);
    
    if ($stmt->execute()) {
        echo "Location stored successfully!";
    } else {
        echo "Error storing location.";
    }
}
?>
