<?php

  if (isset($_POST["salir"])) {
    session_destroy();
    setcookie("correo", "", -1);
    setcookie("recordarme", "", -1);
    header("Location: login.php");
    exit;
  }

  session_start();

  if (isset($_COOKIE["correo"])) {
    $_SESSION["correo"] = $_COOKIE["correo"];
    header("Location: home.php");
    exit;
  }
  else {
    header("Location: login.php");
  }

?>
