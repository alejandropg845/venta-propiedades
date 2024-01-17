<?php 

function datosContacto(){
    include("../conexionBD.php");

    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $telefono = intval($_POST['telefono']);
    $mensaje= trim($_POST['mensaje']);
    $seleccion = $_POST['seleccion'];
    $presupuesto= intval($_POST['presupuesto']);
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $radio = $_POST['radio'];
    $codigo = $_POST['codigo'];
    $stmt = $conexionBD->prepare("INSERT INTO contacto(nombre, email, telefono, mensaje, movimiento, presupuesto, fecha, hora, opcion_contacto, codigo) VALUES (?,?,?,?,?,?,?,?,?,?)");
    
    $stmt -> bindParam(1, $nombre, PDO::PARAM_STR);
    $stmt -> bindParam(2, $email, PDO::PARAM_STR);
    $stmt -> bindParam(3, $telefono, PDO::PARAM_INT);
    $stmt -> bindParam(4, $mensaje, PDO::PARAM_STR);
    $stmt -> bindParam(5, $seleccion, PDO::PARAM_STR);
    $stmt -> bindParam(6, $presupuesto, PDO::PARAM_INT);
    $stmt -> bindParam(7, $fecha, PDO::PARAM_STR);
    $stmt -> bindParam(8, $hora, PDO::PARAM_STR);
    $stmt -> bindParam(9, $radio, PDO::PARAM_STR);
    $stmt -> bindParam(10, $codigo, PDO::PARAM_STR);
    $stmt -> execute();
    $stmt -> close();
}
datosContacto();
?>