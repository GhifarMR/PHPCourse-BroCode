<?php

/** @var mysqli $connection */
include("database.php");

$user = 'OldJenkins';
$password = 'I like chocolate';
$password_hash = password_hash($password, PASSWORD_DEFAULT);
$insert =   "INSERT INTO users (user, password)
            VALUES ('{$user}', '{$password_hash}')";

try {
    mysqli_query($connection, $insert);
    echo "Input successfull <br>";
} catch (mysqli_sql_exception) {
    echo "Couldn't input username has been taken <br>";
}

$select_all =   "SELECT * FROM users";
                // WHERE user = '$user'";

$result = mysqli_query($connection, $select_all);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>" . $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
        echo $row["password"] . "<br>";
    };
} else {
    echo "No user found";
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