<?php
  session_start();
  require_once("db/pdo.php");

  function nuevoUsuario($db) {
    $query = $db->prepare("SELECT email FROM users");
    $query->execute();
    $emails = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($emails as $email) {
      echo $email["email"] . "<br>";
      if ($email["email"] === trim($_POST["correo"])) {
        echo "El correo electronico ya existe.";
        exit;
      }
    }

    $hash = password_hash(trim($_POST["pass"]), PASSWORD_DEFAULT);
    $query = $db->prepare("INSERT INTO users (name, surname, email, password) VALUES(:nombre, :apellido, :correo, :pass)");
    $query->bindValue(":nombre", trim($_POST["nombre"]));
    $query->bindValue(":apellido", trim($_POST["apellido"]));
    $query->bindValue(":correo", trim($_POST["correo"]));
    $query->bindValue(":pass", $hash);
    $query->execute();

  }

  function login($db) {
    $query = $db->prepare("SELECT email, password FROM users");
    $query->execute();
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
      if ($user["email"] === trim($_POST["correo"])) {
        $verificar = password_verify(trim($_POST["pass"]), $user["password"]);
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
