<?php
session_start();
$_SESSION['name'] = "Anny";
$_SESSION['age'] = 30;
if(isset($_SESSION['name']) && isset($_SESSION['age'])) {
    echo "Session  are set.<br>";
    echo "Name: " . $_SESSION['name'] . "<br>";     
echo "Age: " . $_SESSION['age'] . "<br>";
echo session_id();
} else {
    echo "Session variables are not set.<br>";
}   

?>