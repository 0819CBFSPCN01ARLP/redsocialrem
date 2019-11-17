<?php

  require_once("../db/pdo.php");
  session_start();
  $text = $_POST["text"];
  $email = $_SESSION["correo"];

  // CONSIGUE ID DE USUARIO
  $q = $db->prepare("SELECT id FROM users WHERE email LIKE '$email'");
  $q->execute();
  $userId = $q->fetch();

  // IMAGEN
  $photo = uniqid();
  $ext = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
  move_uploaded_file($_FILES["photo"]["tmp_name"], "subidas/post".$photo.".".$ext);
  $path = "subidas/post".$photo.".".$ext;

  $que = $db->prepare("INSERT INTO images (position, path, id_user) VALUES (:position, :path, :iduser)");
  $que->bindValue(":position", "post");
  $que->bindValue(":path", $path);
  $que->bindValue(":iduser", $userId["id"]);
  $que->execute();

  // CONSIGUE ID DE IMAGEN
  $quer = $db->prepare("SELECT id FROM images WHERE path LIKE '$path'");
  $quer->execute();
  $imageId = $quer->fetch();

  // GUARDA POST
  $query = $db->prepare("INSERT INTO posts (text, id_image, id_user) VALUES(:text, :idimage, :user)");
  $query->bindValue(":text", $text);
  $query->bindValue(":idimage", $imageId["id"]);
  $query->bindValue(":user", $userId["id"]);
  $query->execute();

  // REDIRIGE DE NUEVO AL PERFIL
  header("Location: ../perfil.php");
  exit;

?>
