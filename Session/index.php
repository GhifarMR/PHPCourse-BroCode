<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <a href="home.php">Home</a>
    <hr>

    <form action="index.php" method="post">
        <label for="">Username:</label> <br>
        <input type="text" name="username"> <br>

        <label for="">Password:</label> <br>
        <input type="password" name="password"> <br>

        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>

<?php

if (isset($_POST["login"])) {

    if (!empty($_POST["username"] && $_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        echo $_SESSION["username"] = $_POST["username"] . "<br>";
        echo $_SESSION["password"] = $_POST["password"] . "<br>";

        header("Location: home.php");
    } else {
        echo "missing username or password <br>";
    }

}
?>