<?php
include 'db.php';

$sql = "SELECT event_name, event_description, event_category, start_date, end_date FROM event_details";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
</head>
<body>
    <h1>Upcoming Events</h1>
    <ul>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<h2>" . $row["event_name"] . "</h2>";
            echo "<p>" . $row["event_description"] . "</p>";
            echo "<strong>Category:</strong> " . $row["event_category"] . "<br>";
            echo "<strong>From:</strong> " . $row["start_date"] . " <strong>To:</strong> " . $row["end_date"];
            echo "</li>";
        }
    } else {
        echo "<li>No events found.</li>";
    }
    $conn->close();
    ?>
    </ul>
</body>
</html>