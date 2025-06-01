# PHP File Handling Guide

## Table of Contents
1. [Basic File Operations](#basic-file-operations)
2. [File Opening Modes](#file-opening-modes)
3. [Reading and Writing Files](#reading-and-writing-files)
4. [File System Functions](#file-system-functions)
5. [Error Handling](#error-handling)
6. [Working with Directories](#working-with-directories)

## Basic File Operations

### Opening and Closing Files
```php
// Open file
$file = fopen("test.txt", "r") or die("Unable to open file!");

// Process file here...

// Close file
fclose($file);
```

### File Opening Modes
- `r` - Read only (file must exist)
- `w` - Write only (file created if doesn't exist, truncates if exists)
- `a` - Append only (file created if doesn't exist)
- `r+` - Read and write (file must exist)
- `w+` - Read and write (file created if doesn't exist, truncates if exists)
- `a+` - Read and append (file created if doesn't exist)
- `x` - Write only (fails if file exists)
- `x+` - Read and write (fails if file exists)

## Reading and Writing Files

### Simple Reading Methods
```php
// Read entire file
$content = file_get_contents("test.txt");

// Read file line by line
$lines = file("test.txt");

// Read specific number of bytes
$data = fread($file, filesize("test.txt"));
```

### Simple Writing Methods
```php
// Write to file
file_put_contents("test.txt", "Hello World");

// Append to file
file_put_contents("test.txt", "New Content", FILE_APPEND);

// Write using fwrite
fwrite($file, "Hello World");
```

## File System Functions

### File Information
```php
// Check if file exists
if(file_exists("test.txt")) {
    // File size
    echo filesize("test.txt");
    
    // Last modified time
    echo filemtime("test.txt");
    
    // File permissions
    echo decoct(fileperms("test.txt"));
}
```

### File Operations
```php
// Copy file
copy("source.txt", "destination.txt");

// Rename/Move file
rename("oldname.txt", "newname.txt");

// Delete file
unlink("file.txt");
```

## Error Handling

### Safe File Operations
```php
try {
    if(!is_readable("test.txt")) {
        throw new Exception("File is not readable");
    }
    
    $content = file_get_contents("test.txt");
    if($content === false) {
        throw new Exception("Could not read file");
    }
} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}
```

## Working with Directories

### Directory Operations
```php
// Create directory
mkdir("new_folder");

// List files in directory
$files = scandir(".");

// Check if path is directory
is_dir("folder_name");

// Get current directory
getcwd();

// Change directory
chdir("../new_directory");
```

## Examples

### Example 1: Create and Read File
```php
<?php
$file = fopen("test.txt", "w+");
fwrite($file, "Line 1\nLine 2\nLine 3");
rewind($file);

while(!feof($file)) {
    echo fgets($file);
}
fclose($file);
?>
```

### Example 2: File Copy with Error Handling
```php
<?php
function copyFileWithValidation($source, $destination) {
    if(!file_exists($source)) {
        throw new Exception("Source file does not exist");
    }
    
    if(!is_readable($source)) {
        throw new Exception("Source file is not readable");
    }
    
    if(file_exists($destination)) {
        throw new Exception("Destination file already exists");
    }
    
    return copy($source, $destination);
}
?>
```

## Best Practices
1. Always close files after use
2. Use appropriate error handling
3. Check file permissions before operations
4. Use file locking for concurrent access
5. Validate file operations
6. Use proper file modes
7. Handle large files appropriately

## Advanced Topics
- File Locking
- CSV File Handling
- Binary File Operations
- File Uploads
- Temporary Files
- Stream Wrappers

For more information, visit [PHP Manual - File System Functions](https://www.php.net/manual/en/ref.filesystem.php)