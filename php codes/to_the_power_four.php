<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power of Four Checker</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Enter a positive integer:</label>
        <input type="number" id="number" name="number" min="1">
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        function isPowerOfFour($num)
        {
            return $num > 0 && (($num & ($num - 1)) == 0) && (($num - 1) % 3 == 0);
        }

        if (isPowerOfFour($number)) {
            echo "<p>$number is a power of four.</p>";
        } else {
            echo "<p>$number is not a power of four.</p>";
        }
    }
    ?>
</body>

</html>