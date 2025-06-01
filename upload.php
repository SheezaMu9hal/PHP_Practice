<?php
// 1. Specify directory where files will be saved
$target_dir = "uploads/";

// 2. Create full file path for the uploaded file
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// 3. Flag to check if upload is allowed
$uploadOk = 1;

// 4. Get the file extension and convert it to lowercase (for checking file type later)
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// 5. Check if the form was submitted (user pressed Upload button)
if (isset($_POST["submit"])) {

    // 6. Check if the uploaded file is an actual image or fake
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;  // File is valid image, allow upload
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;  // Not an image, reject upload
    }
}

// 7. If $uploadOk is still 1 (means valid file), move file from temp to target directory
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
