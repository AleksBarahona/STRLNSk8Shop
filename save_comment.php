<?php

include("db.php");

if (isset($_POST['enviar_comentario'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];

    if (isset($_POST['comentario'])) {
        $comentario = $_POST['comentario'];
    } else {
        $comentario = '';
    }

    $query = "INSERT INTO comentarios(nombre, correo, numero, comentario) VALUES ('$nombre', '$correo', '$numero', '$comentario')";
    $resultado = mysqli_query($conn, $query);

    if(!$resultado) {
        die("Query Failed");
    }

    $_SESSION['mensage'] = 'Comentario enviado con exito';
    $_SESSION['message_type'] = 'success';

    header("Location: contacto.php");
}

?>