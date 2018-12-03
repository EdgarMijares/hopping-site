<?php

  if (isset($_POST['token'])) {
    $token = $_POST['token'];
    echo "php got this token [".$token."], mmm delicius";
  } else {
    echo "php is still hungry for tokens";
  }

?>
