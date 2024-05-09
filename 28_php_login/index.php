<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $db = new SQLite3('login.db');

        try {
            $query = $db->prepare("SELECT username,password FROM users WHERE username= :username AND password= :password");
            $query->bindValue(':username',$username,SQLITE3_TEXT);
            $query->bindValue(':password',$password,SQLITE3_TEXT);

            $result = $query->execute();

            $row = $result->fetchArray();

            if ($row) {
                header('Location: Welcome.php');
            }
            else {
                echo "No user found";
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login php</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" value="" ><br>

        <label for="password">Password:</label>
        <input type="password" name="password" value="" ><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>