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
    <h1>Home</h1>
    <a href="index.php">Login</a>
    <hr>

    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log Out">
    </form>

    <p>Welcome</p>

</body>

</html>

<?php
echo "username : " . $_SESSION["username"];
echo "passsword : " . $_SESSION["password"];

if(isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}
?>