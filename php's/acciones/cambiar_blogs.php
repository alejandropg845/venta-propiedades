<?php

function procesarImagen($imagen){
    $nombre = $imagen['name'];
    $ruta_temporal = $imagen['tmp_name'];
    $formato = $imagen['type'];
    $carpeta = '../../imagenes_plantillas/';
    
    if($formato != 'image/jpg' && $formato != 'image/jpeg' && $formato != 'image/png'){
        return false;
    }
    $src = $carpeta . $nombre;
    move_uploaded_file($ruta_temporal,$src);
    return $src;
}

function agregarBlog(){
    
include('../conexionBD.php');
        $imagenBlog = procesarImagen($_FILES['imagen-blog']);
    $tituloBlog = trim($_POST['titulo']);
    $fechaBlog = $_POST['fecha'];
    $agregadoBlog = trim($_POST['autor']);
    $textoBlog = trim($_POST['texto']);
    $descripcionBlog = trim($_POST['descripcion']);
    
    $stmt = $conexionBD->prepare("INSERT INTO blog (`titulo`, `imagen`, `fecha`, `autor`, `parrafo`, `descripcion`) VALUES (?,?,?,?,?,?)");
    
    $stmt->bindParam(1, $tituloBlog, PDO::PARAM_STR);
    $stmt->bindParam(2, $imagenBlog, PDO::PARAM_STR);
    $stmt->bindParam(3, $fechaBlog, PDO::PARAM_STR);
    $stmt->bindParam(4, $agregadoBlog, PDO::PARAM_STR);
    $stmt->bindParam(5, $textoBlog, PDO::PARAM_STR);
    $stmt->bindParam(6, $descripcionBlog, PDO::PARAM_STR);

    $stmt->execute();
    $stmt->close();
    
}
agregarBlog();
 
?>