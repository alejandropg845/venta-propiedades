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

function cambiarEncabezado(){
    include('../conexionBD.php');
    $imagenEncabezado= procesarImagen($_FILES['imagen-encabezado']);
    $encabezado = $_POST['titulo'];
    $stmt = $conexionBD->prepare("UPDATE encabezado SET imagen=?,titulo=? WHERE id=?");
    
    $stmt-> bindParam(1, $imagenEncabezado, PDO::PARAM_STR);
    $stmt-> bindParam(2, $encabezado, PDO::PARAM_STR);
    $stmt-> bindValue(3, 1);
    $stmt -> execute();
    $stmt -> close();
}
cambiarEncabezado();

?>