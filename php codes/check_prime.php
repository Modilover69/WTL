<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number">
        <input type="submit" value="Check Prime">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $prime = true;

        if ($number <= 1) {
            $prime = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $prime = false;
                    break;
                }
            }
        }

        if ($prime) {
            echo "<p>$number is a prime number.</p>";
        } else {
            echo "<p>$number is not a prime number.</p>";
        }
    }
    ?>
</body>

</html>