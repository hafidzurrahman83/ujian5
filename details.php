<?php
include 'db.php'; // Include database connection

// Get the footage ID from the URL
$footage_id = $_GET['id'];

// Fetch the specific footage data
$sql = "SELECT * FROM footage WHERE id='$footage_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $image_url = $row['image_url'];
    $description = $row['description'];
} else {
    echo "Footage not found.";
}

$conn->close(); // Close the database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        /* Header Styles */
        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 10px;
            font-weight: bold;
        }

        /* Section Styles */
        section {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        section img {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 8px;
            display: block;
            margin: 0 auto 20px;
        }

        section p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }

        /* Footer Styles */
        footer {
            text-align: center;
            margin-top: 20px;
        }

        footer a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>
    <section>
        <img src="<?php echo $image_url; ?>" alt="<?php echo $title; ?>" style="width:100%; max-width:600px;">
        <p><?php echo $description; ?></p>
    </section>
    <footer>
        <a href="index.php">Back to Gallery</a>
    </footer>
</body>
</html>
