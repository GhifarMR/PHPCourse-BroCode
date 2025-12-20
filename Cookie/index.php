<?php
setcookie("username", "Ghifar", time() - 0);

if(isset($_COOKIE["username"])) {
    echo "Welcome " . $_COOKIE["username"];
}