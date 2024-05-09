<?php
$con = mysqli_connect("localhost", "root", "asdfghjkl123", "wtl");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    echo "connected ";
}
?>