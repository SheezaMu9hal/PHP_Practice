<html>
<body>
    <form method="post" action ="<?php echo $_SERVER['PHP_SELF'];?>" >
        Name: <input type="text" name="fname">
        <br>
        Roll No: <input type="text" name="rollno">
        <input type="submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if the request method is POST
            $name = $_REQUEST['fname']; // Collect the value from the form using $_REQUEST
            $rollno = $_REQUEST['rollno']; // Collect the roll number from the form
            if (empty($name)||empty($rollno)) { 
                echo "Name is empty"; 
            } else { 
                echo "Hello $name";
                echo "<br> Your Roll No is ". $rollno; 
            }
        }
    ?>
</body>
</html>
<!-- <html>
<body>
    <form method="get" action ="<?php echo $_SERVER['PHP_SELF'];?>" >
        Name: <input type="text" name="fname">
        <br>
        Roll No: <input type="text" name="rollno">
        <input type="submit">
    </form>
    <?php
        // if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['fname'])) {
        //     $name = $_GET['fname'];
        //     $rollno = $_GET['rollno'];
        //     if (empty($name) || empty($rollno)) { 
        //         echo "Name is empty"; 
        //     } else { 
        //         echo "Hello $name";
        //         echo "<br> Your Roll No is ". $rollno; 
        //     }
        // }
    ?>
</body>
</html> -->