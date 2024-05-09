<!DOCTYPE html>
<html>

<head>
    <title>Table of a number</title>
    <style>
        body {
            font-family: Arial, sansserif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            text-align:
                center;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            padding:
                5px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color:
                #007BFF;
            color: #fff;
            border:
                none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            backgroundcolor: #0056b3;
        }

        table {
            margin-top: 20px;
            bordercollapse: collapse;
            width:
                50%;
            margin-left: auto;
            margin-right: auto;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color:
                #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Table of a number</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Generate Table">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if (is_numeric($number) && $number > 0 && intval($number) == $number) {
            echo "<h2>Table for $number</h2>";
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$number x $i</td>";
                echo
                    "<td>" . ($number * $i) . "</td>";
                echo
                    "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a valid positive integer.</p>";
        }
    }
    ?>
</body>

</html>