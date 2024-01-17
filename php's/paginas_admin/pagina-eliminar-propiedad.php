<?php include("../../templates/header-admin.php") ?>
<?php 
    include("../conexionBD.php");
    $resultado= $conexionBD->query("SELECT * FROM propiedad order by id DESC");
    ?>
    <div class="menu-lateral">

<a href="../paginas/index.php"><i class="fa-solid fa-arrow-left"></i>Salir del modo administrador</a>
<a id="a-paginaModificar" href="pagina-encabezado.php"><i class="fa-solid fa-pencil"></i>Modificar sección encabezado</a>
<a id="a-paginaModificar" href="pagina-contacto.php"><i class="fa-solid fa-pencil"></i>Modificar sección contacto</a>
<a id="a-paginaModificar" href="pagina-testimonial.php"><i class="fa-solid fa-pencil"></i>Modificar sección testimonial</a>
<a id="a-agregarPropiedad" href="pagina-agregar-propiedad.php"><i class="fa-solid fa-plus"></i>Agregar una propiedad</a>
<a id="a-eliminarPropiedad" href="pagina-eliminar-propiedad.php"><i class="fa-solid fa-xmark"></i>Eliminar una propiedad</a>
<a id="a-agregarBlog" href="pagina-agregar-blog.php"><i class="fa-solid fa-plus"></i>Agregar un blog</a>
<a id="a-eliminarBlog" href="pagina-eliminar-blogs.php"><i class="fa-solid fa-xmark"></i>Eliminar un blog</a>

</div>

    <main class="contenedor seccion anuncios-contenedor">
            <div class="contenedor-anuncios">
               <?php while($fila= $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                <div class="anuncio">
                    <img src="<?php echo $fila['imagen']; ?>" alt="imagen anuncio">
                    <div class="contenido-anuncio">
                        <h3><?php echo $fila['titulo']; ?></h3>
                        <p class="parrafo-propiedad"><?php echo $fila['descripcion']; ?></p>
                        <p class="precio"><span>$ </span><?php echo $fila['precio']; ?><span> USD</span></p>

                        <ul class="lista-iconos">

                           <li> <img src="../../img/icono_wc.svg" alt="icono wc"></li>
                           <p><?php echo $fila['banhos']; ?></p>
                           <li> <img src="../../img/icono_estacionamiento.svg" alt="icono estacionamiento"></li>
                           <p><?php echo $fila['garajes']; ?></p>
                           <li> <img src="../../img/icono_dormitorio.svg" alt="icono dormitorio"></li>
                           <p><?php echo $fila ['habitaciones']; ?></p>
                        </ul>
                        
                        
                     </div>         
                     <a href='#' id="<?php echo $fila['id']; ?>" class="boton boton-rojo d-block boton-eliminarPropiedad">Eliminar</a>
             
                </div>
                  <?php } ?>
            </div>
            
    </main>

    <?php include("../../templates/footer-admin.php") ?>