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

    <form class="formulario-modificar formulario-encabezado ajustes-encabezado" method="POST" enctype="multipart/form-data">
        <h2 class="titulos-admin">Cambiar encabezado</h2>
        <div class="contenedor-admin">

            <div class="cambiar-encabezado">
                <img class="imagen-admin encabezadoimg" src="../../Diseños/Encabezado.png" alt="vista-previa">
                <h3>Cambiar imagen de fondo</h3>
                <input type="file" id="imagen-encabezado" accept=".jpg,.png,.jpeg" name="imagen-encabezado">
                <input type="text" name="encabezado" id="encabezado" placeholder="Título del encabezado..."></input>
                <p>Caracteres permitidos (80): <span id="contador_encabezado"></span></p>
            </div>
            <input type="button" class="btn-aceptar btn-encabezado" value="Guardar">
        </div>
        
    </form>   
    <?php include("../../templates/footer-admin.php") ?>