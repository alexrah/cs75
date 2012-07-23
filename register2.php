<?php
session_start();
$correct = true;
if (trim ($_GET["name"]) == "" )
  $correct = false;
// anyway for email check a better function on stackoverflow.com
if (!preg_match("/^.+@.*harvard\.edu$/" , $_GET["email"]) ) {
  $correct = false;
}
?>
<html>
  <head>
    <title>Thanks!</title>
  </head>
  <body>
    <?php if ($correct){ ?>
    Thanks! You're registered. <pre>
    <?php }else{  ?>
    Sorry, problem! Go back and fix form. <pre>
    <?php }
  print_r($_GET);
    ?><br/><?
  print_r($_SESSION);
?>
</pre>
</body>
</html>
