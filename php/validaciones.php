<?php
  $nombre = "";
  $apellido = "";
  $correo = "";
  $pass = "";
  $text = "";

  function validarNombre($errores) {
    $nombre = trim($_POST["nombre"]);

    if (empty($nombre)) {
      $errores[] = "Falta completar el nombre <br>";
    }
    else if (is_numeric($nombre)) {
      $errores[] = "El nombre no debe contener números <br>";
      $nombre = "";
    }
    else if ((strlen($nombre) < 3) || (strlen($nombre) > 50)) {
      $errores[] = "El nombre debe contener al menos 3 caracteres <br>";
      $nombre = "";
    }
    return $errores;
  }

  function validarApellido($errores) {
    $apellido = trim($_POST["apellido"]);

    if (empty($apellido)) {
      $errores[] = "Falta completar el apellido <br>";
    }
    else if (is_numeric($apellido)) {
      $errores[] = "El apellido no debe contener numeros <br>";
      $apellido = "";
    }
    else if ((strlen($apellido) < 3) || (strlen($apellido) > 50)) {
      $errores[] = "El apellido debe contener al menos 3 caracteres <br>";
      $apellido = "";
    }
    return $errores;
  }

  function validarCorreo($errores) {
    $correo = trim($_POST["correo"]);

    if (empty($correo)) {
      $errores[] = "Falta completar el correo electrónico <br>";
    }
    else if (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
      $errores[] = "El correo que ingreso no es valido <br>";
      $correo = "";
    }
    return $errores;
  }

  function validarPass($errores) {
    $pass = trim($_POST["pass"]);

    if (empty($pass)) {
      $errores[] = "Falta completar la contraseña <br>";
    }
    else if ((strlen($_POST["pass"]) < 9)) {
      $errores[] = "La contraseña debe contener al menos 8 caracteres <br>";
    }
    return $errores;
  }

  function validarText($errores) {
    $text = trim($_POST["text"]);

    if (empty($text)) {
      $errores[] = "Falta escribir el mensaje";
    }
    return $errores;
  }

?>
