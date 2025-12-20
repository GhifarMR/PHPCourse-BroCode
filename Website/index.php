<?php
    /** @var mysqli $connection */
    include("database.php");
    
    $user = "Patrick";
    $password = "rock3";
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $insert = "INSERT INTO users(user, password)
            VALUES('$user', '$password_hash')";
    try{
        mysqli_query($connection, $insert);
        echo "user is now registered <br>";
    } catch(mysqli_sql_exception) {
        echo "couldn't registered user <br>";
    }

    mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello</p>
</body>
</html>