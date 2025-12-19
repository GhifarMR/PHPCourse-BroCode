<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username"> <br> <br>

        <label for="password">Password : </label>
        <input type="password" name="password"> <br> <br>

        <input type="submit" name="login" value="login">
    </form>

</body>
</html>

<?php

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username needed";
    } elseif (empty($password)) {
        echo "Password needed";
    } else {
        echo "Username : {$username} <br> Password : {$password}";
    }
    
}

