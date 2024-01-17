<?php
$to = $info['email'];
$subject = 'Has solicitado contacto con Bienes Raices';

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
                background-color: #FFE8B7;
            }

            .contenedor-mensaje span{
            font-weight:bolder;
            margin-right:10px;
            }
            
        </style>
    </head>
    <body>
        <div class="contenedor-mensaje">
            <h1>Contacto de Bienes Raices</h1> 
            <p>Estimado cliente,</p>
            <p>tu satisfacción es nuestra prioridad.</p>

            <p>'.$info['nombre'].', '.'en un lapso de 5 dias nos estaremos comunicando contigo para resolver todas las dudas que se te hayan presentado. Si no es así, llámanos a nuestra linea 018000123456789.</p>
            <p>¿Hay alguien que conozcas que esté buscando una casa o un lugar donde vivir? ¡Cuéntale acerca de nosotros! Vendran ofertas exclusivas tanto para tí como para tu referido.</p>
            Tu código de solicitud es:<span>'.' '.$info['codigo'].'</span> <br>
            <p>¡Nos vemos pronto!</p>

            
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