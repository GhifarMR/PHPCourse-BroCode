<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>WELCOME TO FAKEBOOK</h1>

        <label for="">Username</label> <br>
        <input type="text" name="username"> <br>

        <label for="">Password</label> <br>
        <input type="password" name="password"> <br> <br>

        <input type="submit" name="reg_btn" value="Register">
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    if (empty($username)) {
        echo "Enter a username";
    } elseif (empty($password)) {
        echo "Enter a password";
    } else {
        $input =   "INSERT INTO users (user, password)
                    VALUES ('$username', '$password_hash')";

        try {
            mysqli_query($connection, $input);
            echo "You are now register <br>";
        } catch (mysqli_sql_exception) {
            echo "Username has been taken <br>";
        }
        
    }
}

mysqli_close($connection);
