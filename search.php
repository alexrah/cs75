<?php
  switch ($_GET["site"]) {
    case 'PHP':
      header("Location: http://it2.php.net/results.php?q=" . $_GET["q"]);
      break;
    case 'MySQL':
      header("Location: http://search.oracle.com/search/search?q=" . $_GET["q"]);
      break;

  }
?>
