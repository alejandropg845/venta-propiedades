<?php
function procesarImagen($imagen){
    

    $nombre = $imagen['name'];
    $ruta_temporal = $imagen['tmp_name'];
    $formato = $imagen['type'];
    $carpeta = '../../imagenes_plantillas/';
    $src = $carpeta . $nombre;
    move_uploaded_file($ruta_temporal,$src);
    return $src;
}

function cambiarContacto(){
    include("../conexionBD.php");
    $imagen = procesarImagen($_FILES['imagen-contacto']);
    $tituloContacto = $_POST['titulo'];
    $stmt = $conexionBD->prepare("UPDATE contactanos SET imagen=?, titulo=? where id=?");

    $stmt -> bindParam(1, $imagen, PDO::PARAM_STR);
    $stmt -> bindParam(2, $tituloContacto, PDO::PARAM_INT);
    $stmt -> bindValue(3, 1);

    $stmt->execute();
    $stmt->close();
}

cambiarContacto();

?>