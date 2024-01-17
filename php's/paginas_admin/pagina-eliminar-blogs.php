<?php include("../../templates/header-admin.php") ?>
<?php 
include("../conexionBD.php");
$resultado = $conexionBD->query("SELECT * FROM `blog` order by id DESC");


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
    
    <div class="formulario-modificar seccion-inferior contenedor seccion" id='seccion-inferior'>
        <section class="blog blog-eliminar">
                
            <?php while($fila= $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
                <article class="entrada-blog">
                    <div class="imagen">
                        <img src="<?php echo $fila['imagen'];?>" alt="Entrada de blog">
                    </div>
                    <div class="texto-entrada">
                        <a class="titulos_imagenes">
                            <h4><?php echo $fila['titulo']; ?></h4>
                        </a>
                        <p>Escrito el: <span><?php echo $fila['fecha']; ?></span> por: <span><?php echo $fila['autor']; ?></span></p>
                        <p><?php echo $fila['parrafo']; ?></p>
                        
                        
                      </div>
                      <a class='boton boton-rojo btn-eliminarBlog' id='<?php echo $fila['id']; ?>' href='#'>Eliminar</a>
                </article>
            <?php } ?>
                
        </section>
            
        
    </div>   

    <?php include("../../templates/footer-admin.php") ?>