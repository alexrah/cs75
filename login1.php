<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Login page</title>
</head>
<body>
<?php
  if ($_SESSION["authenticated"]) { ?> 
  You are logged in  <a href="logout.php">log out</a>
   <? } else {?>
   <br />
   You are not logged in <? } ?>
</body>
</html>
