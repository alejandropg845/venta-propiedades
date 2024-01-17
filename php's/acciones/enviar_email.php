<?php
$to = $info['correo'];
$subject = 'Tu compra en Bienes Raices';

$message = '

<html lang="es">
    <head>
        <title>Tu compra en Bienes Raices</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .contenedor-mensaje {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                border: 2px solid gray;
                border-radius: 5px;
                font-size: 18px;
            }

            .contenedor-mensaje span{
            font-weight:bolder;
            margin-right:10px;
            }

            .informacion-mensaje{
                background-color:#FFF1D0;
                border: 1px solid gray;
                padding: 0 20px;
            }
            
        </style>
    </head>
    <body>
        <div class="contenedor-mensaje">
            <h1>¡Gracias por comprar en Bienes Raices!</h1> 
            <p>Estimado cliente,</p>
            <p>Queremos agradecerte por tu compra en Bienes Raices. Tu satisfacción es nuestra prioridad.</p>
            <h2>Esta es tu información:</h2>
            <div class="informacion-mensaje">
                <p><span>Nombre completo:</span>'.$info['nombre_completo'].'</p>
                <p><span>Id. de tu propiedad:</span>'.$info['id_propiedad'].'</p>
                <p><span>Código de compra:</span>'.$info['codigo'].'</p>
                <p><span>Tu identificacion:</span>'.$info['tipo_id'].' '.$info['identificacion'].'</p>
                <p><span>Ciudad:</span>'.$info['ciudad'].'</p>
                <p><span>Departamento:</span>'.$info['departamento'].'</p>
                <p><span>Direccion:</span>'.$info['direccion'].'</p>
                <p><span>Información extra:</span>'.$info['detalles_extra'].'</p>
                <img style="height:400px;"src="https://img.freepik.com/foto-gratis/villa-modelo-casa-clave-dibujo-escritorio-retro-concepto-venta-bienes-raices_1387-410.jpg">
            </div>
            <p>En un lapso de 5 dias nos estaremos comunicando contigo para dar los siguientes pasos en la adquisición de tu propiedad. Si no es así, llámanos a nuestra linea 018000123456789.</p>
            <p>¿Hay alguien que conozcas que esté buscando una casa o un lugar donde vivir? ¡Cuéntale acerca de nosotros! Vendran ofertas exclusivas tanto para tí como para tu referido</p>
            <span>¡Ten un gran día!</span>
        </div>
    </body>
</html>
';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ejemplo@bienesraices.com' . "\r\n" .
    'Reply-To: alejandropgarrido845@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
