<?php
  session_start();

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

  // PARA GUARDAR FOTO DE perfil
  function fotoDePerfil(){
    var_dump($_SESSION);
    var_dump($_FILES);
    $ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["foto"]["tmp_name"], "archivos/perfil" . $_SESSION["correo"] . "." .$ext);
    $rutaFoto = "archivos/perfil". $_SESSION["correo"] . "." .$ext;

    $archivo = file_get_contents("usuarios.json");
    $usuarios = json_decode($archivo, true);

    foreach ($usuarios as $usuario) {
      if ($usuario["correo"] == $_SESSION["correo"]) {
        $usuario["foto"] = $rutaFoto;
      }
    }
  }



 ?>
