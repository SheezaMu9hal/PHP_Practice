<?php
$filename = "test1.txt";

if(file_exists($filename)) {
    echo "File Information for $filename:\n";
    echo "File size: " . filesize($filename) . " bytes\n";
    echo "Last modified: " . date("F d Y H:i:s.", filemtime($filename)) . "\n";
    echo "Is readable: " . (is_readable($filename) ? "Yes" : "No") . "\n";
    echo "Is writable: " . (is_writable($filename) ? "Yes" : "No") . "\n";
} else {
    echo "File does not exist";
}
?>