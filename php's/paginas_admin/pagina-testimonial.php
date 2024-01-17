<?php include("../../templates/header-admin.php") ?>
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
<form class="formulario-modificar formulario-testimonial ajustes-testimonial" action="#" method="POST" enctype="multipart/form-data">
        <h2 class="titulos-admin margin-testimonial">Cambiar el testimonial</h2>

        <div class="contenedor-admin">
            <img class="imagen-admin testimonialimg" src="../../Diseños/testimonal-vista.png" alt="vista-previa">
        
            <div class="cambiar-testimonial">
                <h3>Modificar testimonial</h3>
                <textarea name="testimonial-texto" id="testimonial-texto" placeholder="Testimonial..."></textarea>
                <p>Caracteres permitidos (200): <span id="contador_testimonial"></span></p>
                <h3>Autor <input type="text" name="autor-testimonial" id="autor-testimonial">  <input type="button" id='enviar-testimonial' value="Guardar" name="btn-aceptar" class="btn-aceptar btn-testimonial">
                </h3>
                <p>Caracteres permitidos (32): <span id="contador_autor"></span></p>
              
            </div>
        </div>
</form>
<?php include("../../templates/footer-admin.php") ?>