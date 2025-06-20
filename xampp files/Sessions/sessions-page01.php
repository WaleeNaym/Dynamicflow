<?php

### This is the 1st page

// Start the session
session_start();        //This MUST be at 1st thing, before HTML tags begin
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Session variables are set with the PHP global variable: $_SESSION.
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>