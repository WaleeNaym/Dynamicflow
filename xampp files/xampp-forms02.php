<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
</head>
<body>


<h2>Contact Form</h2>
<form method="post" action="">
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data using $_POST superglobal variables
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $gender = $_POST["gender"];

    // Display the collected data
    echo "<h2>Submitted Information:</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Message: " . nl2br(htmlspecialchars($message)) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br><hr>";
}
?>


<!-- 1. htmlspecialchars() is used to prevent Cross-Site Scripting XSS attacks. 
    converts characters like <, >, &, into their HTML entity equivalents: &lt;, &gt;, &amp;, 

2. nl2br() converts newline characters (\n) to <br>, useful for multi-line message.

3. $_SERVER["REQUEST_METHOD"] checks how the form was submitted.

4. method="post" means the form was submitted using the HTTP POST method.

5. action="" means the form will submit to this same page. -->





</body>
</html>
