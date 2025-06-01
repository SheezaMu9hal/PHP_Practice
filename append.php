<?php
// Open file in append mode
$file = fopen("test2.txt", "a") or die("Unable to open file!");
$newContent = "\nAppending this new line";

// Append content
fwrite($file, $newContent);
fclose($file);

// Read and display the updated content
echo "Updated file contents:\n";
echo file_get_contents("test2.txt");
?>