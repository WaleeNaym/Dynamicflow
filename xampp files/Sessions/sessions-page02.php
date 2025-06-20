<?php

### This is the 2nd page

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "From Previous Page, Your Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "From Previous Page, Your Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>