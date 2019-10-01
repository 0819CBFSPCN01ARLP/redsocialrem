<?php
session_start();

$dir = "subidas/";
$archivo = basename($_FILES["archivo"]["name"]);
$temp = explode(".", $archivo);
$tipoDeArchivo = end($temp);
$archivo = $dir . "perfil" . $_SESSION["correo"] . "." . $tipoDeArchivo;
$subidaOk = 1;

// Verificar si el archivo es una imagen.
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["archivo"]["tmp_name"]);
    if($check !== false) {
        echo "El archivo es una imagen - " . $check["mime"] . ".";
        $subidaOk = 1;
    } else {
        echo "El arhcivo no es una imagen.";
        $subidaOk = 0;
    }
}
// Verificar el tamaño del archivo.
if ($_FILES["archivo"]["size"] > 500000) {
    echo "Lo siento, el archivo es muy grande.";
    $subidaOk = 0;
}
// Permitir ciertos formatos de archivo.
if($tipoDeArchivo != "jpg") {
    echo "Lo siento, solo es permitido el tipo de archivo JPG. " . $tipoDeArchivo;
    $subidaOk = 0;
}
// Verificar si $subidaOk tiene el valor 0 por algun error.
if ($subidaOk == 0) {
    echo "Lo siento, su archivo no fue subido.";
// Si todo esta bien, intento subir el archivo.
} else {
    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo)) {
        echo "El archivo ". basename( $_FILES["archivo"]["name"]). " ha sido subido exitosamente.";
    } else {
        echo "Lo siento, ocurrio un error al subir tu archivo.";
    }
}
?>
