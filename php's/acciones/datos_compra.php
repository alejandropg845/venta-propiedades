<?php 
function obtenerDatos(){
    include("../conexionBD.php");
    $nombre =$_POST['nombre'];
    $nacimiento = $_POST['nacimiento'];
    $correo = $_POST['correo'];
    $ciudad=$_POST['ciudad'];
    $departamento=$_POST['departamento'];
    $opcionID=$_POST['opcionID'];
    $identificacion=$_POST['identificacion'];
    $direccion=$_POST['direccion'];
    $detalles=$_POST['detalles'];
    $id_propiedad = $_POST['id_propiedad'];
    $codigo = $_POST['codigo'];

    $stmt = $conexionBD->prepare("INSERT INTO propiedad_comprada (nombre_completo, fecha_nacimiento, correo, ciudad, departamento, tipo_id, identificacion, direccion, detalles_extra, id_propiedad, codigo)
    VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    
    $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
    $stmt->bindParam(2, $nacimiento, PDO::PARAM_STR);
    $stmt->bindParam(3, $correo, PDO::PARAM_STR);
    $stmt->bindParam(4, $ciudad, PDO::PARAM_STR);
    $stmt->bindParam(5, $departamento, PDO::PARAM_STR);
    $stmt->bindParam(6, $opcionID, PDO::PARAM_STR);
    $stmt->bindParam(7, $identificacion, PDO::PARAM_INT);
    $stmt->bindParam(8, $direccion,PDO::PARAM_STR);
    $stmt->bindParam(9, $detalles, PDO::PARAM_STR);
    $stmt->bindParam(10, $id_propiedad, PDO::PARAM_INT);
    $stmt->bindParam(11, $codigo, PDO::PARAM_STR);

    $stmt->execute();
    $stmt->close();
    

}
obtenerDatos();

?>