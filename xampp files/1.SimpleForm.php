<!DOCTYPE html>
<html>

<head>
    <title>Simple PHP Form</title>
</head>

<body>


    <h2>Contact Form</h2>                                       <!-- method="post" means the form was submitted using the HTTP POST method. -->
    <form method="post" action="">                                  <!-- action="" (blank) means the form will submit to this same page. -->
        Name: <input type="text" name="name" required><br><br>

        Email: <input type="email" name="email" required><br><br>

        Message:<br>
        <textarea name="message" rows="5" cols="30" required></textarea><br><br>

        Gender:
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>

        <input type="submit" value="Submit">
    </form>



    <?php
    // This block runs only when the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {                     // $_SERVER["REQUEST_METHOD"] checks how the form was submitted.
        // Collect form data using $_POST superglobal variables
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $gender = $_POST["gender"];

        // Display the collected data
        echo "<h2>Submitted Information:</h2>";
        echo "Name: " . htmlspecialchars($name) . "<br>";               // htmlspecialchars() converts characters like <, >, &, into their HTML entity equivalents: &lt;, &gt;, &amp;, it is used to prevent Cross-Site Scripting XSS attacks. 
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Message: " . nl2br(htmlspecialchars($message)) . "<br>";  // nl2br() converts newline characters (\n) to <br>, useful for multi-line message.
        echo "Gender: " . htmlspecialchars($gender) . "<br><hr>";
    }
    ?>







</body>

</html>