<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temp">Enter temperature:</label>
        <input type="text" id="temp" name="temp">

        <select name="unit">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST["temp"];
        $unit = $_POST["unit"];
        $convertedTemp = 0;

        if ($unit === "celsius") {
            $convertedTemp = ($temp - 32) * (5 / 9);
            echo "<p>$temp Fahrenheit is $convertedTemp Celsius</p>";
        } elseif ($unit === "fahrenheit") {
            $convertedTemp = ($temp * 9 / 5) + 32;
            echo "<p>$temp Celsius is $convertedTemp Fahrenheit</p>";
        }
    }
    ?>
</body>

</html>