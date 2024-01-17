<?php include("../../templates/header.php") ?>

<?php 

include('../conexionBD.php');
$id = $_GET['id'];

$stmt = $conexionBD->prepare("SELECT * FROM propiedad where id=?");

$stmt -> bindParam(1,$id,PDO::PARAM_INT);
$stmt->execute();
$propiedad=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<body>

    <h1 class="margin-xyz margin-tit" style="margin-left:30px;">Completa tu pago para adquirir la propiedad</h1>
    <h2 style="margin-left:30px;">De momento sólo aceptamos pagos con <img class="logo-paypal" src="../../img/paypal-logo.png" alt="logo-paypal"></h2>
    <div class="informacion-persona contenedor seccion">
        
    
        <form class="formulario-pago" id="formulario-pago" method="POST">
            
            <div class="formulario-paypal">
                <h2>Datos personales</h2>
                <input type="text" placeholder="Nombre completo" id="nombre_completo" name="nombre_completo"></input>
                <label>Fecha de nacimiento</label>
                <input type="date" id="fecha_nacimiento"  name="fecha_nacimiento">
                <input type="email" placeholder="Correo electrónico" id="correo_electronico" name='correo_electronico'>
                <input type="text" placeholder="Ciudad" id="ciudad-pago" name="ciudad-pago">
                <input type="text" placeholder="Departamento" name="departamento-pago" id="departamento-pago">
                <label class="labels">Tipo de identificación</label>
                <select class="padding-text" name="opcion-identificacion" id="opcion-identificacion" name="opcion-identificacion">
                    <option value="">Seleccionar</option>
                    <option value="CC">Cédula de ciudadanía</option>
                    <option value="CE">Cédula de extranjería</option>
                    <option value="NIT">NIT</option>
                    <option value="PP">Pasaporte</option>
                    <option value="RC">Registro Civil</option>
                </select>
                
                <p class="formato-p">Formato: (10 Dígitos)</p>
                <input type="tel" id="identificacion-pago" name="identificacion-pago" min="0" maxlength="10">
                <input type="text" id="direccion-pago" name="direccion-pago" placeholder="Dirección/domicilio">
                <textarea id="detalles-extra" name="detalles-ubicacion" id="detalles-ubicacion" placeholder="Danos más detalles acerca de tu domicilio, si te encuentras en un edificio, conjunto cerrado, departamento, casa, etc."></textarea>
                <input style="display: none;" type="tel" name='id_url' id='id_url' value="<?php echo $_GET['id']; ?>">
                
                <input style="display: none;" type="text" name='codigo' id='codigo_input'>
                <div id="paypal-button-container"></div>
               
           
            </div>
        </form>


    <div class="contenedor-flex">
            
    <main class="contenedor seccion">

    <div class="ajustes-anuncios">
        
        <div class="ajustes-anuncio anuncio-fixed">
            <img class="imagen-anuncio-pago" src="<?php echo $propiedad['imagen']; ?>" alt="imagen anuncio 1">
            <ul class="lista-iconos iconos-pago">

                <li> <img src="../../img/icono_wc.svg" alt="icono wc"></li>
                <p><?php echo $propiedad['banhos']; ?></p>
                <li> <img src="../../img/icono_estacionamiento.svg" alt="icono estacionamiento"></li>
                <p><?php echo $propiedad['garajes']; ?></p>
                <li> <img src="../../img/icono_dormitorio.svg" alt="icono dormitorio"></li>
                <p><?php echo $propiedad['habitaciones']; ?></p>
                
            </ul>
            <div class="contenido-anuncio contenido-anuncio2">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p class="descripcion-pago"><?php echo $propiedad['descripcion']; ?></p>
                
                
            </div>                     
        </div>

        
    </div>
 </main>
            
            <div class="precio-pago">
                <p>Valor a pagar: <span>$ <?php echo $propiedad['precio']; ?> USD</span></p>
            </div>
        </div>
    </div>

    <script>
    paypal.Buttons({
        createOrder: function (data, actions) {
            
            if (
                $('#nombre_completo').val() === '' ||
                $('#fecha_nacimiento').val() === '' ||
                $('#correo_electronico').val() === '' ||
                $('#ciudad-pago').val() === '' ||
                $('#departamento-pago').val() === '' ||
                $('#opcion-identificacion').val() === '' ||
                $('#identificacion-pago').val() === '' ||
                $('#direccion-pago').val() === '' ||
                $('#detalles-extra').val() === ''
            ) {
                Swal.fire({
                    title: "Faltaron campos por llenar",
                    text: "",
                    icon: "info",
                    showConfirmButton: false,
                    timer: 1000
                });
                return false; 
            }

            return actions.order.create({
                intent: 'CAPTURE', 
                purchase_units: [{
                    amount: {
                        value: <?php echo $propiedad['precio']; ?>
                    }
                }]
            });
        },
        onApprove: function (data, actions) {
            pagoExitoso();
        },
        onCancel: function (data) {
            Swal.fire({
                title: "Has cancelado el pago :(",
                text: "",
                icon: "error",
                showConfirmButton: true
            });
        },
        style: {
            label: 'pay',
            layout: 'horizontal'
        }
    }).render('#paypal-button-container');
</script>
    
<?php 
$resultado=$conexionBD->query("SELECT * FROM propiedad order by id DESC");
?>


    <main class="contenedor seccion">
        <h2 class="fw-300 centrar_texto">Casa y departamentos en Venta</h2>

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
    
    

    <?php
    include ("../../templates/footer.php") 
    ?>
    