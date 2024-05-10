<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Transformation</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="text">Enter a string:</label>
        <input type="text" id="text" name="text">
        <input type="submit" value="Transform">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];

        echo "<p>All Uppercase: " . strtoupper($text) . "</p>";
        echo "<p>All Lowercase: " . strtolower($text) . "</p>";
        echo "<p>First Character Uppercase: " . ucfirst($text) . "</p>";
        echo "<p>First Character of All Words Uppercase: " . ucwords($text) . "</p>";
    }
    ?>
</body>

</html>