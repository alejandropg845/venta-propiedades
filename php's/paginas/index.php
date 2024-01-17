<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raices</title>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&family=Lato:ital,wght@0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <script src='../../js/plugins.js'></script>
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css
    " rel="stylesheet">
</head>
<body>

<?php 

include("../conexionBD.php");

$resultado = $conexionBD->query("SELECT * FROM encabezado");
$fila = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<style>
    .encabezado.inicio {
        background: linear-gradient(rgba(5,7,12,.5),rgba(5,7,12,.5)),
    url(<?php echo $fila['imagen']; ?>);
    background-position: center center;
    background-size: cover;
    height: 100vb;
    min-height: 60rem;
}
</style>

    <header class="encabezado inicio">

        <div class="contenido_todo contenido_titulo">

            <div class="barra_superior" id="inicio" >
                <a href="index.php"> <img src="../../img/logo.svg" class="logo-index" alt="Logo bienes raices"> 
                </a>
                <nav class="navegacion">
                    <a class="modo-admin-a-index" href="../paginas_admin/moderador.php">Modo Administrador</a>
                    <a href="../../nosotros.html">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blogs</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>
            <h1 class="h1-index"><?php echo $fila['titulo']; ?></h1>
                
        </div>
        
    </header>

    

    <section class="contenedor seccion">
        <h2 class="titulo_sobrenosotros">Más sobre nosotros</h2>

        <div class="iconos_sobrenosotros">
            <div class="icono">
                <img src="../../img/icono1.svg" alt="Icono seguridad">
                <h2 >Seguridad</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus impedit magnam, veniam inventore nam cum! Facere, laboriosam velit deleniti saepe id pariatur doloremque deserunt sapiente exercitationem, aliquid odit consectetur eum.</p>
            </div>

            <div class="icono">
                <img src="../../img/icono2.svg" alt="Icono mejor precio">
                <h2>El Mejor Precio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus impedit magnam, veniam inventore nam cum! Facere, laboriosam velit deleniti saepe id pariatur doloremque deserunt sapiente exercitationem, aliquid odit consectetur eum.</p>
            </div>

            <div class="icono">
                <img src="../../img/icono3.svg" alt="Icono a tiempo">
                <h2>A Tiempo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus impedit magnam, veniam inventore nam cum! Facere, laboriosam velit deleniti saepe id pariatur doloremque deserunt sapiente exercitationem, aliquid odit consectetur eum.</p>
            </div>
        </div>
    </section>
    <h2 class="titulo-ofertas">Nuestras ofertas terminan en:</h2>
    <div class="contenedor-contador">
        
        <div class="contenedor contador">
            <p><span id="dias"></span>Días</p>
            <p><span id="horas"></span>Horas</p>
            <p><span id="minutos"></span>Minutos</p>
            <p><span id="segundos"></span>Segundos</p>

        </div>

    </div>

    <?php 
    $resultado=$conexionBD->query("SELECT * FROM propiedad order by id DESC limit 3");
    ?>
    
    <main class="contenedor seccion">
        <h2 class="fw-300 centrar_texto">Casa y departamentos en Venta</h2>

            <div class="contenedor-anuncios">
               <?php while($fila= $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                <div class="anuncio">
                    <a href="#"></a>
                    <img src="<?php echo $fila['imagen']; ?>" alt="imagen anuncio">
                    <div class="contenido-anuncio">
                        <h3><?php echo $fila['titulo']; ?></h3>
                        <p class="descripcion-propiedad"><?php echo $fila['descripcion']; ?></p>
                        <p class="precio"><span>$ </span><?php echo $fila['precio']; ?><span> USD</span></p>

                        <ul class="lista-iconos">

                           <li> <img src="../../img/icono_wc.svg" alt="icono wc"></li>
                           <p><?php echo $fila['banhos']; ?></p>
                           <li> <img src="../../img/icono_estacionamiento.svg" alt="icono estacionamiento"></li>
                           <p><?php echo $fila['garajes']; ?></p>
                           <li> <img src="../../img/icono_dormitorio.svg" alt="icono dormitorio"></li>
                           <p><?php echo $fila ['habitaciones']; ?></p>
                        </ul>

                        <a href="anuncio.php?id=<?php echo $fila['id']; ?>" class="boton boton-naranja d-block">Ver propiedad</a>
                    </div>                     
                </div>
                <?php } ?>
            </div>
            <div class="ver-todas">
                <a href="anuncios.php" class="boton boton-verde">Ver Todas</a>
            </div>
    </main>


