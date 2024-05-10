<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB9</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align:
                center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border:
                1px solid #ccc;
            border-radius: 5px;
            box-shadow:
                0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {

            display: block;
            margin-bottom:
                5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding:
                10px;
            margin-bottom:
                10px;
            border: 1px solid #ccc;
            border-radius:
                3px;
        }

        select {
            height: 36px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor:
                pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Student Information</h1>
    <form method="POST" action="jee_top_5.php">
        <label for="studName">Student Name:</label>
        <input type="text" name="studName" required><br><br>

        <label for="email">email:</label>
        <input type="email" name="email" required><br><br>

        <label for="12Grade">12th Grade:</label>
        <input type="text" name="12grade"><br><br>

        <label for="jeeScore">JEE Score:</label>
        <input type="number" name="jeeScore"><br><br>

        <label for="dept">Class Grades:</label>
        <select name="dept">
            <option value="cse">CSE</option>
            <option value="mech">MECH</option>
            <option value="aero">AERO</option>
            <option value="IT">IT</option>
            <option value="civil">CIVIL</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "<Your password>";
$dbname = "wtl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (
    $_SERVER["REQUEST_METHOD"] == "POST"
) {
    $studName = $_POST["studName"];
    $email = $_POST["email"];
    $studDept = $_POST["dept"];
    $jeescore = $_POST["jeeScore"];
    $Grades12th = $_POST["12grade"];

    $sql = "INSERT INTO register (studname, email, studDept, jeeScore, grade12) VALUES ('$studName', '$email', '$studDept', '$jeescore', '$Grades12th')";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $qry = "SELECT studName, jeescore FROM register WHERE studDept = 'cse' ORDER BY jeescore DESC LIMIT 5";

    $result = $conn->query($qry);

    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table>";
        echo "<tr><th>Student Name</th><th>JEE Score</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["studName"] . "</td>";
            echo "<td>" . $row["jeescore"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}
$conn->close();
