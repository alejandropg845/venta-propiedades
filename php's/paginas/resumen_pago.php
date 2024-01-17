<?php include("../../templates/header.php") ?>

<?php

include("../conexionBD.php");

$codigo = $_GET['codigo'];
$resultado = $conexionBD->prepare("SELECT nombre_completo, correo, ciudad, departamento, identificacion, direccion, detalles_extra, imagen, titulo, descripcion, codigo, id_propiedad, tipo_id FROM `propiedad_comprada` inner join propiedad ON propiedad_comprada.id_propiedad = propiedad.id WHERE codigo=?");

$resultado -> bindParam(1, $codigo, PDO::PARAM_STR);
$resultado->execute();

$info = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<?php include("../acciones/enviar_email.php"); ?>

<div class="contenedor info-compra-m">
    <h1 class="titulo-pago">Gracias por comprar con nosotros.</h1>
    <h2 class="encabezado-pago">Su compra ha sido completada <i class="fa-solid fa-circle-check"></i></h2>
    <p class="parrafo-pago">Hemos enviado detalles a tu correo de los siguientes procesos a seguir. Gracias por confiar en nosotros</p>
</div>  
<div class="informacion-compra">
  

    <img src="<?php echo $info['imagen']; ?>" alt="imagen-propiedad">

    <div class="informacion-pago">
        <h2><?php echo $info['titulo']; ?></h2>
        <h3 class="descripcion-titulo">Descripción</h3>
        <span><?php echo $info['descripcion']; ?></span>
        <h3 class="informacion-titulo">Tu información</h3>
        <p class="parrafo-info">Nombre completo: <span><?php echo $info['nombre_completo']; ?></span></p>
        <p>Ciudad: <span><?php echo $info['ciudad']; ?></span></p>
        <p>Departamento: <span><?php echo $info['departamento']; ?></span></p>
        <p>Correo: <span><?php echo $info['correo']; ?></span></p>
        <p><?php echo $info['tipo_id']; ?> <span><?php echo $info['identificacion']; ?></span></p>
        <p>Direccion: <span><?php echo $info['direccion']; ?></span></p>
        <p>Extras:</p>
        <span  class="extras"><?php echo $info['detalles_extra']; ?></span>
    </div>

    
</div>

<a href="index.php" class='boton boton-naranja alinear-btn'>Volver al inicio</a>
  
<?php

$resultado = $conexionBD->query("SELECT * FROM contactanos");
$filaC = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<style>

    .contenedor-contacto {
        background: linear-gradient(rgba(5,7,12,.4),rgba(5,7,12,.4)),
        url(<?php echo $filaC['imagen']; ?>);
        height: 55rem;
        background-position: center center;
        background-size: cover;
        display: flex;
        align-items: center;
        font-size: 3rem;
    }
    @media (min-width:768px){
        .contenedor-contacto {
        background: linear-gradient(rgba(5,7,12,.4),rgba(5,7,12,.4)),
        url(<?php echo $filaC['imagen']; ?>);
        height: 40rem;
        background-position: center center;
        background-size: cover;
        display: flex;
        align-items: center;
        font-size: 3rem;
        }
    }

    
</style>
    <section class="contenedor-contacto">
        <div class="contenido-contacto contenedor">
            <h3><?php echo $filaC['titulo']; ?></h3>
            <p>Llena el formulario en Contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
            <a href="contacto.php" class="boton boton-naranja">Contactanos</a>
        </div>
    </section>

    <!--PARTE INFERIOR FOOTER--> 

<?php 

$resultado = $conexionBD->query("SELECT * FROM `blog` order by id DESC LIMIT 3");
?>


    <div class="seccion-inferior contenedor seccion">
        <section class="blog">
                <h3 class="centrar_texto">Nuestro blog</h3>
            <?php while($fila= $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                <article class="entrada-blog">
                    <div class="imagen">
                        <img src="<?php echo $fila['imagen'];?>" alt="Entrada de blog">
                    </div>
                    <div class="texto-entrada">
                        <a href="entrada.php?id=<?php echo $fila['id']; ?>"  class="titulos_imagenes">
                            <h4><?php echo $fila['titulo']; ?></h4>
                        </a>
                        <p>Escrito el: <span><?php echo $fila['fecha']; ?></span> por: <span><?php echo $fila['autor']; ?></span></p>
                        <p><?php echo $fila['parrafo']; ?></p>
                    </div>
                </article>
            <?php } ?>
                
        </section>
            
        <section class="testimoniales">
            <h3 class="centrar_texto">Testimoniales</h3>

            <div class="contenedor-testimoniales">
            
                <?php 
                $resultado = $conexionBD->query("SELECT * FROM testimonial");
                $fila = $resultado->fetch(PDO::FETCH_ASSOC);
                ?>
                <blockquote><?php echo $fila['testimonio']; ?>.</blockquote>

                <p>- <?php echo $fila['autor']?> </p>
            
            </div>
        
        </section>
    </div>    


<?php include("../../templates/footer.php") ?>