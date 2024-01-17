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
<form id="formulario-agregarPropiedad" class="formulario-modificar" method="POST" enctype="multipart/form-data">
        <h2 class="titulos-admin">Agregar propiedad</h2>
        <div class="contenedor-admin">
            
            <div class="agregar-propiedad">
                <img class="imagen-admin casasimg" src="../../Diseños/Casas-vista.png" alt="vista-previa">
                
                <h3>Agregar imagen</h3>
                <input type="file" accept=".jpg,.png,.jpeg" name="imagen-propiedad" id="imagen-propiedad">
                <h3>Agregar título</h3>
                <input type="text" name="titulo-propiedad" id="titulo-propiedad" placeholder="Título...">
                <p>Caracteres permitidos (80): <span id="contador-titulo"></span></p>
                <h3>Agregar descripción</h3>
                <textarea name="descripcion-propiedad" id="descripcion-propiedad" placeholder="Describir la propiedad..."></textarea>
                <p>Caracteres permitidos (1000): <span id="contador-descripcion"></span></p>
                <h3>Precio</h3>
                <input type="number" min="0" id='precio-propiedad' name="precio-propiedad">
                <div class="cantidades-propiedad">

                    <div class="cantidad-banhos">
                        <h3>Cantidad baños</h3>
                        <input type="number" min="0" id="cantidad-banhos" name="cantidad-banhos">
                    </div>

                    <div class="cantidad-garajes">
                        <h3>Cantidad de garajes</h3>
                        <input type="number" min="0" id="cantidad-garajes" name="cantidad-garajes">
                    </div>

                    <div class="cantidad-habitaciones">
                        <h3>Cantidad de habitaciones</h3>
                        <input type="number" min="0" id="cantidad-habitaciones" name="cantidad-habitaciones">
                        
    
                        <input type="button" id="enviar-propiedad" class="btn-aceptar btn-propiedad" value="Agregar propiedad">
                    </div>

                </div>

            </div>
            
        </div>
        
        
    </form>

    <?php include("../../templates/footer-admin.php") ?>