<?php include('../../templates/header.php') ?>


    <h1 class="fw-300 centrar_texto margin-tit">Contacto</h1>
    <img src="../../img/destacada3.jpg" alt="imagen contacto">

    <main class="contenedor seccion contenido-centrado texto-entrada">

        <h2 class="h2 fw-300 centrar-texto h2contacto">Llena el siguiente formulario</h2>

        <form method="POST" id="formulario-contacto">


            <fieldset class="formulario">

                <legend>Información personal</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" class="padding-text" id="nombre-contacto" placeholder="Nombre" required>
                <p>Caracteres permitidos (50): <span id="contador_nombreContacto"></span></p>
         
                <label for="email">Correo:</label>
                <input type="email" class="padding-text" id="email-contacto" maxlength='50' placeholder="Correo" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" class="padding-text" name="telefonoName" maxlength=10 id="telefono-contacto" placeholder="Teléfono" required>

                <label for="mensaje">Mensaje:</label>
                <textarea class="padding-text" id="mensaje-contacto"></textarea>
                <p>Caracteres permitidos (500): <span id="contador-mensajeContacto"></span></p>
         

            </fieldset>

            <fieldset class="formulario">
                <legend>Información sobre propiedad</legend>
                <label for="opciones">Vender o comprar</label>
                <select class="padding-text" id="seleccion-contacto">
                        <option value="">Seleccionar</option>
                        <option value="Vender">Vender</option>
                        <option value="Comprar">Comprar</option>
                    </select>
                <label  for="presupuesto">Presupuesto</label>
                <input class="padding-text" type="tel" id='presupuesto' maxlength="12" value="0" min="0">
            </fieldset>

            <div class="contacto">
                <fieldset class="formulario">
                    <legend>Contacto</legend>
                    <p>¿Cómo desea ser contactado?</p>
                    <div class="telefono-correo">
                        <label for="telefonoCheckbox">Teléfono</label>
                        <input type="radio" value='Telefono' id="telefonoCheckbox" name="contacto">
                        <label for="correoCheckbox">Correo</label>
                        <input type="radio" value='Correo' id="correoCheckbox" name="contacto">
                    </div>
                    <div class="eleccion-telefono" style='display:none;'>
                        <label for="fecha">Fecha</label>
                        <input class="padding-text" type="date" id="fecha-contacto">
                        <label for="hora">Hora</label>
                        <input class="padding-text" type="time" id="hora-contacto">
                    </div>
                </fieldset>
            </div>
            <input type="button" value="Aceptar" id="boton-contacto" class="boton boton-naranja boton-contacto">
        </form>

    </main>

<?php include('../../templates/footer.php') ?>