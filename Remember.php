<?php
    $userName = "Sheeza Aslam";
    $password ="123@abc";
    setcookie("user",$userName);
    setcookie("pass",$password);
    echo("Name: "  . $_COOKIE["user"]);
    echo("<br>Password: " . $_COOKIE["pass"]);
    echo("<br>Cookie is set successfully");
    Header("location: Remember2.php");

?>