<!-- CONTENIDO PARTE CONTACTO-->
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
            <a href="../contacto.html" class="boton boton-naranja">Contactanos</a>
        </div>
    </section>

    <!--PARTE INFERIOR FOOTER--> 

<?php 
$resultado= $conexionBD->query("SELECT * FROM `blog` order by id DESC LIMIT 3");
?>

<h2 style='text-align:center;'>Nuestra ubicación</h2>

<div class="contenedor-mapa">
    <div class='mapa'><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63092.322823918075!2d-75.92317004248596!3d8.760631102242904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a2fe5a57031ad%3A0x92e1cbad2ed7c0a0!2zTW9udGVyw61hLCBDw7NyZG9iYQ!5e0!3m2!1ses!2sco!4v1703134337145!5m2!1ses!2sco" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

    <div class="detalles">
        <h2>Detalles de nuestra ubicación</h2>
        <p>Fusce ac semper elit. Integer iaculis tincidunt pretium. Aenean eget eleifend ligula. Duis aliquet, magna quis ultricies ullamcorper, dolor nisl dignissim orci, in porta risus metus eget lacus. Donec sed magna fringilla, fermentum nibh ornare, efficitur ex. Nullam pretium tellus id mollis sodales. Sed quis pharetra augue. Pellentesque vitae semper dui.</p>
    </div>
</div>

    <div class="seccion-inferior contenedor seccion">
        <section class="blog">
                <h2 class="centrar_texto">Nuestro blog</h2>
            <?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                <article class="entrada-blog">
                    <div class="imagen">
                        <img src="<?php echo $fila['imagen'];?>" alt="Entrada de blog">
                    </div>
                    <div class="texto-entrada">
                        <a href="entrada.php?id=<?php echo $fila['id']; ?>"  class="titulos_imagenes">
                            <h4 class="titulo-entrada-blog"><?php echo $fila['titulo']; ?></h4>
                        </a>
                        <p>Escrito el: <span><?php echo $fila['fecha']; ?></span> por: <span><?php echo $fila['autor']; ?></span></p>
                        <p class="parrafo-blog-entrada"><?php echo $fila['parrafo']; ?></p>
                    </div>
                </article>
            <?php } ?>
                
        </section>
            
        <section class="testimoniales">
            <h2 class="centrar_texto">Testimoniales</h2>

            <div class="contenedor-testimoniales">
            
                <?php 
                $resultado = $conexionBD->query("SELECT * FROM testimonial");
                $fila = $resultado->fetch(PDO::FETCH_ASSOC);
                ?>
                <blockquote><?php echo $fila['testimonio']; ?>.</blockquote>

                <p>- <?php echo $fila['autor']?>. </p>
            
            </div>

            <h2 style="text-align: end; margin-right: 20px;">Entérate de lo que publicamos en X</h2>
        
            <blockquote class="twitter-tweet" data-theme="white"><p lang="en" dir="ltr">Just completed static fire test of Flight 3 Super Heavy Booster <a href="https://t.co/m0n8RooOlA">pic.twitter.com/m0n8RooOlA</a></p>&mdash; Elon Musk (@elonmusk) <a href="https://twitter.com/elonmusk/status/1740792820812624030?ref_src=twsrc%5Etfw">December 29, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </section>
    </div>    


    <?php include("../../templates/footer.php") ?>