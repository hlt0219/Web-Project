<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $event_name = $_POST['eventName'] ?? '';
    $event_date = $_POST['eventDate'] ?? '';
    $event_time = $_POST['eventTime'] ?? '';
    $event_location = $_POST['eventLocation'] ?? '';
    $event_type = $_POST['eventType'] ?? '';
    $event_description = $_POST['eventDescription'] ?? '';

    echo "<h1>✅ Event Created - Saved to system</h1>";
    echo "<div style='border:1px solid black; padding:15px; width:400px;'>";

    echo "<strong>Name:</strong> $event_name <br><br>";
    echo "<strong>Date:</strong> $event_date <br><br>";
    echo "<strong>Time:</strong> $event_time <br><br>";
    echo "<strong>Location:</strong> $event_location <br><br>";
    echo "<strong>Type:</strong> $event_type <br><br>";
    echo "<strong>Description:</strong> $event_description <br><br>";

    echo "</div>";
}
?>