<?php include("../../templates/header.php") ?>
<?php 

include("../conexionBD.php");
$id = $_GET['id'];
$resultado = $conexionBD->query("SELECT * FROM propiedad where id=$id");

$propiedad = $resultado->fetch(PDO::FETCH_ASSOC);

?>


        <main class="contenedor seccion contenido-centrado">
        <h1 class="fw-300 centrar_texto margin-tit"><?php echo $propiedad['titulo']; ?></h1>
        <img class='imagen_anuncio' src="<?php echo $propiedad['imagen']; ?>" alt="imagen anuncio destacada">

       
            <div class="resumen-propiedad">
                <p class="precio"><span>$ </span><?php echo $propiedad['precio'];?><span> USD</span></p>
                <ul class="lista-iconos">

                    <li> <img src="../../img/icono_wc.svg" alt="icono wc"></li>
                    <p><?php echo $propiedad['banhos']; ?></p>
                    <li> <img src="../../img/icono_estacionamiento.svg" alt="icono estacionamiento"></li>
                    <p><?php echo $propiedad['garajes']; ?></p>
                    <li> <img src="../../img/icono_dormitorio.svg" alt="icono dormitorio"></li>
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                 </ul>
            </div>
            
            <h2 class='descripcion-titulo'>Descripción</h2>
            <p class='descripcion-anuncio'><?php echo $propiedad['descripcion'] ?>.</p>
            <a href="realizar_pago.php?id=<?php echo $propiedad['id']; ?>" class="boton boton-verde">Comprar propiedad</a>
            
        </main>

        <?php

$resultado = $conexionBD->query("SELECT * FROM contactanos");

$filaC = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<style>

    .contenedor-contacto {
        background: linear-gradient(rgba(5,7,12,.4),rgba(5,7,12,.4)),
        url(<?php echo $filaC['imagen']; ?>);
        height: 60rem;
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



        
<?php include("../../templates/footer.php") ?>