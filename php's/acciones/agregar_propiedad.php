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

function agregarPropiedad(){
    include("../conexionBD.php");
    
    
    $imagen = trim(procesarImagen($_FILES['imagen-propiedad']));
    $titulo = trim($_POST['titulo']);
    $descripcion = trim($_POST['descripcion']);
    $precio = intval($_POST['precio']);
    $banhos = intval($_POST['banhos']);
    $garajes = intval($_POST['garajes']);
    $habitaciones = intval($_POST['habitaciones']);
    $statement = $conexionBD->prepare("INSERT INTO propiedad (imagen, titulo, descripcion, precio, banhos, garajes, habitaciones) values (?,?,?,?,?,?,?)");
    $statement -> bindParam(1, $imagen, PDO::PARAM_STR);
    $statement -> bindParam(2, $titulo, PDO::PARAM_STR);
    $statement -> bindParam(3, $descripcion, PDO::PARAM_STR);
    $statement -> bindParam(4, $precio, PDO::PARAM_INT);
    $statement -> bindParam(5, $banhos, PDO::PARAM_INT);
    $statement -> bindParam(6, $garajes, PDO::PARAM_INT);
    $statement -> bindParam(7, $habitaciones, PDO::PARAM_INT);
    $statement->execute();
    $statement->close();

}
agregarPropiedad();

?>