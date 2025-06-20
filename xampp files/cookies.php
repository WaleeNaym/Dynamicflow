<?php

$cookie_name = "user_01";
$cookie_value = "Walee Naym";
setcookie($cookie_name, $cookie_value, time() + (5), "/");   // "/" means cookie will be implemented on whole site
                                                                    // time() + (5) means, current server time + wait 5 seconds
?>

<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>