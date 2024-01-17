<?php include('../../templates/header.php') ?>
<?php include ('../conexionBD.php')?>

<?php
$codigoG = $_GET['codigo'];
$stmt = $conexionBD -> prepare('SELECT email, nombre, codigo FROM contacto WHERE codigo=?');
$stmt -> bindParam(1, $codigoG, PDO::PARAM_STR);
$stmt->execute();

$info = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<div class="contenedor xyzam">
<h1 class="margin-tit">Estaremos poniendonos en contacto contigo pronto.</h1>
<p>Sabemos que la comodidad de nuestros clientes debe estar presente, entre ellas resolver las dudas y quejas que se le presenten en Bienes Raices.</p>
<h3>Revisa tu correo electronico para mayor información.</h3>
<img src="../../img/imagen-contacto-enviado.avif" alt="imagen" style="box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.75);
-webkit-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.75);">
<a href="index.php" class="boton boton-naranja" style="display:block; width:max-content; margin-bottom: 50px;">Volver a inicio</a>
</div>
<?php include('../acciones/enviar-email-contacto.php') ?>
<?php include('../../templates/footer.php') ?>