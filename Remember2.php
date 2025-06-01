<?php
    echo("Name: "  . $_COOKIE["user"]);
    echo("<br>Password: " . $_COOKIE["pass"]);
    if(isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){
        Header("location: Welcome.php");
    }
?>