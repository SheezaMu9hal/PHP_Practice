<?php
// Create and write to a file
$content = "Hello World!\nThis is line 2\nThis is line 3";
file_put_contents("test1.txt", $content);
echo "File created successfully!\n";

// Read entire file
$readContent = file_get_contents("test1.txt");
echo "\nReading file contents:\n$readContent\n";

// Read file line by line
echo "\nReading line by line:\n";
$lines = file("test1.txt");
foreach($lines as $lineNumber => $line) {
    echo "Line #" . ($lineNumber + 1) . ": " . $line;
}
?>