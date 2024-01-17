<?php
function eliminarBlog(){
    include("../conexionBD.php");
    $id = $_POST['id'];
    $stmt = $conexionBD->prepare("DELETE from blog where id=?");
    $stmt->BindParam(1,$id);
    $stmt->execute();
    $stmt->close();
}
eliminarBlog();
?>