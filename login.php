<?php
session_start();
// suppress notices
ini_set("display_errors", true);
error_reporting(E_ALL ^ E_NOTICE);

// were this is not a demo, these would be on a database
define("USER", "joe");
define("PASS", "pippa");

// if username & password were submitted, check them
if (isset($_POST["user"]) && isset($_POST["pass"]))
{
  // if user & pass are valid, log user in
  if ($_POST["user"] == USER && $_POST["pass"] == PASS)
  {
    // remember that users logged in
    $_SESSION["authenticated"] = TRUE;
    setcookie("user", $_POST["user"] , time() + 7 * 24 * 60 * 60 );
    setcookie("pass", $_POST["pass"] , time() + 7 * 24 * 60 * 60 );
    // redirect user to home page, using absolute path, per //
    // http://us2.php.net/manual/en/function.header.php
    $host = $_SERVER["HTTP_HOST"];
    $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
    header("Location: http://$host$path/login1.php");
    exit;
  }
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Login Page</title>
	</head>
  <body>
  <? if(count($_POST) > 0 ) echo "INVALID LOGIN"; ?>
<form action="<? echo $_SERVER["PHP_SELF"]  ?>" method="POST">
<table>
	<tr>
		<td>Username:</td>
		<td>
    <input type="text" name="user" value="<? echo ($_POST["user"]) ? $_POST["user"] : $_COOKIE["user"]; ?>" />
		</td></tr>
		<tr>
			<td>Password:</td>
			<td>
				<input type="password" name="pass" />
			</td>
		</tr>
<tr>
	<td></td>
  <td><input type="submit" value="Log In" />
  </td>
</tr>
</table>

</form>
<?php
  if ($_SESSION["authenticated"]) { ?> 
  You are logged in<br>
  <a href="logout.php">log out</a> <? } else {?>
   You are not logged in <? } ?>
  </body>
</html>

