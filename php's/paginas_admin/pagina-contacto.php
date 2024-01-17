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
<form class="formulario-modificar contacto-margin formulario-contacto" method="POST" enctype="multipart/form-data">
        
        <h2 class="titulos-admin ">Cambiar sección Contacto</h2>

        <div class="contenedor-admin">
            
            <div class="cambiar-contacto">

                <h3>Cambiar imagen de Contacto</h3>
                <input type="file" accept=".jpg,.png,.jpeg" id="imagen-contacto" name="imagen-contacto">
                <h3>Cambiar título de Contacto</h3>
                <input type="text" name="titulo-contacto" id="titulo-contacto" placeholder="Título de contacto..."></input>
                <p>Caracteres permitidos (100): <span id="contador_contacto"></span></p>
                <input type="button" class="btn-aceptar btn-contacto" value="Guardar">

               
            </div>
            
        </div>
        <img class="imagen-admin contactanosimg" src="../../Diseños/Contactanos.png" alt="vista-previa">
       
    </form>

    <?php include("../../templates/footer-admin.php") ?>