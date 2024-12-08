<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $image_url = $_POST['image_url'];
    $description = $_POST['description'];

    $sql = "INSERT INTO footage (title, image_url, description) VALUES ('$title', '$image_url', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New footage added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); // Close the database connection
}
?>
