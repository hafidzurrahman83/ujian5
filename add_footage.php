<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Footage</title>
</head>
<body>
    <h1>Add New Footage</h1>
    <form action="insert.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <br>
        <input type="submit" value="Add Footage">
    </form>
</body>
</html>
