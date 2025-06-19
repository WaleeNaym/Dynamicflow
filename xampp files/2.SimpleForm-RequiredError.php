<!DOCTYPE html>
<html>

<head>
    <title>Simple PHP Form</title>
</head>

<body>

    <h2>Contact Form</h2>
    <form method="post" action="">
        Name: <input type="text" name="name"><br><br>

        Email: <input type="email" name="email"><br><br>

        Message:<br>
        <textarea name="message" rows="5" cols="30"></textarea><br><br>

        Gender:
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>

        <input type="submit" value="Submit">
    </form>


    <?php

    $name = $email = $message = $gender = "";
    $errors = [];

    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check for empty required fields
        if (empty($_POST["name"])) {
            $errors[] = "Name";
        } else {
            $name = $_POST["name"];
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



        // Show error messages if any
        if (!empty($errors)) {
            echo "<p style='color:red;'><strong>" . implode(", ", $errors) . " is required.</strong></p><hr>";
        } else {
            // All required fields are present, display data
            echo "<h2>Submitted Information:</h2>";
            echo "Name: " . htmlspecialchars($name) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
            echo "Message: " . nl2br(htmlspecialchars($message)) . "<br>";
            echo "Gender: " . htmlspecialchars($gender) . "<br><hr>";
        }
    }
    ?>




</body>

</html>