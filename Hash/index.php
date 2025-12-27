<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter Password : </label> <br>
        <input type="text" name="in_pass">
        <input type="submit" name="login" value="Login">
    </form>
    <br>
</body>
</html>


<?php

$password = "BurgerDelicious";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash . "<br>";

if(isset($_POST["login"])) {
    $input = $_POST["in_pass"];

    if(password_verify($input, $hash)) {
        echo "Login successfull";
    } else {
        echo "Incorrect password";
    }
}

?>