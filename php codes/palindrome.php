<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="text">Enter a string:</label>
        <input type="text" id="text" name="text">
        <input type="submit" value="Check Palindrome">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $reverse = strrev($text);

        if (strtolower($text) == strtolower($reverse)) {
            echo "<p>$text is a palindrome.</p>";
        } else {
            echo "<p>$text is not a palindrome.</p>";
        }
    }
    ?>
</body>

</html>