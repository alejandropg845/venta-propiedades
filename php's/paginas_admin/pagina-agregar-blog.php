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
<form class="formulario-modificar" id='agregarBlog' method="POST" enctype="multipart/form-data">
        <h2 class="titulos-admin">Agregar un blog</h2>
           
        <div class="contenedor-admin">
            
            <div class="agregar-blog">
                <img class="imagen-admin blogsimg" src="../../Diseños/blogs.png" alt="vista-previa">
                <input type="button" class="btn-aceptar btn-blog" id='boton-enviarBlog' value="Guardar">
         
                <h3>Agregar título del nuevo blog</h3>
                <input type="text" name="titulo-blog" id="agregar-blog" placeholder="Introduce un título">
                <p>Caracteres permitidos (80): <span id="contador-tituloB"></span></p>
                <h3>Agregar imagen del nuevo blog</h3>
                <input type="file" accept=".jpg,.png,.jpeg" name="imagen-blog" id="imagen-blog">
                <h3>Agregar fecha</h3>
                <input type="date" name="fecha-blog" id="fecha-blog">
                <h3>Agregado por: <input type="text" name='agregado-blog' id='autor'></h3>
                <p>Caracteres permitidos (30): <span id="contador-autorB"></span></p>
                <h3>Párrafo del nuevo blog</h3>
                <input type="text" name="texto-blog" id="texto-blog" placeholder="Escribe un párrafo"></input>
                <p>Caracteres permitidos (300): <span id="contador-parrafoB"></span></p>
                <h3>Agregar descripción (entrada)</h3>
                <textarea name="descripcion-blog" id="descripcion-blog" placeholder="Descripción..."></textarea>
                <p>Caracteres permitidos (10000): <span id="contador-descripcionB"></span></p>
            </div>
              
        </div>
         
    </form>


    <?php include("../../templates/footer-admin.php") ?>