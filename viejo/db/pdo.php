<?php

  $dsn = "mysql:dbname=grupo3;host=127.0.0.1;port=3306";
  $user = "root";
  $password = "";

  try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(Exception $e) {
    echo "Hubo un error! :(";
    exit;
  }

?>
