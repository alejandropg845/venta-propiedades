
<?php

$conexionBD = new PDO('mysql:dbname=bienesraices;host=127.0.0.1;charset=utf8mb4', 'root', '');
$conexionBD->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>