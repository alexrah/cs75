<?php
// enable sessions before destrying it
session_start();

// delete cookies, if any
setcookie("user", "", time() - 3600);

// log user out
setcookie(session_name(), "", time() - 3600);
session_destroy();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Log Out page</title>
  </head>
  <body>
     <p>You are logged out</p>
    <p><a href="login.php">Back to login page</a></p>
  </body>
</html>
