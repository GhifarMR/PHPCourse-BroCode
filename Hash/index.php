<?php
$password = "BurgerDelicious";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash . "<br>";

?>