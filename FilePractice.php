<?php

    // $file = fopen("example.txt", "w+") or die("Unable to open File");
    // fwrite($file,"Hello this is Sheeza Aslam Practicing File Handling in php");
    // rewind($file);
    // $fileContent = fread($file, filesize("example.txt"));
    // fclose($file);
    // echo $fileContent;
    // $file = fopen("example.txt", "w+") or die("Unable to open File");
    // fwrite($file,"Hello this is Sheeza Aslam Practicing File Handling in php");
    // rewind($file);
    // $fileContent = fread($file, filesize("example.txt"));
    // fclose($file);
    // echo $fileContent;

    $fileHandle = fopen('php_newFile.txt', 'r+') OR die ("Can't open file");
    fwrite ($fileHandle, "Assalam u alaikum\n");
    $txt = "I am Sheeza Aslam\n";
    fwrite($fileHandle, $txt);
    $txt = "I am Practicing File Handling in PHP\n";
    fwrite($fileHandle, $txt);
    
    rewind($fileHandle);
    echo fgets($fileHandle);
    $content = fread($fileHandle,filesize('php_newFile.txt'));
    echo $content;
    fclose($fileHandle);

?>