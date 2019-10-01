<?php

$nombre = "";
$apellido = "";
$correo = "";
$pass = "";
$text = "";
$errores = [];


function nombre() {
  $nombre = trim($_POST["nombre"]);

  if (empty($nombre)) {
    $errores["nombre"] = "Falta completar el nombre <br>";
  }
  else if (is_numeric($nombre)) {
    $errores["nombre"] = "El nombre no debe contener números <br>";
    $nombre = "";
  }
  else if ((strlen($nombre) < 3) || (strlen($nombre) > 50)) {
    $errores["nombre"] = "El nombre debe contener al menos 3 caracteres <br>";
    $nombre = "";
  }
  else {
    $errores["nombre"] = "";
  }

  return $errores["nombre"];
}

function apellido() {
  $apellido = trim($_POST["apellido"]);

  if (empty($apellido)) {
    $errores["apellido"] = "Falta completar el apellido <br>";
  }
  else if (is_numeric($apellido)) {
    $errores["apellido"] = "El apellido no debe contener numeros <br>";
    $apellido = "";
  }
  else if ((strlen($apellido) < 3) || (strlen($apellido) > 50)) {
    $errores["apellido"] = "El apellido debe contener al menos 3 caracteres <br>";
    $apellido = "";
  }
  else {
    $errores["apellido"] = "";
  }
  return $errores["apellido"];
}

function correo() {
  $correo = trim($_POST["correo"]);

  if (empty($correo)) {
    $errores["correo"] = "Falta completar el correo electrónico <br>";
  }
  else if (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
    $errores["correo"] = "El correo que ingreso no es valido <br>";
    $correo = "";
  }
  else {
    $errores["correo"] = "";
  }
  return $errores["correo"];
}

function pass() {
  $pass = trim($_POST["pass"]);

  if (empty($pass)) {
    $errores["pass"] = "Falta completar la contraseña <br>";
  }
  else if ((strlen($_POST["pass"]) < 9)) {
    $errores["pass"] = "La contraseña debe contener al menos 8 caracteres <br>";
  }
  else {
    $errores["pass"] = "";
  }
  return $errores["pass"];
}

function text() {
  $text = trim($_POST["text"]);

  if (empty($text)) {
    $errores["text"] = "Falta escribir el mensaje";
  }
  else {
    $errores["text"] = "";
  }
  return $errores["text"];
}

?>
