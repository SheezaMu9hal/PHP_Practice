<?php
// Copy file
if(copy("test1.txt", "test1_backup.txt")) {
    echo "File copied successfully!\n";
}

// Rename file
if(rename("test1_backup.txt", "test1_new.txt")) {
    echo "File renamed successfully!\n";
}
?>