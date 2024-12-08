<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indonesia Stock Footage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="hero-image">
            <img src="https://photos.smugmug.com/photos/i-jmrKKnN/1/MJr9hQtcDwq4nBksRXpF4HZ5Qhwt9KDcbprdM458w/X2/i-jmrKKnN-X2.jpg" alt="Hero Image">
            <div class="hero-text">
                <h1>Keindahan Alam Indonesia</h1>
                <p>"Pelajari keindahan alam Indonesia yang memukau dan penuh pesona alami."
</p>
            </div>
        </div>
    </header>

    <section class="gallery">
        <?php
        include 'db.php'; // Include the database connection script

        $sql = "SELECT * FROM footage"; // Query to select all records
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                echo '<div class="gallery-item">';
                echo '<img src="' . $row["image_url"] . '" alt="' . $row["title"] . '">';
                echo '<p>' . $row["title"] . '</p>';
                // Add "Baca Selengkapnya" link to the detailed page
                echo '<a href="details.php?id=' . $row["id"] . '" class="read-more">Baca Selengkapnya</a>';
                echo '</div>';
            }
        } else {
            echo "No records found.";
        }

        $conn->close(); // Close the database connection
        ?>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Indonesia Stock Footage. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
