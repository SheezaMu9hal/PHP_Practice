<?php
$filename = "test1_new.txt";

if(file_exists($filename)) {
    if(unlink($filename)) {
        echo "File deleted successfully!";
    } else {
        echo "Error deleting file";
    }
} else {
    echo "File does not exist";
}
?>