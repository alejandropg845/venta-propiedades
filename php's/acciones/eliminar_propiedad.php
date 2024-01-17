<?php 
function eliminarPropiedad(){
    include("../conexionBD.php");
    $id = $_POST['id'];
    $stmt = $conexionBD->prepare("DELETE FROM propiedad where id=?");
    $stmt->BindParam(1, $id);
    $stmt->execute();
    $stmt->close();
}
eliminarPropiedad();

?>