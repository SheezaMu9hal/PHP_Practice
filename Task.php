<!-- Create PHP code for the following scenarios:
❖ Read a file final.txt without opening it and count number of words in it.
❖ Read the same file and add your roll number at the end of file.
❖ Without reading the file, add your name at the start of the file.
❖ Create a file named “WebEng.txt” and add the details of
Web-Engineering course to the file (i.e. course name, credit hours, no.
of practical, subject teacher). -->
<?php
    // Method 1: Using foreach loop
    // $FileContent = file("php_newFile.txt");
    // foreach($FileContent as $line) {
    //     echo $line . "<br>";  // For HTML line breaks
    // }

    // OR Method 2: Using implode with nl2br
    // $FileContent = file("php_newFile.txt");
    // echo nl2br(implode("",$FileContent));
    // $count = str_word_count(implode("", $FileContent));
    // echo "\nTotal number of words are {$count} <br>";

    // // Read the file and add roll number at the end
    // $NewFile = fopen("php_newFile.txt", "a+");
    // if($NewFile){
    //     echo "File Opened Successfully <br>";
    //     $rollNumber = "CT-22064";
    //     fwrite($NewFile, "My Roll Number is {$rollNumber}");
    //     rewind($NewFile);
    //     echo "Updated File Content: <br>";
    //     $NewContent = fread($NewFile, filesize("php_newFile.txt"));
    //     echo nl2br($NewContent);
    //     fclose($NewFile);
    // }
    // else{
    //      echo "Failed to Open File <br>";
    // }
    // Add name at the start of the file without reading it
    // $allcontent = file_get_contents("php_newFile.txt");
    // $name = "Sheeza Aslam";
    // $allcontent = $name . "Added" . $allcontent;
    // file_put_contents("php_newFile.txt",$allcontent);

    // // OR Method 2: Using implode with nl2br
    // $FileContent = file("php_newFile.txt");
    // echo nl2br(implode("",$FileContent));

// ❖ Create a file named “WebEng.txt” and add the details of
// Web-Engineering course to the file (i.e. course name, credit hours, no.
// of practical, subject teacher). 
    // $NewFile = fopen("WebEng.txt", "w++");
    // if(!$NewFile){
    //     echo "File Doesn't Exist";
    // }else{

    //     fwrite($NewFile, "Course Name: Web Engineering\n");
    //     fwrite($NewFile, "Credit Hours: 3\n");
    //     fwrite($NewFile, "Number of Practicals: 2\n");
    //     fwrite($NewFile, "Subject Teacher: Rashida\n");
    //     rewind($NewFile);
    //     echo "File Created Successfully <br>";
    //     $NewContent = fread($NewFile, filesize("WebEng.txt"));
    //     echo nl2br($NewContent);
    //     fclose($NewFile);
    // }

   echo $_SERVER['PHP_SELF']; // Returns filename of the currently executing script
echo "<br>";

echo $_SERVER['SERVER_NAME']; // Returns the name of the server host
echo "<br>";

echo $_SERVER['SERVER_SOFTWARE']; // Returns the server identification string
echo "<br>";

echo $_SERVER['REMOTE_ADDR']; // Returns the IP address from which the user is viewing the current page
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT']; // Returns the user agent string of the browser
echo "<br>";

echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; // Returns the language of the browser
echo "<br>";

echo $_SERVER['HTTP_ACCEPT_ENCODING']; // Returns the encoding accepted by the browser

?>