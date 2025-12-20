<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Username: </label> <br>
        <input type="text" name="username"> <br>

        <label for="">Age: </label> <br>
        <input type="text" name="age"> <br>

        <label for="">Email: </label> <br>
        <input type="text" name="email"> <br>
        
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php

if(isset($_POST["login"])) {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Hello " . $username . "<br>";

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    if(empty($age)) {
        echo "Input valid age" . "<br>";
    } else {
        echo "You are " . $age . " years old" . "<br>";
    }
    

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if(empty($email)) {
        echo "Input valid email" . "<br>";
    } else {
        echo "Your email is " . $email . "<br>";
    }
    
}

/*
    <script> alert("This is virus") </script>
*/