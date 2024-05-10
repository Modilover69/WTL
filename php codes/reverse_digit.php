<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integer Reversal</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Enter an integer:</label>
        <input type="number" id="number" name="number">
        <input type="submit" value="Reverse Digits">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $reversed = (int) strrev($number);
        echo "<p>Reversed integer: $reversed</p>";
    }
    ?>
</body>

</html>