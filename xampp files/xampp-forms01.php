<html>  
<body>  
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>  
            <tr>  
                <td>Full Name:</td>  
                <td><input type="text" name="fullname"></td>  
            </tr>  
            <tr>  
                <td>Email Address:</td>  
                <td><input type="email" name="user_email"></td>  
            </tr>  
            <tr>  
                <td>Age:</td>  
                <td><input type="text" name="user_age"></td>  
            </tr> 
            <tr>  
                <td>Feedback:</td>  
                <td><textarea name="user_feedback" rows="4" cols="40"></textarea></td>  
            </tr>  
            <tr>  
                <td>Gender:</td>  
                <td>  
                    <input type="radio" name="user_gender" value="female">Female  
                    <input type="radio" name="user_gender" value="male">Male  
                </td>  
            </tr>  
            <tr>  
                <td colspan="2"><input type="submit" name="submit" value="Submit"></td>  
            </tr>  
        </table>  
    </form>  

    <?php  
        $fullname = $user_email = $user_gender = $user_feedback = $user_age = "";  

        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
            // Only process the POST data if the form is submitted
            if (isset($_POST['fullname'])) {
                $fullname = htmlspecialchars($_POST['fullname']);
            }
            if (isset($_POST['user_email'])) {
                $user_email = htmlspecialchars($_POST['user_email']);
            }
            if (isset($_POST['user_age'])) {  // Corrected variable to user_age
                $user_age = htmlspecialchars($_POST['user_age']);
            }
            if (isset($_POST['user_feedback'])) {
                $user_feedback = htmlspecialchars($_POST['user_feedback']);
            }
            if (isset($_POST['user_gender'])) {
                $user_gender = htmlspecialchars($_POST['user_gender']);
            }
        }  

        // Display the submitted details
        echo "<h2>Details Submitted:</h2>";  
        echo "Full Name: " . $fullname . "<br>";  
        echo "Email: " . $user_email . "<br>";  
        echo "Age: " . $user_age . "<br>";  
        echo "Feedback: " . $user_feedback . "<br>";  
        echo "Gender: " . $user_gender;  
    ?>  
</body>  
</html>