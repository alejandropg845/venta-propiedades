<?php include("../../templates/header.php") ?>
<?php 

include("../conexionBD.php");


$resultado=$conexionBD->query("SELECT * FROM propiedad order by id DESC");


?>


    <main class="contenedor seccion">
        <h2 class="fw-300 centrar_texto margin-tit">Casa y departamentos en Venta</h2>

            <div class="contenedor-anuncios">
                <?php while($propiedad=$resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                  
                    <div class="anuncio">
                        <img src="<?php echo $propiedad['imagen']; ?>" alt="imagen anuncio 1">
                        <div class="contenido-anuncio">
                            <h3><?php echo $propiedad['titulo']; ?></h3>
                            <p class="descripcion-propiedad"><?php echo $propiedad['descripcion']; ?></p>
                            <p class="precio"><span>$ </span><?php echo $propiedad['precio'];?><span> USD</span></p>

                            <ul class="lista-iconos">

                            <li> <img src="../../img/icono_wc.svg" alt="icono wc"></li>
                            <p><?php echo $propiedad['banhos']; ?></p>
                            <li> <img src="../../img/icono_estacionamiento.svg" alt="icono estacionamiento"></li>
                            <p><?php echo $propiedad['garajes']; ?></p>
                            <li> <img src="../../img/icono_dormitorio.svg" alt="icono dormitorio"></li>
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                            </ul>

                            <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton boton-naranja d-block">Ver propiedad</a>
                        </div>  
                                        
                    </div>
                <?php } ?>  
                
            </div>


            
    </main>

    

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


</main>


<?php include("../../templates/footer.php") ?>