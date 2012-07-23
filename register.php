<pre>
 <?php
// print_r($_GET);
$to=$_GET["email"];
$subject="Registration to Frosh IMs for"; /* . $_GET["name"]; */
$message="Dear" . $_GET["name"] . "\n";
// $message .= "You have just registered to Frosh IMs" . "\n";
// $message .= "This is your subscription data:" . "\n";
// $message .= $_GET["name"] . "\n" . $_GET["captain"] . "\n" . $_GET["gender"] . "\n" . $_GET["dorm"] . "\n";
mail($to, $subject, $message);
if ( mail($to, $subject, $message)){
  ?> Thanks for registering <?
}else{
    ?>  Sorry, problem! <?
}
    print_r($_GET);
?>
</pre>
