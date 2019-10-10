<?php
  session_start();

  function nuevoUsuario() {
    $archivo = file_get_contents("usuarios.json");
    $usuarios = json_decode($archivo, true);

    // VERIFICACION DE CORREO EXISTENTE
    foreach ($usuarios as $usuario) {
      if ($usuario["correo"] === $_POST["correo"]) {
        echo "El correo electronico ya existe.";
        exit;
      }
    }

    $hash = password_hash(trim($_POST["pass"]), PASSWORD_DEFAULT);
    $usuarios[] = [
      "nombre" => trim($_POST["nombre"]),
      "apellido" => trim($_POST["apellido"]),
      "correo" => trim($_POST["correo"]),
      "pass" => $hash
    ];

    $archivo = json_encode($usuarios);
    file_put_contents("usuarios.json", $archivo);
  }

  function login() {
    $archivo = file_get_contents("usuarios.json");
    $usuarios = json_decode($archivo, true);
    $validacionLogin = "";

    foreach ($usuarios as $usuario) {
      if ($usuario["correo"] === $_POST["correo"]) {
        $verificar = password_verify($_POST["pass"], $usuario["pass"]);
        if ($verificar === true) {
          return true;
        }
        else {
          $validacionLogin = "La contraseña es incorrecta <br>";
          return $validacionLogin;
        }
      }
    }
    $validacionLogin = "Correo electronico incorrecto";
    return $validacionLogin;
  }
 ?>
