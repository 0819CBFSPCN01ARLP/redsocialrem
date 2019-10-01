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

  function login() {
      $archivo = file_get_contents("usuarios.json");
      $usuarios = json_decode($archivo, true);

    foreach ($usuarios as $usuario) {
      if ($usuario["correo"] === $_POST["correo"]) {
        $verificar = password_verify($_POST["pass"], $usuario["pass"]);
        if ($verificar) {
          header("Location: home.php");
          return $usuario["pass"];
          exit;
        }
        else {
          echo "La contraseña es incorrecta <br>";
          exit;
        }
      }
    }
    echo "Correo electronico incorrecto";
  }

 ?>
