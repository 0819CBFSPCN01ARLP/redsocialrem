<?php

  function nuevoUsuario() {
    if (file_exists("usuarios.json")) {
      $archivo = file_get_contents("usuarios.json");
      $usuarios = json_decode($archivo, true);

      // VERIFICACION DE CORREO EXISTENTE
      foreach ($usuarios as $usuario) {
        if ($usuario["correo"] === $_POST["correo"]) {
          echo "El correo electronico ya existe.";
          exit;
        }
      }
    }
    else {
      $usuarios = [];
    }

    $hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $usuarios[] = [
      "nombre" => $_POST["nombre"],
      "apellido" => $_POST["apellido"],
      "correo" => $_POST["correo"],
      "pass" => $hash
    ];

    $archivo = json_encode($usuarios);
    file_put_contents("usuarios.json", $archivo);
  }

 ?>
