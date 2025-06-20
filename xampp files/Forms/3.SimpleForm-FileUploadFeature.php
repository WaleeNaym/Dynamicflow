<!DOCTYPE html>
<html>

<head>
    <title>Simple PHP Form</title>
</head>

<body>


    <h2>Contact Form</h2>                                           <!-- method="post" means the form was submitted using the HTTP POST method. -->
    <form method="post" action="" enctype="multipart/form-data">     <!-- action="" (blank) means the form will submit to this same page. -->
        Name: <input type="text" name="name"><br><br>                <!-- enctype="multipart/form-data" is required in the <form> tag to allow file uploads -->

        Email: <input type="email" name="email"><br><br>

        Message:<br>
        <textarea name="message" rows="5" cols="30"></textarea><br><br>

        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>

        Upload File: <input type="file" name="file"><br><br>

        <input type="submit" value="Submit">
    </form>


    <?php

    $upload_dir = "uploads/";               // Set upload directory
    $upload_status = "";


    $name = $email = $message = $gender = "";               // Initializing empty variables
    $errors = [];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {                 //form submission conditions checking

        // Validating REQUIRED fields
        if (empty($_POST["name"])) {                        //Checking if field is empty or not
            $errors[] = "Name";                               //If empty add the string to error[] array
        } else {
            $name = $_POST["name"];                         //$name variable has the value, that was input by the user
        }

        if (empty($_POST["email"])) {
            $errors[] = "Email";
        } else {
            $email = $_POST["email"];
        }

        if (empty($_POST["gender"])) {
            $errors[] = "Gender";
        } else {
            $gender = $_POST["gender"];
        }

        // Code: If you want "Message" box to be REQUIRED
        if (empty($_POST["message"])) {
            $errors[] = "Message";
        } else {
            $message = $_POST["message"];
        }

        // Code: If you want "Message" box to be OPTIONAL
        // $message = $_POST["message"] ?? "";                    



        // File upload check
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $file = $_FILES["file"];                                                //Gets uploaded file info.
            $target_file = $upload_dir . basename($file["name"]);                   //Sets a path for the uploaded file.
            $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));        
            $file_size = $file["size"];

            // Create uploads directory if not exists
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            // If File already exists
            if (file_exists($target_file)) {                                //Prevents overwriting existing files.
                $upload_status = "Error: File already exists. Rename your file.";
            }

            // Limit file size to 2MB
            elseif ($file_size > 2 * 1024 * 1024) {
                $upload_status = "Error: File size is too big. Maximum 2MB is allowed.";
            }

            // Allow only certain file types
            elseif (!in_array($file_type, ["jpg", "jpeg", "png"])) {
                $upload_status = "Error: Only JPG & PNG files are allowed.";
            }

            // Move uploaded file
            else {
                if (move_uploaded_file($file["tmp_name"], $target_file)) {                              //move_uploaded_file() function moves an uploaded file to a new destination.
                    $upload_status = "File uploaded successfully: " . htmlspecialchars($file["name"]);
                } else {
                    $upload_status = "Error: Unable to upload file.";
                }
            }
        }

        // Show errors or display submitted data
        if (!empty($errors)) {
            echo "<p style='color:red;'><strong>" . implode(", ", $errors) . " is required.</strong></p><hr>";
        } else {
            echo "<h2>Submitted Information:</h2>";
            echo "Name: " . htmlspecialchars($name) . "<br>";                                   // htmlspecialchars() converts characters like <, >, &, into their HTML entity equivalents: &lt;, &gt;, &amp;, it is used to prevent Cross-Site Scripting XSS attacks. 
            echo "Email: " . htmlspecialchars($email) . "<br>";
            echo "Message: " . nl2br(htmlspecialchars($message)) . "<br>";                      // nl2br() converts newline characters (\n) to <br>, useful for multi-line message.
            echo "Gender: " . htmlspecialchars($gender) . "<br>";
            if ($upload_status) {
                echo "Upload Status: " . $upload_status . "<br>";
            }
            echo "<hr>";
        }
    }
    ?>



</body>

</html>