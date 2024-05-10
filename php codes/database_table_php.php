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
    <form method="POST" action="database_table_php.php">
        <label for="rollNo">Roll Number:</label>
        <input type="text" name="rollNo" required><br><br>
        <label for="studName">Student Name:</label>
        <input type="text" name="studName" required><br><br>
        <label for="studDept">Department:</label>
        <input type="text" name="studDept"><br><br>
        <label for="passingYear">Passing Year:</label>
        <input type="text" name="passingYear"><br><br>
        <label for="classGrades">Class Grades:</label>
        <select name="classGrades">
            <option value="First Class">First Class</option>
            <option value="Second Class">Second Class</option>
            <option value="Pass">Pass</option>
            <option value="Fail">Fail</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
PHP:
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
    $rollNo = $_POST["rollNo"];
    $studName = $_POST["studName"];
    $studDept = $_POST["studDept"];
    $passingYear = $_POST["passingYear"];
    $classGrades = $_POST["classGrades"];
    $sql = "INSERT INTO student (rollNo, studName, studDept, passingYear, classGrades) VALUES ('$rollNo', '$studName', '$studDept', '$passingYear', '$classGrades')";
    if
    ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
