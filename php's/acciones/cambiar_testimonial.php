<?php

function cambiarTestimonial(){
    include("../conexionBD.php");
    $texto = $_POST['testimonial'];
    $autor = $_POST['autor'];

    $stmt = $conexionBD->prepare("UPDATE testimonial SET testimonio=?, autor=?");
    $stmt->bindParam(1, $texto, PDO::PARAM_STR);
    $stmt->bindParam(2, $autor, PDO::PARAM_STR);

    $stmt->execute();
    $stmt->close();
}

cambiarTestimonial();


?>