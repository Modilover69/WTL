<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="units">Enter units consumed:</label>
        <input type="text" id="units" name="units">
        <input type="submit" value="Calculate Bill">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $units = $_POST["units"];
        $totalBill = 0;

        if ($units <= 50) {
            $totalBill = $units * 3.50;
        } elseif ($units <= 150) {
            $totalBill = (50 * 3.50) + (($units - 50) * 4.00);
        } elseif ($units <= 250) {
            $totalBill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
        } else {
            $totalBill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
        }

        echo "<p>Total electricity bill for $units units: Rs. $totalBill</p>";
    }
    ?>
</body>

</html>